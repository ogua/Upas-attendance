<?php

use Illuminate\Database\Seeder;

class MandatoryFeesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

       // \DB::table('mandatory_fees')->delete();
        
        \DB::table('mandatory_fees')->insert(array (
            0 => 
            array (
                'id' => 2,
                'title' => 'Undergraduate Degree Evening Fee',
                'feecode' => 'FEE101',
            ),
            1 => 
            array (
                'id' => 3,
                'title' => 'Undergraduate Degree Weekend Fee',
                'feecode' => 'FEE102',
            ),
            2 => 
            array (
                'id' => 4,
                'title' => 'Undergraduate Degree Morning Fee',
                'feecode' => 'FEE103',
            ),
            3 => 
            array (
                'id' => 6,
                'title' => 'Students Representative Council Dues',
                'feecode' => 'FEE104',
            ),
            4 => 
            array (
                'id' => 7,
                'title' => 'Sports Levy',
                'feecode' => 'FEE105',
            ),
            5 => 
            array (
                'id' => 8,
                'title' => 'Hostel Fund',
                'feecode' => 'FEE106',
            ),
            6 => 
            array (
                'id' => 9,
                'title' => 'Medical Levy 2',
                'feecode' => 'FEE107',
            ),
            7 => 
            array (
                'id' => 10,
                'title' => 'Utility Bill Fee',
                'feecode' => 'FEE108',
            ),
            8 => 
            array (
                'id' => 11,
                'title' => 'FACULTY DUES',
                'feecode' => 'FEE109',
            ),
            9 => 
            array (
                'id' => 12,
                'title' => 'Alumni Registration fee',
                'feecode' => 'FEE110',
            ),
            10 => 
            array (
                'id' => 16,
                'title' => 'Undergraduate Dipolma Morning Fees',
                'feecode' => 'FEE111',
            ),
            11 => 
            array (
                'id' => 17,
                'title' => 'Undergraduate Diploma Evening Fee',
                'feecode' => 'FEE112',
            ),
            12 => 
            array (
                'id' => 18,
                'title' => 'Undergraduate Diploma Weekend Fee',
                'feecode' => 'FEE113',
            ),
        ));
        
        
    }
}