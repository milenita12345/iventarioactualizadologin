@extends('layouts.private')

@section('content')

<div class="row">
    <div class="col-xl-12">
        <div class="card custom-card">
            <div class="card-header justify-content-between">
                <div class="card-title">
                    Editar proveedor
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('proveedores.update', $proveedor->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="nombre" class="form-label fs-14 text-dark">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $proveedor->nombre }}" required>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="mb-3">
                                <label for="telefono" class="form-label fs-14 text-dark">Teléfono</label>
                                <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $proveedor->telefono }}" required>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="mb-3">
                                <label for="email" class="form-label fs-14 text-dark">Correo</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ $proveedor->email }}" required>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="mb-3">
                                <label for="estado" class="form-label fs-14 text-dark">Estado</label>
                                <select class="form-control" id="estado" name="estado" required>
                                    <option value="activo" {{ $proveedor->estado == 'activo' ? 'selected' : '' }}>Activo</option>
                                    <option value="inactivo" {{ $proveedor->estado == 'inactivo' ? 'selected' : '' }}>Inactivo</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Guardar cambios</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
