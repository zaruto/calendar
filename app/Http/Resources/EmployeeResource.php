<?php

namespace App\Http\Resources;

use App\Models\Employee;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Collection;
use Illuminate\Support\Fluent;

/** @mixin Employee */
class EmployeeResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        $days = collect(CarbonPeriod::create('2023-05-01', '2023-05-31'))->count();

        return [
            'id' => $this->id,
            'department_id' => $this->department_id,
            'designation_id' => $this->designation_id,
            'worksite_id' => $this->worksite_id,
            'group_id' => $this->group_id,
            'name' => $this->name,
            'missing_days' => $days - $this->day_arrangements_count,
            'image_url' => $this->image_url,
            'desigination' => $this->designation,
            'day_arrangements_sum_hrs' => $this->day_arrangements_sum_hrs,
            'shifts' => $this->fillOffDaysWhereShiftsMissing(CarbonPeriod::create('2023-05-01', '2023-05-31'), collect($this->id), $this->attendanceables()),
        ];
    }

    protected function attendanceables(): Collection
    {
        return $this->dayArrangements()
            ->whereBetween('date', ['2023-05-01', '2023-05-31'])
            ->select(['id', 'date', 'start_time', 'end_time', 'employee_id','name', 'color', 'is_offday'])
            ->oldest('date')
            ->oldest('start_time')
            ->get()
            ->groupBy(['employee_id', fn($data) => $data['date']]);

    }

    public function fillOffDaysWhereShiftsMissing(CarbonPeriod $period, Collection $employeeIds, Collection $attendances): Collection
    {
        return collect($period)
            ->crossJoin($employeeIds)
            ->map(function ($item) use ($attendances) {

                $date = $item[0]->format('Y-m-d');
                $employeeId = $item[1];

                return $attendances[$employeeId][$date] ?? new Fluent([
                    'date' => $date,
                    'is_offday' => 0,
                    'name' => null,
                    'employee_id' => $employeeId,
                ]);
            })
            ->flatten(1)
            ->groupBy('date')
            ->values();
    }

}
