<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return response()->json(Marca::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validacion
        $request->validate([
            'nombre'=>'required'
        ]);
        $marcas=Marca::create($request->all());

        return response()->json([
            'mensaje'=>'Categoria creada exitosamente',
            'marcas'=> $marcas

        ],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $marcas=Marca::find($id);

        if(!$marcas){

            return response()->json(
            [
            'mensaje'=>'Categoria no encontrada'
            ],404
            );
        }
        return response()->json($marcas,200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
