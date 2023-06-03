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

    }

    public function fillOffDaysWhereShiftsMissing(CarbonPeriod $period, Collection $employeeIds, array $attendances): Collection
    {
//        return collect($period)
//            ->crossJoin($employeeIds)
//            ->map(function ($item) use ($attendances) {
//                $date = $item[0]->format('Y-m-d');
//                $employeeId = $item[1];
//
//                return $attendances[$employeeId][$date] ?? new Fluent([
//                    'id' => Str::uuid(),
//                    'date' => $date,
//                    'employee_id' => $employeeId,
//                    'name' => 'Off day',
//                    'type' => 'off-day',
//                    'color' => '#111827',
//                ]);
//            })
//            ->flatten(1)
//            ->groupBy(['employee_id', fn($data) => $data['date']]);
    }
}
