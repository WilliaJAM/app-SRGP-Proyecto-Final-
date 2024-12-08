<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\user_table;
use Illuminate\Http\Request;
use Carbon\Carbon;

class UserTableController extends Controller
{
    //
    public function get(Request $request){

        $user= user_table::all();

        return response()-> json([
            'status' => '200',
            'message' => 'Consulta con exito',
            'result'=> $user
        ]);
    }

    public function save(Request $request){

        
        $birthdate = Carbon::parse($request->birthdate)->format('Y-m-d');
        $registration_date = Carbon::parse($request->registration_date)->format('Y-m-d');

        $user= user_table::create([
            "name" => $request->name,
            "last_name" => $request->last_name, 
            "image" => $request->image, 
            "cedula" => $request->cedula, 
            "birthdate" => $birthdate, 
            "password" => $request->password, 
            "gender" => $request->gender, 
            "registration_date" => $registration_date, 
            "account_status" => $request->account_status, 
            "phone"=> $request->phone,
            "email" => $request->email, 
            "user_id" => $request->user_id, 
            "rol_id" => $request->rol_id, 
            "type_phone"=> $request->type_phone,
            "neighborhood_name"=> $request->neighborhood_name,
            "address"=>$request->address,
            "city_id"=>$request->city_id,
        ]);


        return response()->json([
            'status' => '200',
            'message' => 'Guardado con exito'
        ]);
    }

    public function update(Request $request){

        $user= user_table::findOrFail($request->id);
        $user->update([
            "name" => $request->name,
            "last_name" => $request->last_name, 
            "image" => $request->image, 
            "cedula" => $request->cedula, 
            "birthdate" => $request->birthdate, 
            "password" => $request->password, 
            "gender" => $request->gender, 
            "registration_date" => $request->registration_date, 
            "account_status" => $request->account_status, 
            "email" => $request->email, 
            "user_id" => $request->user_id, 
            "rol_id" => $request->rol_id, 
            "type_phone"=> $request->type_phone,
            "neighborhood_name"=> $request->neighborhood_name,
            "address"=>$request->address,
            "city_id"=>$request->city_id,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'Actualizado con exito'
        ]);
    }

    public function delete(Request $request){

        $user= user_table::findOrFail($request->id);
        $user->delete();

        return response()->json([
            'status' => '200',
            'message' => 'Eliminado correctamente'
        ]);
    }

    public function getDataById(Request $request){

        $user= user_table::where('id', $request->id->get());

        return response()-> json([
            'status' => '200',
            'message' => 'Consulta con exito',
            'result'=> $user
        ]);
    }

}
