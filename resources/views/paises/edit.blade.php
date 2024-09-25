@extends('layouts.app')

@section('title', 'Editar País')

@section('content')
    <div class="container">
        <h1>Editar País</h1>
        <form action="{{ route('paises.update', $pais->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nombre">Nombre del País</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $pais->nombre }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="{{ route('paises.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection