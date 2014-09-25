<?php

class UserController extends BaseController {

	/**
	 * Show the profile for the given user.
	 */
	public function showName($id)
	{
		$user = User::find($id);

		return View::make('user.profile', array('user' => $user));
	}
	
	/**
	 * Show the profile for the given user.
	 */
	public function showUser($id)
	{
		$user = User::find($id);
	
		return $user;
	}

}