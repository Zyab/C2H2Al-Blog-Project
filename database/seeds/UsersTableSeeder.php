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
        $user->name = "Hieu";
        $user->email = "hieu@gmail.com";
        $user->password = bcrypt("123456");
        $user->address = "Ha Nam";
        $user->image = "";
        $user->dob = "28/07/1990";
        $user->gender = "Male";
        $user->save();

        $user = New User();
        $user->id = 2;
        $user->name = "Chung";
        $user->email = "chung@gmail.com";
        $user->password = bcrypt("123456789");
        $user->address = "Ha Noi";
        $user->image = "";
        $user->dob = "12/6/1992";
        $user->gender = "Male";
        $user->save();

    }
}
