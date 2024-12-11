<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;

class CategoryController extends Controller
{
    //
    public function save (Request $request){

        $category = category:: create([
            'name' => $request->name
        ]);

        return response()->json([
            'status' => 'Conectado',
            'message' => 'Guardado correctamente'
        ]);

    }
    public function get (Request $request){

        $category= category::all();

        return response()->json([
            'status' => 'Conectado',
            'message' => 'Consulta con exito',
            'result' => $category
        ]);
    }

    public function update(Request $request){
        
        $category=category::findOrFail($request->id);

        $category-> update([
            "name"=> $request->name,
        ]);

        return response()->json([
            'status' => 'Conectado',
            'message' => 'Actualizado correctamente'
        ]);
    }

    public function delete(Request $request){

        $category=category::findOrFail($request->id);

        $category->delete();

        return response()->json([
            'status' => 'Conectado',
            'message' => 'Eliminado correctamente'
        ]);
    }

    public function getDataById (Request $request){

    $category= category::where('id', $request->id)->get();

    return response()->json([
        'status' => 'Conectado',
        'message' => 'Consulta con exito',
        'result' => $category
    ]);
    }
}
