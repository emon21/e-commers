<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //   User::insert([
      //       [
      //          //User
      //          'name' => 'User',
      //          'email' => 'user@mail.com',
      //          'email_verified_at' => Carbon::now(),
      //          'password' => bcrypt('12345678'),
      //          'role_as' => 'user',
      //       ],
      //       [
      //          //Admin
      //          'name' => 'Admin',
      //          'email' => 'admin@mail.com',
      //          'email_verified_at' => Carbon::now(),
      //          'password' => bcrypt('12345678'),
      //          'role_as' => 'admin',
      //       ]

      //     ]);

        // User
        $user = new User();
        $user->name = "User";
        $user->email = "user@mail.com";
        $user->profile_photo = "backend/user/default.png";
        $user->password = bcrypt('12345678');
        $user->role_as = 'user';
        $user->phone = '01811287256';
        $user->email_verified_at = Carbon::now();
        $user->remember_token = Str::random(10);
        $user->save();

        //Admin
        $user = new User();
        $user->name = "Admin";
        $user->email = "admin@mail.com";
        $user->profile_photo = "backend/user/default.png";
        $user->password = bcrypt('12345678');
        $user->role_as = 'admin';
        $user->phone = '01711287256';
        $user->email_verified_at = Carbon::now();
        $user->remember_token = Str::random(10);
        $user->save();
       


       // User::factory()->count(50)->hasPosts(1)->create();

    }
}
