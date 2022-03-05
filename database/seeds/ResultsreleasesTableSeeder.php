<?php

use Illuminate\Database\Seeder;

class ResultsreleasesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

     //   \DB::table('resultsreleases')->delete();
        
        \DB::table('resultsreleases')->insert(array (
            0 => 
            array (
                'id' => 1,
                'status' => '1',
            ),
        ));
        
        
    }
}