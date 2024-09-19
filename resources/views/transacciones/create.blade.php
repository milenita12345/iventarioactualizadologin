@extends('layouts.private')

@section('content')

<div class="row">
    <div class="col-xl-12">
        <div class="card custom-card">
            <div class="card-header justify-content-between">
                <div class="card-title">
                    Encabezado de transaccion
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('transacciones.store') }}">
                    @csrf

                    <input type="text" class="form-control" id="user_id" name="user_id" value="{{ Auth::id() }}" hidden>

                    <div class="row">

                        <div class="col-4">
                            <div class="mb-3">
                                <label for="tipo" class="form-label fs-14 text-dark">Tipo de transacción</label>
                                <select class="form-control" id="tipo" name="tipo" required>
                                    <option value="Compra">Compra</option>
                                    <option value="Venta">Venta</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="mb-3">
                                <label for="persona_id" class="form-label fs-14 text-dark">Cliente/Proveedor</label>
                                <select class="form-control" id="persona_id" name="persona_id" required>
                                    <option value="">Seleccione</option>
                                    @foreach ($personas as $persona)
                                        <option value="{{ $persona->id }}">{{ $persona->nombre }}</option>   
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="mb-3">
                                <label for="fecha" class="form-label fs-14 text-dark">Fecha</label>
                                <input type="date" class="form-control" id="fecha" name="fecha" required>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="mb-3">
                                <label for="nombre_comprobante" class="form-label fs-14 text-dark">Nombre Comprobante</label>
                                <input type="text" class="form-control" id="nombre_comprobante" name="nombre_comprobante" placeholder="" required>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="mb-3">
                                <label for="numero_comprobante" class="form-label fs-14 text-dark">Numero Comprobante</label>
                                <input type="text" class="form-control" id="numero_comprobante" name="numero_comprobante" placeholder="" required>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="mb-3">
                                <label for="total" class="form-label fs-14 text-dark">Total</label>
                                <input type="text" class="form-control" id="total" name="total" placeholder="" required readonly>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-xl-12">
        <div class="card custom-card">
            <div class="card-header justify-content-between">
                <div class="card-title">
                    Detalle de transaccion
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('transacciones.store') }}">
                    @csrf

                    
                    
                </form>
            </div>
        </div>

        <button class="btn btn-primary" type="submit">Guardar</button>
    </div>
</div>
@endsection
