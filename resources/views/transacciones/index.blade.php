@extends('layouts.private')

@section('content')

<div class="row">
    <div class="col-xl-12">
        <div class="card custom-card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <div class="card-title">
                    Lista de transacciones
                </div>
                <div>
                    <div class="breadcrumb mb-0">
                        <a aria-label="anchor" href="{{ route('transacciones.create') }}" class="btn btn-primary ms-auto"><i class="ti ti-circle-plus me-2"></i>Agregar</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable-basic" class="table table-bordered text-nowrap w-100">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tipo</th>
                                <th>Fecha</th>
                                <th>Total</th>
                                <th>Estado</th>
                                <th>Eliminado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transacciones as $transaccion)
                                <tr>
                                    <td>{{ $transaccion->id }}</td>
                                    <td>{{ $transaccion->tipo }}</td>
                                    <td>{{ $transaccion->fecha }}</td>
                                    <td>{{ $transaccion->total }}</td>
                                    <td>{{ $transaccion->estado }}</td>
                                    <td>{{ $transaccion->eliminado ? 'Sí' : 'No' }}</td>
                                    <td>
                                        <div class="hstack gap-2 fs-15">
                                            <a href="{{ route('transacciones.edit', $transaccion->id) }}" class="btn btn-icon btn-sm btn-info"><i class="ri-edit-line"></i></a>
                                            <form action="{{ route('transacciones.destroy', $transaccion->id) }}" method="POST" style="display:inline;">
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

@endsection
