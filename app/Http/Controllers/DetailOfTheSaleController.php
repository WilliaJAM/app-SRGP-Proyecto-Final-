<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\detail_of_the_sale;
use Illuminate\Http\Request;

class DetailOfTheSaleController extends Controller
{
    //
    public function save (Request $request){

        $detailSale = detail_of_the_sale::create([
            "quantity"=> $request->quantity, 
            "total"=> $request->total, 
            "IVA"=> $request->IVA, 
            "sale_id"=> $request->sale_id
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'Guardado correctamente'
        ]);

    }
    public function get (Request $request){

        $detailSale= detail_of_the_sale::all();

        return response()->json([
            'status' => '200',
            'message' => 'Consulta con exito',
            "result"=> $detailSale
        ]);
    }

    public function update(Request $request){

        $detailSale= detail_of_the_sale::findOrFail($request->id);
        $detailSale->update([
            "quantity"=> $request->quantity, 
            "total"=> $request->total, 
            "IVA"=> $request->IVA, 
            "sale_id"=> $request->sale_id
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'Actualizado correctamente'
        ]);
    }

    public function delete(Request $request){

        $detailSale= detail_of_the_sale::findOrFail($request->id);
        $detailSale->delete();

        return response()->json([
            'status' => '200',
            'message' => 'Eliminado correctamente'
        ]);
    }
    
    public function getDataById(Request $request){

        $detailSale= detail_of_the_sale::where('id', $request->id)->get();
        return response()->json([
            'status' => '200',
            'message' => 'Consulta con exito',
            "result"=> $detailSale
        ]);
    }
}
