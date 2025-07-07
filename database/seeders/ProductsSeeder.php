<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            ['id' => 1, 'name' => 'Product One', 'price' => 99.99],
            ['id' => 2, 'name' => 'Product Two', 'price' => 149.99],
        ]);
    }
}