<?php

use Illuminate\Database\Seeder;

class SubMenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        //\DB::table('sub_menus')->delete();
        
        \DB::table('sub_menus')->insert(array (
            0 => 
            array (
                'id' => 2,
                'menu_id' => '1',
                'sub_menu' => 'Admission Enquiry',
                'order' => 1,
            ),
            1 => 
            array (
                'id' => 3,
                'menu_id' => '1',
                'sub_menu' => 'Visitors Book',
                'order' => 2,
            ),
            2 => 
            array (
                'id' => 4,
                'menu_id' => '1',
                'sub_menu' => 'Phone call log',
                'order' => 3,
            ),
            3 => 
            array (
                'id' => 5,
                'menu_id' => '1',
                'sub_menu' => 'Postal Dispatch',
                'order' => 4,
            ),
            4 => 
            array (
                'id' => 6,
                'menu_id' => '1',
                'sub_menu' => 'Postal receive',
                'order' => 5,
            ),
            5 => 
            array (
                'id' => 7,
                'menu_id' => '2',
                'sub_menu' => 'Add Academic Year',
                'order' => 1,
            ),
            6 => 
            array (
                'id' => 8,
                'menu_id' => '4',
                'sub_menu' => 'Create Event',
                'order' => 1,
            ),
            7 => 
            array (
                'id' => 9,
                'menu_id' => '4',
                'sub_menu' => 'All Event',
                'order' => 2,
            ),
            8 => 
            array (
                'id' => 10,
                'menu_id' => '5',
                'sub_menu' => 'Online Admissions',
                'order' => 1,
            ),
            9 => 
            array (
                'id' => 11,
                'menu_id' => '5',
                'sub_menu' => 'Level 100',
                'order' => 2,
            ),
            10 => 
            array (
                'id' => 12,
                'menu_id' => '5',
                'sub_menu' => 'Level 200',
                'order' => 3,
            ),
            11 => 
            array (
                'id' => 13,
                'menu_id' => '5',
                'sub_menu' => 'Level 300',
                'order' => 4,
            ),
            12 => 
            array (
                'id' => 20,
                'menu_id' => '6',
                'sub_menu' => 'Confirm Admissions',
                'order' => 1,
            ),
            13 => 
            array (
                'id' => 21,
                'menu_id' => '6',
                'sub_menu' => 'All Confirmed Admission',
                'order' => 2,
            ),
            14 => 
            array (
                'id' => 22,
                'menu_id' => '10',
                'sub_menu' => 'Course Registration',
                'order' => 1,
            ),
            15 => 
            array (
                'id' => 23,
                'menu_id' => '10',
                'sub_menu' => 'My results',
                'order' => 2,
            ),
            16 => 
            array (
                'id' => 24,
                'menu_id' => '10',
                'sub_menu' => 'Timetable',
                'order' => 3,
            ),
            17 => 
            array (
                'id' => 25,
                'menu_id' => '10',
                'sub_menu' => 'All Support Tickets',
                'order' => 4,
            ),
            18 => 
            array (
                'id' => 26,
                'menu_id' => '10',
                'sub_menu' => 'Create New Ticket',
                'order' => 5,
            ),
            19 => 
            array (
                'id' => 27,
                'menu_id' => '10',
                'sub_menu' => 'Online Polls',
                'order' => 6,
            ),
            20 => 
            array (
                'id' => 28,
                'menu_id' => '10',
                'sub_menu' => 'View Polls Results',
                'order' => 7,
            ),
            21 => 
            array (
                'id' => 29,
                'menu_id' => '11',
                'sub_menu' => 'Profile',
                'order' => 1,
            ),
            22 => 
            array (
                'id' => 30,
                'menu_id' => '11',
                'sub_menu' => 'Enter results',
                'order' => 2,
            ),
            23 => 
            array (
                'id' => 31,
                'menu_id' => '11',
                'sub_menu' => 'Timetable',
                'order' => 3,
            ),
            24 => 
            array (
                'id' => 32,
                'menu_id' => '11',
                'sub_menu' => 'Request Leave',
                'order' => 4,
            ),
            25 => 
            array (
                'id' => 33,
                'menu_id' => '11',
                'sub_menu' => 'LMS',
                'order' => 5,
            ),
            26 => 
            array (
                'id' => 34,
                'menu_id' => '7',
                'sub_menu' => 'Admission Doc',
                'order' => 1,
            ),
            27 => 
            array (
                'id' => 35,
                'menu_id' => '8',
                'sub_menu' => 'Revert Admission',
                'order' => 1,
            ),
            28 => 
            array (
                'id' => 36,
                'menu_id' => '9',
                'sub_menu' => 'Add Student',
                'order' => 1,
            ),
            29 => 
            array (
                'id' => 37,
                'menu_id' => '37',
                'sub_menu' => 'Mandatory Fees',
                'order' => 1,
            ),
            30 => 
            array (
                'id' => 38,
                'menu_id' => '37',
                'sub_menu' => 'Other Fees',
                'order' => 2,
            ),
            31 => 
            array (
                'id' => 39,
                'menu_id' => '37',
                'sub_menu' => 'Fee Mater',
                'order' => 3,
            ),
            32 => 
            array (
                'id' => 40,
                'menu_id' => '37',
                'sub_menu' => 'View Fees',
                'order' => 4,
            ),
            33 => 
            array (
                'id' => 41,
                'menu_id' => '37',
                'sub_menu' => 'Dispatch Fees',
                'order' => 5,
            ),
            34 => 
            array (
                'id' => 42,
                'menu_id' => '37',
                'sub_menu' => 'Transactions',
                'order' => 6,
            ),
            35 => 
            array (
                'id' => 43,
                'menu_id' => '37',
                'sub_menu' => 'Student',
                'order' => 7,
            ),
            36 => 
            array (
                'id' => 44,
                'menu_id' => '38',
                'sub_menu' => 'Add Staff',
                'order' => 1,
            ),
            37 => 
            array (
                'id' => 45,
                'menu_id' => '38',
                'sub_menu' => 'All Staff',
                'order' => 2,
            ),
            38 => 
            array (
                'id' => 46,
                'menu_id' => '38',
                'sub_menu' => 'Staff Attendance',
                'order' => 3,
            ),
            39 => 
            array (
                'id' => 47,
                'menu_id' => '38',
                'sub_menu' => 'Payroll',
                'order' => 4,
            ),
            40 => 
            array (
                'id' => 48,
                'menu_id' => '38',
                'sub_menu' => 'Request Leave',
                'order' => 5,
            ),
            41 => 
            array (
                'id' => 49,
                'menu_id' => '38',
                'sub_menu' => 'Approved Leave',
                'order' => 6,
            ),
            42 => 
            array (
                'id' => 50,
                'menu_id' => '38',
                'sub_menu' => 'Lecturer Rating',
                'order' => 7,
            ),
            43 => 
            array (
                'id' => 51,
                'menu_id' => '38',
                'sub_menu' => 'Disable Staff',
                'order' => 8,
            ),
            44 => 
            array (
                'id' => 52,
                'menu_id' => '28',
                'sub_menu' => 'Add Hall',
                'order' => 1,
            ),
            45 => 
            array (
                'id' => 53,
                'menu_id' => '29',
                'sub_menu' => 'Add Timetable',
                'order' => 1,
            ),
            46 => 
            array (
                'id' => 54,
                'menu_id' => '30',
                'sub_menu' => 'Generate Timetable',
                'order' => 1,
            ),
            47 => 
            array (
                'id' => 55,
                'menu_id' => '31',
                'sub_menu' => 'Upload Timetable',
                'order' => 1,
            ),
            48 => 
            array (
                'id' => 56,
                'menu_id' => '32',
                'sub_menu' => 'Group Student',
                'order' => 1,
            ),
            49 => 
            array (
                'id' => 57,
                'menu_id' => '32',
                'sub_menu' => 'View Grouping',
                'order' => 2,
            ),
            50 => 
            array (
                'id' => 58,
                'menu_id' => '33',
                'sub_menu' => 'Release Results',
                'order' => 1,
            ),
            51 => 
            array (
                'id' => 59,
                'menu_id' => '33',
                'sub_menu' => 'Cancel Results Session',
                'order' => 3,
            ),
            52 => 
            array (
                'id' => 60,
                'menu_id' => '33',
                'sub_menu' => 'Cancel Results Student',
                'order' => 2,
            ),
            53 => 
            array (
                'id' => 61,
                'menu_id' => '34',
                'sub_menu' => 'Add Polls',
                'order' => 1,
            ),
            54 => 
            array (
                'id' => 62,
                'menu_id' => '34',
                'sub_menu' => 'Manage Polls',
                'order' => 2,
            ),
            55 => 
            array (
                'id' => 63,
                'menu_id' => '34',
                'sub_menu' => 'Manage Candidate',
                'order' => 3,
            ),
            56 => 
            array (
                'id' => 64,
                'menu_id' => '34',
                'sub_menu' => 'Release Polls Results',
                'order' => 4,
            ),
            57 => 
            array (
                'id' => 65,
                'menu_id' => '34',
                'sub_menu' => 'Polls Results',
                'order' => 5,
            ),
            58 => 
            array (
                'id' => 66,
                'menu_id' => '34',
                'sub_menu' => 'Online Polls',
                'order' => 6,
            ),
            59 => 
            array (
                'id' => 67,
                'menu_id' => '34',
                'sub_menu' => 'View Polls Results',
                'order' => 7,
            ),
            60 => 
            array (
                'id' => 68,
                'menu_id' => '39',
                'sub_menu' => 'All Support Tickets',
                'order' => 1,
            ),
            61 => 
            array (
                'id' => 69,
                'menu_id' => '39',
                'sub_menu' => 'Create New Ticket',
                'order' => 2,
            ),
            62 => 
            array (
                'id' => 70,
                'menu_id' => '36',
                'sub_menu' => 'Send Nail',
                'order' => 1,
            ),
            63 => 
            array (
                'id' => 71,
                'menu_id' => '36',
                'sub_menu' => 'Send Sms',
                'order' => 2,
            ),
            64 => 
            array (
                'id' => 72,
                'menu_id' => '35',
                'sub_menu' => 'Schedule Meeting',
                'order' => 1,
            ),
            65 => 
            array (
                'id' => 73,
                'menu_id' => '35',
                'sub_menu' => 'Staff Meeting',
                'order' => 2,
            ),
            66 => 
            array (
                'id' => 74,
                'menu_id' => '41',
                'sub_menu' => 'Add Role',
                'order' => 1,
            ),
            67 => 
            array (
                'id' => 75,
                'menu_id' => '41',
                'sub_menu' => 'Force Logout',
                'order' => 2,
            ),
            68 => 
            array (
                'id' => 81,
                'menu_id' => '18',
                'sub_menu' => 'Graduated Students',
                'order' => 1,
            ),
            69 => 
            array (
                'id' => 82,
                'menu_id' => '19',
                'sub_menu' => 'Add Fine',
                'order' => 1,
            ),
            70 => 
            array (
                'id' => 83,
                'menu_id' => '19',
                'sub_menu' => 'Fine Student',
                'order' => 2,
            ),
            71 => 
            array (
                'id' => 84,
                'menu_id' => '20',
                'sub_menu' => 'Promote Student',
                'order' => 1,
            ),
            72 => 
            array (
                'id' => 85,
                'menu_id' => '20',
                'sub_menu' => 'Graduation List',
                'order' => 2,
            ),
            73 => 
            array (
                'id' => 86,
                'menu_id' => '21',
                'sub_menu' => 'Dismiss Student',
                'order' => 1,
            ),
            74 => 
            array (
                'id' => 87,
                'menu_id' => '21',
                'sub_menu' => 'Rusticate Student',
                'order' => 2,
            ),
            75 => 
            array (
                'id' => 88,
                'menu_id' => '21',
                'sub_menu' => 'Defer Student',
                'order' => 3,
            ),
            76 => 
            array (
                'id' => 89,
                'menu_id' => '13',
                'sub_menu' => 'All Students',
                'order' => 1,
            ),
            77 => 
            array (
                'id' => 90,
                'menu_id' => '14',
                'sub_menu' => 'Student Info Level 100',
                'order' => 1,
            ),
            78 => 
            array (
                'id' => 91,
                'menu_id' => '15',
                'sub_menu' => 'Student Info Level 200',
                'order' => 1,
            ),
            79 => 
            array (
                'id' => 92,
                'menu_id' => '16',
                'sub_menu' => 'Student Info Level 300',
                'order' => 1,
            ),
            80 => 
            array (
                'id' => 93,
                'menu_id' => '17',
                'sub_menu' => 'Student Info Level 400',
                'order' => 1,
            ),
            81 => 
            array (
                'id' => 94,
                'menu_id' => '22',
                'sub_menu' => 'Add programme',
                'order' => 1,
            ),
            82 => 
            array (
                'id' => 95,
                'menu_id' => '23',
                'sub_menu' => 'Add Faculty',
                'order' => 1,
            ),
            83 => 
            array (
                'id' => 96,
                'menu_id' => '24',
                'sub_menu' => 'Add Course Degree Level 100',
                'order' => 1,
            ),
            84 => 
            array (
                'id' => 97,
                'menu_id' => '24',
                'sub_menu' => 'Add Course Degree Level 200',
                'order' => 2,
            ),
            85 => 
            array (
                'id' => 98,
                'menu_id' => '24',
                'sub_menu' => 'Add Course Degree Level 300',
                'order' => 3,
            ),
            86 => 
            array (
                'id' => 99,
                'menu_id' => '24',
                'sub_menu' => 'Add Course Degree Level 400',
                'order' => 4,
            ),
            87 => 
            array (
                'id' => 100,
                'menu_id' => '24',
                'sub_menu' => 'Add Course Diploma Level 100',
                'order' => 5,
            ),
            88 => 
            array (
                'id' => 101,
                'menu_id' => '24',
                'sub_menu' => 'Add Course Diploma Level 200',
                'order' => 6,
            ),
            89 => 
            array (
                'id' => 102,
                'menu_id' => '25',
                'sub_menu' => 'All Degree Courses',
                'order' => 1,
            ),
            90 => 
            array (
                'id' => 103,
                'menu_id' => '26',
                'sub_menu' => 'All Diploma Courses',
                'order' => 1,
            ),
            91 => 
            array (
                'id' => 104,
                'menu_id' => '27',
                'sub_menu' => 'Programs and Courses',
                'order' => 1,
            ),
        ));
        
        
    }
}