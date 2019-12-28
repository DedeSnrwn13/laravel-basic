<?php

use Illuminate\Database\Seeder;
use App\User;	

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
        User::create([
        	'name'     => 'Dede Sunarwan',
	        'email'    => 'sunarwandede13@gmail.com',
	        'address'  => 'Sukabumi Jawa Barat',
	        'hobby'    => 'Bulu Tangkis',
	        'phone'    => '081572390208',
	        'born'     => '2002-06-27',
	        'password' => bcrypt('secret')
        ]);
    }
}
