<?php

use App\Http\Resources\EmployeeResource;
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

    $start = '2023-05-01';
    $end = '2023-05-07';

    ray()->showDuplicateQueries();

    $groups = \App\Models\Group::query()
//        ->with(['employees' => function ($builder) {
//        $builder->fastPaginate(1);
//    }])
->fastPaginate();

//    return $groups;

    //    $groups->setCollection($groups->getCollection()->map(function ($groups) {
//    }));

    return $groups->setCollection(\App\Http\Resources\GroupResource::collection($groups)->getCollection());


});
