<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserTableController extends Controller
{
    //
    public function get(){
        return response()-> json([
            'status' => 'Conectado',
            'message' => 'Consulta con exito'
        ]);
    }

    public function save(){
        return response()->json([
            'status' => 'Conectado',
            'message' => 'Guardado con exito'
        ]);
    }

    public function update(){
        return response()->json([
            'status' => 'Coenctado',
            'message' => 'Actualizado con exito'
        ]);
    }

    public function delete(){
        return response()->json([
            'status' => 'Conectado',
            'message' => 'Eliminado correctamente'
        ]);
    }
}
