<?php

use Illuminate\Database\Seeder;

class ApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 5)->create();
        factory(App\Pizza::class, 5)->create();
        factory(App\Order::class, 9)->create();
        factory(App\Size::class, 5)->create();
        factory(App\Topping::class, 3)->create();
        factory(App\OrderItem::class, 13)->create();
    }
}
