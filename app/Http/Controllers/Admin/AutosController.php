<?php

namespace App\Http\Controllers\Admin;

use App\auto;
use App\auto_tiene_equipamiento;
use App\auto_tiene_segmento;
use App\equipamiento;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\marca;
use App\segmento;
use App\tipo_combustible;
use App\tipo_vendedor;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AutosController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autos = auto::orderBy('id', 'desc')
            ->where('eliminado', 0)
            ->paginate(15);

        return view('admin.autos.index', compact('autos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marcas = marca::where('eliminado', 0)->get();
        $combustibles = tipo_combustible::where('eliminado', 0)->get();
        $vendedores = tipo_vendedor::where('eliminado', 0)->get();
        $segmentos = segmento::where('eliminado', 0)->get();
        $equipamientos = equipamiento::where('eliminado', 0)->get();

        return view('admin.autos.create', compact('marcas', 'combustibles', 'vendedores', 'segmentos', 'equipamientos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $auto = new auto;
        $auto->id_modelo = $request->id_modelo ;
        $auto->descripcion = $request->descripcion ? $request->descripcion : '';
        $auto->id_tipo_combustible = $request->id_tipo_combustible;
        $auto->id_tipo_vendedor = $request->id_tipo_vendedor;
        $auto->es_usado = $request->es_usado;
        $auto->kilometraje = $request->kilometraje ? $request->kilometraje : '';
        $auto->moneda = $request->moneda;
        $auto->precio = $request->precio ? $request->precio : '0';
        $auto->anio = $request->anio ? $request->anio : '0';
        $auto->color = $request->color ? $request->color : '';
        $auto->vendido = $request->has('vendido') ? 1 : 0;
        $auto->timestamps = false;
        $auto->save();

        $dir = $_SERVER['DOCUMENT_ROOT'].'/public/assets/img/autos/'.$auto->id;

        mkdir($dir, 0755);

        $archivos = ['imagen_1', 'imagen_2', 'imagen_3', 'imagen_4', 'imagen_5', 'imagen_6', 'imagen_7', 'imagen_8', 'imagen_9', 'imagen_10'];

        foreach($archivos as $archivo){
            if($request->hasFile($archivo)){
                $file = $request->file($archivo);
                $file->move($dir, $file->getClientOriginalName());

                $auto->$archivo = $file->getClientOriginalName();
            }
        }

        $auto->save();

        DB::table('auto_tiene_segmento')
            ->insert(['id_auto' => $auto->id, 'id_segmento' => $request->id_segmento]);

        if (isset($request->equipamiento)){
            foreach($request->equipamiento as $ide => $val){
                DB::table('auto_tiene_equipamiento')
                    ->insert(['id_auto' => $auto->id, 'id_equipamiento' => $ide]);
            }
        }

        return redirect()->route('autos.index')->with('success','Se agregó el auto !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $marcas = marca::where('eliminado', 0)->get();
        $combustibles = tipo_combustible::where('eliminado', 0)->get();
        $vendedores = tipo_vendedor::where('eliminado', 0)->get();
        $segmentos = segmento::where('eliminado', 0)->get();
        $equipamientos = equipamiento::where('eliminado', 0)->get();
        $tiene_segmento = auto_tiene_segmento::where('id_auto', $id)->first();
        $auto_tiene_equipamientos = auto_tiene_equipamiento::where('id_auto', $id)->get();

        foreach($auto_tiene_equipamientos as $auto_tiene_equipamiento){
            $tiene_equipamiento[] = $auto_tiene_equipamiento->id_equipamiento;
        }

        $auto = auto::find($id);

        return view('admin.autos.edit', compact('auto','marcas', 'combustibles', 'vendedores', 'segmentos', 'equipamientos', 'tiene_segmento', 'tiene_equipamiento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $auto = auto::find($id);
        $auto->id_modelo = $request->id_modelo ;
        $auto->descripcion = $request->descripcion ? $request->descripcion : '';
        $auto->id_tipo_combustible = $request->id_tipo_combustible;
        $auto->id_tipo_vendedor = $request->id_tipo_vendedor;
        $auto->es_usado = $request->es_usado;
        $auto->kilometraje = $request->kilometraje ? $request->kilometraje : '';
        $auto->moneda = $request->moneda;
        $auto->precio = $request->precio ? $request->precio : 0;
        $auto->anio = $request->anio ? $request->anio : 0;
        $auto->color = $request->color ? $request->color : '';
        $auto->vendido = $request->has('vendido') ? 1 : 0;
        $auto->timestamps = false;

        $archivos = ['imagen_1', 'imagen_2', 'imagen_3', 'imagen_4', 'imagen_5', 'imagen_6', 'imagen_7', 'imagen_8', 'imagen_9', 'imagen_10'];

        $dir = $_SERVER['DOCUMENT_ROOT'].'/public/assets/img/autos/'.$auto->id;

        foreach($archivos as $archivo){
            if($request->hasFile($archivo)){
                $file = $request->file($archivo);
                $file->move($dir, $file->getClientOriginalName());

                $auto->$archivo = $file->getClientOriginalName();
            }
        }

        $auto->save();

        DB::table('auto_tiene_segmento')
            ->where('id_auto', $id)
            ->update(['id_segmento' => $request->id_segmento]);

        if (isset($request->equipamiento)){
            DB::table('auto_tiene_equipamiento')
                ->where('id_auto', $id)
                ->delete();
            foreach($request->equipamiento as $ide => $val){
                DB::table('auto_tiene_equipamiento')
                    ->insert(['id_auto' => $id, 'id_equipamiento' => $ide]);
            }
        }

        return redirect()->route('autos.index')->with('success','Se modificó el auto !');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $auto = auto::find($id);
        $auto->eliminado = 1;
        $auto->timestamps = false;
        $auto->save();

        return redirect()->route('autos.index')->with('success','Se elimino el auto !');
    }
}
