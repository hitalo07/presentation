<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('permissions')->insert([
        [
          'name' => 'create-user',
          'display_name' => 'Create Users',
          'description' => 'create new user',
        ],
        [
          'name' => 'create-presentation',
          'display_name' => 'Create Presentation',
          'description' => 'create new presentation',
        ]
      ]);
    }
}
