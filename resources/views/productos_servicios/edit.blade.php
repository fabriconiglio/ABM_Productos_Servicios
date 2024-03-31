{{-- resources/views/productos_servicios/edit.blade.php --}}

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Producto/Servicio</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There are problems with the data entered:
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('productos-servicios.update', $productoServicio->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="tipo">Tipo</label>
                <select name="tipo" id="tipo" class="form-control" required>
                    <option value="P" {{ $productoServicio->tipo == 'P' ? 'selected' : '' }}>Producto</option>
                    <option value="S" {{ $productoServicio->tipo == 'S' ? 'selected' : '' }}>Servicio</option>
                </select>
            </div>

            <div class="form-group">
                <label for="id_rubro">Rubro</label>
                <select name="id_rubro" id="id_rubro" class="form-control" required>
                    @foreach ($rubros as $rubro)
                        <option value="{{ $rubro->id }}" {{ $productoServicio->id_rubro == $rubro->id ? 'selected' : '' }}>{{ $rubro->rubro }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="codigo">Código</label>
                <input type="text" name="codigo" id="codigo" class="form-control" required pattern="[A-Za-z0-9]+" maxlength="20" value="{{ $productoServicio->codigo }}">
            </div>

            <div class="form-group">
                <label for="producto_servicio">Producto / Servicio</label>
                <input type="text" name="producto_servicio" id="producto_servicio" class="form-control" required value="{{ $productoServicio->producto_servicio }}">
            </div>

            <div class="form-group">
                <label for="id_unidad_medida">Unidad de Medida</label>
                <select name="id_unidad_medida" id="id_unidad_medida" class="form-control" required>
                    @foreach ($unidades as $unidad)
                        <option value="{{ $unidad->id }}" {{ $productoServicio->id_unidad_medida == $unidad->id ? 'selected' : '' }}>{{ $unidad->unidad_medida }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="id_condicion_iva">Condición de IVA</label>
                <select name="id_condicion_iva" id="id_condicion_iva" class="form-control" required>
                    @foreach ($condicionesIva as $condicion)
                        <option value="{{ $condicion->id }}" {{ $productoServicio->id_condicion_iva == $condicion->id ? 'selected' : '' }}>{{ $condicion->condicional_iva }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="precio_bruto_unitario">Precio Unitario</label>
                <input type="number" name="precio_bruto_unitario" id="precio_bruto_unitario" class="form-control" required step="0.01" min="0" value="{{ $productoServicio->precio_bruto_unitario }}">
            </div>

            <div class="form-group" style="margin-top: 20px;">
                <button type="submit" class="btn btn-primary">Actualizar</button>
                <a href="{{ route('productos-servicios.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
