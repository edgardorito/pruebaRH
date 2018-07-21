<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DebtorsMaster extends Controller
{
    public function dataTable(Request $r)
    {
        // $obj_tabla = new Aestructuras;
        // $datosTopEstructurasAlternas= $obj_tabla->dataForTopEstructurasAlternas($candidatoID); 
        // ,compact('datosTopEstructurasAlternas')
        $response=[
           'status'=> true,
           'html' => view('tables.main-table')->render()
        ];

        return response()->json($response);

    }
}
