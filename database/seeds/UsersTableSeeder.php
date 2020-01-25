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
        //bikin isi untuk table

        $roleAdmin = Role::where('name', 'admin')->first();
        $roleTeacher = Role::where('name', 'teacher')->first();
        $roleUser = Role::where('name', 'user')->first();

        $admin = User::create([
        	'name'     => 'Admin',
	        'email'    => 'admin@test.app',
	        'address'  => 'Sukabumi Jawa Barat',
	        'hobby'    => 'Bulu Tangkis',
	        'phone'    => '081572390208',
	        'born'     => '2002-06-27',
	        'password' => bcrypt('secret')
        ]);
        $admin->roles()->attach($roleAdmin);

        $teacher = User::create([
        	'name'     => 'Teacher',
	        'email'    => 'teacher@test.app',
	        'address'  => 'Sukabumi Jawa Barat',
	        'hobby'    => 'Bulu Tangkis',
	        'phone'    => '081572390208',
	        'born'     => '2002-06-27',
	        'password' => bcrypt('secret')
        ]);
        $teacher->roles()->attach($roleTeacher);

        $user = User::create([
        	'name'     => 'User',
	        'email'    => 'user@test.app',
	        'address'  => 'Sukabumi Jawa Barat',
	        'hobby'    => 'Bulu Tangkis',
	        'phone'    => '081572390208',
	        'born'     => '2002-06-27',
	        'password' => bcrypt('secret')
        ]);
        $user->roles()->attach($roleUser);
    }
}
