<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::all();

        $products = Producto::when(request('categoria'), function ($query, $categoria) {
            return $query->where('categoria_id', $categoria);
        })->get();
        return view('products.index', compact('products', 'categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::latest()->get();
        return view('products.create' , compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        Producto::create([
            'nombre' => $request['nombre'],
            'descripcion' => $request['descripcion'],
            'precio' => $request['precio'],
            'stock' => $request['stock'],
            'categoria_id' => $request['categoria_id'],
            'imagen' => $request['imagen']
        ]);

        return redirect()->route('product.index')->with('status', 'Producto creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        return view('products.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        $categorias = Categoria::latest()->get();
        return view('products.edit', compact('producto', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Producto $producto)
    {
        $producto->update([
            'nombre' => $request['nombre'],
            'descripcion' => $request['descripcion'],
            'precio' => $request['precio'],
            'stock' => $request['stock'],
            'categoria_id' => $request['categoria_id'],
            'imagen' => $request['imagen']
        ]);

        return redirect()->route('product.index')->with('status', 'Producto actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('product.index')->with('status', 'Producto eliminado correctamente');
    }

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
}
