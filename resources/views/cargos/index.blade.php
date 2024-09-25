@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Listado de Cargos</h1>
        <a href="{{ route('cargos.create') }}" class="btn btn-primary mb-3">Crear Cargo</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cargos as $cargo)
                    <tr>
                        <td>{{ $cargo->id }}</td>
                        <td>{{ $cargo->nombre }}</td>
                        <td>
                            <a href="{{ route('cargos.edit', $cargo->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('cargos.destroy', $cargo->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este cargo?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection