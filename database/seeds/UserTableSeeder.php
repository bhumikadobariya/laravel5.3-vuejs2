<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder {

    public function run() {
        DB::table('users')->delete();
        User::create([
                         'email'    => 'user@gmail.com',
                         'password' => bcrypt('123123'),
                         'name'     => 'user',
                     ]);
        User::create([
                         'email'    => 'admin@gmail.com',
                         'password' => bcrypt('123123'),
                         'name'     => 'admin',
                     ]);
    }
}
