<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\cards;
use Illuminate\Http\Request;

class CardsController extends Controller
{
    //
    public function save (Request $request){

        $card= cards::create([
            "expiration_date"=> $request->expiration_date, 
            "CVV"=> $request->CVV, 
            "card_number"=> $request->card_number, 
            "name_of_the_holder"=> $request->name_of_the_holder, 
            "bank_id"=> $request->bank_id,  
            "brand_id"=> $request->brand_id, 
            "card_type_id"=> $request->card_type_id
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'Guardado correctamente'
        ]);

    }
    public function get (Request $request){

        $card= cards::all();

        return response()->json([
            'status' => '200',
            'message' => 'Consulta con exito',
            'result' => $card
        ]);
    }

    public function update(Request $request){

        $card= cards::findOrFail($request->id);
        $card->update([
            "expiration_date"=> $request->expiration_date, 
            "CVV"=> $request->CVV, 
            "card_number"=> $request->card_number, 
            "name_of_the_holder"=> $request->name_of_the_holder, 
            "bank_id"=> $request->bank_id,  
            "brand_id"=> $request->brand_id, 
            "card_type_id"=> $request->card_type_id
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'Actualizado correctamente'
        ]);
    }

    public function delete(Request $request){

        $card= cards::findOrFail($request->id);
        $card->delete();

        return response()->json([
            'status' => '200',
            'message' => 'Eliminado correctamente'
        ]);
    }
}
