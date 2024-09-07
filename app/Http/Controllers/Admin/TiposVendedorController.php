<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\tipo_vendedor;

class TiposVendedorController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipo_vendedores = tipo_vendedor::orderBy('id', 'desc')
            ->where('eliminado', 0)
            ->paginate(15);

        return view('admin.tipo_vendedores.index', compact('tipo_vendedores'));
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tipo_vendedores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipo_vendedor = new tipo_vendedor;
        $tipo_vendedor->descripcion = $request->descripcion;
        $tipo_vendedor->timestamps = false;
        $tipo_vendedor->save();

        return redirect()->route('tipo_vendedores.index')->with('success','Se agregó la tipo_vendedor !');
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
        $tipo_vendedor = tipo_vendedor::find($id);

        return view('admin.tipo_vendedores.edit', compact('tipo_vendedor'));
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
        $tipo_vendedor = tipo_vendedor::find($id);
        $tipo_vendedor->descripcion = $request->descripcion;
        $tipo_vendedor->timestamps = false;
        $tipo_vendedor->save();

        return redirect()->route('tipo_vendedores.index')->with('success','Se modificó la tipo_vendedor !');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipo_vendedor = tipo_vendedor::find($id);
        $tipo_vendedor->eliminado = 1;
        $tipo_vendedor->timestamps = false;
        $tipo_vendedor->save();

        return redirect()->route('tipo_vendedores.index')->with('success','Se elimino la tipo_vendedor !');
    }
}
