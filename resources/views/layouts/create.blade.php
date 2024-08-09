@extends('layouts.app')

@section('content')
    <h1>Crear Nuevo Cliente</h1>
    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
        <div>
            <label for="nif">NIF</label>
            <input type="text" name="nif" id="nif" required>
        </div>
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" required>
        </div>
        <div>
            <label for="direccion">Dirección</label>
            <input type="text" name="direccion" id="direccion" required>
        </div>
        <div>
            <label for="ciudad">Ciudad</label>
            <input type="text" name="ciudad" id="ciudad" required>
        </div>
        <div>
            <label for="telefono">Teléfono</label>
            <input type="text" name="telefono" id="telefono" required>
        </div>
        <button type="submit">Guardar Cliente</button>
    </form>
@endsection
