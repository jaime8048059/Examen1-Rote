<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return response()->json(Producto::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
         $request->validate([
            'nombre'=>'required',
            'precio'=>'required',
            
        ]);
        $producto=Producto::create($request->all());

        return response()->json([
            'mensaje'=>'producto creada exitosamente',
            'producto'=> $producto

        ],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
         $producto=Producto::find($id);

        if(!$producto){

            return response()->json(
            [
            'mensaje'=>'producto no encontrada'
            ],404
            );
        }
        return response()->json($producto,200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
       $producto=Producto::find($id);

        if(!$producto){

            return response()->json(
            [
            'mensaje'=>'producto no encontrada'
            ],404
            );
          }
           $request->validate([
            'nombre'=>'required',
            'precio'=>'required',
            
        ]);

        $producto->update($request->all());

        return response()->json([
            'mensaje'=>'producto actualizada exitosamente',
            'producto'=> $producto

        ],201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

         $producto=Producto::find($id);
         if(!$producto){

            return response()->json(
            [
            'mensaje'=>'producto no encontrada'
            ],404
            );
        }
        $producto->delete();
        return response ()->json([
            'mensaje'=>'Producto eliminada exitosamente'
        ],200);
       
         

           
    }
}
