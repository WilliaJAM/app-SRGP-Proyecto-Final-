<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\address;
class AddressController extends Controller
{
    //
    public function save (Request $request){

        $address= address::create([
            'neighborhood_name' => $request->neighborhood_name,
            'address' => $request->address,
            'city_id' => $request->city_id
        ]);

        return response()->json([
            'status' => 'Conectado',
            'message' => 'Guardado correctamente'
        ]);

    }
    public function get (Request $request){

        $address= address::all();

        return response()->json([
            'status' => 'Conectado',
            'message' => 'Consulta con exito',
            'result' => $address
        ]);
    }

    public function update(Request $request){

        $address= address::findOrFail($request->id);
        $address->update([
            'neighborhood_name' => $request->neighborhood_name,
            'address' => $request->address,
            'city_id' => $request->city_id
        ]);

        return response()->json([
            'status' => 'Conectado',
            'message' => 'Actualizado correctamente'
        ]);
    }

    public function delete(Request $request){

        $address= address::findOrFail($request->id);
        $address->delete();

        return response()->json([
            'status' => 'Conectado',
            'message' => 'Eliminado correctamente'
        ]);
    }
}
