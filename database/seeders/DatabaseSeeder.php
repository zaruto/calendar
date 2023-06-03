<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\DayArrangement;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Employee;
use App\Models\Group;
use App\Models\Shift;
use App\Models\WorkSite;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        $employee = array(
            0 =>
                array(
                    'id' => 'ea899b9f-7574-4bf1-84ed-0e2255c01c94',
                    'title' => 'Abha Ibrahim Rasheed',
                    'height' => 72,
                    'avatar' => 'https://ark.humanlot.com/generate_image_cdn?q=100&w=80&h=80&fm=webp&image_path=public%2Fimages%2Fm7kcrOO3V1gXv3Kj2H6mO2MJHOMQ1nbjlf5kgmxG.jpg&tenant_id=b35406b6-8998-4512-82a8-f83315940c6f',
                    'department' => 'Technology',
                    'designation' => 'Creative Developer',
                    'supervisor_id' => '70c4ce15-2098-4ae8-832b-22c5f4443af3',
                    'reporting_person_id' => '80047c64-d56a-44ca-9c2f-9e0d244a670c',
                ),
            1 =>
                array(
                    'id' => '2979f3f7-16af-4b98-a447-a64ef522c17c',
                    'title' => 'Ahmed Visam',
                    'height' => 72,
                    'avatar' => 'https://ark.humanlot.com/generate_image_cdn?q=100&w=80&h=80&fm=webp&image_path=public%2Fimages%2FpTOPVQdhymYSE110nhxY1v2ykkMmTYMMl4dcvfyE.jpg&tenant_id=b35406b6-8998-4512-82a8-f83315940c6f',
                    'department' => 'Technology',
                    'designation' => 'Creative Developer',
                    'supervisor_id' => '75a44aaf-6dda-4158-9327-0c933bfc05a4',
                    'reporting_person_id' => 'dd67fa49-cfbf-4129-bfc4-1375bb9db876',
                ),
            2 =>
                array(
                    'id' => '742a9f09-867f-44df-8e6e-fa6e499b1d83',
                    'title' => 'Ahmed Yaish',
                    'height' => 72,
                    'avatar' => 'https://ark.humanlot.com/generate_image_cdn?q=100&w=80&h=80&fm=webp&image_path=public%2Fimages%2FcxRQl7FsScCCBEeDXDzoovlg6sYa4ExNIfag3yGO.jpg&tenant_id=b35406b6-8998-4512-82a8-f83315940c6f',
                    'department' => 'Designing',
                    'designation' => 'Technical Artist',
                    'supervisor_id' => '75a44aaf-6dda-4158-9327-0c933bfc05a4',
                    'reporting_person_id' => '75a44aaf-6dda-4158-9327-0c933bfc05a4',
                ),
            3 =>
                array(
                    'id' => 'cdab8394-2f6c-48a2-9c73-6158c563f8f3',
                    'title' => 'Aishath Leena Hussain',
                    'height' => 72,
                    'avatar' => 'https://ark.humanlot.com/generate_image_cdn?q=100&w=80&h=80&fm=webp&image_path=public%2Fimages%2FP2ffy3cyuLRfwgKoeiUIkDh6IEJnxa3i596aczZb.jpg&tenant_id=b35406b6-8998-4512-82a8-f83315940c6f',
                    'department' => 'Designing',
                    'designation' => 'Sr. 3D Artist',
                    'supervisor_id' => '81b5438f-01a5-4768-a914-17db08b87481',
                    'reporting_person_id' => '81b5438f-01a5-4768-a914-17db08b87481',
                ),
            4 =>
                array(
                    'id' => 'ea27a285-ab97-4e3a-87a6-146f443ddaa3',
                    'title' => 'Ali Midhuhath',
                    'height' => 72,
                    'avatar' => 'https://ark.humanlot.com/generate_image_cdn?q=100&w=80&h=80&fm=webp&image_path=public%2Fimages%2Fmhsgv6KzGbsCxO4MOsugeN4Ply831TSLZDV2bjeN.jpg&tenant_id=b35406b6-8998-4512-82a8-f83315940c6f',
                    'department' => 'Operations',
                    'designation' => 'Operations Assistant',
                    'supervisor_id' => '2d2d7b0c-f8ab-4c81-b6bb-901770d2fd3c',
                    'reporting_person_id' => '2f519633-67e9-4aaa-97d7-1be99de986e3',
                ),
            5 =>
                array(
                    'id' => 'cfe55c6d-98f9-4696-ad42-3da847ad1d3c',
                    'title' => 'Azuhadh Aboobakur',
                    'height' => 72,
                    'avatar' => 'https://ark.humanlot.com/generate_image_cdn?q=100&w=80&h=80&fm=webp&image_path=public%2Fimages%2Fz5RtA9KKHYvbjUwVN0DdBoopPRHSwIVUBEC9TtgW.jpg&tenant_id=b35406b6-8998-4512-82a8-f83315940c6f',
                    'department' => 'Technology',
                    'designation' => 'Creative Developer',
                    'supervisor_id' => '70c4ce15-2098-4ae8-832b-22c5f4443af3',
                    'reporting_person_id' => '9cf37a26-cc82-46d3-911d-4c330912c9c7',
                ),
            6 =>
                array(
                    'id' => '75a44aaf-6dda-4158-9327-0c933bfc05a4',
                    'title' => 'Hamid Ibrahim',
                    'height' => 72,
                    'avatar' => 'https://ark.humanlot.com/generate_image_cdn?q=100&w=80&h=80&fm=webp&image_path=public%2Fimages%2FD5SoHF2PG9plGOgxKQ493uFWr9didNh6CCpAxJUZ.jpg&tenant_id=b35406b6-8998-4512-82a8-f83315940c6f',
                    'department' => 'Executives',
                    'designation' => 'Creative Director',
                    'supervisor_id' => 'aa46098a-ca2c-4051-a067-fc495b6f4b73',
                    'reporting_person_id' => 'aa46098a-ca2c-4051-a067-fc495b6f4b73',
                ),
            7 =>
                array(
                    'id' => '70c4ce15-2098-4ae8-832b-22c5f4443af3',
                    'title' => 'Hammaadh Rasheedh',
                    'height' => 72,
                    'avatar' => 'https://ark.humanlot.com/generate_image_cdn?q=100&w=80&h=80&fm=webp&image_path=public%2Fimages%2Fz1rmzWvJc4S3HBb0AFQQHSnlijSfVOGZLHvgA7Gv.jpg&tenant_id=b35406b6-8998-4512-82a8-f83315940c6f',
                    'department' => 'Technology',
                    'designation' => 'Chief Technology Officer',
                    'supervisor_id' => 'aa46098a-ca2c-4051-a067-fc495b6f4b73',
                    'reporting_person_id' => 'aa46098a-ca2c-4051-a067-fc495b6f4b73',
                ),
            8 =>
                array(
                    'id' => 'dd67fa49-cfbf-4129-bfc4-1375bb9db876',
                    'title' => 'Hassan Shariz Rameez',
                    'height' => 72,
                    'avatar' => 'https://ark.humanlot.com/generate_image_cdn?q=100&w=80&h=80&fm=webp&image_path=public%2Fimages%2FAhbpFEp6RxqGbuBKVRbiNBaXWXQ7NrIsR1sqLSQN.jpg&tenant_id=b35406b6-8998-4512-82a8-f83315940c6f',
                    'department' => 'Technology',
                    'designation' => 'Design Engineer',
                    'supervisor_id' => '75a44aaf-6dda-4158-9327-0c933bfc05a4',
                    'reporting_person_id' => '75a44aaf-6dda-4158-9327-0c933bfc05a4',
                ),
            9 =>
                array(
                    'id' => '118738c0-cdab-4a2a-80ad-b55c826f30c5',
                    'title' => 'Ibrahim Najih',
                    'height' => 72,
                    'avatar' => 'https://ark.humanlot.com/generate_image_cdn?q=100&w=80&h=80&fm=webp&image_path=public%2Fimages%2FaD2pJFaKcneI9RqH1Ki2LqrdC4Qs80xEcZyoP85e.jpg&tenant_id=b35406b6-8998-4512-82a8-f83315940c6f',
                    'department' => 'Designing',
                    'designation' => 'Creative Designer',
                    'supervisor_id' => '81b5438f-01a5-4768-a914-17db08b87481',
                    'reporting_person_id' => '81b5438f-01a5-4768-a914-17db08b87481',
                ),
            10 =>
                array(
                    'id' => '123cf323-2f3e-4a42-91f3-aba7d29619ef',
                    'title' => 'Ismail Zaid',
                    'height' => 72,
                    'avatar' => 'https://ark.humanlot.com/generate_image_cdn?q=100&w=80&h=80&fm=webp&image_path=public%2Fimages%2FO09LHFcfvRXNP3fxwAWPSPZABeiOrvGpXyWX3L27.jpg&tenant_id=b35406b6-8998-4512-82a8-f83315940c6f',
                    'department' => 'Technology',
                    'designation' => 'Core Developer',
                    'supervisor_id' => '70c4ce15-2098-4ae8-832b-22c5f4443af3',
                    'reporting_person_id' => '70c4ce15-2098-4ae8-832b-22c5f4443af3',
                ),
            11 =>
                array(
                    'id' => '81b5438f-01a5-4768-a914-17db08b87481',
                    'title' => 'Jinan Ahmed Rasheed',
                    'height' => 72,
                    'avatar' => 'https://ark.humanlot.com/generate_image_cdn?q=100&w=80&h=80&fm=webp&image_path=public%2Fimages%2Fv64v8N808D9ToElIKykmBvm93M6T71EUZk99BXNq.jpg&tenant_id=b35406b6-8998-4512-82a8-f83315940c6f',
                    'department' => 'Designing',
                    'designation' => 'Lead, Design',
                    'supervisor_id' => 'aa46098a-ca2c-4051-a067-fc495b6f4b73',
                    'reporting_person_id' => 'aa46098a-ca2c-4051-a067-fc495b6f4b73',
                ),
            12 =>
                array(
                    'id' => '2d2d7b0c-f8ab-4c81-b6bb-901770d2fd3c',
                    'title' => 'Layana Ibrahim Fareeh',
                    'height' => 72,
                    'avatar' => 'https://ark.humanlot.com/generate_image_cdn?q=100&w=80&h=80&fm=webp&image_path=public%2Fimages%2Fy3L9EKPznFOqSY9zqsRs6ifCi5z88pUg5KGB9K7j.jpg&tenant_id=b35406b6-8998-4512-82a8-f83315940c6f',
                    'department' => 'Marketing',
                    'designation' => 'Assistant Marketing Manager',
                    'supervisor_id' => 'aa46098a-ca2c-4051-a067-fc495b6f4b73',
                    'reporting_person_id' => 'aa46098a-ca2c-4051-a067-fc495b6f4b73',
                ),
            13 =>
                array(
                    'id' => 'bfd26f8f-ad75-4469-9533-e9681c3fe5bc',
                    'title' => 'Liva Zahir',
                    'height' => 72,
                    'avatar' => NULL,
                    'department' => 'Marketing',
                    'designation' => 'Marketing & PR Strategist',
                    'supervisor_id' => '2d2d7b0c-f8ab-4c81-b6bb-901770d2fd3c',
                    'reporting_person_id' => '2d2d7b0c-f8ab-4c81-b6bb-901770d2fd3c',
                ),
            14 =>
                array(
                    'id' => '80047c64-d56a-44ca-9c2f-9e0d244a670c',
                    'title' => 'Mohamed Abdulla Naseer',
                    'height' => 72,
                    'avatar' => 'https://ark.humanlot.com/generate_image_cdn?q=100&w=80&h=80&fm=webp&image_path=public%2Fimages%2FlgSRmlrS7K7UtfkyeGIybzJSqeEXC1alMNvmpKBn.jpg&tenant_id=b35406b6-8998-4512-82a8-f83315940c6f',
                    'department' => 'Technology',
                    'designation' => 'Frontend Architect',
                    'supervisor_id' => '70c4ce15-2098-4ae8-832b-22c5f4443af3',
                    'reporting_person_id' => '70c4ce15-2098-4ae8-832b-22c5f4443af3',
                ),
            15 =>
                array(
                    'id' => '0ad45fae-7e41-420e-a742-5d2e41af4fe7',
                    'title' => 'Mohamed Riumaan Atheef',
                    'height' => 72,
                    'avatar' => NULL,
                    'department' => 'Technology',
                    'designation' => 'Creative Developer',
                    'supervisor_id' => '70c4ce15-2098-4ae8-832b-22c5f4443af3',
                    'reporting_person_id' => '70c4ce15-2098-4ae8-832b-22c5f4443af3',
                ),
            16 =>
                array(
                    'id' => 'aa46098a-ca2c-4051-a067-fc495b6f4b73',
                    'title' => 'Mohamed Samheel',
                    'height' => 72,
                    'avatar' => 'https://ark.humanlot.com/generate_image_cdn?q=100&w=80&h=80&fm=webp&image_path=public%2Fimages%2FVTFNwfKI5X2zAfKIEkWheM1atbHURwE7k2Ye7Evj.jpg&tenant_id=b35406b6-8998-4512-82a8-f83315940c6f',
                    'department' => 'Executives',
                    'designation' => 'Chief Executive Officer',
                    'supervisor_id' => NULL,
                    'reporting_person_id' => NULL,
                ),
            17 =>
                array(
                    'id' => 'da51359a-093e-4aca-a82b-55327a4ef33c',
                    'title' => 'Mohamed Asjadh Hussain',
                    'height' => 72,
                    'avatar' => 'https://ark.humanlot.com/generate_image_cdn?q=100&w=80&h=80&fm=webp&image_path=public%2Fimages%2FjAfnvJjJ76sjaRDzuoQSELknKMTgjxMp4CaABqPF.jpg&tenant_id=b35406b6-8998-4512-82a8-f83315940c6f',
                    'department' => 'Designing',
                    'designation' => 'Product Designer',
                    'supervisor_id' => 'aa46098a-ca2c-4051-a067-fc495b6f4b73',
                    'reporting_person_id' => 'aa46098a-ca2c-4051-a067-fc495b6f4b73',
                ),
            18 =>
                array(
                    'id' => 'dcce766d-7f8c-40da-868c-254bdbfc3eec',
                    'title' => 'Mohamed Naim',
                    'height' => 72,
                    'avatar' => 'https://ark.humanlot.com/generate_image_cdn?q=100&w=80&h=80&fm=webp&image_path=public%2Fimages%2FcHioiVUD8q2wlkYvRDBH1iybmx5rkH1scqBEEzae.jpg&tenant_id=b35406b6-8998-4512-82a8-f83315940c6f',
                    'department' => 'Designing',
                    'designation' => 'Lead, Motion Designer',
                    'supervisor_id' => '81b5438f-01a5-4768-a914-17db08b87481',
                    'reporting_person_id' => '81b5438f-01a5-4768-a914-17db08b87481',
                ),
            19 =>
                array(
                    'id' => '2f519633-67e9-4aaa-97d7-1be99de986e3',
                    'title' => 'Mohamed Yoosuf',
                    'height' => 72,
                    'avatar' => 'https://ark.humanlot.com/generate_image_cdn?q=100&w=80&h=80&fm=webp&image_path=public%2Fimages%2Fhzoch4zFtFFSKh01l22q8GBeR3IfCaYDCLa391tb.jpg&tenant_id=b35406b6-8998-4512-82a8-f83315940c6f',
                    'department' => 'Operations',
                    'designation' => 'Manager, Operations',
                    'supervisor_id' => '2d2d7b0c-f8ab-4c81-b6bb-901770d2fd3c',
                    'reporting_person_id' => '2d2d7b0c-f8ab-4c81-b6bb-901770d2fd3c',
                ),
            20 =>
                array(
                    'id' => 'efa1afbb-7660-4578-898c-6b49619d91e4',
                    'title' => 'Mohamed Shizan',
                    'height' => 72,
                    'avatar' => NULL,
                    'department' => 'Marketing',
                    'designation' => 'Marketing Executive',
                    'supervisor_id' => '2d2d7b0c-f8ab-4c81-b6bb-901770d2fd3c',
                    'reporting_person_id' => '2d2d7b0c-f8ab-4c81-b6bb-901770d2fd3c',
                ),
            21 =>
                array(
                    'id' => '12829f38-2c16-41a7-9a1a-e05298251e5c',
                    'title' => 'Mohamed Iman Hussain',
                    'height' => 72,
                    'avatar' => 'https://ark.humanlot.com/generate_image_cdn?q=100&w=80&h=80&fm=webp&image_path=public%2Fimages%2FecjHVSDKXI6v0Z4gbzkjjSg2b0KgxLxGSDNB6Dvs.jpg&tenant_id=b35406b6-8998-4512-82a8-f83315940c6f',
                    'department' => 'Designing',
                    'designation' => '3D Artist',
                    'supervisor_id' => '81b5438f-01a5-4768-a914-17db08b87481',
                    'reporting_person_id' => 'cdab8394-2f6c-48a2-9c73-6158c563f8f3',
                ),
            22 =>
                array(
                    'id' => '9cf37a26-cc82-46d3-911d-4c330912c9c7',
                    'title' => 'Mohamed Shamikh Rameez',
                    'height' => 72,
                    'avatar' => 'https://ark.humanlot.com/generate_image_cdn?q=100&w=80&h=80&fm=webp&image_path=public%2Fimages%2FPtFs4UnJmAew0C4lfqytLmWw7fIr9oCzueOPsx0T.jpg&tenant_id=b35406b6-8998-4512-82a8-f83315940c6f',
                    'department' => 'Technology',
                    'designation' => 'Backend Architect',
                    'supervisor_id' => '70c4ce15-2098-4ae8-832b-22c5f4443af3',
                    'reporting_person_id' => '70c4ce15-2098-4ae8-832b-22c5f4443af3',
                ),
            23 =>
                array(
                    'id' => '70e3f1ca-0a9f-4429-8509-9578e9dfae8a',
                    'title' => 'Munaz Mohamed',
                    'height' => 72,
                    'avatar' => 'https://ark.humanlot.com/generate_image_cdn?q=100&w=80&h=80&fm=webp&image_path=public%2Fimages%2F80JqWJyY5Z2LsIUZNhvYOm9WVflCiXOZlk6Z3wvp.jpg&tenant_id=b35406b6-8998-4512-82a8-f83315940c6f',
                    'department' => 'Technology',
                    'designation' => 'Creative Developer',
                    'supervisor_id' => '70c4ce15-2098-4ae8-832b-22c5f4443af3',
                    'reporting_person_id' => '123cf323-2f3e-4a42-91f3-aba7d29619ef',
                ),
            24 =>
                array(
                    'id' => '4234bb92-75d7-459a-850c-b61e986f685c',
                    'title' => 'Rayaa Waseem',
                    'height' => 72,
                    'avatar' => 'https://ark.humanlot.com/generate_image_cdn?q=100&w=80&h=80&fm=webp&image_path=public%2Fimages%2FZFbbiseDtjsma6J2qomYvbIR6zdZkyPa6z6fgxLe.jpg&tenant_id=b35406b6-8998-4512-82a8-f83315940c6f',
                    'department' => 'Technology',
                    'designation' => 'App Engineer',
                    'supervisor_id' => '70c4ce15-2098-4ae8-832b-22c5f4443af3',
                    'reporting_person_id' => '70c4ce15-2098-4ae8-832b-22c5f4443af3',
                ),
            25 =>
                array(
                    'id' => 'd0af4fbc-ccb6-4f25-85f1-3f64ad50dae5',
                    'title' => 'Saruvan Abdul Latheef',
                    'height' => 72,
                    'avatar' => NULL,
                    'department' => 'Operations',
                    'designation' => 'Accounts Officer',
                    'supervisor_id' => '2d2d7b0c-f8ab-4c81-b6bb-901770d2fd3c',
                    'reporting_person_id' => '2d2d7b0c-f8ab-4c81-b6bb-901770d2fd3c',
                ),
            26 =>
                array(
                    'id' => '3b7c9014-a5fe-42a9-adb0-9e46177cfb5b',
                    'title' => 'Yameen Hassan',
                    'height' => 72,
                    'avatar' => NULL,
                    'department' => 'Designing',
                    'designation' => 'Creative Designer',
                    'supervisor_id' => '81b5438f-01a5-4768-a914-17db08b87481',
                    'reporting_person_id' => '81b5438f-01a5-4768-a914-17db08b87481',
                ),
            27 =>
                array(
                    'id' => '95fcf114-9170-4bd4-bd69-58bb53059ff1',
                    'title' => 'Zeek Hamdhoon',
                    'height' => 72,
                    'avatar' => NULL,
                    'department' => 'Designing',
                    'designation' => 'Senior Designer',
                    'supervisor_id' => '81b5438f-01a5-4768-a914-17db08b87481',
                    'reporting_person_id' => '81b5438f-01a5-4768-a914-17db08b87481',
                ),
        );

        $groups = [
            [
                'name' => 'Tech Poltergeists',
                'slug' => 'web-devs',
            ],

            [
                'name' => 'Chaos Crew',
                'slug' => 'chaos-magic',
            ],
            [
                'name' => 'Magic Apples',
                'slug' => 'magic-apples',
            ],

            [
                'name' => 'Epic Pixels & Potion',
                'slug' => 'epic-pixels',
            ],

        ];


        Group::query()->upsert($groups, 'id');

        $worksite = WorkSite::firstOrCreate(['name' => "loopcraft", 'desc' => "loopcraft"]);

        $current_date = now();


        Shift::query()->firstOrCreate([
            'name' => 'Morning Shift',
            'color' => '#B45309',
            'start_time' => '09:00',
            'end_time' => '17:00',
//           'hrs' => Carbon::createFromFormat('Y-m-d H:i', "$current_date ".'09:00')->diffInHours(Carbon::createFromFormat('Y-m-d H:i', "$current_date ".'17:00')),
        ]);

        Shift::query()->firstOrCreate([
            'name' => 'Evening Shift',
            'color' => '#6D28D9',
            'start_time' => '12:00',
            'end_time' => '20:00',
//            'hrs' => Carbon::createFromFormat('Y-m-d H:i', "$current_date ".'12:00')->diffInHours(Carbon::createFromFormat('Y-m-d H:i', "$current_date ".'20:00')),
        ]);


        $shifts = Shift::all();


        collect($employee)->each(function ($employee) use ($worksite, $groups, $shifts) {

            $designation = Designation::firstOrCreate([
                'name' => $employee['designation'],
                'slug' => str($employee['designation'])->slug()
            ]);

            $department = Department::firstOrCreate([
                'name' => $employee['department'],
                'slug' => str($employee['department'])->slug(),
                'desc' => $employee['department'],
            ]);

            $employee = Employee::firstOrCreate([
                'name' => $employee['title'],
                'image_url' => $employee['avatar'],
                'worksite_id' => $worksite->id,
                'department_id' => $department->id,
                'designation_id' => $designation->id
            ], ['group_id' => Group::inRandomOrder()->first()?->id,]);

            $periods = CarbonPeriod::create(now()->subMonth()->startOfMonth(), now()->subMonth()->endOfMonth());

            collect($periods)->each(function (Carbon $date) use ($employee, $shifts) {

                $shift = $shifts->random();

                DayArrangement::updateOrCreate([
                    'date' => $date->toDateString(),
                    'employee_id' => $employee->id
                ], [
                    'arrangementable_type' => Shift::class,
                    'start_time' => $shift->start_time,
                    'end_time' => $shift->end_time,
                    'hrs' => Carbon::createFromFormat('Y-m-d H:i', now()->toDateString() . " " . $shift->start_time)->diffInHours(Carbon::createFromFormat('Y-m-d H:i', now()->toDateString() . " " . $shift->end_time)),
                ]);
            });

        });


    }
}
