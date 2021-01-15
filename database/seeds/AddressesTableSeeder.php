<?php

use Illuminate\Database\Seeder;

class AddressesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('addresses')->delete();

        \DB::table('addresses')->insert(array (
            0 =>
            array (
                'id' => 1,
                'area' => 'Georgia',
                'city' => 'Tbilisi',
                'zip' => 0101,
            ),
            1 =>
            array (
                'id' => 2,
                'area' => 'Georgia',
                'city' => 'Telavi',
                'zip' => 0102,
            ),
            2 =>
            array (
                'id' => 3,
                'area' => 'Georgia',
                'city' => 'Zugdidi',
                'zip' => 0103,
            ),
            3 =>
            array (
                'id' => 4,
                'area' => 'Georgia',
                'city' => 'Kutaisi',
                'zip' => 0104,
            ),
        ));


    }
}
