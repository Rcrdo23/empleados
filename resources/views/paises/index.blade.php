@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Listado de Paises</h1>
        <a href="{{ route('paises.create') }}" class="btn btn-primary mb-3">Crear País</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($paises as $pais)
                    <tr>
                        <td>{{ $pais->id }}</td>
                        <td>{{ $pais->nombre }}</td>
                        <td>
                            <a href="{{ route('paises.edit', $pais->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('paises.destroy', $pais->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este país?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection