@extends('layouts.app')

@section('content')
    <h1>Detalles del Cliente</h1>
    <div>
        <strong>NIF:</strong> {{ $cliente->nif }}
    </div>
    <div>
        <strong>Nombre:</strong> {{ $cliente->nombre }}
    </div>
    <div>
        <strong>Dirección:</strong> {{ $cliente->direccion }}
    </div>
    <div>
        <strong>Ciudad:</strong> {{ $cliente->ciudad }}
    </div>
    <div>
        <strong>Teléfono:</strong> {{ $cliente->telefono }}
    </div>
    <a href="{{ route('clientes.index') }}">Volver a la lista de clientes</a>
@endsection
