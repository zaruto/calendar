<?php

use App\Http\Resources\EmployeeResource;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Builder;
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

Route::get('/', function () {

//    $employees = Employee::query()->oldest('name')
//        ->where('group_id', 1)
//        ->withCount('dayArrangements')
//        ->withSum('dayArrangements', 'hrs')
//        ->with(['dayArrangements'])
//        ->fastPaginate(1)
//        ->withQueryString();

//    $d  = \App\Models\Department::pluck('name');

    return $employees;
});
