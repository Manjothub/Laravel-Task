<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\StudentInfo;

class StudentInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $currentTimestamp = now();

    DB::table('student_info')->insert([
        [
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'age' => '20',
            'created_at' => $currentTimestamp,
            'updated_at' => $currentTimestamp,
        ],
        [
            'name' => 'Jane Smith',
            'email' => 'jane.smith@example.com',
            'age' => '22',
            'created_at' => $currentTimestamp,
            'updated_at' => $currentTimestamp,
        ],
        [
            'name' => 'Alice Johnson',
            'email' => 'alice.johnson@example.com',
            'age' => '21',
            'created_at' => $currentTimestamp,
            'updated_at' => $currentTimestamp,
        ],
        [
            'name' => 'Bob Brown',
            'email' => 'bob.brown@example.com',
            'age' => '23',
            'created_at' => $currentTimestamp,
            'updated_at' => $currentTimestamp,
        ],
        [
            'name' => 'Eva Wilson',
            'email' => 'eva.wilson@example.com',
            'age' => '24',
            'created_at' => $currentTimestamp,
            'updated_at' => $currentTimestamp,
        ],
        [
            'name' => 'Michael Clark',
            'email' => 'michael.clark@example.com',
            'age' => '25',
            'created_at' => $currentTimestamp,
            'updated_at' => $currentTimestamp,
        ],
        [
            'name' => 'Sarah Adams',
            'email' => 'sarah.adams@example.com',
            'age' => '19',
            'created_at' => $currentTimestamp,
            'updated_at' => $currentTimestamp,
        ],
        [
            'name' => 'David Lee',
            'email' => 'david.lee@example.com',
            'age' => '22',
            'created_at' => $currentTimestamp,
            'updated_at' => $currentTimestamp,
        ],
        [
            'name' => 'Emily White',
            'email' => 'emily.white@example.com',
            'age' => '20',
            'created_at' => $currentTimestamp,
            'updated_at' => $currentTimestamp,
        ],
        [
            'name' => 'Ryan Martinez',
            'email' => 'ryan.martinez@example.com',
            'age' => '21',
            'created_at' => $currentTimestamp,
            'updated_at' => $currentTimestamp,
        ],
    ]);
}


}
