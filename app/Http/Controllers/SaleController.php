<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    //
    public function save(Request $request){

        $sale= sale::create([
            "purchase_date"=> $request->purchase_date, 
            "pay_id"=> $request->pay_id, 
            "product_id"=> $request->product_id, 
            "customer_id"=> $request->customer_id
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'Guardado correctamente'
        ]);
    }

    public function get(Request $request){

        $sale= sale::all();

        return response()-> json([
            'status' => '200',
            'message' => 'Consulta con exito',
            'result'=> $sale
        ]);
    }

    public function update(Request $request){

        $sale= sale::findOrFail($request->id);
        $sale->update([
            "purchase_date"=> $request->purchase_date, 
            "pay_id"=> $request->pay_id, 
            "product_id"=> $request->product_id, 
            "customer_id"=> $request->customer_id
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'Actualizado correctamente'
        ]);
    }

    public function delete(Request $request){

        $sale= sale::findOrFail($request->id);
        $sale->delete();

        return response()->json([
            'status' => '200',
            'message' => 'Eliminado con exito'
        ]);
    }

    public function getDataById(Request $request){

        $sale= sale::where('id', $request->id)->get();

        return response()-> json([
            'status' => '200',
            'message' => 'Consulta con exito',
            'result'=> $sale
        ]);
    }
}
