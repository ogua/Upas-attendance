<?php

use Illuminate\Database\Seeder;

class StaffTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

      //  \DB::table('staff')->delete();
        
        \DB::table('staff')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => '5',
                'role' => 'Lecturer',
                'fullname' => 'Ahmed Ahia Ogua',
                'dateofbirth' => '2021-11-22',
                'address' => 'P. o. box ts 367',
                'faculty' => 'Others',
                'gender' => 'Male',
                'religion' => 'Moslem',
                'qualification' => 'Bsc in information mngmrnt',
                'number' => '0272185091',
                'fathername' => 'ogua',
                'mothername' => 'Ahmed Mason',
                'maritalstatus' => 'Married',
                'workexperience' => 'Bsc in information mngmrnt',
                'eployid' => 'LEC1019330',
                'salarygrade' => 'Grade 2',
                'salary' => '2000',
                'acctitle' => NULL,
                'accnum' => NULL,
                'bankname' => NULL,
                'bankbranch' => NULL,
                'resumedoc' => 'Resume/jmXifWkqXJlWlKVhgd2NLj78yUBSLtqPTKvGjorC.pdf',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => '15',
                'role' => 'Front_desk_help',
                'fullname' => 'Toure Domingo',
                'dateofbirth' => '2021-11-25',
                'address' => 'P. o. box ts 367',
                'faculty' => 'Help Desk',
                'gender' => 'Male',
                'religion' => 'Moslem',
                'qualification' => 'bsc science',
                'number' => '0272185090',
                'fathername' => 'Junior Lamere',
                'mothername' => 'Ahmed Mason',
                'maritalstatus' => 'Married',
                'workexperience' => 'bsc science',
                'eployid' => 'OSMS1037870',
                'salarygrade' => 'Grade 1',
                'salary' => '1000',
                'acctitle' => NULL,
                'accnum' => NULL,
                'bankname' => NULL,
                'bankbranch' => NULL,
                'resumedoc' => NULL,
            ),
        ));
        
        
    }
}