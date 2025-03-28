<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticuloRequest;
use App\Models\Articulos;
use Illuminate\Http\Request;

class ArticulosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articulos = Articulos::all();
        return view('articulos.index', compact('articulos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articulos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticuloRequest $request)
    {
        Articulos::create([
            'titulo' => $request['titulo'],
            'contenido' => $request['contenido'],
            'imagen' => $request['imagen'],
            'categoriaBlog_id' => $request['categoriaBlog_id']
        ]);

        return redirect()->route('articulos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Articulos $articulos)
    {
        return view('articulos.show', compact('articulos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Articulos $articulos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Articulos $articulos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Articulos $articulos)
    {
        //
    }
}
