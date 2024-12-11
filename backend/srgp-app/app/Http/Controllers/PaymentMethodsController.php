<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\payment_methods;
use Illuminate\Http\Request;

class PaymentMethodsController extends Controller
{
    //
    public function save (Request $request){

        $paymethods= payment_methods::create([
            "name"=> $request->name, 
            "description"=> $request->description, 
            "type"=> $request->type, 
            "card_id"=> $request->card_id
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'Guardado correctamente'
        ]);

    }
    public function get (Request $request){

        $paymethods= payment_methods::all();

        return response()->json([
            'status' => '200',
            'message' => 'Consulta con exito',
            'result'=> $paymethods
        ]);
    }

    public function update(Request $request){

        $paymethods= payment_methods::findOrFail($request->id);
        $paymethods->update([
            "name"=> $request->name, 
            "description"=> $request->description, 
            "type"=> $request->type, 
            "card_id"=> $request->card_id
        ]); 

        return response()->json([
            'status' => '200',
            'message' => 'Actualizado correctamente'
        ]);
    }

    public function delete(Request $request){

        $paymethods= payment_methods::findOrFail($request->id);
        $paymethods->delete();

        return response()->json([
            'status' => '200',
            'message' => 'Eliminado correctamente'
        ]);
    }
}
