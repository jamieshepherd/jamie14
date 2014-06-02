<?php

class UserTableSeeder extends Seeder {

	public function run()
	{
        // Still need to make model for this
        $user = User::create(array(
            'email'    => 'jamie.shepherd@outlook.com',
            'password' => Hash::make('password')
        ));
	}

}
