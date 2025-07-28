<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductCommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_comments')->insert([
            [
                'product_id' => 1,
                'customer_id' => 1,
                'title' => 'Amazing product!',
                'message' => 'This product exceeded my expectations. Will buy again.',
                'rating' => 5,
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'status' => 1,
            ],
            [
                'product_id' => 2,
                'customer_id' => 2,
                'title' => 'Decent quality',
                'message' => 'It works well for the price. Not top-tier, but good.',
                'rating' => 4,
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'status' => 1,
            ],
            [
                'product_id' => 1,
                'customer_id' => 3,
                'title' => 'Not satisfied',
                'message' => 'The product did not perform as expected.',
                'rating' => 2,
                'name' => 'Mark Wilson',
                'email' => 'mark@example.com',
                'status' => 0,
            ],
        ]);
    }
}
