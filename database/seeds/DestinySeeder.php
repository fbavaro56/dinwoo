<?php

use Illuminate\Database\Seeder;

class DestinySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('destinies')->insert([
            'name' => 'Roma'
        ]);
        DB::table('destinies')->insert([
            'name' => 'Barcelona'
        ]);
        DB::table('destinies')->insert([
            'name' => 'Sevilla'
        ]);
        DB::table('destinies')->insert([
            'name' => 'Madrid'
        ]);
        DB::table('destinies')->insert([
            'name' => 'New York'
        ]);
        DB::table('destinies')->insert([
            'name' => 'Berlin'
        ]);
        DB::table('destinies')->insert([
            'name' => 'Valencia'
        ]);
        DB::table('destinies')->insert([
            'name' => 'Praga'
        ]);
        DB::table('destinies')->insert([
            'name' => 'Tailandia'
        ]);
    }
}
