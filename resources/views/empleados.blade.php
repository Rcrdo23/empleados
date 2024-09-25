@extends('layouts.app')

     @section('content')
     <div class="container">
         <h1>Lista de Empleados</h1>
         <a href="{{ route('empleados.create') }}" class="btn btn-primary">Crear Empleado</a>
         <table class="table">
             <thead>
                 <tr>
                     <th>ID</th>
                     <th>Nombres</th>
                     <th>Apellidos</th>
                     <th>Identificación</th>
                     <th>Dirección</th>
                     <th>Teléfono</th>
                     <th>Ciudad</th>
                     <th>Acciones</th>
                 </tr>
             </thead>
             <tbody>
                 @foreach($empleados as $empleado)
                 <tr>
                     <td>{{ $empleado->id }}</td>
                     <td>{{ $empleado->nombres }}</td>
                     <td>{{ $empleado->apellidos }}</td>
                     <td>{{ $empleado->identificacion }}</td>
                     <td>{{ $empleado->direccion }}</td>
                     <td>{{ $empleado->telefono }}</td>
                     <td>{{ $empleado->ciudad->nombre }}</td>
                     <td>
                         <a href="{{ route('empleados.edit', $empleado->id) }}" class="btn btn-warning">Editar</a>
                         <form action="{{ route('empleados.destroy', $empleado->id) }}" method="POST" style="display:inline-block;">
                             @csrf
                             @method('DELETE')
                             <button type="submit" class="btn btn-danger">Eliminar</button>
                         </form>
                     </td>
                 </tr>
                 @endforeach
             </tbody>
         </table>
     </div>
     @endsection