@extends('layouts.private')

@section('content')

<div class="row">
    <div class="col-xl-12">
        <div class="card custom-card">
            <div class="card-header justify-content-between">
                <div class="card-title">
                    Datos de producto
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('productos.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="nombre" class="form-label fs-14 text-dark">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre" required>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="mb-3">
                                <label for="alias" class="form-label fs-14 text-dark">Alias</label>
                                <input type="text" class="form-control" id="alias" name="alias" placeholder="Ingrese el alias" required>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="mb-3">
                                <label for="codigo" class="form-label fs-14 text-dark">Codigo</label>
                                <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Ingrese codigo" required>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="mb-3">
                                <label for="categoria_id" class="form-label fs-14 text-dark">Categoria</label>
                                <select class="form-control" id="categoria_id" name="categoria_id" required>
                                    <option value="">Seleccione</option>
                                    @foreach ($categorias as $categoria)
                                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>   
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
                                        <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>   
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
                                        <option value="{{ $laboratorio->id }}">{{ $laboratorio->nombre }}</option>   
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="mb-3">
                                <label for="cantidad_minima" class="form-label fs-14 text-dark">Cantidad Minima</label>
                                <input type="number" class="form-control" id="cantidad_minima" name="cantidad_minima" required>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="mb-3">
                                <label for="requiere_receta" class="form-label fs-14 text-dark">Requiere receta</label>
                                <select class="form-control" id="requiere_receta" name="requiere_receta" required>
                                    <option value="0">No</option>
                                    <option value="1">Si</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="mb-3">
                                <label for="estado" class="form-label fs-14 text-dark">Estado</label>
                                <select class="form-control" id="estado" name="estado" required>
                                    <option value="Activo">Activo</option>
                                    <option value="Inactivo">Inactivo</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="mb-3">
                                <label for="descripcion" class="form-label fs-14 text-dark">Descripción</label>
                                <textarea type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingrese descripcion"></textarea>
                            </div>
                        </div>

                        
                    </div>
                    <button class="btn btn-primary" type="submit">Agregar</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
