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

        Role::create(['name' => 'Super Admin', 'alias' => 'super-admin']);
        Role::create(['name' => 'Admin', 'alias' => 'admin']);
        Role::create(['name' => 'Boss', 'alias' => 'boss']);
        Role::create(['name' => 'Deputy', 'alias' => 'deputy']);
        Role::create(['name' => 'Member', 'alias' => 'member']);
    }
}
