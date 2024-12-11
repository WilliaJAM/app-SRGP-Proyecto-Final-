<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\card_type;
class CardTypeController extends Controller
{
    //
    public function save (Request $request){

        $type= card_type::create([
            'types_of_cards' => $request->typeCard,
        ]);

        return response()->json([
            'status' => 'Conectado',
            'message' => 'Guardado correctamente'
        ]);

    }
    public function get (Request $request){

        $type=card_type:: all();
        
        return response()->json([
            'status' => 'Conectado',
            'message' => 'Consulta con exito',
            'result' => $type
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
