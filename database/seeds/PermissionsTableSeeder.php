<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

       // \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 6,
                'name' => 'view Front Desk',
                'guard_name' => 'web',
            ),
            1 => 
            array (
                'id' => 7,
                'name' => 'view Admission Enquiry',
                'guard_name' => 'web',
            ),
            2 => 
            array (
                'id' => 8,
                'name' => 'create Admission Enquiry',
                'guard_name' => 'web',
            ),
            3 => 
            array (
                'id' => 9,
                'name' => 'edit Admission Enquiry',
                'guard_name' => 'web',
            ),
            4 => 
            array (
                'id' => 10,
                'name' => 'delete Admission Enquiry',
                'guard_name' => 'web',
            ),
            5 => 
            array (
                'id' => 11,
                'name' => 'view Visitors Book',
                'guard_name' => 'web',
            ),
            6 => 
            array (
                'id' => 12,
                'name' => 'create Visitors Book',
                'guard_name' => 'web',
            ),
            7 => 
            array (
                'id' => 13,
                'name' => 'edit Visitors Book',
                'guard_name' => 'web',
            ),
            8 => 
            array (
                'id' => 14,
                'name' => 'delete Visitors Book',
                'guard_name' => 'web',
            ),
            9 => 
            array (
                'id' => 15,
                'name' => 'view Phone call log',
                'guard_name' => 'web',
            ),
            10 => 
            array (
                'id' => 16,
                'name' => 'create Phone call log',
                'guard_name' => 'web',
            ),
            11 => 
            array (
                'id' => 17,
                'name' => 'edit Phone call log',
                'guard_name' => 'web',
            ),
            12 => 
            array (
                'id' => 18,
                'name' => 'delete Phone call log',
                'guard_name' => 'web',
            ),
            13 => 
            array (
                'id' => 19,
                'name' => 'view Postal Dispatch',
                'guard_name' => 'web',
            ),
            14 => 
            array (
                'id' => 20,
                'name' => 'create Postal Dispatch',
                'guard_name' => 'web',
            ),
            15 => 
            array (
                'id' => 21,
                'name' => 'edit Postal Dispatch',
                'guard_name' => 'web',
            ),
            16 => 
            array (
                'id' => 22,
                'name' => 'delete Postal Dispatch',
                'guard_name' => 'web',
            ),
            17 => 
            array (
                'id' => 23,
                'name' => 'view Postal receive',
                'guard_name' => 'web',
            ),
            18 => 
            array (
                'id' => 24,
                'name' => 'create Postal receive',
                'guard_name' => 'web',
            ),
            19 => 
            array (
                'id' => 25,
                'name' => 'edit Postal receive',
                'guard_name' => 'web',
            ),
            20 => 
            array (
                'id' => 26,
                'name' => 'delete Postal receive',
                'guard_name' => 'web',
            ),
            21 => 
            array (
                'id' => 27,
                'name' => 'view Academics Year',
                'guard_name' => 'web',
            ),
            22 => 
            array (
                'id' => 28,
                'name' => 'view Add Academic Year',
                'guard_name' => 'web',
            ),
            23 => 
            array (
                'id' => 29,
                'name' => 'create Add Academic Year',
                'guard_name' => 'web',
            ),
            24 => 
            array (
                'id' => 30,
                'name' => 'edit Add Academic Year',
                'guard_name' => 'web',
            ),
            25 => 
            array (
                'id' => 31,
                'name' => 'delete Add Academic Year',
                'guard_name' => 'web',
            ),
            26 => 
            array (
                'id' => 32,
                'name' => 'view Academic Calendar',
                'guard_name' => 'web',
            ),
            27 => 
            array (
                'id' => 33,
                'name' => 'view Create Event',
                'guard_name' => 'web',
            ),
            28 => 
            array (
                'id' => 34,
                'name' => 'create Create Event',
                'guard_name' => 'web',
            ),
            29 => 
            array (
                'id' => 35,
                'name' => 'edit Create Event',
                'guard_name' => 'web',
            ),
            30 => 
            array (
                'id' => 36,
                'name' => 'delete Create Event',
                'guard_name' => 'web',
            ),
            31 => 
            array (
                'id' => 37,
                'name' => 'view All Event',
                'guard_name' => 'web',
            ),
            32 => 
            array (
                'id' => 38,
                'name' => 'create All Event',
                'guard_name' => 'web',
            ),
            33 => 
            array (
                'id' => 39,
                'name' => 'edit All Event',
                'guard_name' => 'web',
            ),
            34 => 
            array (
                'id' => 40,
                'name' => 'delete All Event',
                'guard_name' => 'web',
            ),
            35 => 
            array (
                'id' => 41,
                'name' => 'view Pre Admission',
                'guard_name' => 'web',
            ),
            36 => 
            array (
                'id' => 42,
                'name' => 'view Online Admissions',
                'guard_name' => 'web',
            ),
            37 => 
            array (
                'id' => 43,
                'name' => 'create Online Admissions',
                'guard_name' => 'web',
            ),
            38 => 
            array (
                'id' => 44,
                'name' => 'edit Online Admissions',
                'guard_name' => 'web',
            ),
            39 => 
            array (
                'id' => 45,
                'name' => 'delete Online Admissions',
                'guard_name' => 'web',
            ),
            40 => 
            array (
                'id' => 46,
                'name' => 'view Level 100',
                'guard_name' => 'web',
            ),
            41 => 
            array (
                'id' => 47,
                'name' => 'create Level 100',
                'guard_name' => 'web',
            ),
            42 => 
            array (
                'id' => 48,
                'name' => 'edit Level 100',
                'guard_name' => 'web',
            ),
            43 => 
            array (
                'id' => 49,
                'name' => 'delete Level 100',
                'guard_name' => 'web',
            ),
            44 => 
            array (
                'id' => 50,
                'name' => 'view Level 200',
                'guard_name' => 'web',
            ),
            45 => 
            array (
                'id' => 51,
                'name' => 'create Level 200',
                'guard_name' => 'web',
            ),
            46 => 
            array (
                'id' => 52,
                'name' => 'edit Level 200',
                'guard_name' => 'web',
            ),
            47 => 
            array (
                'id' => 53,
                'name' => 'delete Level 200',
                'guard_name' => 'web',
            ),
            48 => 
            array (
                'id' => 54,
                'name' => 'view Level 300',
                'guard_name' => 'web',
            ),
            49 => 
            array (
                'id' => 55,
                'name' => 'create Level 300',
                'guard_name' => 'web',
            ),
            50 => 
            array (
                'id' => 56,
                'name' => 'edit Level 300',
                'guard_name' => 'web',
            ),
            51 => 
            array (
                'id' => 57,
                'name' => 'delete Level 300',
                'guard_name' => 'web',
            ),
            52 => 
            array (
                'id' => 65,
                'name' => 'view Confirm Admission',
                'guard_name' => 'web',
            ),
            53 => 
            array (
                'id' => 66,
                'name' => 'view Confirm Admissions',
                'guard_name' => 'web',
            ),
            54 => 
            array (
                'id' => 67,
                'name' => 'create Confirm Admissions',
                'guard_name' => 'web',
            ),
            55 => 
            array (
                'id' => 68,
                'name' => 'edit Confirm Admissions',
                'guard_name' => 'web',
            ),
            56 => 
            array (
                'id' => 69,
                'name' => 'delete Confirm Admissions',
                'guard_name' => 'web',
            ),
            57 => 
            array (
                'id' => 70,
                'name' => 'view All Confirmed Admission',
                'guard_name' => 'web',
            ),
            58 => 
            array (
                'id' => 71,
                'name' => 'create All Confirmed Admission',
                'guard_name' => 'web',
            ),
            59 => 
            array (
                'id' => 72,
                'name' => 'edit All Confirmed Admission',
                'guard_name' => 'web',
            ),
            60 => 
            array (
                'id' => 73,
                'name' => 'delete All Confirmed Admission',
                'guard_name' => 'web',
            ),
            61 => 
            array (
                'id' => 74,
                'name' => 'view Student Portal',
                'guard_name' => 'web',
            ),
            62 => 
            array (
                'id' => 75,
                'name' => 'view Course Registration',
                'guard_name' => 'web',
            ),
            63 => 
            array (
                'id' => 76,
                'name' => 'create Course Registration',
                'guard_name' => 'web',
            ),
            64 => 
            array (
                'id' => 77,
                'name' => 'edit Course Registration',
                'guard_name' => 'web',
            ),
            65 => 
            array (
                'id' => 78,
                'name' => 'delete Course Registration',
                'guard_name' => 'web',
            ),
            66 => 
            array (
                'id' => 79,
                'name' => 'view My results',
                'guard_name' => 'web',
            ),
            67 => 
            array (
                'id' => 80,
                'name' => 'create My results',
                'guard_name' => 'web',
            ),
            68 => 
            array (
                'id' => 81,
                'name' => 'edit My results',
                'guard_name' => 'web',
            ),
            69 => 
            array (
                'id' => 82,
                'name' => 'delete My results',
                'guard_name' => 'web',
            ),
            70 => 
            array (
                'id' => 83,
                'name' => 'view Timetable',
                'guard_name' => 'web',
            ),
            71 => 
            array (
                'id' => 84,
                'name' => 'create Timetable',
                'guard_name' => 'web',
            ),
            72 => 
            array (
                'id' => 85,
                'name' => 'edit Timetable',
                'guard_name' => 'web',
            ),
            73 => 
            array (
                'id' => 86,
                'name' => 'delete Timetable',
                'guard_name' => 'web',
            ),
            74 => 
            array (
                'id' => 87,
                'name' => 'view All Support Tickets',
                'guard_name' => 'web',
            ),
            75 => 
            array (
                'id' => 88,
                'name' => 'create All Support Tickets',
                'guard_name' => 'web',
            ),
            76 => 
            array (
                'id' => 89,
                'name' => 'edit All Support Tickets',
                'guard_name' => 'web',
            ),
            77 => 
            array (
                'id' => 90,
                'name' => 'delete All Support Tickets',
                'guard_name' => 'web',
            ),
            78 => 
            array (
                'id' => 91,
                'name' => 'view Create New Ticket',
                'guard_name' => 'web',
            ),
            79 => 
            array (
                'id' => 92,
                'name' => 'create Create New Ticket',
                'guard_name' => 'web',
            ),
            80 => 
            array (
                'id' => 93,
                'name' => 'edit Create New Ticket',
                'guard_name' => 'web',
            ),
            81 => 
            array (
                'id' => 94,
                'name' => 'delete Create New Ticket',
                'guard_name' => 'web',
            ),
            82 => 
            array (
                'id' => 95,
                'name' => 'view Online Polls',
                'guard_name' => 'web',
            ),
            83 => 
            array (
                'id' => 96,
                'name' => 'create Online Polls',
                'guard_name' => 'web',
            ),
            84 => 
            array (
                'id' => 97,
                'name' => 'edit Online Polls',
                'guard_name' => 'web',
            ),
            85 => 
            array (
                'id' => 98,
                'name' => 'delete Online Polls',
                'guard_name' => 'web',
            ),
            86 => 
            array (
                'id' => 99,
                'name' => 'view View Polls Results',
                'guard_name' => 'web',
            ),
            87 => 
            array (
                'id' => 100,
                'name' => 'create View Polls Results',
                'guard_name' => 'web',
            ),
            88 => 
            array (
                'id' => 101,
                'name' => 'edit View Polls Results',
                'guard_name' => 'web',
            ),
            89 => 
            array (
                'id' => 102,
                'name' => 'delete View Polls Results',
                'guard_name' => 'web',
            ),
            90 => 
            array (
                'id' => 103,
                'name' => 'view Lecturer',
                'guard_name' => 'web',
            ),
            91 => 
            array (
                'id' => 104,
                'name' => 'view Profile',
                'guard_name' => 'web',
            ),
            92 => 
            array (
                'id' => 105,
                'name' => 'create Profile',
                'guard_name' => 'web',
            ),
            93 => 
            array (
                'id' => 106,
                'name' => 'edit Profile',
                'guard_name' => 'web',
            ),
            94 => 
            array (
                'id' => 107,
                'name' => 'delete Profile',
                'guard_name' => 'web',
            ),
            95 => 
            array (
                'id' => 108,
                'name' => 'view Enter results',
                'guard_name' => 'web',
            ),
            96 => 
            array (
                'id' => 109,
                'name' => 'create Enter results',
                'guard_name' => 'web',
            ),
            97 => 
            array (
                'id' => 110,
                'name' => 'edit Enter results',
                'guard_name' => 'web',
            ),
            98 => 
            array (
                'id' => 111,
                'name' => 'delete Enter results',
                'guard_name' => 'web',
            ),
            99 => 
            array (
                'id' => 112,
                'name' => 'view Request Leave',
                'guard_name' => 'web',
            ),
            100 => 
            array (
                'id' => 113,
                'name' => 'create Request Leave',
                'guard_name' => 'web',
            ),
            101 => 
            array (
                'id' => 114,
                'name' => 'edit Request Leave',
                'guard_name' => 'web',
            ),
            102 => 
            array (
                'id' => 115,
                'name' => 'delete Request Leave',
                'guard_name' => 'web',
            ),
            103 => 
            array (
                'id' => 116,
                'name' => 'view LMS',
                'guard_name' => 'web',
            ),
            104 => 
            array (
                'id' => 117,
                'name' => 'create LMS',
                'guard_name' => 'web',
            ),
            105 => 
            array (
                'id' => 118,
                'name' => 'edit LMS',
                'guard_name' => 'web',
            ),
            106 => 
            array (
                'id' => 119,
                'name' => 'delete LMS',
                'guard_name' => 'web',
            ),
            107 => 
            array (
                'id' => 120,
                'name' => 'view Admission Doc',
                'guard_name' => 'web',
            ),
            108 => 
            array (
                'id' => 121,
                'name' => 'create Admission Doc',
                'guard_name' => 'web',
            ),
            109 => 
            array (
                'id' => 122,
                'name' => 'edit Admission Doc',
                'guard_name' => 'web',
            ),
            110 => 
            array (
                'id' => 123,
                'name' => 'delete Admission Doc',
                'guard_name' => 'web',
            ),
            111 => 
            array (
                'id' => 124,
                'name' => 'view Revert Admission',
                'guard_name' => 'web',
            ),
            112 => 
            array (
                'id' => 125,
                'name' => 'create Revert Admission',
                'guard_name' => 'web',
            ),
            113 => 
            array (
                'id' => 126,
                'name' => 'edit Revert Admission',
                'guard_name' => 'web',
            ),
            114 => 
            array (
                'id' => 127,
                'name' => 'delete Revert Admission',
                'guard_name' => 'web',
            ),
            115 => 
            array (
                'id' => 128,
                'name' => 'view Add Student',
                'guard_name' => 'web',
            ),
            116 => 
            array (
                'id' => 129,
                'name' => 'create Add Student',
                'guard_name' => 'web',
            ),
            117 => 
            array (
                'id' => 130,
                'name' => 'edit Add Student',
                'guard_name' => 'web',
            ),
            118 => 
            array (
                'id' => 131,
                'name' => 'delete Add Student',
                'guard_name' => 'web',
            ),
            119 => 
            array (
                'id' => 132,
                'name' => 'view Accounts',
                'guard_name' => 'web',
            ),
            120 => 
            array (
                'id' => 133,
                'name' => 'view Mandatory Fees',
                'guard_name' => 'web',
            ),
            121 => 
            array (
                'id' => 134,
                'name' => 'create Mandatory Fees',
                'guard_name' => 'web',
            ),
            122 => 
            array (
                'id' => 135,
                'name' => 'edit Mandatory Fees',
                'guard_name' => 'web',
            ),
            123 => 
            array (
                'id' => 136,
                'name' => 'delete Mandatory Fees',
                'guard_name' => 'web',
            ),
            124 => 
            array (
                'id' => 137,
                'name' => 'view Other Fees',
                'guard_name' => 'web',
            ),
            125 => 
            array (
                'id' => 138,
                'name' => 'create Other Fees',
                'guard_name' => 'web',
            ),
            126 => 
            array (
                'id' => 139,
                'name' => 'edit Other Fees',
                'guard_name' => 'web',
            ),
            127 => 
            array (
                'id' => 140,
                'name' => 'delete Other Fees',
                'guard_name' => 'web',
            ),
            128 => 
            array (
                'id' => 141,
                'name' => 'view Fee Mater',
                'guard_name' => 'web',
            ),
            129 => 
            array (
                'id' => 142,
                'name' => 'create Fee Mater',
                'guard_name' => 'web',
            ),
            130 => 
            array (
                'id' => 143,
                'name' => 'edit Fee Mater',
                'guard_name' => 'web',
            ),
            131 => 
            array (
                'id' => 144,
                'name' => 'delete Fee Mater',
                'guard_name' => 'web',
            ),
            132 => 
            array (
                'id' => 145,
                'name' => 'view View Fees',
                'guard_name' => 'web',
            ),
            133 => 
            array (
                'id' => 146,
                'name' => 'create View Fees',
                'guard_name' => 'web',
            ),
            134 => 
            array (
                'id' => 147,
                'name' => 'edit View Fees',
                'guard_name' => 'web',
            ),
            135 => 
            array (
                'id' => 148,
                'name' => 'delete View Fees',
                'guard_name' => 'web',
            ),
            136 => 
            array (
                'id' => 149,
                'name' => 'view Dispatch Fees',
                'guard_name' => 'web',
            ),
            137 => 
            array (
                'id' => 150,
                'name' => 'create Dispatch Fees',
                'guard_name' => 'web',
            ),
            138 => 
            array (
                'id' => 151,
                'name' => 'edit Dispatch Fees',
                'guard_name' => 'web',
            ),
            139 => 
            array (
                'id' => 152,
                'name' => 'delete Dispatch Fees',
                'guard_name' => 'web',
            ),
            140 => 
            array (
                'id' => 153,
                'name' => 'view Transactions',
                'guard_name' => 'web',
            ),
            141 => 
            array (
                'id' => 154,
                'name' => 'create Transactions',
                'guard_name' => 'web',
            ),
            142 => 
            array (
                'id' => 155,
                'name' => 'edit Transactions',
                'guard_name' => 'web',
            ),
            143 => 
            array (
                'id' => 156,
                'name' => 'delete Transactions',
                'guard_name' => 'web',
            ),
            144 => 
            array (
                'id' => 157,
                'name' => 'view Student',
                'guard_name' => 'web',
            ),
            145 => 
            array (
                'id' => 158,
                'name' => 'create Student',
                'guard_name' => 'web',
            ),
            146 => 
            array (
                'id' => 159,
                'name' => 'edit Student',
                'guard_name' => 'web',
            ),
            147 => 
            array (
                'id' => 160,
                'name' => 'delete Student',
                'guard_name' => 'web',
            ),
            148 => 
            array (
                'id' => 161,
                'name' => 'view Human Resource',
                'guard_name' => 'web',
            ),
            149 => 
            array (
                'id' => 162,
                'name' => 'view Add Staff',
                'guard_name' => 'web',
            ),
            150 => 
            array (
                'id' => 163,
                'name' => 'create Add Staff',
                'guard_name' => 'web',
            ),
            151 => 
            array (
                'id' => 164,
                'name' => 'edit Add Staff',
                'guard_name' => 'web',
            ),
            152 => 
            array (
                'id' => 165,
                'name' => 'delete Add Staff',
                'guard_name' => 'web',
            ),
            153 => 
            array (
                'id' => 166,
                'name' => 'view All Staff',
                'guard_name' => 'web',
            ),
            154 => 
            array (
                'id' => 167,
                'name' => 'create All Staff',
                'guard_name' => 'web',
            ),
            155 => 
            array (
                'id' => 168,
                'name' => 'edit All Staff',
                'guard_name' => 'web',
            ),
            156 => 
            array (
                'id' => 169,
                'name' => 'delete All Staff',
                'guard_name' => 'web',
            ),
            157 => 
            array (
                'id' => 170,
                'name' => 'view Staff Attendance',
                'guard_name' => 'web',
            ),
            158 => 
            array (
                'id' => 171,
                'name' => 'create Staff Attendance',
                'guard_name' => 'web',
            ),
            159 => 
            array (
                'id' => 172,
                'name' => 'edit Staff Attendance',
                'guard_name' => 'web',
            ),
            160 => 
            array (
                'id' => 173,
                'name' => 'delete Staff Attendance',
                'guard_name' => 'web',
            ),
            161 => 
            array (
                'id' => 174,
                'name' => 'view Payroll',
                'guard_name' => 'web',
            ),
            162 => 
            array (
                'id' => 175,
                'name' => 'create Payroll',
                'guard_name' => 'web',
            ),
            163 => 
            array (
                'id' => 176,
                'name' => 'edit Payroll',
                'guard_name' => 'web',
            ),
            164 => 
            array (
                'id' => 177,
                'name' => 'delete Payroll',
                'guard_name' => 'web',
            ),
            165 => 
            array (
                'id' => 178,
                'name' => 'view Approved Leave',
                'guard_name' => 'web',
            ),
            166 => 
            array (
                'id' => 179,
                'name' => 'create Approved Leave',
                'guard_name' => 'web',
            ),
            167 => 
            array (
                'id' => 180,
                'name' => 'edit Approved Leave',
                'guard_name' => 'web',
            ),
            168 => 
            array (
                'id' => 181,
                'name' => 'delete Approved Leave',
                'guard_name' => 'web',
            ),
            169 => 
            array (
                'id' => 182,
                'name' => 'view Lecturer Rating',
                'guard_name' => 'web',
            ),
            170 => 
            array (
                'id' => 183,
                'name' => 'create Lecturer Rating',
                'guard_name' => 'web',
            ),
            171 => 
            array (
                'id' => 184,
                'name' => 'edit Lecturer Rating',
                'guard_name' => 'web',
            ),
            172 => 
            array (
                'id' => 185,
                'name' => 'delete Lecturer Rating',
                'guard_name' => 'web',
            ),
            173 => 
            array (
                'id' => 186,
                'name' => 'view Disable Staff',
                'guard_name' => 'web',
            ),
            174 => 
            array (
                'id' => 187,
                'name' => 'create Disable Staff',
                'guard_name' => 'web',
            ),
            175 => 
            array (
                'id' => 188,
                'name' => 'edit Disable Staff',
                'guard_name' => 'web',
            ),
            176 => 
            array (
                'id' => 189,
                'name' => 'delete Disable Staff',
                'guard_name' => 'web',
            ),
            177 => 
            array (
                'id' => 190,
                'name' => 'view Add Hall',
                'guard_name' => 'web',
            ),
            178 => 
            array (
                'id' => 191,
                'name' => 'create Add Hall',
                'guard_name' => 'web',
            ),
            179 => 
            array (
                'id' => 192,
                'name' => 'edit Add Hall',
                'guard_name' => 'web',
            ),
            180 => 
            array (
                'id' => 193,
                'name' => 'delete Add Hall',
                'guard_name' => 'web',
            ),
            181 => 
            array (
                'id' => 194,
                'name' => 'view Add Timetable',
                'guard_name' => 'web',
            ),
            182 => 
            array (
                'id' => 195,
                'name' => 'create Add Timetable',
                'guard_name' => 'web',
            ),
            183 => 
            array (
                'id' => 196,
                'name' => 'edit Add Timetable',
                'guard_name' => 'web',
            ),
            184 => 
            array (
                'id' => 197,
                'name' => 'delete Add Timetable',
                'guard_name' => 'web',
            ),
            185 => 
            array (
                'id' => 198,
                'name' => 'view Generate Timetable',
                'guard_name' => 'web',
            ),
            186 => 
            array (
                'id' => 199,
                'name' => 'create Generate Timetable',
                'guard_name' => 'web',
            ),
            187 => 
            array (
                'id' => 200,
                'name' => 'edit Generate Timetable',
                'guard_name' => 'web',
            ),
            188 => 
            array (
                'id' => 201,
                'name' => 'delete Generate Timetable',
                'guard_name' => 'web',
            ),
            189 => 
            array (
                'id' => 202,
                'name' => 'view Upload Timetable',
                'guard_name' => 'web',
            ),
            190 => 
            array (
                'id' => 203,
                'name' => 'create Upload Timetable',
                'guard_name' => 'web',
            ),
            191 => 
            array (
                'id' => 204,
                'name' => 'edit Upload Timetable',
                'guard_name' => 'web',
            ),
            192 => 
            array (
                'id' => 205,
                'name' => 'delete Upload Timetable',
                'guard_name' => 'web',
            ),
            193 => 
            array (
                'id' => 206,
                'name' => 'view Student Grouping',
                'guard_name' => 'web',
            ),
            194 => 
            array (
                'id' => 207,
                'name' => 'view Group Student',
                'guard_name' => 'web',
            ),
            195 => 
            array (
                'id' => 208,
                'name' => 'create Group Student',
                'guard_name' => 'web',
            ),
            196 => 
            array (
                'id' => 209,
                'name' => 'edit Group Student',
                'guard_name' => 'web',
            ),
            197 => 
            array (
                'id' => 210,
                'name' => 'delete Group Student',
                'guard_name' => 'web',
            ),
            198 => 
            array (
                'id' => 211,
                'name' => 'view View Grouping',
                'guard_name' => 'web',
            ),
            199 => 
            array (
                'id' => 212,
                'name' => 'create View Grouping',
                'guard_name' => 'web',
            ),
            200 => 
            array (
                'id' => 213,
                'name' => 'edit View Grouping',
                'guard_name' => 'web',
            ),
            201 => 
            array (
                'id' => 214,
                'name' => 'delete View Grouping',
                'guard_name' => 'web',
            ),
            202 => 
            array (
                'id' => 215,
                'name' => 'view Results Management',
                'guard_name' => 'web',
            ),
            203 => 
            array (
                'id' => 216,
                'name' => 'view Release Results',
                'guard_name' => 'web',
            ),
            204 => 
            array (
                'id' => 217,
                'name' => 'create Release Results',
                'guard_name' => 'web',
            ),
            205 => 
            array (
                'id' => 218,
                'name' => 'edit Release Results',
                'guard_name' => 'web',
            ),
            206 => 
            array (
                'id' => 219,
                'name' => 'delete Release Results',
                'guard_name' => 'web',
            ),
            207 => 
            array (
                'id' => 220,
                'name' => 'view Cancel Results Session',
                'guard_name' => 'web',
            ),
            208 => 
            array (
                'id' => 221,
                'name' => 'create Cancel Results Session',
                'guard_name' => 'web',
            ),
            209 => 
            array (
                'id' => 222,
                'name' => 'edit Cancel Results Session',
                'guard_name' => 'web',
            ),
            210 => 
            array (
                'id' => 223,
                'name' => 'delete Cancel Results Session',
                'guard_name' => 'web',
            ),
            211 => 
            array (
                'id' => 224,
                'name' => 'view Cancel Results Student',
                'guard_name' => 'web',
            ),
            212 => 
            array (
                'id' => 225,
                'name' => 'create Cancel Results Student',
                'guard_name' => 'web',
            ),
            213 => 
            array (
                'id' => 226,
                'name' => 'edit Cancel Results Student',
                'guard_name' => 'web',
            ),
            214 => 
            array (
                'id' => 227,
                'name' => 'delete Cancel Results Student',
                'guard_name' => 'web',
            ),
            215 => 
            array (
                'id' => 228,
                'name' => 'view Polls Management',
                'guard_name' => 'web',
            ),
            216 => 
            array (
                'id' => 229,
                'name' => 'view Add Polls',
                'guard_name' => 'web',
            ),
            217 => 
            array (
                'id' => 230,
                'name' => 'create Add Polls',
                'guard_name' => 'web',
            ),
            218 => 
            array (
                'id' => 231,
                'name' => 'edit Add Polls',
                'guard_name' => 'web',
            ),
            219 => 
            array (
                'id' => 232,
                'name' => 'delete Add Polls',
                'guard_name' => 'web',
            ),
            220 => 
            array (
                'id' => 233,
                'name' => 'view Manage Polls',
                'guard_name' => 'web',
            ),
            221 => 
            array (
                'id' => 234,
                'name' => 'create Manage Polls',
                'guard_name' => 'web',
            ),
            222 => 
            array (
                'id' => 235,
                'name' => 'edit Manage Polls',
                'guard_name' => 'web',
            ),
            223 => 
            array (
                'id' => 236,
                'name' => 'delete Manage Polls',
                'guard_name' => 'web',
            ),
            224 => 
            array (
                'id' => 237,
                'name' => 'view Manage Candidate',
                'guard_name' => 'web',
            ),
            225 => 
            array (
                'id' => 238,
                'name' => 'create Manage Candidate',
                'guard_name' => 'web',
            ),
            226 => 
            array (
                'id' => 239,
                'name' => 'edit Manage Candidate',
                'guard_name' => 'web',
            ),
            227 => 
            array (
                'id' => 240,
                'name' => 'delete Manage Candidate',
                'guard_name' => 'web',
            ),
            228 => 
            array (
                'id' => 241,
                'name' => 'view Release Polls Results',
                'guard_name' => 'web',
            ),
            229 => 
            array (
                'id' => 242,
                'name' => 'create Release Polls Results',
                'guard_name' => 'web',
            ),
            230 => 
            array (
                'id' => 243,
                'name' => 'edit Release Polls Results',
                'guard_name' => 'web',
            ),
            231 => 
            array (
                'id' => 244,
                'name' => 'delete Release Polls Results',
                'guard_name' => 'web',
            ),
            232 => 
            array (
                'id' => 245,
                'name' => 'view Polls Results',
                'guard_name' => 'web',
            ),
            233 => 
            array (
                'id' => 246,
                'name' => 'create Polls Results',
                'guard_name' => 'web',
            ),
            234 => 
            array (
                'id' => 247,
                'name' => 'edit Polls Results',
                'guard_name' => 'web',
            ),
            235 => 
            array (
                'id' => 248,
                'name' => 'delete Polls Results',
                'guard_name' => 'web',
            ),
            236 => 
            array (
                'id' => 249,
                'name' => 'view Support Tickets',
                'guard_name' => 'web',
            ),
            237 => 
            array (
                'id' => 250,
                'name' => 'view Communicate',
                'guard_name' => 'web',
            ),
            238 => 
            array (
                'id' => 251,
                'name' => 'view Send Nail',
                'guard_name' => 'web',
            ),
            239 => 
            array (
                'id' => 252,
                'name' => 'create Send Nail',
                'guard_name' => 'web',
            ),
            240 => 
            array (
                'id' => 253,
                'name' => 'edit Send Nail',
                'guard_name' => 'web',
            ),
            241 => 
            array (
                'id' => 254,
                'name' => 'delete Send Nail',
                'guard_name' => 'web',
            ),
            242 => 
            array (
                'id' => 255,
                'name' => 'view Send Sms',
                'guard_name' => 'web',
            ),
            243 => 
            array (
                'id' => 256,
                'name' => 'create Send Sms',
                'guard_name' => 'web',
            ),
            244 => 
            array (
                'id' => 257,
                'name' => 'edit Send Sms',
                'guard_name' => 'web',
            ),
            245 => 
            array (
                'id' => 258,
                'name' => 'delete Send Sms',
                'guard_name' => 'web',
            ),
            246 => 
            array (
                'id' => 259,
                'name' => 'view Online Meetings',
                'guard_name' => 'web',
            ),
            247 => 
            array (
                'id' => 260,
                'name' => 'view Schedule Meeting',
                'guard_name' => 'web',
            ),
            248 => 
            array (
                'id' => 261,
                'name' => 'create Schedule Meeting',
                'guard_name' => 'web',
            ),
            249 => 
            array (
                'id' => 262,
                'name' => 'edit Schedule Meeting',
                'guard_name' => 'web',
            ),
            250 => 
            array (
                'id' => 263,
                'name' => 'delete Schedule Meeting',
                'guard_name' => 'web',
            ),
            251 => 
            array (
                'id' => 264,
                'name' => 'view Staff Meeting',
                'guard_name' => 'web',
            ),
            252 => 
            array (
                'id' => 265,
                'name' => 'create Staff Meeting',
                'guard_name' => 'web',
            ),
            253 => 
            array (
                'id' => 266,
                'name' => 'edit Staff Meeting',
                'guard_name' => 'web',
            ),
            254 => 
            array (
                'id' => 267,
                'name' => 'delete Staff Meeting',
                'guard_name' => 'web',
            ),
            255 => 
            array (
                'id' => 268,
                'name' => 'view User Management',
                'guard_name' => 'web',
            ),
            256 => 
            array (
                'id' => 269,
                'name' => 'view Add Role',
                'guard_name' => 'web',
            ),
            257 => 
            array (
                'id' => 270,
                'name' => 'create Add Role',
                'guard_name' => 'web',
            ),
            258 => 
            array (
                'id' => 271,
                'name' => 'edit Add Role',
                'guard_name' => 'web',
            ),
            259 => 
            array (
                'id' => 272,
                'name' => 'delete Add Role',
                'guard_name' => 'web',
            ),
            260 => 
            array (
                'id' => 273,
                'name' => 'view Force Logout',
                'guard_name' => 'web',
            ),
            261 => 
            array (
                'id' => 274,
                'name' => 'create Force Logout',
                'guard_name' => 'web',
            ),
            262 => 
            array (
                'id' => 275,
                'name' => 'edit Force Logout',
                'guard_name' => 'web',
            ),
            263 => 
            array (
                'id' => 276,
                'name' => 'delete Force Logout',
                'guard_name' => 'web',
            ),
            264 => 
            array (
                'id' => 281,
                'name' => 'view Graduated Students',
                'guard_name' => 'web',
            ),
            265 => 
            array (
                'id' => 282,
                'name' => 'create Graduated Students',
                'guard_name' => 'web',
            ),
            266 => 
            array (
                'id' => 283,
                'name' => 'edit Graduated Students',
                'guard_name' => 'web',
            ),
            267 => 
            array (
                'id' => 284,
                'name' => 'delete Graduated Students',
                'guard_name' => 'web',
            ),
            268 => 
            array (
                'id' => 285,
                'name' => 'view Student Punishment',
                'guard_name' => 'web',
            ),
            269 => 
            array (
                'id' => 286,
                'name' => 'view Add Fine',
                'guard_name' => 'web',
            ),
            270 => 
            array (
                'id' => 287,
                'name' => 'create Add Fine',
                'guard_name' => 'web',
            ),
            271 => 
            array (
                'id' => 288,
                'name' => 'edit Add Fine',
                'guard_name' => 'web',
            ),
            272 => 
            array (
                'id' => 289,
                'name' => 'delete Add Fine',
                'guard_name' => 'web',
            ),
            273 => 
            array (
                'id' => 290,
                'name' => 'view Fine Student',
                'guard_name' => 'web',
            ),
            274 => 
            array (
                'id' => 291,
                'name' => 'create Fine Student',
                'guard_name' => 'web',
            ),
            275 => 
            array (
                'id' => 292,
                'name' => 'edit Fine Student',
                'guard_name' => 'web',
            ),
            276 => 
            array (
                'id' => 293,
                'name' => 'delete Fine Student',
                'guard_name' => 'web',
            ),
            277 => 
            array (
                'id' => 294,
                'name' => 'view Student Promotion',
                'guard_name' => 'web',
            ),
            278 => 
            array (
                'id' => 295,
                'name' => 'view Promote Student',
                'guard_name' => 'web',
            ),
            279 => 
            array (
                'id' => 296,
                'name' => 'create Promote Student',
                'guard_name' => 'web',
            ),
            280 => 
            array (
                'id' => 297,
                'name' => 'edit Promote Student',
                'guard_name' => 'web',
            ),
            281 => 
            array (
                'id' => 298,
                'name' => 'delete Promote Student',
                'guard_name' => 'web',
            ),
            282 => 
            array (
                'id' => 299,
                'name' => 'view Graduation List',
                'guard_name' => 'web',
            ),
            283 => 
            array (
                'id' => 300,
                'name' => 'create Graduation List',
                'guard_name' => 'web',
            ),
            284 => 
            array (
                'id' => 301,
                'name' => 'edit Graduation List',
                'guard_name' => 'web',
            ),
            285 => 
            array (
                'id' => 302,
                'name' => 'delete Graduation List',
                'guard_name' => 'web',
            ),
            286 => 
            array (
                'id' => 303,
                'name' => 'view Disable Student',
                'guard_name' => 'web',
            ),
            287 => 
            array (
                'id' => 304,
                'name' => 'view Dismiss Student',
                'guard_name' => 'web',
            ),
            288 => 
            array (
                'id' => 305,
                'name' => 'create Dismiss Student',
                'guard_name' => 'web',
            ),
            289 => 
            array (
                'id' => 306,
                'name' => 'edit Dismiss Student',
                'guard_name' => 'web',
            ),
            290 => 
            array (
                'id' => 307,
                'name' => 'delete Dismiss Student',
                'guard_name' => 'web',
            ),
            291 => 
            array (
                'id' => 308,
                'name' => 'view Rusticate Student',
                'guard_name' => 'web',
            ),
            292 => 
            array (
                'id' => 309,
                'name' => 'create Rusticate Student',
                'guard_name' => 'web',
            ),
            293 => 
            array (
                'id' => 310,
                'name' => 'edit Rusticate Student',
                'guard_name' => 'web',
            ),
            294 => 
            array (
                'id' => 311,
                'name' => 'delete Rusticate Student',
                'guard_name' => 'web',
            ),
            295 => 
            array (
                'id' => 312,
                'name' => 'view Defer Student',
                'guard_name' => 'web',
            ),
            296 => 
            array (
                'id' => 313,
                'name' => 'create Defer Student',
                'guard_name' => 'web',
            ),
            297 => 
            array (
                'id' => 314,
                'name' => 'edit Defer Student',
                'guard_name' => 'web',
            ),
            298 => 
            array (
                'id' => 315,
                'name' => 'delete Defer Student',
                'guard_name' => 'web',
            ),
            299 => 
            array (
                'id' => 316,
                'name' => 'view All studentds',
                'guard_name' => 'web',
            ),
            300 => 
            array (
                'id' => 317,
                'name' => 'view All Students',
                'guard_name' => 'web',
            ),
            301 => 
            array (
                'id' => 318,
                'name' => 'create All Students',
                'guard_name' => 'web',
            ),
            302 => 
            array (
                'id' => 319,
                'name' => 'edit All Students',
                'guard_name' => 'web',
            ),
            303 => 
            array (
                'id' => 320,
                'name' => 'delete All Students',
                'guard_name' => 'web',
            ),
            304 => 
            array (
                'id' => 321,
                'name' => 'view Student Info Level 100',
                'guard_name' => 'web',
            ),
            305 => 
            array (
                'id' => 322,
                'name' => 'create Student Info Level 100',
                'guard_name' => 'web',
            ),
            306 => 
            array (
                'id' => 323,
                'name' => 'edit Student Info Level 100',
                'guard_name' => 'web',
            ),
            307 => 
            array (
                'id' => 324,
                'name' => 'delete Student Info Level 100',
                'guard_name' => 'web',
            ),
            308 => 
            array (
                'id' => 325,
                'name' => 'view Student Info Level 200',
                'guard_name' => 'web',
            ),
            309 => 
            array (
                'id' => 326,
                'name' => 'create Student Info Level 200',
                'guard_name' => 'web',
            ),
            310 => 
            array (
                'id' => 327,
                'name' => 'edit Student Info Level 200',
                'guard_name' => 'web',
            ),
            311 => 
            array (
                'id' => 328,
                'name' => 'delete Student Info Level 200',
                'guard_name' => 'web',
            ),
            312 => 
            array (
                'id' => 329,
                'name' => 'view Student Info Level 300',
                'guard_name' => 'web',
            ),
            313 => 
            array (
                'id' => 330,
                'name' => 'create Student Info Level 300',
                'guard_name' => 'web',
            ),
            314 => 
            array (
                'id' => 331,
                'name' => 'edit Student Info Level 300',
                'guard_name' => 'web',
            ),
            315 => 
            array (
                'id' => 332,
                'name' => 'delete Student Info Level 300',
                'guard_name' => 'web',
            ),
            316 => 
            array (
                'id' => 333,
                'name' => 'view Level 400',
                'guard_name' => 'web',
            ),
            317 => 
            array (
                'id' => 334,
                'name' => 'view Student Info Level 400',
                'guard_name' => 'web',
            ),
            318 => 
            array (
                'id' => 335,
                'name' => 'create Student Info Level 400',
                'guard_name' => 'web',
            ),
            319 => 
            array (
                'id' => 336,
                'name' => 'edit Student Info Level 400',
                'guard_name' => 'web',
            ),
            320 => 
            array (
                'id' => 337,
                'name' => 'delete Student Info Level 400',
                'guard_name' => 'web',
            ),
            321 => 
            array (
                'id' => 338,
                'name' => 'view Add Programme',
                'guard_name' => 'web',
            ),
            322 => 
            array (
                'id' => 339,
                'name' => 'create Add programme',
                'guard_name' => 'web',
            ),
            323 => 
            array (
                'id' => 340,
                'name' => 'edit Add programme',
                'guard_name' => 'web',
            ),
            324 => 
            array (
                'id' => 341,
                'name' => 'delete Add programme',
                'guard_name' => 'web',
            ),
            325 => 
            array (
                'id' => 342,
                'name' => 'view Add Faculty',
                'guard_name' => 'web',
            ),
            326 => 
            array (
                'id' => 343,
                'name' => 'create Add Faculty',
                'guard_name' => 'web',
            ),
            327 => 
            array (
                'id' => 344,
                'name' => 'edit Add Faculty',
                'guard_name' => 'web',
            ),
            328 => 
            array (
                'id' => 345,
                'name' => 'delete Add Faculty',
                'guard_name' => 'web',
            ),
            329 => 
            array (
                'id' => 346,
                'name' => 'view Add Course',
                'guard_name' => 'web',
            ),
            330 => 
            array (
                'id' => 347,
                'name' => 'view Add Course Degree Level 100',
                'guard_name' => 'web',
            ),
            331 => 
            array (
                'id' => 348,
                'name' => 'create Add Course Degree Level 100',
                'guard_name' => 'web',
            ),
            332 => 
            array (
                'id' => 349,
                'name' => 'edit Add Course Degree Level 100',
                'guard_name' => 'web',
            ),
            333 => 
            array (
                'id' => 350,
                'name' => 'delete Add Course Degree Level 100',
                'guard_name' => 'web',
            ),
            334 => 
            array (
                'id' => 351,
                'name' => 'view Add Course Degree Level 200',
                'guard_name' => 'web',
            ),
            335 => 
            array (
                'id' => 352,
                'name' => 'create Add Course Degree Level 200',
                'guard_name' => 'web',
            ),
            336 => 
            array (
                'id' => 353,
                'name' => 'edit Add Course Degree Level 200',
                'guard_name' => 'web',
            ),
            337 => 
            array (
                'id' => 354,
                'name' => 'delete Add Course Degree Level 200',
                'guard_name' => 'web',
            ),
            338 => 
            array (
                'id' => 355,
                'name' => 'view Add Course Degree Level 300',
                'guard_name' => 'web',
            ),
            339 => 
            array (
                'id' => 356,
                'name' => 'create Add Course Degree Level 300',
                'guard_name' => 'web',
            ),
            340 => 
            array (
                'id' => 357,
                'name' => 'edit Add Course Degree Level 300',
                'guard_name' => 'web',
            ),
            341 => 
            array (
                'id' => 358,
                'name' => 'delete Add Course Degree Level 300',
                'guard_name' => 'web',
            ),
            342 => 
            array (
                'id' => 359,
                'name' => 'view Add Course Degree Level 400',
                'guard_name' => 'web',
            ),
            343 => 
            array (
                'id' => 360,
                'name' => 'create Add Course Degree Level 400',
                'guard_name' => 'web',
            ),
            344 => 
            array (
                'id' => 361,
                'name' => 'edit Add Course Degree Level 400',
                'guard_name' => 'web',
            ),
            345 => 
            array (
                'id' => 362,
                'name' => 'delete Add Course Degree Level 400',
                'guard_name' => 'web',
            ),
            346 => 
            array (
                'id' => 363,
                'name' => 'view Add Course Diploma Level 100',
                'guard_name' => 'web',
            ),
            347 => 
            array (
                'id' => 364,
                'name' => 'create Add Course Diploma Level 100',
                'guard_name' => 'web',
            ),
            348 => 
            array (
                'id' => 365,
                'name' => 'edit Add Course Diploma Level 100',
                'guard_name' => 'web',
            ),
            349 => 
            array (
                'id' => 366,
                'name' => 'delete Add Course Diploma Level 100',
                'guard_name' => 'web',
            ),
            350 => 
            array (
                'id' => 367,
                'name' => 'view Add Course Diploma Level 200',
                'guard_name' => 'web',
            ),
            351 => 
            array (
                'id' => 368,
                'name' => 'create Add Course Diploma Level 200',
                'guard_name' => 'web',
            ),
            352 => 
            array (
                'id' => 369,
                'name' => 'edit Add Course Diploma Level 200',
                'guard_name' => 'web',
            ),
            353 => 
            array (
                'id' => 370,
                'name' => 'delete Add Course Diploma Level 200',
                'guard_name' => 'web',
            ),
            354 => 
            array (
                'id' => 371,
                'name' => 'view All Degree',
                'guard_name' => 'web',
            ),
            355 => 
            array (
                'id' => 372,
                'name' => 'view All Degree Courses',
                'guard_name' => 'web',
            ),
            356 => 
            array (
                'id' => 373,
                'name' => 'create All Degree Courses',
                'guard_name' => 'web',
            ),
            357 => 
            array (
                'id' => 374,
                'name' => 'edit All Degree Courses',
                'guard_name' => 'web',
            ),
            358 => 
            array (
                'id' => 375,
                'name' => 'delete All Degree Courses',
                'guard_name' => 'web',
            ),
            359 => 
            array (
                'id' => 376,
                'name' => 'view All Diploma',
                'guard_name' => 'web',
            ),
            360 => 
            array (
                'id' => 377,
                'name' => 'view All Diploma Courses',
                'guard_name' => 'web',
            ),
            361 => 
            array (
                'id' => 378,
                'name' => 'create All Diploma Courses',
                'guard_name' => 'web',
            ),
            362 => 
            array (
                'id' => 379,
                'name' => 'edit All Diploma Courses',
                'guard_name' => 'web',
            ),
            363 => 
            array (
                'id' => 380,
                'name' => 'delete All Diploma Courses',
                'guard_name' => 'web',
            ),
            364 => 
            array (
                'id' => 381,
                'name' => 'view Programmes and Courses',
                'guard_name' => 'web',
            ),
            365 => 
            array (
                'id' => 382,
                'name' => 'view Programs and Courses',
                'guard_name' => 'web',
            ),
            366 => 
            array (
                'id' => 383,
                'name' => 'create Programs and Courses',
                'guard_name' => 'web',
            ),
            367 => 
            array (
                'id' => 384,
                'name' => 'edit Programs and Courses',
                'guard_name' => 'web',
            ),
            368 => 
            array (
                'id' => 385,
                'name' => 'delete Programs and Courses',
                'guard_name' => 'web',
            ),
        ));
        
        
    }
}