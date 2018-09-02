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
            'name' =>'Karam Henni',
            'email' =>'karam.tenes@gmail.com',
            'password' =>Hash::make('123456'),
            'type' =>'student'
        ]);
        DB::table('users')->insert([
            'name' =>'Mohamed Henni',
            'email' =>'mohamed.tenes@gmail.com',
            'password' =>Hash::make('123456'),
            'type' =>'student'
        ]);
        DB::table('users')->insert([
            'name' =>'Wail Henni',
            'email' =>'wail.tenes@gmail.com',
            'password' =>Hash::make('123456'),
            'type' =>'student'
        ]);
    }
}
