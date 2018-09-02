<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' =>'Bendimrad Nawel',
            'email' =>'bendimrad@enpo.com',
            'password' =>Hash::make('123456'),
            'type' =>'teacher'
        ]);
        DB::table('users')->insert([
            'name' =>'Djebbar Nawel',
            'email' =>'Djebbar@enpo.com',
            'password' =>Hash::make('123456'),
            'type' =>'teacher'
        ]);
        DB::table('users')->insert([
            'name' =>'Boumedjout Nawel',
            'email' =>'Boumedjout@enpo.com',
            'password' =>Hash::make('123456'),
            'type' =>'teacher'
        ]);
    }
}
