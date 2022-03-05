<?php

use Illuminate\Database\Seeder;

class PaystackmodelsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

      //  \DB::table('paystackmodels')->delete();
        
        \DB::table('paystackmodels')->insert(array (
            0 => 
            array (
                'id' => 1,
                'tid' => '1489543318',
                'tistatus' => 'success',
                'reference' => 'GbxfddslaIQc4Ok40O2MJTJ4n',
                'indexnumber' => 'GES11112',
                'amount' => '20000',
                'message' => NULL,
                'reponse' => 'Approved',
                'paymentdate' => '2021-12-05T21:46:21.000Z',
                'channel' => 'mobile_money',
                'currency' => 'GHS',
                'ipaddress' => '41.215.172.3',
                'feecharge' => '390',
                'authcode' => 'AUTH_hoivr1var5',
                'cardtype' => '',
                'bank' => 'MTN',
                'countrycode' => 'GH',
                'brand' => 'Mtn',
                'first4' => '055XXX',
                'last4' => 'X987',
                'customercode' => 'CUS_c750842y5c91ap3',
                'customeremail' => 'admin@admin.com',
                'logstarttime' => '1638740775',
                'logspenttime' => '5',
                'logattempts' => '1',
                'logerrors' => '0',
            ),
            1 => 
            array (
                'id' => 2,
                'tid' => '1489550676',
                'tistatus' => 'success',
                'reference' => 'L9GhuN7dMGZLx75Y8wL8cBpqu',
                'indexnumber' => 'GES11112',
                'amount' => '20000',
                'message' => NULL,
                'reponse' => 'Approved',
                'paymentdate' => '2021-12-05T21:52:16.000Z',
                'channel' => 'mobile_money',
                'currency' => 'GHS',
                'ipaddress' => '41.215.172.3',
                'feecharge' => '390',
                'authcode' => 'AUTH_u2gjdu0ywe',
                'cardtype' => '',
                'bank' => 'MTN',
                'countrycode' => 'GH',
                'brand' => 'Mtn',
                'first4' => '055XXX',
                'last4' => 'X987',
                'customercode' => 'CUS_c750842y5c91ap3',
                'customeremail' => 'admin@admin.com',
                'logstarttime' => '1638741120',
                'logspenttime' => '16',
                'logattempts' => '1',
                'logerrors' => '0',
            ),
            2 => 
            array (
                'id' => 3,
                'tid' => '1489572263',
                'tistatus' => 'success',
                'reference' => 'k4XbfPzVlT7FFjaHuUoSPNSBs',
                'indexnumber' => 'GES11112',
                'amount' => '1200',
                'message' => NULL,
                'reponse' => 'Approved',
                'paymentdate' => '2021-12-05T22:09:00.000Z',
                'channel' => 'mobile_money',
                'currency' => 'GHS',
                'ipaddress' => '41.215.172.3',
                'feecharge' => '24',
                'authcode' => 'AUTH_slp4iy38n0',
                'cardtype' => '',
                'bank' => 'MTN',
                'countrycode' => 'GH',
                'brand' => 'Mtn',
                'first4' => '055XXX',
                'last4' => 'X987',
                'customercode' => 'CUS_c750842y5c91ap3',
                'customeremail' => 'admin@admin.com',
                'logstarttime' => '1638742066',
                'logspenttime' => '74',
                'logattempts' => '4',
                'logerrors' => '0',
            ),
            3 => 
            array (
                'id' => 4,
                'tid' => '1489582325',
                'tistatus' => 'success',
                'reference' => 'SZbetDRPHgbgiO89VQxEGq7pz',
                'indexnumber' => 'GES11112',
                'amount' => '10000',
                'message' => 'test-3ds',
                'reponse' => 'Successful',
                'paymentdate' => '2021-12-05T22:18:10.000Z',
                'channel' => 'card',
                'currency' => 'GHS',
                'ipaddress' => '41.215.172.3',
                'feecharge' => '195',
                'authcode' => 'AUTH_2757gayd5c',
                'cardtype' => 'visa ',
                'bank' => 'TEST BANK',
                'countrycode' => 'GH',
                'brand' => 'visa',
                'first4' => '408408',
                'last4' => '4081',
                'customercode' => 'CUS_c750842y5c91ap3',
                'customeremail' => 'admin@admin.com',
                'logstarttime' => '1638742585',
                'logspenttime' => '105',
                'logattempts' => '4',
                'logerrors' => '1',
            ),
        ));
        
        
    }
}