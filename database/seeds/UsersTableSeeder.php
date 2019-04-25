<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'admin1234';
        $user->email = 'admin@gmail.com';
        $user->password = '123456';
        $user->save();

        $user = new User();
        $user->name = 'admin222';
        $user->email = 'admin123@gmail.com';
        $user->password = '123456';
        $user->save();
    }
}
