<?php

use Illuminate\Database\Seeder;
use App\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('orders')->delete();

        Order::create([

            'customer_name' => "George Bailey",
            'customer_address' => "Backer Street 221b",
            'customer_phone' => "+381 00 123 4567",
            'order_list' => json_encode([

                ['pizza_name' => 'Carbonara', 'price' => 12.50],
                ['pizza_name' => 'Fruti di mare', 'price' => 22.50],
                ['pizza_name' => 'Napolitana', 'price' => 18.50],

            ]),
            'price' => 53.50,
            'total_price' => 60.00
        ]);
    }
}
