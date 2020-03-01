<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

			DB::table('orders')->insert([
				'cashier' => 'Susi Susilowati',
				'product' => 'Burger',
				'category' => 'Food',
				'price' => '30000'
			]);
			DB::table('orders')->insert([
        'cashier' => 'Yanu Nugroho',
        'product' => 'Spaghetti',
        'category' => 'Food',
        'price' => '30000'
      ]);
    }
}
