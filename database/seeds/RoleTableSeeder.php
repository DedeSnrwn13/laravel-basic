<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'admin',
            'description' => 'Role for Admin'
        ]);

        Role::create([
            'name' => 'user',
            'description' => 'Role for Teacher'
        ]);

        Role::create([
            'name' => 'user',
            'description' => 'Role for User'
        ]);
    }
}
