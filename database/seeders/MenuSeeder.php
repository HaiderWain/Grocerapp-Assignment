<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            'restaurant_id' => 1,
            'Item' => 'WurgerBurger',
            'Category' => 'Burger',
        ]);
    }
}
