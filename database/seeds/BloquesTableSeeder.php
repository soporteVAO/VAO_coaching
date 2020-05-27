<?php

use Illuminate\Database\Seeder;

class BloquesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bloques')->insert([
            ['nombre'=>'Problema / Necesidad','desc'=>''],
            ['nombre'=>'Poder','desc'=>''],
            ['nombre'=>'Visión','desc'=>''],
            ['nombre'=>'Valor','desc'=>''],
            ['nombre'=>'Control','desc'=>''],
        ]);
    }
}
