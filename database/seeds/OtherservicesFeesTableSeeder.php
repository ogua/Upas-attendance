<?php

use Illuminate\Database\Seeder;

class OtherservicesFeesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

       // \DB::table('otherservices_fees')->delete();
        
        \DB::table('otherservices_fees')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Late Registration Penalty',
                'feecode' => 'OFEE100',
                'fee' => '50',
            ),
            1 => 
            array (
                'id' => 4,
                'title' => 'Post Graduate Graduation Fee',
                'feecode' => 'OFEE101',
                'fee' => '300',
            ),
            2 => 
            array (
                'id' => 5,
                'title' => 'Undergraduates and Diploma Graduation Fee',
                'feecode' => 'OFEE102',
                'fee' => '300',
            ),
            3 => 
            array (
                'id' => 6,
                'title' => 'Resit Registration -Undergraduate and Diploma',
                'feecode' => 'OFEE103',
                'fee' => '20',
            ),
            4 => 
            array (
                'id' => 7,
                'title' => 'Hostel Refundable Deposit For Damages',
                'feecode' => 'OFEE104',
                'fee' => '100',
            ),
            5 => 
            array (
                'id' => 8,
                'title' => 'Hostel Initial Electricity Credit  4 Occupants',
                'feecode' => 'OFEE105',
                'fee' => '20',
            ),
            6 => 
            array (
                'id' => 9,
                'title' => 'Correction Of Bio-data',
                'feecode' => 'OFEE106',
                'fee' => '10',
            ),
            7 => 
            array (
                'id' => 10,
                'title' => 'Transcript Fees',
                'feecode' => 'OFEE107',
                'fee' => '80',
            ),
            8 => 
            array (
                'id' => 11,
                'title' => 'Introductory Letter',
                'feecode' => 'OFEE108',
                'fee' => '10',
            ),
            9 => 
            array (
                'id' => 12,
                'title' => 'Late Return Of Academic Gown',
                'feecode' => 'OFEE109',
                'fee' => '50',
            ),
            10 => 
            array (
                'id' => 13,
                'title' => 'Letter Of Attestation',
                'feecode' => 'OFEE110',
                'fee' => '5',
            ),
            11 => 
            array (
                'id' => 14,
                'title' => 'Certification',
                'feecode' => 'OFEE111',
                'fee' => '5',
            ),
            12 => 
            array (
                'id' => 15,
                'title' => 'Alumni Registration fee',
                'feecode' => 'OFEE112',
                'fee' => '30',
            ),
            13 => 
            array (
                'id' => 16,
                'title' => 'PENALTY FOR LATE MEDICAL SCREENING',
                'feecode' => 'OFEE113',
                'fee' => '50',
            ),
            14 => 
            array (
                'id' => 17,
                'title' => 'Replacement of ID card',
                'feecode' => 'OFEE114',
                'fee' => '30',
            ),
            15 => 
            array (
                'id' => 18,
                'title' => 'LATE SUBMISSION OF INTERNSHIP PREPORT / PROJECT WORK',
                'feecode' => 'OFEE115',
                'fee' => '50',
            ),
            16 => 
            array (
                'id' => 19,
            'title' => 'Hostel Facility Fee (Local students) 4 occupants (1st semester)',
                'feecode' => 'OFEE116',
                'fee' => '1320',
            ),
            17 => 
            array (
                'id' => 20,
            'title' => 'Hostel Facility Fee (Local students) 2 occupants (1st semester)',
                'feecode' => 'OFEE117',
                'fee' => '2860',
            ),
            18 => 
            array (
                'id' => 21,
                'title' => 'Hostel Initial Electricity Credit  2 Occupants',
                'feecode' => 'OFEE118',
                'fee' => '40',
            ),
            19 => 
            array (
                'id' => 22,
                'title' => 'YAA ASANTEWAA HALL DUES',
                'feecode' => 'OFEE119',
                'fee' => '30',
            ),
            20 => 
            array (
                'id' => 23,
                'title' => 'OPOKU AMPOMAH HALL DUES',
                'feecode' => 'OFEE120',
                'fee' => '30',
            ),
            21 => 
            array (
                'id' => 24,
                'title' => 'LIBERTY HALL DUES',
                'feecode' => 'OFEE121',
                'fee' => '30',
            ),
            22 => 
            array (
                'id' => 25,
                'title' => 'MANDELA HALL DUES',
                'feecode' => 'OFEE122',
                'fee' => '39',
            ),
            23 => 
            array (
                'id' => 26,
            'title' => 'Hostel Facility Fee (Local students) 4 occupants (2nd semester)',
                'feecode' => 'OFEE123',
                'fee' => '710',
            ),
            24 => 
            array (
                'id' => 27,
            'title' => 'Hostel Facility Fee (Local students) 2 occupants (2nd semester)',
                'feecode' => 'OFEE124',
                'fee' => '1540',
            ),
            25 => 
            array (
                'id' => 28,
                'title' => 'RE-MARKING OF SCRIPT',
                'feecode' => 'OFEE125',
                'fee' => '5',
            ),
            26 => 
            array (
                'id' => 29,
                'title' => 'EXPIRED STUDENTSHIP FEES',
                'feecode' => 'OFEE126',
                'fee' => '2000',
            ),
            27 => 
            array (
                'id' => 30,
                'title' => 'EXPIRED STUDENTSHIP RESIT',
                'feecode' => 'OFEE127',
                'fee' => '20',
            ),
            28 => 
            array (
                'id' => 31,
                'title' => 'SUPPLEMENTARY RESIT-REGISTRATION',
                'feecode' => 'OFEE128',
                'fee' => '30',
            ),
        ));
        
        
    }
}