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
        $user->name = 'Anh';
        $user->email = 'anh@gmail.com';
        $user->password = Hash::make('123456');
        $user->save();

        $user = new User();
        $user->name = 'Lan';
        $user->email = 'lan@gmail.com';
        $user->password = Hash::make('123456');
        $user->save();
    }
}
