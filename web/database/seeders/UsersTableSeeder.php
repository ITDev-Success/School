<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Userprofile;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\User::factory()->create([
            'name'         =>   'siteadmin',
            'email'        =>   'siteadmin@gegok12.com',
            'password'     =>  bcrypt('password'),
            'mobile_no'    =>   '1230456789',
            'usergroup_id' =>   "1"
        ]);

        \App\Models\Userprofile::factory()->create([
            'user_id'       => 1,
            'usergroup_id' => 1,
            'firstname'     => 'siteadmin',
            'lastname'      => 'siteadmin',
            'profession'    => 'admin',
            'address'       => 'Madurai,Tamilnadu,India',
            'country_id'    => '7',
            'city_id'       => 31,
            'state_id'      => 24,
            'pincode'       => '625001'
        ]);

        \App\Models\User::factory()->create([
            'school_id'    =>   '1',
            'name'         =>   'schooladmin',
            'email'        =>   'admin@gegok12.com',
            'mobile_no'    =>   '2230456789',
            'usergroup_id' =>   "3"
        ]);

        $students = \App\Models\User::factory()->count(600)->create([
            'school_id'    =>   '1',
            'usergroup_id' => "6"
        ]);

        foreach ($students as $student) {
            \App\Models\Userprofile::factory()->create([
                'school_id'     => $student->school_id,
                'user_id'       => $student->id,
                'usergroup_id' => $student->usergroup_id
            ]);

            $father = \App\Models\User::factory()->create([
                'school_id'     => '1',
                'usergroup_id' => "7"
            ]);

            \App\Models\Userprofile::factory()->create([
                    'school_id'     => $student->school_id,
                    'user_id'       => $father->id,
                    'usergroup_id' => $father->usergroup_id,
                    'address'       => 'Madurai,Tamilnadu,India',
                    'pincode'       => '625001',
                    'gender'        => 'male',
                    'date_of_birth' => Carbon::now()->subYears(rand(25, 45))
            ]);

             \App\Models\StudentParentLink::factory()->create([
                    'school_id' => $student->school_id,
                    'parent_id' => $father->id,
                    'student_id' => $student->id
            ]);

            \App\Models\ParentProfile::factory()->create([
                    'school_id'     => $father->school_id,
                    'user_id'    => $father->id
            ]);

            $mother = \App\Models\User::factory()->create([
                'school_id'     => '1',
                'usergroup_id' => "7"
            ]);

            \App\Models\Userprofile::factory()->create([
                    'school_id'     => $student->school_id,
                    'user_id'       => $mother->id,
                    'usergroup_id' => $mother->usergroup_id,
                    'address'       => 'Madurai,Tamilnadu,India',
                    'pincode'       => '625001',
                    'gender'        => 'female',
                    'date_of_birth' => Carbon::now()->subYears(rand(25, 40)),
            ]);

             \App\Models\StudentParentLink::factory()->create([
                    'school_id' => $student->school_id,
                    'parent_id' => $mother->id,
                    'student_id' => $student->id
            ]);

            \App\Models\ParentProfile::factory()->create([
                    'school_id' => $mother->school_id,
                    'user_id'    => $mother->id
            ]);

            \App\Models\LibraryCard::factory()->create([
                    'school_id' => $student->school_id,
                    'user_id'  => $student->id,
            ]);
        }

        $teachers = \App\Models\User::factory()->count(60)->create([
            'school_id'    =>'1',
            'usergroup_id' => "5"
        ]);

        foreach ($teachers as $teacher) {
            \App\Models\Userprofile::factory()->create([
                    'school_id'    =>'1',
                    'user_id'=>$teacher->id,
                    'usergroup_id' => $teacher->usergroup_id,
                    'address'=>'Madurai,Tamilnadu,India',
                    'pincode'=>'625001',
                    'date_of_birth' => Carbon::now()->subYears(rand(35, 45)),
            ]);

            \App\Models\TeacherProfile::factory()->create([
                    'school_id'         => $teacher->school_id,
                    'academic_year_id'  => 1,
                    'user_id'           => $teacher->id,
                    'status'            => 1,
            ]);

               \App\Models\LibraryCard::factory()->create([
                    'school_id'  => $teacher->school_id,
                    'user_id'  => $teacher->id,
                ]);
        }

        $librarian = \App\Models\User::factory()->create([
                    'school_id'    =>   '1',
                    'name'         =>   'librarian',
                    'email'        =>   'librarian@mailinator.com',
                    'mobile_no'    =>   '2230456701',
                    'usergroup_id' =>   "8"
                  ]);

        \App\Models\Userprofile::factory()->create([
                    'school_id'     => $librarian->school_id,
                    'user_id'       => $librarian->id,
                    'usergroup_id' => $librarian->usergroup_id,
                    'firstname'     => 'librarian',
                    'lastname'      => 'librarian',
                    'profession'    => 'librarian',
                    'address'       => 'Namakkal,Tamilnadu,India',
                    'country_id'    => '7',
                    'city_id'       => '31',
                    'state_id'      => '24',
                    'pincode'       => '625001'
                    ]);

        \App\Models\TeacherProfile::factory()->create([
                    'school_id'         => $librarian->school_id,
                    'academic_year_id' => 1,
                    'user_id'           => $librarian->id,
                    'status'            => 1,
            ]);
    }
}
