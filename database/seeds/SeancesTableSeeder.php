<?php

use Illuminate\Database\Seeder;

class SeancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seances')->insert([
            'name' => 'TP',
            'module_id' => '4',
            'teacher_id' => '4',
        ]);
        DB::table('seances')->insert([
            'name' => 'TD',
            'module_id' => '4',
            'teacher_id' => '4',
        ]);
        DB::table('seances')->insert([
            'name' => 'Cour',
            'module_id' => '4',
            'teacher_id' => '4',
        ]);
        DB::table('seances')->insert([
            'name' => 'TP',
            'module_id' => '3',
            'teacher_id' => '2',
        ]);
        DB::table('seances')->insert([
            'name' => 'Cour',
            'module_id' => '3',
            'teacher_id' => '2',
        ]);DB::table('seances')->insert([
            'name' => 'TD',
            'module_id' => '3',
            'teacher_id' => '2',
        ]);

    }
}
