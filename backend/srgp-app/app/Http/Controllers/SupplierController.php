<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    //
    public function get(Request $request){

        $supplier= supplier::all();

        return response()->json([
            'status' => 'Conectado',
            'message' => 'Consulta con exito',
            'result' => $supplier
        ]);
    }

    public function save(Request $request){


        $supplier= supplier::create([
            "supplier_name"=> $request->supplier_name,
            "email"=> $request->email,
            "supplier_product_id"=> $request->supplier_product_id,
            "address_id"=> $request->address_id,
            "phone_id"=> $request->phone_id
        ]);

        return response()->json([
            'status' => 'Conectado',
            'message' => ' Guardado con exito'
        ]);
    }

    public function update(Request $request){

        $supplier= supplier::findOrFail($request->id);
        $supplier->update([
            "supplier_name"=> $request->supplier_name,
            "email"=> $request->email,
            "supplier_product_id"=> $request->supplier_product_id,
            "address_id"=> $request->address_id,
            "phone_id"=> $request->phone_id
        ]);

        return response()->json([
            'status' => 'Conectado',
            'message' => 'Actualizado con exito'
        ]);
    }

    public function delete(Request $request){

        $supplier= supplier::findOrFail($request->id);
        $supplier->delete();

        return response()->json([
            'status' => 'Conectado',
            'message' => 'Eliminado con exito'
        ]);
    }
}
