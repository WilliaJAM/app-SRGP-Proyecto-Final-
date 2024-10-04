<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cities;
class CitiesController extends Controller
{
    //
    public function save (Request $request){

        $city= cities::create([
            'name'=> $request->name,
            'code'=> $request->code,
            'department_id'=> $request->department_id,
        ]);




        return response()->json([
            'status' => 'Conectado',
            'message' => 'Guardado correctamente'
        ]);

    }
    public function get (Request $request){

        $city=cities::all();
        
        return response()->json([
            'status' => 'Conectado',
            'message' => 'Consulta con exito',
            'result'=> $city
        ]);
    }

    public function update(Request $request){

        $city= cities::findOrFail($request->id);

        $city->update([
            'name'=> $request->name,
            'code'=> $request->code,
            'department_id'=> $request->department_id
        ]);

        return response()->json([
            'status' => 'Conectado',
            'message' => 'Actualizado correctamente'
        ]);
    }

    public function delete(Request $request){

        $city= cities::findOrFail($request->id);
        $city->delete();

        return response()->json([
            'status' => 'Conectado',
            'message' => 'Eliminado correctamente'
        ]);
    }
}
