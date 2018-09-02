<?php

use Illuminate\Database\Seeder;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        DB::table('teachers')->insert([
            'user_id' => '60',
            'first_name' => 'Nawel',
            'last_name' => 'Bendimrad',
            'city_id' => '4',
            'date_of_birth' => $faker->date,
            'Grade' => 'Dr',
            'phone' => '0668807420'
            ]);
        DB::table('teachers')->insert([
            'user_id' => '61',
            'first_name' => 'Nawel',
            'last_name' => 'Djebbar',
            'city_id' => '4',
            'date_of_birth' => $faker->date,
            'Grade' => 'Dr',
            'phone' => '0668807420'


        ]);
        DB::table('teachers')->insert([
            'user_id' => '60',
            'first_name' => 'Nawel',
            'last_name' => 'Boumedjout',
            'city_id' => '4',
            'date_of_birth' => $faker->date,
            'Grade' => 'Dr',
            'phone' => '0668807420'
        ]);
}
}
