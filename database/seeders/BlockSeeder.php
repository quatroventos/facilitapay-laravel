<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BlockSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blocks')->insert([
            'id' => 1,
            'title' => 'hero',
            'category' => 'home',
            'media' => '/blocks/home_hero.jpg',
            'activate' => 'true',
            'type' => 'text',
            'content' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);

    }
}
