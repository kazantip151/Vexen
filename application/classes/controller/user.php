<?php defined('SYSPATH') or die('No direct script access.');

/**
 * ****DESCRIPTION OF FILE****
 *
 * @package    Sortex
 * @author     Sortex Systems Development Ltd.
 * @copyright  (c) 2011-2013 Sortex
 * @license    BSD
 * @link       http://www.sortex.co.il
 */
class Controller_User extends Controller_Site {

	public function action_registration()
	{
		$post = $this->request->post();

		if ($post)
		{
			try
			{
				// Load users
				$user = new Model_User();
				$time = time();

				// Set values for POST
				$post = arr::extract($this->request->post(), array('user_name', 'password', 'token', 'created'));
				$post = arr::map('trim', $post);


				// Save job
				$user = $user->save();

				// Success message
				Notices::add('success', 'Well done! '.($user ? 'updated' : 'created').' successfuly!');

				$this->request->redirect();
			}
			catch (ORM_Validation_Exception $e)
			{
				Notices::add('error', $e->errors(''));
			}
		}
		else
		{
//			if ($job_id)
//			{
//				$job = new Model_Job($job_id);
//				$post = $job->as_array();
//			}
		}

//		$this->view->job = $post;
	}

} // End Controller_User