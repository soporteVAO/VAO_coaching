<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name'=>'Admin Admin','email'=>'admin@material.com','email_verified_at'=>now(),'password' => Hash::make('secret'),'created_at'=>now(),'updated_at'=>now(),'rol_id'=>1,'empresa_id'=>1],
            ['name'=>'ultatek director','email'=>'director@ultatek.com','email_verified_at'=>now(),'password' => Hash::make('secret'),'created_at'=>now(),'updated_at'=>now(),'rol_id'=>2,'empresa_id'=>2],
            ['name'=>'ultatek vendedor','email'=>'vendedor@ultatek.com','email_verified_at'=>now(),'password' => Hash::make('secret'),'created_at'=>now(),'updated_at'=>now(),'rol_id'=>3,'empresa_id'=>2],
        ]);
    }
}
