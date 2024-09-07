<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\auto;
use App\auto_tiene_equipamiento;
use App\marca;
use App\modelo;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $destacados = DB::table('destacados')->get();
        $autos = auto::whereIn('id', [$destacados[0]->r1, $destacados[0]->r2, $destacados[0]->r3, $destacados[0]->r4, $destacados[0]->r5, $destacados[0]->r6])->get();
        $marcas = marca::where('eliminado', 0)->orderBy('descripcion')->get();

        return view('home', compact('autos', 'marcas'));
    }

    public function get_by_marca(Request $request)
    {
        $html = '';
        if (!$request->marca_id) {
            $html = '<option value=""> TODOS </option>';
        } else {
            if(!isset($request->todos)){
                $html = '<option value=""> TODOS </option>';
            }
            $modelos = modelo::where('id_marca', $request->marca_id)->where('eliminado', 0)->orderBy('descripcion')->get();
            foreach ($modelos as $modelo) {
                $html .= '<option value="' . $modelo->id . '">' . $modelo->descripcion . '</option>';
            }
        }

        return response()->json(['html' => $html]);
    }

    public function automoviles(Request $request)
    {

        $autos = auto::select('auto.*')->where('auto.eliminado', 0)->orderBy('auto.id', 'desc');

        if ($request->filled('buscar')) {
            $autos = $autos
            ->leftJoin('modelo', 'id_modelo', '=', 'modelo.id')
            ->leftJoin('marca', 'id_marca', '=', 'marca.id')
            ->Where(DB::raw("CONCAT(marca.descripcion,' ',modelo.descripcion)"), 'like', '%'.$request->buscar.'%');
        }

        if ($request->filled('marca')) {
            $autos = $autos->join('modelo', 'id_modelo', '=', 'modelo.id')->where('id_marca', $request->marca);
        }

        if ($request->filled('modelo')) {
            $autos = $autos->where('id_modelo', $request->modelo);
        }

        if ($request->filled('condicion')) {
            if ($request->condicion == 'nuevo') {
                $autos = $autos->where('es_usado', 0);
            } else {
                $autos = $autos->where('es_usado', 1);
            }
        }

        if ($request->filled('anio_desde')) {
            $autos = $autos->whereBetween('anio', [$request->anio_desde, $request->anio_hasta]);
        }

        if ($request->filled('precio_desde')) {
            $autos = $autos->where('precio', '>=', $request->precio_desde);
        }

        if ($request->filled('precio_hasta')) {
            $autos = $autos->where('precio', '<=', $request->precio_hasta);
        }

        //dd($autos->toSql());

        $autos = $autos->paginate(15);

        $destacados = DB::table('destacados')->get();
        $autos_destacados = auto::whereIn('id', [$destacados[0]->r1, $destacados[0]->r2, $destacados[0]->r3, $destacados[0]->r4])->get();

        $anios_lista = auto::select('anio')->where('eliminado', 0)->orderBy('anio', 'asc')->distinct()->get();

        foreach ($anios_lista as $val) {
            $anios[] = $val->anio;
        }

        $marcas = marca::orderBy('descripcion', 'asc')->get();

        return view('automoviles', compact('autos', 'autos_destacados', 'marcas', 'anios'));
    }

    public function auto($id)
    {

        $auto = auto::find($id);
        $equipamiento = auto_tiene_equipamiento::where('id_auto', $id)->get();

        return view('auto', compact('auto', 'equipamiento'));
    }

    public function consultar($id)
    {

        $auto = auto::find($id);

        return view('consultar', compact('auto'));
    }

    public function consultapost(Request $request, $id)
    {

        $mensaje = "Nombre: " . $request->name . "\r\nEmail: " . $request->email . "\r\n".$request->message;
        $cabeceras = 'From: fabio@asesorautos.com.ar';

        $auto = auto::find($id);
        $enviado = true;

        mail('fabio@asesorautos.com.ar', 'Consulta sobre ' . $auto->modelo->marca->descripcion . ' ' . $auto->modelo->descripcion . ' ' . $auto->anio, $mensaje, $cabeceras);

        return view('consultar', compact('auto', 'enviado'));
    }

    public function contactopost(Request $request)
    {

        if ($request->tipo == 'newsletter') {
            $subject = 'Quiero suscribirme al newsletter';
            $mensaje = $request->email;
            $respuesta = 'Su suscripción fué enviada con éxito';
        } else {
            $subject = $request->subject;
            $mensaje = "Nombre: " . $request->name . "\r\nEmail: " . $request->email . "\r\nTelefono: " . $request->phone . "\r\nMensaje: " . $request->message;
            $respuesta = 'Su consulta fué enviada con éxito y la brevedad nos contactaremos con Ud.';
        }

        $mensaje = $mensaje;
        $cabeceras = 'From: fabio@asesorautos.com.ar';

        $enviado = true;

        mail('fabio@asesorautos.com.ar', $subject, $mensaje, $cabeceras);

        return view('contacto', compact('enviado', 'respuesta'));
    }

    public function quienes()
    {
        return view('quienes-somos');
    }

    public function servicios()
    {
        return view('servicios');
    }

    public function mision()
    {
        return view('mision');
    }

    public function terminos()
    {
        return view('terminos');
    }

    public function contacto()
    {
        return view('contacto');
    }

    public function novedades()
    {
        $destacados = DB::table('destacados')->get();
        $autos_destacados = auto::whereIn('id', [$destacados[0]->r1, $destacados[0]->r2, $destacados[0]->r3, $destacados[0]->r4])->get();

        $autos = auto::where('eliminado', 0)->orderBy('id', 'desc')->limit(4)->get();

        return view('novedades', compact('autos', 'autos_destacados'));
    }
}
