<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\countries;
class CountriesController extends Controller
{
    //
    public function save (Request $request){

        $country= countries::create([
            'name' =>$request->name,
            'code'=>$request->code,
            'three_letter_code'=>$request->three_letter_code,
            'currency'=>$request->currency,
            'telephone_prefix'=>$request->telephone_prefix
        ]);

        return response()->json([
            'status' => 'Conectado',
            'message' => 'Guardado correctamente'
        ]);

    }
    public function get (Request $request){

        $country= countries::all();

        return response()->json([
            'status' => 'Conectado',
            'message' => 'Consulta con exito',
            'result'=> $country
        ]);
    }

    public function update(Request $request){


        $country= countries::findOrFail($request->id);
        $country->update([
            'name' =>$request->name,
            'code'=>$request->code,
            'three_letter_code'=>$request->three_letter_code,
            'currency'=>$request->currency,
            'telephone_prefix'=>$request->telephone_prefix
        ]);

        return response()->json([
            'status' => 'Conectado',
            'message' => 'Actualizado correctamente'
        ]);
    }

    public function delete(Request $request){

        $country= countries::findOrFail($request->id);
        $country->delete();

        return response()->json([
            'status' => 'Conectado',
            'message' => 'Eliminado correctamente'
        ]);
    }
}
