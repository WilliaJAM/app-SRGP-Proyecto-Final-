<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\department;
class DepartmentController extends Controller
{
    //
    public function save (Request $request){

        $department= department::create([
            'name'=> $request->name,
            'code'=> $request->code,
            'country_id'=> $request->country_id
        ]);

        return response()->json([
            'status' => 'Conectado',
            'message' => 'Guardado correctamente'
        ]);

    }
    public function get (Request $request){

        $department= department::all();

        return response()->json([
            'status' => 'Conectado',
            'message' => 'Consulta con exito',
            'result'=>$department
        ]);
    }

    public function update(Request $request){

        $department= department::findOrFail($request->id);
        $department->update([
            'name'=> $request->name,
            'code'=> $request->code,
            'country_id'=> $request->country_id
        ]);

        return response()->json([
            'status' => 'Conectado',
            'message' => 'Actualizado correctamente'
        ]);
    }

    public function delete(Request $request){

        $department= department::findOrFail($request->id);

        $department->delete();

        return response()->json([
            'status' => 'Conectado',
            'message' => 'Eliminado correctamente'
        ]);
    }

    public function getDataById (Request $request){

        $department= department::where('id', $request->id)->get();

        return response()->json([
            'status' => 'Conectado',
            'message' => 'Consulta con exito',
            'result'=>$department
        ]);
    }
}
