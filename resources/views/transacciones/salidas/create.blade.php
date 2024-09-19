@extends('layouts.private')

@section('page-title', 'Registrar Venta')

@php
    // Definir los breadcrumbs como un array
    $breadcrumbs = [
        ['name' => 'Dashboard', 'url' => route('dashboard')],
        ['name' => 'Ventas', 'url' => route('transacciones.salidas.index')],
        ['name' => 'Registrar', 'url' => route('transacciones.salidas.create')],
    ];
@endphp

@section('content')

@section('content')

@if (session('error'))
<div class="alert alert-danger d-flex align-items-center" role="alert">
    <svg class="flex-shrink-0 me-2 svg-danger" xmlns="http://www.w3.org/2000/svg" height="1.5rem" viewBox="0 0 24 24"
        width="1.5rem" fill="#000000">
        <path d="M0 0h24v24H0V0zm0 0h24v24H0V0z" fill="none"></path>
        <path
            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zM11 7h2v6h-2zm0 8h2v2h-2z">
        </path>
    </svg>
    <div>
        {{ session('error') }}
    </div>
</div>
@endif

    @error('detalles')
    <div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="flex-shrink-0 me-2 svg-danger" xmlns="http://www.w3.org/2000/svg" height="1.5rem" viewBox="0 0 24 24"
        width="1.5rem" fill="#000000">
        <path d="M0 0h24v24H0V0zm0 0h24v24H0V0z" fill="none"></path>
        <path
            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zM11 7h2v6h-2zm0 8h2v2h-2z">
        </path>
    </svg>
        <div>
            Debe tener al menos 1 detalle
        </div>
    </div>   
    @enderror


    <div class="row">

        <form id="transaccionForm" method="POST" action="{{ route('transacciones.salidas.store') }}">
            @csrf

            <input type="text" class="form-control" id="user_id" name="user_id" value="{{ Auth::id() }}" hidden>

            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            Encabezado
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="tipo" class="form-label fs-14 text-dark">Tipo de transacción</label>
                                    <input class="form-control" type="text" value="Venta" id="tipo" name="tipo" readonly>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="persona_id" class="form-label fs-14 text-dark">Cliente <span class="text-danger font-weight-bold"> *</span></label>
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
                                    <label for="fecha" class="form-label fs-14 text-dark">Fecha <span class="text-danger font-weight-bold"> *</span></label>
                                    <input type="date" class="form-control" id="fecha" name="fecha" value="{{ date('Y-m-d') }}" required>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="nombre_comprobante" class="form-label fs-14 text-dark">Nombre
                                        Comprobante </label>
                                    <input type="text" class="form-control" id="nombre_comprobante"
                                        name="nombre_comprobante" placeholder="" >
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="numero_comprobante" class="form-label fs-14 text-dark">Numero
                                        Comprobante</label>
                                    <input type="text" class="form-control" id="numero_comprobante"
                                        name="numero_comprobante" placeholder="" >
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="total" class="form-label fs-14 text-dark">Total</label>
                                    <input type="text" class="form-control bg-gray-200" id="total" name="total" placeholder=""
                                        required readonly value="0.00">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            Detalle
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table" id="detallesTable">
                            <thead>
                                <tr>
                                    <th>Producto <span class="text-danger font-weight-bold"> *</span></th>
                                    <th>Lote <span class="text-danger font-weight-bold"> *</span></th>
                                    <th>Cantidad <span class="text-danger font-weight-bold"> *</span></th>
                                    <th>Precio unitario <span class="text-danger font-weight-bold"> *</span></th>
                                    <th>Subtotal <span class="text-danger font-weight-bold"> *</span></th>
                                    <th>Acciones <span class="text-danger font-weight-bold"> *</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Aquí se agregarán dinámicamente los detalles -->
                            </tbody>
                        </table>

                        <div class="my-2">
                            <button type="button" class="btn btn-success" id="addDetalle">+</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="my-2">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <a href="{{ route('transacciones.salidas.index') }}" class="btn btn-light">Cancelar</a>
            </div>
        </form>
    </div>
@endsection

