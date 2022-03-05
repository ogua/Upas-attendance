<?php

use Illuminate\Database\Seeder;

class ExamresultsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

       // \DB::table('examresults')->delete();
        
        \DB::table('examresults')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => '3',
                'semester' => 'First Semester',
                'year' => '2020-2021',
                'totalgp' => '6',
                'credithours' => '15',
                'gpa' => '0.4',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => '3',
                'semester' => 'Second Semester',
                'year' => '2020-2021',
                'totalgp' => '12',
                'credithours' => '15',
                'gpa' => '0.2',
            ),
        ));
        
        
    }
}