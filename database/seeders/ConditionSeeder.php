<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     
        $conditions = [
            'is equal to',
            'is not equal to',
           
            'starts with',  
            'ends with',
            'contains',
            'does not contain',
            'is greater than',
            'is less than',
      
            'is not empty',
            'is empty',


            
        ];

        foreach ($conditions as $condition) {
            \App\Models\Condition::create([
                'name' => $condition,
                'slug' => Str::slug($condition),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

    }
}