@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const lotesPorProducto = @json($lotesPorProducto);
            const detallesTableBody = document.querySelector('#detallesTable tbody');
            const addDetalleBtn = document.getElementById('addDetalle');
            let detalleIndex = 0;

            addDetalleBtn.addEventListener('click', function() {
            const newRow = document.createElement('tr');
            newRow.innerHTML = `
                <td>
                    <select class="form-control producto" name="detalles[${detalleIndex}][producto_id]" required>
                        <option value="">Seleccione</option>
                        @foreach ($productos as $producto)
                            <option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <select class="form-control lote" name="detalles[${detalleIndex}][lote_id]" required>
                        <option value="">Seleccione</option>
                        <!-- Los lotes se llenarán aquí -->
                    </select>
                </td>
                <td>
                    <input type="number" class="form-control cantidad" name="detalles[${detalleIndex}][cantidad]" required min="1" value="1">
                </td>
                <td>
                    <input type="number" class="form-control precio_unitario" name="detalles[${detalleIndex}][precio_unitario]" required min="0" step="0.01">
                </td>
                <td>
                    <input type="number" class="form-control subtotal" name="detalles[${detalleIndex}][subtotal]" readonly>
                </td>
                <td>
                    <button type="button" class="btn btn-danger removeDetalle">-</button>
                </td>
            `;

                detallesTableBody.appendChild(newRow);
                detalleIndex++;


                // Añade el evento de eliminación
                newRow.querySelector('.removeDetalle').addEventListener('click', function() {
                    newRow.remove();
                    calcularTotal();
                });

                // Añade eventos de cálculo del subtotal
                newRow.querySelector('.cantidad').addEventListener('input', calcularSubtotal);
                newRow.querySelector('.precio_unitario').addEventListener('input', calcularSubtotal);


                 // Evento para actualizar los lotes cuando se selecciona un producto
                newRow.querySelector('.producto').addEventListener('change', function() {
                    const productoId = this.value;
                    const selectLote = newRow.querySelector('.lote');
                    selectLote.innerHTML = '<option value="">Seleccione</option>'; // Limpiar lotes anteriores

                    if (productoId) {
                        const lotes = lotesPorProducto[productoId] || [];
                        lotes.forEach(function(lote) {
                            const option = document.createElement('option');
                            option.value = lote.id;
                            option.dataset.stock = lote.cantidad_actual; // Guarda el stock en un atributo data
                            const aux = `Lote: ${lote.codigo}, Stock: ${lote.cantidad_actual}`;
                            option.text = aux;
                            selectLote.appendChild(option);
                        });
                    }
                });

                // Evento para validar la cantidad contra el stock del lote seleccionado
                newRow.querySelector('.lote').addEventListener('change', function() {
                    const selectedOption = this.options[this.selectedIndex];
                    const stock = parseInt(selectedOption.dataset.stock, 10);
                    const cantidadField = newRow.querySelector('.cantidad');

                    if (parseInt(cantidadField.value, 10) > stock) {
                        alert('La cantidad no puede exceder el stock disponible.');
                        cantidadField.value = stock; // Restablecer a la cantidad máxima disponible
                    }
                });

                // Evento para validar la cantidad ingresada
                newRow.querySelector('.cantidad').addEventListener('input', function() {
                    const selectedOption = newRow.querySelector('.lote').options[newRow.querySelector('.lote').selectedIndex];
                    const stock = parseInt(selectedOption.dataset.stock, 10);
                    const cantidad = parseInt(this.value, 10);

                    if (cantidad > stock) {
                        alert('La cantidad no puede exceder el stock disponible.');
                        this.value = stock; // Restablecer a la cantidad máxima disponible
                    }
                });

            });

            // Función para calcular el subtotal en cada fila
            function calcularSubtotal(event) {
                const row = event.target.closest('tr');
                const cantidad = row.querySelector('.cantidad').value;
                const precio_unitario = row.querySelector('.precio_unitario').value;
                const subtotal = row.querySelector('.subtotal');

                subtotal.value = (cantidad * precio_unitario).toFixed(2);
                calcularTotal();
            }

            // Función para calcular el total general
            function calcularTotal() {
                let total = 0;
                document.querySelectorAll('.subtotal').forEach(function(subtotalField) {
                    total += parseFloat(subtotalField.value) || 0;
                });

                document.getElementById('total').value = total.toFixed(2);
            }
        });
    </script>
@endsection
