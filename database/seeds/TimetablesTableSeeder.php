<?php

use Illuminate\Database\Seeder;

class TimetablesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

      //  \DB::table('timetables')->delete();
        
        \DB::table('timetables')->insert(array (
            0 => 
            array (
                'id' => 1,
                'level' => 'Level 100',
                'sesson' => 'Morning Session',
                'programme' => 'BITM',
                'coursecode' => 'BGEC109',
                'course' => 'Principles of Marketing',
                'day' => 'Monday',
                'ftime' => '06:30',
                'ttime' => '09:30',
                'semester' => 'Second Semester',
                'academicyear' => '2020-2021',
            ),
        ));
        
        
    }
}