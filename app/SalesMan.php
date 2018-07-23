<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesMan extends Model
{
    protected $table = "salesman";

    protected $fillable = [
                            'salesmancode','salesmanname','smantel',
                            'smanfax','commissionrate1','breakpoint',
                            'commissionrate2'];

    public function user()
    {
        return $this->belongsTo('App\DebtorMaster');
    }                            
}
