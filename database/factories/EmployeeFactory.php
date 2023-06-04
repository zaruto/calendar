<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Employee;
use App\Models\Group;
use App\Models\WorkSite;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Carbon;

class EmployeeFactory extends Factory
{
    protected $model = Employee::class;

    public function definition(): array
    {
        $desiginations = collect([
            "Creative Developer",
            "Technical Artist",
            "Sr. 3D Artist",
            "Operations Assistant",
            "Creative Director",
            "Chief Technology Officer",
            "Design Engineer",
            "Creative Designer",
            "Core Developer",
            "Lead, Design",
            "Assistant Marketing Manager",
            "Marketing & PR Strategist",
            "Frontend Architect",
            "Chief Executive Officer",
            "Product Designer",
            "Lead, Motion Designer",
            "Manager, Operations",
            "Marketing Executive",
            "3D Artist",
            "Backend Architect",
            "App Engineer",
            "Accounts Officer",
            "Senior Designer"
        ]);

        $departments = collect([
            "Technology",
            "Designing",
            "Operations",
            "Executives",
            "Marketing"
        ]);

        $name = $this->faker->name();




        return [
            'name' => $name,
            'image_url' => "https://ui-avatars.com/api/?name=$name&background=FBDEDD&color=fff",
            'department_id' => Department::factory()->create([
                ''
            ]),
            'worksite_id' => WorkSite::factory(),
            'group_id' => Group::factory(),
        ];
    }
}
