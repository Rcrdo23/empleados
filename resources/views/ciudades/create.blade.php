@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear Ciudad</h1>
        <form action="{{ route('ciudades.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="pais_id">País</label>
                <select class="form-control" id="pais_id" name="pais_id" required>
                    @foreach($paises as $pais)
                        <option value="{{ $pais->id }}">{{ $pais->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection