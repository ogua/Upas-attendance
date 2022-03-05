<?php

use Illuminate\Database\Seeder;

class LecCourcesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

       // \DB::table('lec_cources')->delete();
        
        \DB::table('lec_cources')->insert(array (
            0 => 
            array (
                'id' => 1,
                'lecturer_id' => '5',
                'lec_name' => 'Ahmed Ahia Ogua',
                'course' => 'Business Management 1',
                'code' => 'BGEC100',
            ),
            1 => 
            array (
                'id' => 2,
                'lecturer_id' => '5',
                'lec_name' => 'Ahmed Ahia Ogua',
                'course' => 'Business Law ',
                'code' => 'BGEC101',
            ),
            2 => 
            array (
                'id' => 3,
                'lecturer_id' => '5',
                'lec_name' => 'Ahmed Ahia Ogua',
                'course' => 'Intro to Computer Skills',
                'code' => 'BGEC102',
            ),
            3 => 
            array (
                'id' => 4,
                'lecturer_id' => '5',
                'lec_name' => 'Ahmed Ahia Ogua',
                'course' => 'Business Statisties',
                'code' => 'BGEC103',
            ),
            4 => 
            array (
                'id' => 5,
                'lecturer_id' => '5',
                'lec_name' => 'Ahmed Ahia Ogua',
                'course' => 'Communication Skills',
                'code' => 'BGEC104',
            ),
            5 => 
            array (
                'id' => 6,
                'lecturer_id' => '5',
                'lec_name' => 'Ahmed Ahia Ogua',
                'course' => 'Business Management 11',
                'code' => 'BGEC105',
            ),
            6 => 
            array (
                'id' => 7,
                'lecturer_id' => '5',
                'lec_name' => 'Ahmed Ahia Ogua',
                'course' => 'Business Communication 1',
                'code' => 'BGEC106',
            ),
            7 => 
            array (
                'id' => 8,
                'lecturer_id' => '5',
                'lec_name' => 'Ahmed Ahia Ogua',
                'course' => 'Intro to Organisation Behaviour',
                'code' => 'BGEC107',
            ),
            8 => 
            array (
                'id' => 9,
                'lecturer_id' => '5',
                'lec_name' => 'Ahmed Ahia Ogua',
                'course' => 'Elements of Economics',
                'code' => 'BGEC108',
            ),
            9 => 
            array (
                'id' => 10,
                'lecturer_id' => '5',
                'lec_name' => 'Ahmed Ahia Ogua',
                'course' => 'Principles of Marketing',
                'code' => 'BGEC109',
            ),
            10 => 
            array (
                'id' => 11,
                'lecturer_id' => '5',
                'lec_name' => 'Ahmed Ahia Ogua',
                'course' => 'Business Communication  11',
                'code' => 'BGEC110',
            ),
            11 => 
            array (
                'id' => 12,
                'lecturer_id' => '15',
                'lec_name' => 'Toure Domingo',
                'course' => 'Economy of Ghana',
                'code' => 'BCPC203',
            ),
            12 => 
            array (
                'id' => 15,
                'lecturer_id' => '15',
                'lec_name' => 'Toure Domingo',
                'course' => 'Sales Management',
                'code' => 'BCPC207',
            ),
        ));
        
        
    }
}