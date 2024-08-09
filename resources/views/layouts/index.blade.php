@extends('layouts.app')

@section('content')
    <h1>Lista de Clientes</h1>
    <a href="{{ route('clientes.create') }}">Crear Cliente</a>
    <ul>
        @foreach($clientes as $cliente)
            <li>
                <a href="{{ route('clientes.show', $cliente->NIF) }}">{{ $cliente->nombre }}</a>
                <a href="{{ route('clientes.edit', $cliente->NIF) }}">Editar</a>
                <form action="{{ route('clientes.destroy', $cliente->NIF) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
