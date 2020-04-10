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
        Role::truncate();

        Role::create(['name' => 'admin', 'long' => 'Administrator', 'short' => 'Admin']);
        Role::create(['name' => 'moderator', 'long' => 'Moderator', 'short' => 'Mod']);
        Role::create(['name' => 'author', 'long' => 'Author', 'short' => 'Auth']);
        Role::create(['name' => 'premium', 'long' => 'Premium', 'short' => 'Premium']);
        Role::create(['name' => 'verified', 'long' => 'Verified', 'short' => 'Verified']);
        Role::create(['name' => 'user', 'long' => 'Gebruiker', 'short' => 'Gebr']);
    }
}
