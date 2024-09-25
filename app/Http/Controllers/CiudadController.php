<?php

namespace App\Http\Controllers;

use App\Models\Ciudad;
use App\Models\Pais;

use Illuminate\Http\Request;

class CiudadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ciudades = Ciudad::with('pais')->get();
        return view('ciudades.index', compact('ciudades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $paises = Pais::all();
        return view('ciudades.create', compact('paises'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|string|max:255',
            'pais_id' => 'required|exists:paises,id',
        ]);

        Ciudad::create($data);

        return redirect()->route('ciudades.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ciudad $ciudad)
    {
        $paises = Pais::all();
        return view('ciudades.edit', compact('ciudad', 'paises'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ciudad $ciudad)
    {
        $data = $request->validate([
            'nombre' => 'required|string|max:255',
            'pais_id' => 'required|exists:paises,id',
        ]);

        $ciudad->update($data);

        return redirect()->route('ciudades.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ciudad $ciudad)
    {
        $ciudad->delete();

        return redirect()->route('ciudades.index');
    }
}
