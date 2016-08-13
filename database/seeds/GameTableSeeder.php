<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
            'titulo' => str_random(10),
            'compania' => str_random(10).'@gmail.com',
            'sinopsis' => str_random(50),
            'lanzamiento' => Carbon::now()->format('Y-m-d'),
        ]);
    }
}
