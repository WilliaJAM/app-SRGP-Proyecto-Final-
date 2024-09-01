<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupplierProductController extends Controller
{
    //
public function get(Request $request){
    return response()-> json([
        'status' => 'Conectado',
        'message' =>'Consulta con exito'
    ]);
}

public function save(Request $request){
    return response()-> json([
        'status' => 'Conectado',
        'message' =>'Guardado con exito'
    ]);
}

public function update(Request $request){
    return response()-> json([
        'status' => 'Conectado',
        'message' =>'Actualizado con exito'
    ]);
}

public function delete(Request $request){
    return response()-> json([
        'status' => 'Conectado',
        'message' =>'Eliminado con exito'
    ]);
}

}
