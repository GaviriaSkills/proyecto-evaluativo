<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticuloRequest;
use App\Models\Articulos;
use App\Models\CategoriaBlog;
use Illuminate\Http\Request;

class ArticulosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articulos = Articulos::paginate(3);
        return view('articulos.index', compact('articulos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = CategoriaBlog::latest()->get();
        return view('articulos.create', compact('categorias'));
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

        return redirect()->route('articulos.index')->with('status', 'Articulo creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Articulos $articulo)
    {
        return view('articulos.show', compact('articulo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Articulos $articulo)
    {
        $categorias = CategoriaBlog::latest()->get();
        return view('articulos.edit', compact('articulo', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticuloRequest $request, Articulos $articulo)
    {
        $articulo->update([
            'titulo' => $request['titulo'],
            'contenido' => $request['contenido'],
            'imagen' => $request['imagen'],
            'categoriaBlog_id' => $request['categoriaBlog_id']
        ]);

        return redirect()->route('articulos.index')->with('status', 'Articulo actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Articulos $articulo)
    {
        $articulo->delete();
        return redirect()->route('articulos.index')->with('status', 'Articulo eliminado correctamente');
    }

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
}
