<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Tipo;
use App\Models\Laboratorio;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //Muesta la vista principal
    public function index()
    {
        $productos = Producto::all();
        return view("productos.index", compact("productos"));
    }

    //Muestra la vista de creacion
    public function create()
    {
        $categorias = Categoria::all();
        $tipos = Tipo::all();
        $laboratorios = Laboratorio::all();

        return view("productos.create", compact('categorias','tipos','laboratorios'));
    }

    //Realiza el registro
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'codigo' => 'required|string',
            'categoria_id' => 'required|integer',
            'tipo_id' => 'required|integer',
            'laboratorio_id' => 'required|integer',
            'descripcion' => 'nullable|string',
            'estado' => 'required|string',
        ]);

        producto::create($request->all());

        return redirect()->route('productos.index')->with('success', 'Categoría creada correctamente');
    }

    //Mostrar la vista de registro
    public function show(string $id)
    {
        //
    }

    //Mostrar la vista de edicion
    public function edit(string $id)
    {
        $producto = Producto::findOrFail($id);
        $categorias = Categoria::all();
        $tipos = Tipo::all();
        $laboratorios = Laboratorio::all();
        return view('productos.edit', compact('producto','categorias','tipos','laboratorios'));
    }

    //Realiza la actualizacion de registro
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required|string',
            'descripcion' => 'nullable|string',
            'estado' => 'required|string',
        ]);

        $producto = Producto::findOrFail($id);
        $producto->update($request->all());

        return redirect()->route('productos.index')->with('success', 'producto actualizado exitosamente');
    }

    //Elimina el registro
    public function destroy(string $id)
    {
        $producto = Producto::findOrFail($id);
        $producto->eliminado = true;
        $producto->save();

        return redirect()->route('productos.index')->with('success', 'producto eliminado exitosamente.');
    }
}
