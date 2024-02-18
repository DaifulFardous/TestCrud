<?php

use App\Http\Controllers\EmployeeController;
use App\Models\Company;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return
// });
Route::get('/',[EmployeeController::class, 'employees']);
Route::get('/employee/create',[EmployeeController::class, 'create']);
Route::post('/employee/store',[EmployeeController::class, 'store']);
Route::get('/employee/details/{id}',[EmployeeController::class, 'details']);
Route::get('/employee/delete/{id}',[EmployeeController::class, 'destroy']);
Route::get('/employee/edit/{id}',[EmployeeController::class, 'edit']);
Route::post('/employee/update',[EmployeeController::class, 'update']);
// Route::get('/company/cretae',function(){
//     Company::create([
//         "name"=>"Google"
//     ]);
//     Company::create([
//         "name"=>"Yahoo"
//     ]);
//     Company::create([
//         "name"=>"Microsoft"
//     ]);
//     Company::create([
//         "name"=>"Apple"
//     ]);
//     Company::create([
//         "name"=>"Meta Platforms"
//     ]);
// });