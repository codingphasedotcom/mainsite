<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $owner = new Role();
      $owner->name         = 'super_user';
      $owner->display_name = 'Super User'; // optional
      $owner->description  = 'Super User Can Do Anything'; // optional
      $owner->save();

      $admin = new Role();
      $admin->name         = 'admin';
      $admin->display_name = 'Admin'; // optional
      $admin->description  = 'Admin can almost do everything'; // optional
      $admin->save();

      $moderator = new Role();
      $moderator->name         = 'moderator';
      $moderator->display_name = 'Moderator'; // optional
      $moderator->description  = 'Moderator can Edit or activate others'; // optional
      $moderator->save();

      $user = new Role();
      $user->name         = 'user';
      $user->display_name = 'User'; // optional
      $user->description  = 'User is just a regular user'; // optional
      $user->save();
    }
}
