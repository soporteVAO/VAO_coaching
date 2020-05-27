<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            ['nombre'=>'admin','desc'=>'','created_at' => now(),'updated_at' => now()],
            ['nombre'=>'director_com','desc'=>'','created_at' => now(),'updated_at' => now()],
            ['nombre'=>'vendedor','desc'=>'','created_at' => now(),'updated_at' => now()],
        ]);
    }
}
