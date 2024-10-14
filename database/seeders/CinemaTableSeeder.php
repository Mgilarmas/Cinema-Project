<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class CinemaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cinemas')->insert([
            ['movie' => 'It', 'duration' => '2h15m', 'genre' => 'horror'],
            ['movie' => 'Cars', 'duration' => '1h57m', 'genre' => 'animation'],
        ]);
    }
}
