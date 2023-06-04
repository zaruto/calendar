<?php

namespace App\Http\Controllers;

use App\Http\Resources\GroupResource;
use App\Models\Group;
use Illuminate\Http\Request;

class AttendanceableController extends Controller
{
    public function index(Request $request)
    {
        $groups = Group::query()
            ->when(request()->has('group_id'), function ($query) {
                $query->where('id', request('group_id'));
            })
            ->withSum('dayArrangements', 'hrs')
            ->fastPaginate()
            ->withQueryString();

        return $groups->setCollection(GroupResource::collection($groups)->getCollection());
    }

}
