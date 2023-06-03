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
            'employees' => $this->employees(),
        ];
    }

    protected function employees()
    {
        $employees = Employee::query()->oldest('name')
            ->where('group_id', $this->id)
            ->with(['dayArrangements'])
            ->fastPaginate()
            ->withQueryString();

        return $employees->setCollection(EmployeeResource::collection($employees)->getCollection());
    }
}
