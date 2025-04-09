<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriaBlogRequest;
use App\Models\CategoriaBlog;
use Illuminate\Http\Request;

class CategoriaBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = CategoriaBlog::all();
        return view('categoriaBlog.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categoriaBlog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoriaBlogRequest $request)
    {
        CategoriaBlog::create([
            'nombre' => $request['nombre'],
            'descripcion' => $request['descripcion']
        ]);

        return redirect()->route('categoriaBlog.index')->with('status', 'Categoria creada correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(CategoriaBlog $categoriaBlog)
    {
        return view('categoriaBlog.show', compact('categoriaBlog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CategoriaBlog $categoriaBlog)
    {
        return view('categoriaBlog.edit', compact('categoriaBlog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoriaBlogRequest $request, CategoriaBlog $categoriaBlog)
    {
        $categoriaBlog->update([
            'nombre' => $request['nombre'],
            'descripcion' => $request['descripcion']
        ]);

        return redirect()->route('categoriaBlog.index')->with('status', 'Categoria actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CategoriaBlog $categoriaBlog)
    {
        $categoriaBlog->delete();
        return redirect()->route('categoriaBlog.index')->with('status', 'Categoria eliminada correctamente');
    }

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
}
