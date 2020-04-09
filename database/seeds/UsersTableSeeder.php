<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $moderatorRole = Role::where('name', 'moderator')->first();
        $authorRole = Role::where('name', 'author')->first();
        $premiumRole = Role::where('name', 'premium')->first();
        $verifiedRole = Role::where('name', 'verified')->first();
        $userRole = Role::where('name', 'user')->first();

        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password')
        ]);

        $moderator = User::create([
            'name' => 'Moderator User',
            'email' => 'moderator@moderator.com',
            'password' => Hash::make('password')
        ]);

        $author = User::create([
            'name' => 'Author User',
            'email' => 'author@author.com',
            'password' => Hash::make('password')
        ]);

        $premium = User::create([
            'name' => 'Premium User',
            'email' => 'premium@premium.com',
            'password' => Hash::make('password')
        ]);

        $verified = User::create([
            'name' => 'Verified User',
            'email' => 'verified@author.com',
            'password' => Hash::make('password')
        ]);

        $user = User::create([
            'name' => 'Generic User',
            'email' => 'user@user.com',
            'password' => Hash::make('password')
        ]);

        $admin->roles()->attach($adminRole);
        $moderator->roles()->attach($moderatorRole);
        $author->roles()->attach($authorRole);
        $premium->roles()->attach($premiumRole);
        $verified->roles()->attach($verifiedRole);
        $user->roles()->attach($userRole);
    }
}
