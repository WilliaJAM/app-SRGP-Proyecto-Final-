<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function save (Request $request){

        $customer= customer::create([
            "customer_id"=> $request->customer_id
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'Guardado correctamente'
        ]);

    }
    public function get (Request $request){

        $customer= customer::all();

        return response()->json([
            'status' => '200',
            'message' => 'Consulta con exito',
            'result'=> $customer
        ]);
    }

    public function update(Request $request){

        $customer= customer::findOrFail($request->id);
        $customer->update([
            "customer_id"=> $request->customer_id
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'Actualizado correctamente'
        ]);
    }

    public function delete(Request $request){

        $customer= customer::findOrFail($request->id);
        $customer->delete();

        return response()->json([
            'status' => '200',
            'message' => 'Eliminado correctamente'
        ]);
    }
}
