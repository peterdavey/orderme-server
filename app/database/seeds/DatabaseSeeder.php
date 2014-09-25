<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
	}

}


class UserTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();

		User::create(array('email' => 'foo@bar.com', 'fname' => 'Foo', 'lname' =>'Bar' ));
		User::create(array('email' => 'joe@blogs.com', 'fname' => 'Joe', 'lname' =>'Blogs' ));
	}

}
