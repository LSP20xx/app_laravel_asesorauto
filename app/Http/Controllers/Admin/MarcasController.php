<?php

namespace App\Http\Controllers\Admin;

use App\marca;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MarcasController extends Controller
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
        $marcas = marca::orderBy('id', 'desc')
            ->where('eliminado', 0)
            ->paginate(15);
        
        return view('admin.marcas.index', compact('marcas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.marcas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $marca = new marca;
        $marca->descripcion = $request->descripcion;
        $marca->timestamps = false;
        $marca->save();

        return redirect()->route('marcas.index')->with('success','Se agregó la marca !');
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
        $marca = marca::find($id);

        return view('admin.marcas.edit', compact('marca'));
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
        $marca = marca::find($id);
        $marca->descripcion = $request->descripcion;
        $marca->timestamps = false;
        $marca->save();

        return redirect()->route('marcas.index')->with('success','Se modificó la marca !');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $marca = marca::find($id);
        $marca->eliminado = 1;
        $marca->timestamps = false;
        $marca->save();

        return redirect()->route('marcas.index')->with('success','Se elimino la marca !');
    }
}
