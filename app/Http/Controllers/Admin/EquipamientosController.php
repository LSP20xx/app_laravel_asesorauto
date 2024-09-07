<?php

namespace App\Http\Controllers\Admin;

use App\equipamiento;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EquipamientosController extends Controller
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
        $equipamientos = equipamiento::orderBy('id', 'desc')
            ->where('eliminado', 0)
            ->paginate(15);

        return view('admin.equipamientos.index', compact('equipamientos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.equipamientos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $equipamiento = new equipamiento;
        $equipamiento->descripcion = $request->descripcion;
        $equipamiento->timestamps = false;
        $equipamiento->save();

        return redirect()->route('equipamientos.index')->with('success', 'Se agregó la equipamiento !');
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
        $equipamiento = equipamiento::find($id);

        return view('admin.equipamientos.edit', compact('equipamiento'));
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
        $equipamiento = equipamiento::find($id);
        $equipamiento->descripcion = $request->descripcion;
        $equipamiento->timestamps = false;
        $equipamiento->save();

        return redirect()->route('equipamientos.index')->with('success', 'Se modificó la equipamiento !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $equipamiento = equipamiento::find($id);
        $equipamiento->eliminado = 1;
        $equipamiento->timestamps = false;
        $equipamiento->save();

        return redirect()->route('equipamientos.index')->with('success', 'Se elimino la equipamiento !');
    }
}
