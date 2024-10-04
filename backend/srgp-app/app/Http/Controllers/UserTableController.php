<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\user_table;
use Illuminate\Http\Request;

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

        $user= user_table::create([
            "name" => $request->name,
            "last_name" => $request->last_name, 
            "image" => $request->image, 
            "cedula" => $request->cedula, 
            "birthdate" => $request->birthdate, 
            "password" => $request->password, 
            "gender" => $request->gender, 
            "registration_date" => $request->registration_date, 
            "last_date_of_entry" => $request->last_date_of_entry, 
            "account_status" => $request->account_status, 
            "email" => $request->email, 
            "user_id" => $request->user_id, 
            "rol_id" => $request->rol_id, 
            "address_id" => $request->address_id, 
            "phone_id" => $request->phone_id, 
            "card_id" => $request->card_id
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
            "last_date_of_entry" => $request->last_date_of_entry, 
            "account_status" => $request->account_status, 
            "email" => $request->email, 
            "user_id" => $request->user_id, 
            "rol_id" => $request->rol_id, 
            "address_id" => $request->address_id, 
            "phone_id" => $request->phone_id, 
            "card_id" => $request->card_id
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
}
