<?php

use App\Models\Employees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('employees',function(Request $request){
//     return Employees::all();
// });

// Route::get('employees/{id}',function(Request $request, $employeeId){
//     return  Employees::findorFail($employeeId);
// });

// Route::get('employees','api\Employee@index');
// Route::get('employees/{id}','api\Employee@show');

Route::apiResource('employees','api\Employee')->only(['index','show']);


