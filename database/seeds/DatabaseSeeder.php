<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(UsuarioSeeder::class);
        $this->call(UbicacionSeeder::class);
        $this->call(SalarioSeeder::class);
        $this->call(CategoriaSeed::class);
        $this->call(ExperienciaSeeder::class);
    }
}
