<?php

namespace App\Http\Controllers\Admin;

use App\auto;
use App\equipamiento;
use App\auto_tiene_segmento;
use App\marca;
use App\modelo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $autos = auto::where('eliminado', 0)->get()->count();
        $equipamientos = equipamiento::where('eliminado', 0)->get()->count();
        $marcas = marca::where('eliminado', 0)->get()->count();
        $modelos = modelo::where('eliminado', 0)->get()->count();

        $autos_x_marca = auto::select('marca.descripcion', DB::raw('COUNT(*) AS total'))->where('auto.eliminado', 0)
        ->leftJoin('modelo', 'id_modelo', '=', 'modelo.id')
        ->leftJoin('marca', 'id_marca', '=', 'marca.id')
        ->groupBy('id_marca', 'marca.descripcion')
        ->orderBy('total', 'desc')
        ->get();

        $autos_x_anio = auto::select('anio', DB::raw('COUNT(*) AS total'))->where('auto.eliminado', 0)
        ->orderBy('anio', 'desc')
        ->groupBy('anio')
        ->get();

        $rango_precios = DB::select(DB::raw("select t.rango, count(*) as total
        from
           (select case
               when precio < 500000 then '$0 - $500K'
               when precio >= 500000 and precio < 1000000 then '$500K - $990K'
               when precio >= 1000000 and precio < 1500000 then '$1.0M - $1.49M'
               else 'mas de $1.50M'
               end as rango
               from auto
               where precio is not null
               and eliminado = 0
               and moneda = '$'
               ) as t
        group by rango;"));

        $autos_x_vendedor = auto::select('tipo_vendedor.descripcion', DB::raw('COUNT(*) AS total'))->where('auto.eliminado', 0)
        ->leftJoin('tipo_vendedor', 'id_tipo_vendedor', '=', 'tipo_vendedor.id')
        ->groupBy('id_tipo_vendedor', 'tipo_vendedor.descripcion')
        ->get();

        $autos_x_segmento = auto_tiene_segmento::select('segmento.descripcion', DB::raw('COUNT(*) AS total'))->where('auto.eliminado', 0)
        ->leftJoin('segmento', 'id_segmento', '=', 'segmento.id')
        ->leftJoin('auto', 'id_auto', '=', 'auto.id')
        ->groupBy('id_segmento', 'segmento.descripcion')
        ->orderBy('total')
        ->get();

        return view('admin.home', compact('autos', 'equipamientos', 'marcas', 'modelos', 'autos_x_marca', 'autos_x_anio', 'rango_precios', 'autos_x_vendedor', 'autos_x_segmento'));
    }
}