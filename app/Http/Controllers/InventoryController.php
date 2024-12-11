<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\inventory;
use Illuminate\Http\Request;
use Carbon\Carbon;

class InventoryController extends Controller
{
    //
    public function save (Request $request){

        $departure_date = Carbon::parse($request->departure_date)->format('Y-m-d');
        $date_of_entry = Carbon::parse($request->date_of_entry)->format('Y-m-d');

        $inventory= inventory::create([
            "name"=> $request->name,
            "quantity_in_stock"=> $request->quantity_in_stock,
            "departure_date"=> $departure_date,
            "date_of_entry"=> $date_of_entry,
            "supplier_id"=> $request->supplier_id,
        ]);

        return response()->json([
            'status' => 'Conectado',
            'message' => 'Guardado correctamente'
        ]);

    }
    public function get (Request $request){

        $inventory= inventory::all();

        return response()->json([
            'status' => '200',
            'message' => 'Consulta con exito',
            'result'=> $inventory
        ]);
    }

    public function update(Request $request){

        $departure_date = Carbon::parse($request->departure_date)->format('Y-m-d');
        $date_of_entry = Carbon::parse($request->date_of_entry)->format('Y-m-d');


        $inventory= inventory::findOrFail($request->id);
        $inventory->update([
            "name"=> $request->name,
            "quantity_in_stock"=> $request->quantity_in_stock,
            "departure_date"=> $departure_date,
            "date_of_entry"=> $date_of_entry,
            "supplier_id"=> $request->supplier_id,
        ]);

        return response()->json([
            'status' => 'Conectado',
            'message' => 'Actualizado correctamente'
        ]);
    }

    public function delete(Request $request){

        $inventory= inventory::findOrFail($request->id);
        $inventory->delete();

        return response()->json([
            'status' => 'Conectado',
            'message' => 'Eliminado correctamente'
        ]);
    }

    public function getDataById (Request $request){

        $inventory= inventory::where('id', $request->id)->get();

        return response()->json([
            'status' => '200',
            'message' => 'Consulta con exito',
            'result'=> $inventory
        ]);
    }
}
