<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new User();
        $user->email = "poosan9@gmail.com";
        $user->name = "Poovarasan";
        $user->password = md5("password");
        $user->save();
    }
}
