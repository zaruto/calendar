<?php

namespace App\Http\Controllers;

use Carbon\CarbonPeriod;
use Illuminate\Support\Collection;
use Illuminate\Support\Fluent;
use Illuminate\Support\Str;

class AttendanceableController extends Controller
{
    public function index()
    {
        $groups = \App\Models\Group::query()->fastPaginate();
        return $groups->setCollection(\App\Http\Resources\GroupResource::collection($groups)->getCollection());
    }

}
