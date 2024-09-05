<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BankController extends Controller
{
    //
    public function get(Request $request){
        return response()->json([
            'status' => '200',
            'message' => 'Consulta con exito',
            
        ]);
    }
    public function save(Request $request){

            if ($request->edad >= 18 ) {
                $rta = 'Mayor de edad';
                
            }else{
                $rta = 'Menor de edad';
                
            }
        return response()->json([
            'status' => '200',
            'message' => 'Guardado con exito',
            'data' => $request->nombre,
            'dta' => $request->edad,
            'persona' => $rta,
            'otros' => [
                'deporteFav' => $request->deporte,
                'dateEntrena' => $request->date
            ]
            
        ]);
    }
    public function update(Request $request){
        return response()->json([
            'status' => '200',
            'message' => 'Actualizado con exito'
        ]);
    }
    public function delete(Request $request){
        return response()->json([
            'status' => '200',
            'message' => 'Eliminado con exito'
        ]);
    }

}
