<?php

namespace App\Http\Controllers;

use App\Http\Resources\EmployeeResource;
use App\Models\Employee;

class EmployeesController extends Controller
{
    public function index()
    {
        $employees = Employee::query()->oldest('name')
            ->where('group_id', request('group_id'))
            ->withCount('dayArrangements')
            ->withSum('dayArrangements', 'hrs')
            ->with(['dayArrangements'])
            ->fastPaginate(1)
            ->withQueryString()
            ->setPath(config('app.url').'/api/employees')
            ->appends(['group_id' => request('group_id')]);

        return $employees->setCollection(EmployeeResource::collection($employees)->getCollection());
    }
}
