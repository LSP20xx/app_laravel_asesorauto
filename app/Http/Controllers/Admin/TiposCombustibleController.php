<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\tipo_combustible;

class TiposCombustibleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipo_combustibles = tipo_combustible::orderBy('id', 'desc')
            ->where('eliminado', 0)
            ->paginate(15);

        return view('admin.tipo_combustibles.index', compact('tipo_combustibles'));
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tipo_combustibles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipo_combustible = new tipo_combustible;
        $tipo_combustible->descripcion = $request->descripcion;
        $tipo_combustible->timestamps = false;
        $tipo_combustible->save();

        return redirect()->route('tipo_combustibles.index')->with('success','Se agregó la tipo_combustible !');
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
        $tipo_combustible = tipo_combustible::find($id);

        return view('admin.tipo_combustibles.edit', compact('tipo_combustible'));
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
        $tipo_combustible = tipo_combustible::find($id);
        $tipo_combustible->descripcion = $request->descripcion;
        $tipo_combustible->timestamps = false;
        $tipo_combustible->save();

        return redirect()->route('tipo_combustibles.index')->with('success','Se modificó la tipo_combustible !');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipo_combustible = tipo_combustible::find($id);
        $tipo_combustible->eliminado = 1;
        $tipo_combustible->timestamps = false;
        $tipo_combustible->save();

        return redirect()->route('tipo_combustibles.index')->with('success','Se elimino la tipo_combustible !');
    }
}
