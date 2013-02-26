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
	 * Insert user to the database
	 *
	 * @param  array  $values
	 * @return int id
	 */
	public static function insert_user($values)
	{
		$db = DB::insert('users', array('user_name', 'password', 'token', 'created'))
			->values($values)
			->execute();
		list($id, $row_change) = $db;
		return $id;
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

	/**
	 * @param  int     $id
	 * @param  array   $values
	 */
	public static function update_user($id, $values)
	{
		$query = DB::update('users')
			->set($values)
			->where('id', '=', $id)
			->execute();
		echo debug::vars($query);
		die;
	}

} // End Model_User