<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OtherMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('other_media')->insert([
            [
                'file' => 'othermedia/sample1.mp4',
                'title' => 'Media Item 1',
                'alt' => 'Sample Video 1',

                'extension' => 'mp4',
                'size' => 2048, // Size in KB
                'path' => 'othermedia/sample1.mp4',
                'type' => 'video',


                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'file' => 'othermedia/sample2.mp4',
                'title' => 'Media Item 2',
                'alt' => 'Sample Video 2',

                'extension' => 'mp4',
                'size' => 2048, // Size in KB
                'path' => 'othermedia/sample2.mp4',
                'type' => 'video',


                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}