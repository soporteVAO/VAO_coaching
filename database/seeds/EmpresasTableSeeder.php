<?php

use Illuminate\Database\Seeder;

class EmpresasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empresas')->insert([
            ['nombre'=>'VAO','created_at'=>now(),'updated_at'=>now()],
            ['nombre'=>'ULTATEK','created_at'=>now(),'updated_at'=>now()],
            ['nombre'=>'REPINEL','created_at'=>now(),'updated_at'=>now()]
        ]);
    }
}
