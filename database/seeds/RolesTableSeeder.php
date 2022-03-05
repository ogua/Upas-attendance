<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        //\DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'is_admin',
                'guard_name' => 'web',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'is_superAdmin',
                'guard_name' => 'web',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Student',
                'guard_name' => 'web',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Lecturer',
                'guard_name' => 'web',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Admission committee',
                'guard_name' => 'web',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Front_desk_help',
                'guard_name' => 'web',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Academic Committee',
                'guard_name' => 'web',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Nabco Trainee',
                'guard_name' => 'web',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'National Service',
                'guard_name' => 'web',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Accounts',
                'guard_name' => 'web',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Head Of Academics',
                'guard_name' => 'web',
            ),
            11 => 
            array (
                'id' => 14,
                'name' => 'Developer',
                'guard_name' => 'web',
            ),
            12 => 
            array (
                'id' => 15,
                'name' => 'Human Resource Manager',
                'guard_name' => 'web',
            ),
        ));
        
        
    }
}