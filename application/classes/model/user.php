<?php defined('SYSPATH') or die('No direct script access.');

class Model_User extends ORM {

	/**
	 * Show all users from database
	 *
	 * @return array
	 */
	public static function get_users()
	{
		$query = DB::select()->from('users')
			->execute()
			->as_array();
		return $query;
	}

	/**
	 * Get specific user by id from database
	 *
	 * @param  int  $id
	 * @return array
	 */
	public static function get_user_param($id)
	{
		$query = DB::select('user_name', 'password', 'token', 'created')->from('users')
			->where('id', '=', $id)
			->execute()
			->as_array();

		return arr::get($query, 0, array());
	}

} // End Model_User