@extends('layouts.app')

@section('content')
    <h1>Editar Cliente</h1>
    <form action="{{ route('clientes.update', $cliente->nif) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" value="{{ $cliente->nombre }}" required>
        </div>
        <div>
            <label for="direccion">Dirección</label>
            <input type="text" name="direccion" id="direccion" value="{{ $cliente->direccion }}" required>
        </div>
        <div>
            <label for="ciudad">Ciudad</label>
            <input type="text" name="ciudad" id="ciudad" value="{{ $cliente->ciudad }}" required>
        </div>
        <div>
            <label for="telefono">Teléfono</label>
            <input type="text" name="telefono" id="telefono" value="{{ $cliente->telefono }}" required>
        </div>
        <button type="submit">Actualizar Cliente</button>
    </form>
@endsection
