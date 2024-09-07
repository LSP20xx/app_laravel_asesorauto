<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\segmento;

class SegmentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $segmentos = segmento::orderBy('id', 'desc')
            ->where('eliminado', 0)
            ->paginate(15);

        return view('admin.segmentos.index', compact('segmentos'));
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.segmentos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $segmento = new segmento;
        $segmento->descripcion = $request->descripcion;
        $segmento->timestamps = false;
        $segmento->save();

        return redirect()->route('segmentos.index')->with('success','Se agregó la segmento !');
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
        $segmento = segmento::find($id);

        return view('admin.segmentos.edit', compact('segmento'));
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
        $segmento = segmento::find($id);
        $segmento->descripcion = $request->descripcion;
        $segmento->timestamps = false;
        $segmento->save();

        return redirect()->route('segmentos.index')->with('success','Se modificó la segmento !');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $segmento = segmento::find($id);
        $segmento->eliminado = 1;
        $segmento->timestamps = false;
        $segmento->save();

        return redirect()->route('segmentos.index')->with('success','Se elimino la segmento !');
    }
}
