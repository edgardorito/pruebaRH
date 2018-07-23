<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreDebtorMaster;
use App\DebtorMaster;



class DebtorsMasterController extends Controller
{
    public function dataTable(Request $r)
    {
        $debtorMaster = new DebtorMaster;

        $debtorsMaster = $debtorMaster->dataTablePagination($r);

        // dd($debtorsMaster);

        $response=[
           'status'=> true,
           'html' => view('tables.main-table',compact('debtorsMaster'))->render()
        ];

        return response()->json($response);

    }

    public function store(StoreDebtorMaster $r)
    {

        $debtorMaster = new DebtorMaster;

        $bandera = $debtorMaster->saveDebtorMaster($r);

        if ($bandera) {
            $response =  response()
                ->json([
                    'message' => 'SUCCESS',
                    'status' => true
                ], 200);
        }else{
            $response = response()
                ->json([
                    'message' => 'ERROR',
                    'status' => 400
                ], 400);
        }

        return $response;

    }

    public function destroy($debtorno)
    {
        $debtorno = base64_decode($debtorno);

        $debtorMaster = new DebtorMaster;

        $delete = $debtorMaster->deleteDebtorMaster($debtorno);

        if ($delete) {
            $response =  response()
                ->json([
                    'message' => 'SUCCESS',
                    'status' => true
                ], 200);
        }else{
            $response = response()
                ->json([
                    'message' => 'ERROR',
                    'status' => 400
                ], 400);
        }

        return $response;

    }

    public function viewErrors(Request $r)
    {

        $errors = $r->errors['errors'];

        foreach ($errors as $error) {
            for ($i=0; $i < sizeof($error); $i++) { 
                $arrayErrors[] = $error[$i];
            }
        }
        $response=[
            'status'=> true,
            'html' => view('errors.render',compact('arrayErrors'))->render()
        ];
      
        return response()->json($response);

        
    }
}
