<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\bank;
use Illuminate\Http\Request;

class BankController extends Controller
{
    //
    public function get(Request $request){

        $bank= bank::all();

        return response()->json([
            'status' => '200',
            'message' => 'Consulta con exito',
            'result' => $bank
            
        ]);
    }
    public function save(Request $request){

        $bank= bank::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'address_id'=> $request->address_id,
            'phone_id'=> $request->phone_id
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'Guardado con exito'
        ]);
    }

    public function update(Request $request){

        $bank= bank::findOrFail($request->id);
        $bank->update([
            'name'=> $request->name,
            'email'=> $request->email,
            'address_id'=> $request->address_id,
            'phone_id'=> $request->phone_id
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'Actualizado con exito'
        ]);
    }
    public function delete(Request $request){

        $bank= bank::findOrFail($request->id);
        $bank->delete();

        return response()->json([
            'status' => '200',
            'message' => 'Eliminado con exito'
        ]);
    }

}
