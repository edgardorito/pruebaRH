<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/data.table', 'DebtorsMasterController@dataTable');
Route::post('/data.new_DebtorMaster', 'DebtorsMasterController@store');
Route::post('/data.delete_DebtorMaster/{debtorno}', 'DebtorsMasterController@destroy');
Route::post('/errors.new_DebtorMaster', 'DebtorsMasterController@viewErrors');
