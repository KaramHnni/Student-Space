<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        DB::table('students')->insert([
            'user_id' => '57',
            'first_name' => 'Henni',
            'last_name' => 'Karam',
            'city_id' => '2',
            'date_of_birth' => $faker->date,
            'phone' => '0668807420',
            'email' => 'karam.tenes@gmail.com',
            'year_id' => '4',


        ]);
        DB::table('students')->insert([
            'user_id' => '58',
            'first_name' => 'Henni',
            'last_name' => 'Mohamed',
            'city_id' => '3',
            'date_of_birth' => $faker->date,
            'phone' =>'0668807420',
            'email' => 'mohamed.tenes@gmail.com',
            'year_id' => '5',


        ]);
        DB::table('students')->insert([
            'user_id' => '59',
            'first_name' => 'Henni',
            'last_name' => 'Wail',
            'city_id' => '4',
            'date_of_birth' => $faker->date,
            'phone' => '0668807420',
            'email' => 'wail.tenes@gmail.com',
            'year_id' => '6',


        ]);
        }
    }
    

