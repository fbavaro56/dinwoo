<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'icon' => 'fa-plane',
            'name' => 'Vuelos'
        ]);

        DB::table('categories')->insert([
            'icon' => 'fa-building',
            'name' => 'Hoteles'
        ]);

        DB::table('categories')->insert([
            'icon' => 'fa-sun',
            'name' => 'Vuelo + Hotel'
        ]);

        DB::table('categories')->insert([
            'icon' => 'fa-ship',
            'name' => 'Cruceros'
        ]);

        DB::table('categories')->insert([
            'icon' => 'fa-user',
            'name' => 'Escapadas'
        ]);

        DB::table('categories')->insert([
            'icon' => 'fa-users',
            'name' => 'Entradas y Eventos'
        ]);

        DB::table('categories')->insert([
            'icon' => 'fa-plus',
            'name' => 'Otros'
        ]);
    }
}
