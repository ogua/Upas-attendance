<?php

use Illuminate\Database\Seeder;

class PaystacklogsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

      //  \DB::table('paystacklogs')->delete();
        
        \DB::table('paystacklogs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'pid' => '2',
                'type' => 'action',
                'message' => 'Attempted to pay with mobile money',
                'time' => '16',
            ),
            1 => 
            array (
                'id' => 2,
                'pid' => '3',
                'type' => 'action',
                'message' => 'Attempted to pay with mobile money',
                'time' => '13',
            ),
            2 => 
            array (
                'id' => 3,
                'pid' => '3',
                'type' => 'action',
                'message' => 'Attempted to pay with mobile money',
                'time' => '23',
            ),
            3 => 
            array (
                'id' => 4,
                'pid' => '3',
                'type' => 'action',
                'message' => 'Attempted to pay with mobile money',
                'time' => '42',
            ),
            4 => 
            array (
                'id' => 5,
                'pid' => '3',
                'type' => 'action',
                'message' => 'Attempted to pay with mobile money',
                'time' => '69',
            ),
            5 => 
            array (
                'id' => 6,
                'pid' => '3',
                'type' => 'success',
                'message' => 'Successfully paid with mobile_money',
                'time' => '74',
            ),
            6 => 
            array (
                'id' => 7,
                'pid' => '4',
                'type' => 'action',
                'message' => 'Set payment method to: card',
                'time' => '6',
            ),
            7 => 
            array (
                'id' => 8,
                'pid' => '4',
                'type' => 'action',
                'message' => 'Attempted to pay with card',
                'time' => '10',
            ),
            8 => 
            array (
                'id' => 9,
                'pid' => '4',
                'type' => 'error',
                'message' => 'Error: Declined',
                'time' => '15',
            ),
            9 => 
            array (
                'id' => 10,
                'pid' => '4',
                'type' => 'action',
                'message' => 'Set payment method to: mobile_money',
                'time' => '21',
            ),
            10 => 
            array (
                'id' => 11,
                'pid' => '4',
                'type' => 'action',
                'message' => 'Attempted to pay with mobile money',
                'time' => '25',
            ),
            11 => 
            array (
                'id' => 12,
                'pid' => '4',
                'type' => 'action',
                'message' => 'Set payment method to: card',
                'time' => '39',
            ),
            12 => 
            array (
                'id' => 13,
                'pid' => '4',
                'type' => 'action',
                'message' => 'Attempted to pay with card',
                'time' => '43',
            ),
            13 => 
            array (
                'id' => 14,
                'pid' => '4',
                'type' => 'auth',
                'message' => 'Authentication Required: 3DS',
                'time' => '45',
            ),
            14 => 
            array (
                'id' => 15,
                'pid' => '4',
                'type' => 'action',
                'message' => 'Set payment method to: mobile_money',
                'time' => '52',
            ),
            15 => 
            array (
                'id' => 16,
                'pid' => '4',
                'type' => 'action',
                'message' => 'Set payment method to: card',
                'time' => '53',
            ),
            16 => 
            array (
                'id' => 17,
                'pid' => '4',
                'type' => 'input',
                'message' => 'Filled this field: card number',
                'time' => '82',
            ),
            17 => 
            array (
                'id' => 18,
                'pid' => '4',
                'type' => 'input',
                'message' => 'Filled this field: card expiry',
                'time' => '93',
            ),
            18 => 
            array (
                'id' => 19,
                'pid' => '4',
                'type' => 'input',
                'message' => 'Filled this field: card cvv',
                'time' => '104',
            ),
            19 => 
            array (
                'id' => 20,
                'pid' => '4',
                'type' => 'action',
                'message' => 'Attempted to pay with card',
                'time' => '104',
            ),
            20 => 
            array (
                'id' => 21,
                'pid' => '4',
                'type' => 'success',
                'message' => 'Successfully paid with card',
                'time' => '105',
            ),
        ));
        
        
    }
}