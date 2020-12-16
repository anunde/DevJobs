<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Prueba',
            'email' => 'prueba@prueba.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('prueba10'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        DB::table('users')->insert([
            'name' => 'Alvaro',
            'email' => 'alvaro@alvaro.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('alvaro10'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
