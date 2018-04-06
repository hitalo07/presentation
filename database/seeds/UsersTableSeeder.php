<?php

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
      DB::table('users')->insert([
          'name' => env('ADMIN_NAME', 'admin'),
          'email' => env('ADMIN_EMAIL', 'admin@webmaster.com'),
          'password' => env('ADMIN_PASSWORD',bcrypt('secret')),
      ]);
    }
}
