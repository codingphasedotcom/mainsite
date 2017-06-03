<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Database\Eloquent\Model;

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
        $user->fname         = 'Joe';
        $user->lname         = 'Santos Garcia';
        $user->email         = 'joesantosgarcia@gmail.com';
        $user->password = bcrypt('secret'); // optional
        $user->address  = "2034 green ave"; // optional
        $user->address2  = "2FL"; // optional
        $user->city  = "Melville"; // optional
        $user->state  = "Melville"; // optional
        $user->country  = "United States of America"; // optional
        $user->founder  = 1;
        $user->paid  = 1;
        $user->save();



        // role attach alias
        $user->attachRole(2); // parameter can be an Role object, array, or id

    }
}
