<?php

use Illuminate\Database\Seeder;

class TimetablegroupsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

    //   \DB::table('timetablegroups')->delete();
        
        \DB::table('timetablegroups')->insert(array (
            0 => 
            array (
                'id' => 1,
                'timetable_id' => '1',
                'group' => '',
                'hall' => 'LBC 100',
                'lecturer' => 'Ahmed Ahia Ogua',
                'lecturer_id' => '5',
                'capacity' => '200',
            ),
        ));
        
        
    }
}