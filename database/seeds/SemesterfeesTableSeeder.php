<?php

use Illuminate\Database\Seeder;

class SemesterfeesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

       // \DB::table('semesterfees')->delete();
        
        \DB::table('semesterfees')->insert(array (
            0 => 
            array (
                'id' => 2,
                'level' => 'Level 100',
                'session' => 'Weekend Session',
                'fee' => 'Undergraduate Degree Weekend Fee',
                'feecode' => ' FEE102',
                'feeamount' => '2500',
                'academicyear' => '2020-2021',
            ),
            1 => 
            array (
                'id' => 3,
                'level' => 'Level 100',
                'session' => 'Morning Session',
                'fee' => 'Hostel Refundable Deposit For Damages ',
                'feecode' => ' OFEE104 ',
                'feeamount' => ' 100',
                'academicyear' => '2020-2021',
            ),
            2 => 
            array (
                'id' => 4,
                'level' => 'Level 100',
                'session' => 'Evening Session',
                'fee' => 'Hostel Refundable Deposit For Damages ',
                'feecode' => ' OFEE104 ',
                'feeamount' => ' 100',
                'academicyear' => '2020-2021',
            ),
            3 => 
            array (
                'id' => 5,
                'level' => 'Level 100',
                'session' => 'Weekend Session',
                'fee' => 'Hostel Refundable Deposit For Damages ',
                'feecode' => ' OFEE104 ',
                'feeamount' => ' 100',
                'academicyear' => '2020-2021',
            ),
            4 => 
            array (
                'id' => 6,
                'level' => 'Level 100',
                'session' => 'Morning Session',
                'fee' => 'Undergraduate Degree Morning Fee',
                'feecode' => ' FEE103',
                'feeamount' => '2000',
                'academicyear' => '2020-2021',
            ),
            5 => 
            array (
                'id' => 7,
                'level' => 'Level 100',
                'session' => 'Evening Session',
                'fee' => 'Undergraduate Degree Evening Fee',
                'feecode' => ' FEE101',
                'feeamount' => '2000',
                'academicyear' => '2020-2021',
            ),
        ));
        
        
    }
}