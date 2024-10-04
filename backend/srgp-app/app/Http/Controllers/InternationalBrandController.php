<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\international_brand;
class InternationalBrandController extends Controller
{
    //
    public function save (Request $request){

        // $brand = new international_brand();
        // $brand->brand = $request->brand;
        // $brand->save();

        $brand= international_brand::create([
            'brand' => $request->brand,
        ]);

        return response()->json([
            'status' => 'Conectado',
            'message' => 'Guardado correctamente',
            'marca' => $brand->brand
        ]);

    }
    public function get (Request $request){
        return response()->json([
            'status' => 'Conectado',
            'message' => 'Consulta con exito'
        ]);
    }

    public function update(Request $request){
        return response()->json([
            'status' => 'Conectado',
            'message' => 'Actualizado correctamente'
        ]);
    }

    public function delete(Request $request){
        return response()->json([
            'status' => 'Conectado',
            'message' => 'Eliminado correctamente'
        ]);
    }
}
