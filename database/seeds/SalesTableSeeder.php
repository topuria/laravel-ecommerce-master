<?php

use Illuminate\Database\Seeder;

class SalesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('sales')->delete();

        \DB::table('sales')->insert(array (
            0 =>
            array (
                'id' => 1,
                'user_id' => 1,
                'product_id' => '3:1:#000000:1',
                'order_status' => 'Delivered',
                'price' => 91000,
                'created_at' => '2021-01-05',
                'updated_at' => '2021-01-05',
            ),
            1 =>
            array (
                'id' => 2,
                'user_id' => 2,
                'product_id' => '5:1:#c0c0c0:1,30:2:#000000:2',
                'order_status' => 'Delivered',
                'price' => 93000,
                'created_at' => '2021-01-05',
                'updated_at' => '2021-01-05',
            ),
            2 =>
            array (
                'id' => 3,
                'user_id' => 2,
                'product_id' => '22:1:#000000:1',
                'order_status' => 'Delivered',
                'price' => 43999,
                'created_at' => '2021-01-05',
                'updated_at' => '2021-01-05',
            ),
            3 =>
            array (
                'id' => 4,
                'user_id' => 3,
                'product_id' => '18:2:#000000:1,38:1:#8080ff:2,30:1:#000000:3',
                'order_status' => 'On Process',
                'price' => 209998,
                'created_at' => '2021-01-05',
                'updated_at' => '2021-01-05',
            ),
            4 =>
            array (
                'id' => 5,
                'user_id' => 4,
                'product_id' => '12:1:#000000:2,17:1:#c0c0c0:3',
                'order_status' => 'On Process',
                'price' => 79500,
                'created_at' => '2021-01-05',
                'updated_at' => '2021-01-05',
            ),
            5 =>
            array (
                'id' => 6,
                'user_id' => 4,
                'product_id' => '5:1:#c0c0c0:1',
                'order_status' => 'Cancel',
                'price' => 71000,
                'created_at' => '2021-01-05',
                'updated_at' => '2021-01-05',
            ),
            6 =>
            array (
                'id' => 7,
                'user_id' => 4,
                'product_id' => '1:1:#c0c0c0:1',
                'order_status' => 'Placed',
                'price' => 205000,
                'created_at' => '2021-01-05',
                'updated_at' => '2021-01-05',
            ),
            7 =>
            array (
                'id' => 8,
                'user_id' => 2,
                'product_id' => '20:1:#000000:1,25:1:#000000:2',
                'order_status' => 'Delivered',
                'price' => 21500,
                'created_at' => '2021-01-05',
                'updated_at' => '2021-01-05',
            ),
            8 =>
            array (
                'id' => 9,
                'user_id' => 2,
                'product_id' => '27:1:#000000:1',
                'order_status' => 'Delivered',
                'price' => 30000,
                'created_at' => '2021-01-05',
                'updated_at' => '2021-01-05',
            ),
            9 =>
            array (
                'id' => 10,
                'user_id' => 2,
                'product_id' => '44:1:#ff0000:1',
                'order_status' => 'Cancel',
                'price' => 3500,
                'created_at' => '2021-01-05',
                'updated_at' => '2021-01-05',
            ),
            10 =>
            array (
                'id' => 11,
                'user_id' => 2,
                'product_id' => '28:1:#400080:1',
                'order_status' => 'On Process',
                'price' => 24000,
                'created_at' => '2021-01-05',
                'updated_at' => '2021-01-05',
            ),
            11 =>
            array (
                'id' => 12,
                'user_id' => 2,
                'product_id' => '34:1:#ff0000:1',
                'order_status' => 'Delivered',
                'price' => 10500,
                'created_at' => '2021-01-05',
                'updated_at' => '2021-01-05',
            ),
            12 =>
            array (
                'id' => 13,
                'user_id' => 1,
                'product_id' => '4:1:#c0c0c0:1',
                'order_status' => 'On Process',
                'price' => 111000,
                'created_at' => '2021-01-05',
                'updated_at' => '2021-01-05',
            ),
        ));


    }
}
