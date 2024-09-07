<?php

namespace App\Http\Controllers\Admin;

use App\auto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\destacados;

class DestacadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destacados = destacados::first();

        $autos = auto::orderBy('id', 'desc')
            ->where('eliminado', 0)
            ->get();

        $autos_destacados['r1'] = auto::find($destacados->r1);
        $autos_destacados['r2'] = auto::find($destacados->r2);
        $autos_destacados['r3'] = auto::find($destacados->r3);
        $autos_destacados['r4'] = auto::find($destacados->r4);
        $autos_destacados['r5'] = auto::find($destacados->r5);
        $autos_destacados['r6'] = auto::find($destacados->r6);

        return view('admin.destacados.index', compact('destacados', 'autos', 'autos_destacados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        $destacado = destacados::find($id);
        $destacado->r1 = $request->r1;
        $destacado->r2 = $request->r2;
        $destacado->r3 = $request->r3;
        $destacado->r4 = $request->r4;
        $destacado->r5 = $request->r5;
        $destacado->r6 = $request->r6;
        $destacado->timestamps = false;
        $destacado->save();

        return redirect()->route('destacados.index')->with('success', 'Se actualizaron los destacados !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
