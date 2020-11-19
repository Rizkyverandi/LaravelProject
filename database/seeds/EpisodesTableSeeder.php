<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EpisodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Episodes::class, 20)->create();

        // DB::table('episodes')->insert([
        //     'title'=> 'Saat bertemu di Hutan',
        //     'episode'=>'1',
        //     'movie_id'=>'1'
        // ]);
    }
}
