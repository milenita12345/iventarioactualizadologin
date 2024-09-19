@extends('layouts.private')

@section('content')
    <!-- Start::row-1 -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="card-title">
                        Lista de proveedores
                    </div>
                    <div>
                        <div class="breadcrumb mb-0">
                            <a aria-label="anchor" href="{{ route('proveedores.create') }}" class="btn btn-primary ms-auto"><i class="ti ti-circle-plus me-2"></i>Agregar</a>
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
                                    <th>Telefono</th>
                                    <th>Correo</th>
                                    <th>Estado</th>
                                    <th>Eliminado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($proveedores as $proveedor)
                                    <tr>
                                        <td>{{ $proveedor->id }}</td>
                                        <td>{{ $proveedor->nombre }}</td>
                                        <td>{{ $proveedor->telefono }}</td>
                                        <td>{{ $proveedor->email }}</td>
                                        <td>{{ $proveedor->estado }}</td>
                                        <td>{{ $proveedor->eliminado ? 'Sí' : 'No' }}</td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a href="{{ route('proveedores.edit', $proveedor->id) }}" class="btn btn-icon btn-sm btn-info"><i class="ri-edit-line"></i></a>
                                                <form action="{{ route('proveedores.destroy', $proveedor->id) }}" method="POST" style="display:inline;">
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