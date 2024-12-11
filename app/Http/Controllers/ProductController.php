<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function save (Request $request){

        $product= product::create([
            "price"=> $request->price,
            "image"=> $request->image,
            "description"=> $request->description,
            "dimensions"=> $request->dimensions,
            "status"=> $request->status,
            "id_product"=> $request->id_product,
            "inventory_id"=> $request->inventory_id,
            "category_id"=> $request->category_id
        ]);

        return response()->json([
            'status' => 'Conectado',
            'message' => 'Guardado correctamente'
        ]);

    }
    public function get (Request $request){

        $product= product::all();

        return response()->json([
            'status' => '200',
            'message' => 'Consulta con exito',
            'result'=> $product
        ]);
    }

    public function update(Request $request){

        $product= product::findOrFail($request->id);
        $product->update([
            "price"=> $request->price,
            "image"=> $request->image,
            "description"=> $request->description,
            "dimensions"=> $request->dimensions,
            "status"=> $request->status,
            "id_product"=> $request->id_product,
            "inventory_id"=> $request->inventory_id,
            "category_id"=> $request->category_id
        ]);

        return response()->json([
            'status' => 'Conectado',
            'message' => 'Actualizado correctamente'
        ]);
    }

    public function delete(Request $request){

        $product= product::findOrFail($request->id);
        $product->delete();

        return response()->json([
            'status' => 'Conectado',
            'message' => 'Eliminado correctamente'
        ]);
    }

    public function getDataById (Request $request){

        $product= product::where('id', $request->id)->get();

        return response()->json([
            'status' => '200',
            'message' => 'Consulta con exito',
            'result'=> $product
        ]);
    }

}
