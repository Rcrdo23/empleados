<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Pais;
use App\Models\Ciudad;



use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empleados = Empleado::with('ciudad.pais')->get();
        return view('empleados.index', compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
           $paises = Pais::all();
           $ciudades = Ciudad::all();
           return view('empleados.create', compact('paises', 'ciudades'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'identificacion' => 'required|string|max:255|unique:empleados',
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|string|max:255',
            'ciudad_id' => 'required|exists:ciudades,id',
        ]);
        Empleado::create($data);
        return redirect()->route('empleados.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empleado $empleado)
    {
           $paises = Pais::all();
           $ciudades = Ciudad::all();
           return view('empleados.edit', compact('empleado', 'paises', 'ciudades'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empleado $empleado)
    {
        $data = $request->validate([
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'identificacion' => 'required|string|max:255|unique:empleados,identificacion,' . $empleado->id,
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|string|max:255',
            'ciudad_id' => 'required|exists:ciudades,id',
        ]);
        $empleado->update($data);
        return redirect()->route('empleados.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empleado $empleado)
    {
        $empleado->delete();
        return redirect()->route('empleados.index');
    }
}
