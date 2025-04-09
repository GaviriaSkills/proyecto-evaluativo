<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriaRequests;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::all();
        return view('categorias.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoriaRequests $request)
    {
        Categoria::create([
            'nombre' => $request['nombre'],
            'descripcion' => $request['descripcion'],
        ]);

        return redirect()->route('categorias.index')->with('status', 'Categoria creada correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categoria $categoria)
    {
        return view('categorias.show', compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categoria $categoria)
    {
        return view('categorias.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoriaRequests $request, Categoria $categoria)
    {
        $categoria->update([
            'nombre' => $request['nombre'],
            'descripcion' => $request['descripcion'],
        ]);

        return redirect()->route('categorias.index')->with('status', 'Categoria actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return redirect()->route('categorias.index')->with('status', 'Categoria eliminada correctamente');
    }

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
}
