@extends('layouts.private')

@section('content')
    <!-- Start::row-1 -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="card-title">
                        Lista de productos
                    </div>
                    <div>
                        <div class="breadcrumb mb-0">
                            <a aria-label="anchor" href="{{ route('productos.create') }}" class="btn btn-primary ms-auto"><i class="ti ti-circle-plus me-2"></i>Agregar</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable-basic" class="table table-bordered text-nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Codigo</th>
                                    <th>Categoria</th>
                                    <th>Tipo</th>
                                    <th>Laboratorio</th>
                                    <th>Estado</th>
                                    <th>Eliminado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($productos as $producto)
                                    <tr>
                                        <td>{{ $producto->id }}</td>
                                        <td>{{ $producto->nombre }}</td>
                                        <td>{{ $producto->codigo }}</td>
                                        <td>{{ $producto->categoria->nombre }}</td>
                                        <td>{{ $producto->tipo->nombre }}</td>
                                        <td>{{ $producto->laboratorio->nombre }}</td>
                                        <td>{{ $producto->estado }}</td>
                                        <td>{{ $producto->eliminado ? 'Sí' : 'No' }}</td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-icon btn-sm btn-info"><i class="ri-edit-line"></i></a>
                                                <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-icon btn-sm btn-danger"><i class="ri-delete-bin-line"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End::row-1 -->
@endsection