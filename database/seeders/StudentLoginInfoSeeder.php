<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\StudentLoginInfo;

class StudentLoginInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTimestamp = now();
    
        DB::table('student_login_info')->insert([
            [
                'student_id' => 1,
                'username' => 'john_doe',
                'password' => bcrypt('password123'),
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'student_id' => 2,
                'username' => 'jane_smith',
                'password' => bcrypt('password456'),
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'student_id' => 3,
                'username' => 'alice_jones',
                'password' => bcrypt('password789'),
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'student_id' => 4,
                'username' => 'bob_brown',
                'password' => bcrypt('passwordabc'),
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'student_id' => 5,
                'username' => 'emma_davis',
                'password' => bcrypt('passworddef'),
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'student_id' => 6,
                'username' => 'michael_clark',
                'password' => bcrypt('passwordghi'),
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'student_id' => 7,
                'username' => 'sarah_adams',
                'password' => bcrypt('passwordjkl'),
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'student_id' => 8,
                'username' => 'david_lee',
                'password' => bcrypt('passwordmno'),
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'student_id' => 9,
                'username' => 'ryan_martinez',
                'password' => bcrypt('passwordpqr'),
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'student_id' => 10,
                'username' => 'emily_white',
                'password' => bcrypt('passwordstu'),
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
        ]);
    }
    
}
