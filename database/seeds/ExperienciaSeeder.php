<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperienciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('experiencias')->insert([
            'nombre' => '0 - 6 Meses',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('experiencias')->insert([
            'nombre' => '6 Meses - 1 Año',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('experiencias')->insert([
            'nombre' => '1 Año - 3 Años',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('experiencias')->insert([
            'nombre' => '3 Años - 5 Años',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('experiencias')->insert([
            'nombre' => '5 Años - 7 Años',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('experiencias')->insert([
            'nombre' => '7 Años - 10 Años',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('experiencias')->insert([
            'nombre' => '10 Años - 12 Años',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('experiencias')->insert([
            'nombre' => '12 Años - 15 Años',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
