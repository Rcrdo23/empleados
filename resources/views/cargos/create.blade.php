@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear Cargo</h1>
        <form action="{{ route('cargos.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection