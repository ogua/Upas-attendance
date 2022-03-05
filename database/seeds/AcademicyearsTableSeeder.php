<?php

use Illuminate\Database\Seeder;

class AcademicyearsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        //\DB::table('academicyears')->delete();
        
        \DB::table('academicyears')->insert(array (
            0 => 
            array (
                'id' => 1,
                'acdemicyear' => '2020-2021',
                'semester' => 'First Semester',
                'status' => '0',
            ),
            1 => 
            array (
                'id' => 2,
                'acdemicyear' => '2020-2021',
                'semester' => 'Second Semester',
                'status' => '1',
            ),
            2 => 
            array (
                'id' => 3,
                'acdemicyear' => '2021-2022',
                'semester' => 'First Semester',
                'status' => '0',
            ),
            3 => 
            array (
                'id' => 4,
                'acdemicyear' => '2021-2022',
                'semester' => 'Second Semester',
                'status' => '0',
            ),
        ));
        
        
    }
}