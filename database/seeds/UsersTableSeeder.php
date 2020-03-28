<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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

        $superAdminRole = Role::where('alias', 'super-admin')->first();
        $adminRole = Role::where('alias', 'admin')->first();
        $bossRole = Role::where('alias', 'boss')->first();
        $deputyRole = Role::where('alias', 'deputy')->first();
        $memberRole = Role::where('alias', 'member')->first();

        $superAdmin = User::create([
            'name' => 'Super Admin User',
            'email' => 'supperadmin@admin.com',
            'password' => Hash::make('Admin@123456')
        ]);

        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'password' => Hash::make('Admin@123456')
        ]);

        $boss = User::create([
            'name' => 'Boss User',
            'email' => 'boss@boss.com',
            'password' => Hash::make('Admin@123456')
        ]);

        $deputy = User::create([
            'name' => 'Deputy User',
            'email' => 'deputy@deputy.com',
            'password' => Hash::make('Admin@123456')
        ]);

        $member = User::create([
            'name' => 'Member User',
            'email' => 'member@member.com',
            'password' => Hash::make('Admin@123456')
        ]);

        $superAdmin->roles()->attach($superAdminRole);
        $admin->roles()->attach($adminRole);
        $boss->roles()->attach($bossRole);
        $deputy->roles()->attach($deputyRole);
        $member->roles()->attach($memberRole);

    }
}
