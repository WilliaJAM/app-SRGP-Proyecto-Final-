<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\supplier_product;
use Illuminate\Http\Request;

class SupplierProductController extends Controller
{
    //
public function get(Request $request){

    $splproduct= supplier_product::all();

    return response()-> json([
        'status' => '200',
        'message' =>'Consulta con exito',
        'result' =>$splproduct
    ]);
}

public function save(Request $request){

    $splproduct= supplier_product::create([
        'price'=> $request->price,
        'amount'=> $request->amount,
        'creation_date'=> $request->creation_date,
        'category_id'=> $request->category_id
    ]);

    return response()-> json([
        'status' => 'Conectado',
        'message' =>'Guardado con exito'
    ]);
}

public function update(Request $request){

    $splproduct= supplier_product::findOrFail($request->id);
    $splproduct->update([
        'price'=> $request->price,
        'amount'=> $request->amount,
        'creation_date'=> $request->creation_date,
        'category_id'=> $request->category_id
    ]);

    return response()-> json([
        'status' => 'Conectado',
        'message' =>'Actualizado con exito'
    ]);
}

public function delete(Request $request){

    $splproduct= supplier_product::findOrFail($request->id);
    $splproduct->delete();

    return response()-> json([
        'status' => 'Conectado',
        'message' =>'Eliminado con exito'
    ]);
}

}
