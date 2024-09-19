<?php 

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function index()
    {
        $proveedores = Proveedor::all();
        return view('proveedores.index', compact('proveedores'));
    }

    public function create()
    {
        return view('proveedores.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'direccion' => 'nullable|string|max:255',
            'telefono' => 'nullable|string|max:20',
            'email' => 'required|string|email|max:255|unique:proveedores',
            'estado' => 'required|string',
        ]);

        Proveedor::create($request->all());

        return redirect()->route('proveedores.index')->with('success', 'Proveedor creado exitosamente');
    }

    public function show(string $id)
    {
        
    }

    public function edit(string $id)
    {
        $proveedor = Proveedor::findOrFail($id);
        return view('proveedores.edit', compact('proveedor'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'direccion' => 'nullable|string|max:255',
            'telefono' => 'nullable|string|max:20',
            'email' => 'required|string|email|max:255|unique:proveedores',
            'estado' => 'required|string',
        ]);

        $proveedor = Proveedor::findOrFail($id);
        $proveedor->update($request->all());

        return redirect()->route('proveedores.index')->with('success', 'Proveedor actualizado exitosamente');
    }

    public function destroy(string $id)
    {
        $proveedor = Proveedor::findOrFail($id);
        $proveedor->eliminado = true;
        $proveedor->save();

        return redirect()->route('proveedores.index')->with('success', 'Proveedor eliminada exitosamente.');
    }
}
