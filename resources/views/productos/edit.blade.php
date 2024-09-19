@extends('layouts.private')

@section('content')

<div class="row">
    <div class="col-xl-12">
        <div class="card custom-card">
            <div class="card-header justify-content-between">
                <div class="card-title">
                    Editar producto
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('productos.update', $producto->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="nombre" class="form-label fs-14 text-dark">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $producto->nombre }}" required>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="mb-3">
                                <label for="alias" class="form-label fs-14 text-dark">Alias</label>
                                <input type="text" class="form-control" id="alias" name="alias" value="{{ $producto->alias }}" required>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="mb-3">
                                <label for="codigo" class="form-label fs-14 text-dark">Codigo</label>
                                <input type="text" class="form-control" id="codigo" name="codigo" value="{{ $producto->codigo }}" required>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="mb-3">
                                <label for="categoria_id" class="form-label fs-14 text-dark">Categoria</label>
                                <select class="form-control" id="categoria_id" name="categoria_id" required>
                                    <option value="">Seleccione</option>
                                    @foreach ($categorias as $categoria)
                                        <option value="{{ $categoria->id }}" {{ $categoria->id == $producto->categoria_id ? 'selected' : '' }} >{{ $categoria->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="mb-3">
                                <label for="tipo_id" class="form-label fs-14 text-dark">Tipo</label>
                                <select class="form-control" id="tipo_id" name="tipo_id" required>
                                    <option value="">Seleccione</option>
                                    @foreach ($tipos as $tipo)
                                        <option value="{{ $tipo->id }}" {{ $tipo->id == $producto->tipo_id ? 'selected' : '' }} >{{ $tipo->nombre }}</option>   
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="mb-3">
                                <label for="laboratorio_id" class="form-label fs-14 text-dark">Laboratorio</label>
                                <select class="form-control" id="laboratorio_id" name="laboratorio_id" required>
                                    <option value="">Seleccione</option>
                                    @foreach ($laboratorios as $laboratorio)
                                        <option value="{{ $laboratorio->id }}" {{ $laboratorio->id == $producto->laboratorio_id ? 'selected' : '' }} >{{ $laboratorio->nombre }}</option>   
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="mb-3">
                                <label for="cantidad_minima" class="form-label fs-14 text-dark">Cantidad Minima</label>
                                <input type="number" class="form-control" id="cantidad_minima" name="cantidad_minima" value="{{ $producto->cantidad_minima }}" required>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="mb-3">
                                <label for="requiere_receta" class="form-label fs-14 text-dark">Requiere receta</label>
                                <select class="form-control" id="requiere_receta" name="requiere_receta" required>
                                    <option value="0" {{ $producto->requiere_receta == 0 ? 'selected' : '' }}>No</option>
                                    <option value="1" {{ $producto->requiere_receta == 1 ? 'selected' : '' }}>Si</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="mb-3">
                                <label for="estado" class="form-label fs-14 text-dark">Estado</label>
                                <select class="form-control" id="estado" name="estado" required>
                                    <option value="Activo" {{ $producto->estado == 'Activo' ? 'selected' : '' }}>Activo</option>
                                    <option value="Inactivo" {{ $producto->estado == 'Inactivo' ? 'selected' : '' }}>Inactivo</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="mb-3">
                                <label for="descripcion" class="form-label fs-14 text-dark">Descripción</label>
                                <textarea type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingrese descripcion">{{ $producto->descripcion }}</textarea>
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
