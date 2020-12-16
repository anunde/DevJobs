<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UbicacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ubicacions')->insert([
            'nombre' => 'Remoto',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('ubicacions')->insert([
            'nombre' => 'España',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('ubicacions')->insert([
            'nombre' => 'Inglaterra',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('ubicacions')->insert([
            'nombre' => 'Alemania',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('ubicacions')->insert([
            'nombre' => 'Dinamarca',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('ubicacions')->insert([
            'nombre' => 'Finlandia',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('ubicacions')->insert([
            'nombre' => 'Noruega',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('ubicacions')->insert([
            'nombre' => 'Suiza',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
