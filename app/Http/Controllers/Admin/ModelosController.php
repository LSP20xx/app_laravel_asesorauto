<?php

namespace App\Http\Controllers\Admin;

use App\modelo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\marca;

class ModelosController extends Controller
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
        $modelos = modelo::orderBy('id', 'desc')
            ->where('eliminado', 0)
            ->paginate(15);
        
        return view('admin.modelos.index', compact('modelos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marcas = marca::where('eliminado', 0)->get();

        return view('admin.modelos.create', compact('marcas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $modelo = new modelo;
        $modelo->descripcion = $request->descripcion;
        $modelo->id_marca = $request->id_marca;
        $modelo->timestamps = false;
        $modelo->save();

        return redirect()->route('modelos.index')->with('success','Se agregó el modelo !');
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
        $modelo = modelo::find($id);
        $marcas = marca::where('eliminado', 0)->get();

        return view('admin.modelos.edit', compact('modelo', 'marcas'));
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
        $modelo = modelo::find($id);
        $modelo->descripcion = $request->descripcion;
        $modelo->id_marca = $request->id_marca;
        $modelo->timestamps = false;
        $modelo->save();

        return redirect()->route('modelos.index')->with('success','Se modificó el modelo !');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $modelo = modelo::find($id);
        $modelo->eliminado = 1;
        $modelo->timestamps = false;
        $modelo->save();

        return redirect()->route('modelos.index')->with('success','Se elimino el modelo !');
    }
}
