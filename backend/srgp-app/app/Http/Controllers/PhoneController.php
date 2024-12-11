<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    //
    public function save (Request $request){

        $phone = phone::create([
            'types'=> $request->types,
            'countries_id'=> $request->countries_id,
            'number'=> $request->number
        ]);

        return response()->json([
            'status' => 'Conectado',
            'message' => 'Guardado correctamente'
        ]);

    }
    public function get (Request $request){

        $phone= phone::all();

        return response()->json([
            'status' => 'Conectado',
            'message' => 'Consulta con exito',
            'result'=> $phone
        ]);
    }

    public function update(Request $request){

        $phone= phone::findOrFail($request->id);
        $phone->update([
            'types'=> $request->types,
            'countries_id'=> $request->countries_id
        ]);

        return response()->json([
            'status' => 'Conectado',
            'message' => 'Actualizado correctamente'
        ]);
    }

    public function delete(Request $request){

        $phone= phone::findOrFail($request->id);
        $phone->delete();

        return response()->json([
            'status' => 'Conectado',
            'message' => 'Eliminado correctamente'
        ]);
    }
}
