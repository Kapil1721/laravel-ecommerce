<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColumnConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $columns = [
            'category',
            'actual_price',  
            'sale_price',
            'weight',
            'stock',
            'variant',
                   
        ];
        
        foreach ($columns as $column) {
            \App\Models\ColumnCondition::create([
                'name' => $column,
         
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
        
           
          
           


     
