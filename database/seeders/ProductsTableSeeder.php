<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'product_name' => 'Here Product Title1',
            'price'        => '70',
            'category_id'  => '2',
            'dimension'    => '30',
            'image'        => '1.jpg',
            'tax'          => '15',
        ]);
        DB::table('products')->insert([
            'product_name' => 'Here Product Title2',
            'price'        => '70',
            'category_id'  => '1',
            'image'        => '2.jpg',
            'tax'          => '15',
        ]);
    }
}
