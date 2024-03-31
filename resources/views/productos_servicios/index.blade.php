{{-- resources/views/productos_servicios/index.blade.php --}}

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Lista de Productos y Servicios</h1>

        <div class="row mb-4">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Estadísticas de Registros
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Por Día: {{ $countByDay }}</li>
                        <li class="list-group-item">Por Semana: {{ $countByWeek }}</li>
                        <li class="list-group-item">Por Mes: {{ $countByMonth }}</li>
                        <li class="list-group-item">Por Año: {{ $countByYear }}</li>
                    </ul>
                </div>
            </div>
        </div>

        <a href="{{ route('productos-servicios.create') }}" class="btn btn-primary mb-3">Agregar Producto/Servicio</a>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-dark">
                <tr>
                    <th>Tipo</th>
                    <th>Rubro</th>
                    <th>Código</th>
                    <th>Producto/Servicio</th>
                    <th>Unidad de Medida</th>
                    <th>Condición de IVA</th>
                    <th>Precio Unitario</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($productosServicios as $productoServicio)
                    <tr>
                        <td>{{ $productoServicio->tipo }}</td>
                        <td>{{ $productoServicio->rubro->rubro }}</td>
                        <td>{{ $productoServicio->codigo }}</td>
                        <td>{{ $productoServicio->producto_servicio }}</td>
                        <td>{{ $productoServicio->unidadMedida->unidad_medida }}</td>
                        <td>{{ $productoServicio->condicionIva->condicional_iva }}</td>
                        <td>{{ $productoServicio->precio_bruto_unitario }}</td>
                        <td>
                            <a href="{{ route('productos-servicios.edit', $productoServicio->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('productos-servicios.destroy', $productoServicio->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('¿Está seguro de que quiere eliminar este producto/servicio?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
