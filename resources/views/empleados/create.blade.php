@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear Empleado</h1>
        <form action="{{ route('empleados.store') }}" method="POST">
            @csrf
            @include('empleados.form')
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
@endsection

