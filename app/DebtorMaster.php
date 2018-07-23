<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class DebtorMaster extends Model
{
  public $timestamps = false;
  // protected $table = "debtorsmaster";
  // protected $fillable = ['debtorno','name','address1','address2','address3','address4','address5','address6','taxref','salesmancode'];

    public function saveDebtorMaster($r)
    {
        $debtorMasterArray = array(
            'debtorno' => mb_convert_case($r->debtorno, MB_CASE_UPPER),
            'name' => mb_convert_case($r->debtorno, MB_CASE_UPPER),
            'address1' => mb_convert_case($r->address1, MB_CASE_UPPER),
            'address2' => mb_convert_case($r->address2, MB_CASE_UPPER),
            'address3' => mb_convert_case($r->address3, MB_CASE_UPPER),
            'address4' => mb_convert_case($r->address4, MB_CASE_UPPER),
            'address5' => mb_convert_case($r->address5, MB_CASE_UPPER),
            'address6' => mb_convert_case($r->address6, MB_CASE_UPPER),
            'taxref' => mb_convert_case($r->taxref, MB_CASE_UPPER),
            'salesmancode' => mb_convert_case($r->salesmancode, MB_CASE_UPPER)
            );
        
            $exist =  $this->existDebtorno($r->debtorno);

           if ($exist) {
             $idDebtorMaster = DB::table('debtorsmaster')
             ->insert($debtorMasterArray);
             return true;
           }else{
             return false;
           }
            
     
    }

    private function existDebtorno($debtorno)
    {
      $debtornoBD = DB::table('debtorsmaster')
      ->where('debtorno',$debtorno)->pluck('debtorno')->toArray();

      if (empty($debtornoBD)) {
        return true;
      }else{
        return false;
      }
    }

    public function dataTablePagination($r)
    {

      return DB::table('debtorsmaster')
                      ->paginate(3);

    }

    public function deleteDebtorMaster($debtorno)
    {
      try {
        DB::table('debtorsmaster')->where('debtorno',$debtorno)->delete();  
         return true; 
      } catch(\Exception $e){
        return false;
      }
    }
}
