<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Designation;
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

        $groups = collect([
            "Tech Poltergeists",
            "Chaos Crew",
            "Magic Apples",
            "Epic Pixels & Potion",
            'Taliban',
            'Al-Qaeda',
        ]);

        $name = $this->faker->name();

        $images = collect([
            'https://ark.humanlot.com/generate_image_cdn?q=100&w=80&h=80&fm=webp&image_path=public%2Fimages%2Fm7kcrOO3V1gXv3Kj2H6mO2MJHOMQ1nbjlf5kgmxG.jpg&tenant_id=b35406b6-8998-4512-82a8-f83315940c6f',
            'https://ark.humanlot.com/generate_image_cdn?q=100&w=80&h=80&fm=webp&image_path=public%2Fimages%2FpTOPVQdhymYSE110nhxY1v2ykkMmTYMMl4dcvfyE.jpg&tenant_id=b35406b6-8998-4512-82a8-f83315940c6f',
            'https://ark.humanlot.com/generate_image_cdn?q=100&w=80&h=80&fm=webp&image_path=public%2Fimages%2FcxRQl7FsScCCBEeDXDzoovlg6sYa4ExNIfag3yGO.jpg&tenant_id=b35406b6-8998-4512-82a8-f83315940c6f',
            'https://ark.humanlot.com/generate_image_cdn?q=100&w=80&h=80&fm=webp&image_path=public%2Fimages%2FP2ffy3cyuLRfwgKoeiUIkDh6IEJnxa3i596aczZb.jpg&tenant_id=b35406b6-8998-4512-82a8-f83315940c6f',
            'https://ark.humanlot.com/generate_image_cdn?q=100&w=80&h=80&fm=webp&image_path=public%2Fimages%2Fmhsgv6KzGbsCxO4MOsugeN4Ply831TSLZDV2bjeN.jpg&tenant_id=b35406b6-8998-4512-82a8-f83315940c6f',
            'https://ark.humanlot.com/generate_image_cdn?q=100&w=80&h=80&fm=webp&image_path=public%2Fimages%2Fz5RtA9KKHYvbjUwVN0DdBoopPRHSwIVUBEC9TtgW.jpg&tenant_id=b35406b6-8998-4512-82a8-f83315940c6f',
            'https://ark.humanlot.com/generate_image_cdn?q=100&w=80&h=80&fm=webp&image_path=public%2Fimages%2FD5SoHF2PG9plGOgxKQ493uFWr9didNh6CCpAxJUZ.jpg&tenant_id=b35406b6-8998-4512-82a8-f83315940c6f',
            'https://ark.humanlot.com/generate_image_cdn?q=100&w=80&h=80&fm=webp&image_path=public%2Fimages%2Fz1rmzWvJc4S3HBb0AFQQHSnlijSfVOGZLHvgA7Gv.jpg&tenant_id=b35406b6-8998-4512-82a8-f83315940c6f',
            "https://ui-avatars.com/api/?name=$name&background=FBDEDD&color=fff",
        ]);



        return [
            'name' => $name,
            'image_url' => $images->random(),
            'designation_id' => Designation::factory()->create([
               'name' => $desiginations->random(),
            ]),
            'department_id' => Department::factory()->create([
                'name' => $departments->random()
            ]),
            'worksite_id' => WorkSite::factory()->create([
                'name' =>  'The loopcraft'
            ]),
            'group_id' => Group::factory()->create([
               'name' => $groups->random()
            ]),
        ];
    }
}
