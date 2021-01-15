<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'full_name' => 'John Doe',
                'email' => 'john@examle.com',
                'password' => '12345',
                'prev_password' => NULL,
                'address_id' => 1,
                'phone' => '01711001133',
                'created_at' => '2021-01-05',
                'updated_at' => '2021-01-05',
            ),
            1 =>
            array (
                'id' => 2,
                'full_name' => 'nodar tofuria',
                'email' => 'nodar.tofuria.1@btu.edu.ge',
                'password' => '12345',
                'prev_password' => NULL,
                'address_id' => 2,
                'phone' => '1234567890',
                'created_at' => '2021-01-05',
                'updated_at' => '2021-01-05',
            ),
            2 =>
            array (
                'id' => 3,
                'full_name' => 'jonny depp',
                'email' => 'jdepp@gmail.com',
                'password' => '12345',
                'prev_password' => NULL,
                'address_id' => 3,
                'phone' => '01899001144',
                'created_at' => '2021-01-05',
                'updated_at' => '2021-01-05',
            ),
            3 =>
            array (
                'id' => 4,
                'full_name' => 'nodar topuria',
                'email' => 'topurianika96@gmail.com',
                'password' => '12345',
                'prev_password' => NULL,
                'address_id' => 4,
                'phone' => '571160914',
                'created_at' => '2021-01-05',
                'updated_at' => '2021-01-05',
            ),
        ));


    }
}
