<?php

use Illuminate\Database\Seeder;

class ModuleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modules')->insert([
            'name' => 'Programmation Systeme',
            'coeff' => '4',
            'semestre' => '1',
            'year_id' => '4',

        ]);
        DB::table('modules')->insert([
            'name' => 'Reseau',
            'coeff' => '2',
            'semestre' => '1',
            'year_id' => '4',

        ]);
        DB::table('modules')->insert([
            'name' => 'Programmation Orientés Objet',
            'coeff' => '3',
            'semestre' => '1',
            'year_id' => '4',

        ]);
    }
}
