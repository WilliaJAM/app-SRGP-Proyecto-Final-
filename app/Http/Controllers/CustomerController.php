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
            'name'=> $request->name,
            'documentType'=> $request->documentType,
            'identificationNumber'=>$request->identificationNumber,
            'email'=>$request->email,
            'phone'=> $request->phone,
            'type_phone'=>$request->type_phone,
            'neighborhood_name'=>$request->neighborhood_name,
            'address'=>$request->address,
            'city_id'=>$request->city_id,
            'rol_id'=>$request->rol_id,
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
            'name'=> $request->name,
            'documentType'=> $request->documentType,
            'identificationNumber'=>$request->identificationNumber,
            'email'=>$request->email,
            'phone'=> $request->phone,
            'type_phone'=>$request->type_phone,
            'neighborhood_name'=>$request->neighborhood_name,
            'address'=>$request->address,
            'city_id'=>$request->city_id,
            'rol_id'=>$request->rol_id,
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

    public function getDataById (Request $request){

        $customer= customer::where('id', $request->id)->get();

        return response()->json([
            'status' => '200',
            'message' => 'Consulta con exito',
            'result'=> $customer
        ]);
    }
}
