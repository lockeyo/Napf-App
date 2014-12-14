<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder {
    public function run() {
        // clear table
        DB::table('users')->delete();

        // add 1st row
        User::create( [
            'name' => 'News Headline' ,
            'email' => 'engel@engel.de' ,
            'password' => Hash::make('password')
        ]);
    }
}