<?php

use Illuminate\Database\Seeder;

class StudentgroupingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

      //  \DB::table('studentgroupings')->delete();
        
        \DB::table('studentgroupings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'indexnumber' => 'GES11112',
                'studentname' => 'Ahia  Ahmed',
                'year' => '2020-2021',
                'semester' => 'Second Semester',
                'lecname' => 'Ahmed Ahia Ogua',
                'lecid' => '5',
                'capacity' => '1',
                'group' => '',
                'session' => 'Morning Session',
                'coursecode' => 'BGEC100',
                'level' => 'Level 100',
                'progcode' => 'BITM',
            ),
            1 => 
            array (
                'id' => 2,
                'indexnumber' => 'GES11112',
                'studentname' => 'Ahia  Ahmed',
                'year' => '2020-2021',
                'semester' => 'Second Semester',
                'lecname' => 'Ahmed Ahia Ogua',
                'lecid' => '5',
                'capacity' => '1',
                'group' => '',
                'session' => 'Morning Session',
                'coursecode' => 'BGEC101',
                'level' => 'Level 100',
                'progcode' => 'BITM',
            ),
            2 => 
            array (
                'id' => 3,
                'indexnumber' => 'GES11112',
                'studentname' => 'Ahia  Ahmed',
                'year' => '2020-2021',
                'semester' => 'Second Semester',
                'lecname' => 'Ahmed Ahia Ogua',
                'lecid' => '5',
                'capacity' => '1',
                'group' => '',
                'session' => 'Morning Session',
                'coursecode' => 'BGEC102',
                'level' => 'Level 100',
                'progcode' => 'BITM',
            ),
            3 => 
            array (
                'id' => 4,
                'indexnumber' => 'GES11112',
                'studentname' => 'Ahia  Ahmed',
                'year' => '2020-2021',
                'semester' => 'Second Semester',
                'lecname' => 'Ahmed Ahia Ogua',
                'lecid' => '5',
                'capacity' => '1',
                'group' => '',
                'session' => 'Morning Session',
                'coursecode' => 'BGEC103',
                'level' => 'Level 100',
                'progcode' => 'BITM',
            ),
        ));
        
        
    }
}