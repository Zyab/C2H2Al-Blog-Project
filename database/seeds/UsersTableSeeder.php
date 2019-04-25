<?php

use App\User;
use Illuminate\Database\Seeder;

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
        $user->id = 1;
        $user->name = 'Anh';
        $user->email = 'anh@gmail.com';
        $user->password = bcrypt('123456');
        $user->image = '';
        $user->address = 'Nam Dinh';
        $user->phone = '0988504490';
        $user->save();

        $user = new User();
        $user->id = 2;
        $user->name = 'hieu';
        $user->email = 'hieu@gmail.com';
        $user->password = bcrypt('123456');
        $user->image = '';
        $user->address = 'ha nam';
        $user->phone = '0988504490';
        $user->save();
    }
}
