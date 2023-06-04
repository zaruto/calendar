<?php

namespace App\Http\Resources;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Group */
class GroupResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'day_arrangements_sum_hrs' => $this->day_arrangements_sum_hrs,
            'employees' => $this->employees(),
        ];
    }

    protected function employees()
    {
        $employees = Employee::query()->oldest('name')
            ->where('group_id', $this->id)
            ->withCount('dayArrangements')
            ->withSum('dayArrangements', 'hrs')
            ->with(['dayArrangements'])
            ->fastPaginate(4)
            ->withQueryString();

        return $employees->setCollection(EmployeeResource::collection($employees)->getCollection());
    }
}
