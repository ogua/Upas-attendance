<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        //\DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Front Desk',
                'order' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Academics Year',
                'order' => 2,
            ),
            2 => 
            array (
                'id' => 4,
                'title' => 'Academic Calendar',
                'order' => 3,
            ),
            3 => 
            array (
                'id' => 5,
                'title' => 'Pre Admission',
                'order' => 4,
            ),
            4 => 
            array (
                'id' => 6,
                'title' => 'Confirm Admission',
                'order' => 5,
            ),
            5 => 
            array (
                'id' => 7,
                'title' => 'Admission Doc',
                'order' => 6,
            ),
            6 => 
            array (
                'id' => 8,
                'title' => 'Revert Admission',
                'order' => 7,
            ),
            7 => 
            array (
                'id' => 9,
                'title' => 'Add Student',
                'order' => 8,
            ),
            8 => 
            array (
                'id' => 10,
                'title' => 'Student Portal',
                'order' => 9,
            ),
            9 => 
            array (
                'id' => 11,
                'title' => 'Lecturer',
                'order' => 101,
            ),
            10 => 
            array (
                'id' => 13,
                'title' => 'All studentds',
                'order' => 102,
            ),
            11 => 
            array (
                'id' => 14,
                'title' => 'Level 100',
                'order' => 11,
            ),
            12 => 
            array (
                'id' => 15,
                'title' => 'Level 200',
                'order' => 12,
            ),
            13 => 
            array (
                'id' => 16,
                'title' => 'Level 300',
                'order' => 13,
            ),
            14 => 
            array (
                'id' => 17,
                'title' => 'Level 400',
                'order' => 14,
            ),
            15 => 
            array (
                'id' => 18,
                'title' => 'Graduated Students',
                'order' => 15,
            ),
            16 => 
            array (
                'id' => 19,
                'title' => 'Student Punishment',
                'order' => 16,
            ),
            17 => 
            array (
                'id' => 20,
                'title' => 'Student Promotion',
                'order' => 17,
            ),
            18 => 
            array (
                'id' => 21,
                'title' => 'Disable Student',
                'order' => 18,
            ),
            19 => 
            array (
                'id' => 22,
                'title' => 'Add Programme',
                'order' => 19,
            ),
            20 => 
            array (
                'id' => 23,
                'title' => 'Add Faculty',
                'order' => 20,
            ),
            21 => 
            array (
                'id' => 24,
                'title' => 'Add Course',
                'order' => 21,
            ),
            22 => 
            array (
                'id' => 25,
                'title' => 'All Degree',
                'order' => 22,
            ),
            23 => 
            array (
                'id' => 26,
                'title' => 'All Diploma',
                'order' => 23,
            ),
            24 => 
            array (
                'id' => 27,
                'title' => 'Programmes and Courses',
                'order' => 24,
            ),
            25 => 
            array (
                'id' => 28,
                'title' => 'Add Hall',
                'order' => 25,
            ),
            26 => 
            array (
                'id' => 29,
                'title' => 'Add Timetable',
                'order' => 26,
            ),
            27 => 
            array (
                'id' => 30,
                'title' => 'Generate Timetable',
                'order' => 27,
            ),
            28 => 
            array (
                'id' => 31,
                'title' => 'Upload Timetable',
                'order' => 28,
            ),
            29 => 
            array (
                'id' => 32,
                'title' => 'Student Grouping',
                'order' => 29,
            ),
            30 => 
            array (
                'id' => 33,
                'title' => 'Results Management',
                'order' => 30,
            ),
            31 => 
            array (
                'id' => 34,
                'title' => 'Polls Management',
                'order' => 31,
            ),
            32 => 
            array (
                'id' => 35,
                'title' => 'Online Meetings',
                'order' => 32,
            ),
            33 => 
            array (
                'id' => 36,
                'title' => 'Communicate',
                'order' => 33,
            ),
            34 => 
            array (
                'id' => 37,
                'title' => 'Accounts',
                'order' => 34,
            ),
            35 => 
            array (
                'id' => 38,
                'title' => 'Human Resource',
                'order' => 35,
            ),
            36 => 
            array (
                'id' => 39,
                'title' => 'Support Tickets',
                'order' => 36,
            ),
            37 => 
            array (
                'id' => 41,
                'title' => 'User Management',
                'order' => 37,
            ),
        ));
        
        
    }
}