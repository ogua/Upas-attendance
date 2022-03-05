<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        //\DB::table('courses')->delete();
        
        \DB::table('courses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Business Management 1',
                'code' => 'BGEC100',
                'credithours' => '3',
                'level' => 'Level 100',
                'program' => 'Degree',
                'type' => 'Core',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Business Law',
                'code' => 'BGEC101',
                'credithours' => '3',
                'level' => 'Level 100',
                'program' => 'Degree',
                'type' => 'Elective',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Intro to Computer Skills',
                'code' => 'BGEC102',
                'credithours' => '3',
                'level' => 'Level 100',
                'program' => 'Degree',
                'type' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Business Statisties',
                'code' => 'BGEC103',
                'credithours' => '3',
                'level' => 'Level 100',
                'program' => 'Degree',
                'type' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Communication Skills',
                'code' => 'BGEC104',
                'credithours' => '3',
                'level' => 'Level 100',
                'program' => 'Degree',
                'type' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Business Management 11',
                'code' => 'BGEC105',
                'credithours' => '3',
                'level' => 'Level 100',
                'program' => 'Degree',
                'type' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'Business Communication 1',
                'code' => 'BGEC106',
                'credithours' => '3',
                'level' => 'Level 100',
                'program' => 'Degree',
                'type' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'Intro to Organisation Behaviour',
                'code' => 'BGEC107',
                'credithours' => '3',
                'level' => 'Level 100',
                'program' => 'Degree',
                'type' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'title' => 'Elements of Economics',
                'code' => 'BGEC108',
                'credithours' => '3',
                'level' => 'Level 100',
                'program' => 'Degree',
                'type' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'title' => 'Principles of Marketing',
                'code' => 'BGEC109',
                'credithours' => '3',
                'level' => 'Level 100',
                'program' => 'Degree',
                'type' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'title' => 'Business Communication  11',
                'code' => 'BGEC110',
                'credithours' => '3',
                'level' => 'Level 100',
                'program' => 'Degree',
                'type' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'title' => 'Business Policy and Strategy 1',
                'code' => 'BCPC200',
                'credithours' => '3',
                'level' => 'Level 200',
                'program' => 'Degree',
                'type' => 'Core',
            ),
            12 => 
            array (
                'id' => 13,
                'title' => 'Business Finance',
                'code' => 'BCPC201',
                'credithours' => '3',
                'level' => 'Level 200',
                'program' => 'Degree',
                'type' => 'Core',
            ),
            13 => 
            array (
                'id' => 14,
                'title' => 'Entrepreneurship',
                'code' => 'BCPC202',
                'credithours' => '3',
                'level' => 'Level 200',
                'program' => 'Degree',
                'type' => 'Elective',
            ),
            14 => 
            array (
                'id' => 15,
                'title' => 'Economy of Ghana',
                'code' => 'BCPC203',
                'credithours' => '3',
                'level' => 'Level 200',
                'program' => 'Degree',
                'type' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'title' => 'Company Law',
                'code' => 'BCPC204',
                'credithours' => '3',
                'level' => 'Level 200',
                'program' => 'Degree',
                'type' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'title' => 'Business Policy and Strategy 11',
                'code' => 'BCPC205',
                'credithours' => '3',
                'level' => 'Level 200',
                'program' => 'Degree',
                'type' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'title' => 'Marketing Planning',
                'code' => 'BCPC206',
                'credithours' => '3',
                'level' => 'Level 200',
                'program' => 'Degree',
                'type' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'title' => 'Sales Management',
                'code' => 'BCPC207',
                'credithours' => '3',
                'level' => 'Level 200',
                'program' => 'Degree',
                'type' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'title' => 'Marketing Research',
                'code' => 'BCPC208',
                'credithours' => '3',
                'level' => 'Level 200',
                'program' => 'Degree',
                'type' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'title' => 'Human Resource Management',
                'code' => 'BCPC209',
                'credithours' => '3',
                'level' => 'Level 200',
                'program' => 'Degree',
                'type' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'title' => 'Research Methods',
                'code' => 'BACT300',
                'credithours' => '3',
                'level' => 'Level 300',
                'program' => 'Degree',
                'type' => 'Core',
            ),
            22 => 
            array (
                'id' => 23,
                'title' => 'Enterpreneurship Development',
                'code' => 'BACT301',
                'credithours' => '3',
                'level' => 'Level 300',
                'program' => 'Degree',
                'type' => 'Elective',
            ),
            23 => 
            array (
                'id' => 24,
                'title' => 'Cost Accounting',
                'code' => 'BACT302',
                'credithours' => '3',
                'level' => 'Level 300',
                'program' => 'Degree',
                'type' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'title' => 'Financial Reporting 1',
                'code' => 'BACT303',
                'credithours' => '3',
                'level' => 'Level 300',
                'program' => 'Degree',
                'type' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'title' => 'Financial Reporting 2',
                'code' => 'BACT304',
                'credithours' => '3',
                'level' => 'Level 300',
                'program' => 'Degree',
                'type' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'title' => 'Company and Partnership Law',
                'code' => 'BACT305',
                'credithours' => '3',
                'level' => 'Level 300',
                'program' => 'Degree',
                'type' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'title' => 'Management Accounting',
                'code' => 'BACT306',
                'credithours' => '3',
                'level' => 'Level 300',
                'program' => 'Degree',
                'type' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'title' => 'Taxation',
                'code' => 'BACT307',
                'credithours' => '3',
                'level' => 'Level 300',
                'program' => 'Degree',
                'type' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'title' => 'Audit & Internal Review',
                'code' => 'BACT308',
                'credithours' => '3',
                'level' => 'Level 300',
                'program' => 'Degree',
                'type' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'title' => 'Business Policy and Strategy',
                'code' => 'BBBA400',
                'credithours' => '3',
                'level' => 'Level 400',
                'program' => 'Degree',
                'type' => 'Core',
            ),
            31 => 
            array (
                'id' => 32,
                'title' => 'Coroperate Reporting 1',
                'code' => 'BBBA401',
                'credithours' => '3',
                'level' => 'Level 400',
                'program' => 'Degree',
                'type' => 'Elective',
            ),
            32 => 
            array (
                'id' => 33,
                'title' => 'Taxation & Fiscal Policy',
                'code' => 'BBBA402',
                'credithours' => '3',
                'level' => 'Level 400',
                'program' => 'Degree',
                'type' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'title' => 'Project Work',
                'code' => 'BBBA403',
                'credithours' => '6',
                'level' => 'Level 400',
                'program' => 'Degree',
                'type' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'title' => 'Internship',
                'code' => 'BBBA404',
                'credithours' => '3',
                'level' => 'Level 400',
                'program' => 'Degree',
                'type' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'title' => 'Information Management',
                'code' => 'BBBA405',
                'credithours' => '3',
                'level' => 'Level 400',
                'program' => 'Degree',
                'type' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'title' => 'Software Quality Management',
                'code' => 'BBBA406',
                'credithours' => '3',
                'level' => 'Level 400',
                'program' => 'Degree',
                'type' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'title' => 'Electronic Business',
                'code' => 'BBBA407',
                'credithours' => '3',
                'level' => 'Level 400',
                'program' => 'Degree',
                'type' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'title' => 'Mobile Web Development',
                'code' => 'BBBA408',
                'credithours' => '3',
                'level' => 'Level 400',
                'program' => 'Degree',
                'type' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'title' => 'computer & Network Security',
                'code' => 'BBBA409',
                'credithours' => '3',
                'level' => 'Level 400',
                'program' => 'Degree',
                'type' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'title' => 'Business Management Diploma',
                'code' => 'PDBA111',
                'credithours' => '2',
                'level' => 'Level 100',
                'program' => 'Diploma',
                'type' => NULL,
            ),
        ));
        
        
    }
}