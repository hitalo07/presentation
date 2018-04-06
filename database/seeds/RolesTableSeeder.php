<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('roles')->insert([
        [
          'name' => 'admin',
          'display_name' => 'User Administrator',
          'description' => 'User is allowed to manage and edit other users',
        ]
      ]);
    }
}
