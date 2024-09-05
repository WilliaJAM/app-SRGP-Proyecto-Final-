<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    //
    public function save(Request $request){
        return response()->json([
            'status' => 'Conectado',
            'message' => 'Guardado correctamente'
        ]);
    }

    public function get(Request $request){
        return response()-> json([
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
            'message' => 'Eliminado con exito'
        ]);
    }
}
