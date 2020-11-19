<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            'name'=> 'Drama'
        ]);
        DB::table('genres')->insert([
            'name'=> 'Kids'
        ]);
        DB::table('genres')->insert([
            'name'=> 'TV Show'
        ]);
    }
}
