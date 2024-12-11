<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\rol;
class RolController extends Controller
{
    //
    public function save (Request $request){

        $rol = rol:: create([
            'name'=> $request->name
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'Guardado correctamente'
        ]);

    }
    public function get (Request $request){

        $rol= rol::all();

        return response()->json([
            'status' => '200',
            'message' => 'Consulta con exito',
            'result'=> $rol
        ]);
    }

    public function update(Request $request){

        $rol= rol::findOrFail($request->id);
        $rol->update([
            'name'=> $request->name
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'Actualizado correctamente'
        ]);
    }

    public function delete(Request $request){

        $rol= rol::findOrFail($request->id);
        $rol->delete();

        return response()->json([
            'status' => '200',
            'message' => 'Eliminado correctamente'
        ]);
    }

    public function getDataById (Request $request){

        $rol= rol::where('id', $request->id)->get();

        return response()->json([
            'status' => '200',
            'message' => 'Consulta con exito',
            'result'=> $rol
        ]);
    }
}
