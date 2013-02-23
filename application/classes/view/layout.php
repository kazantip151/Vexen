<?php defined('SYSPATH') or die('No direct script access.');

class View_Layout extends Kostache_Layout {

	public $show_profiler = FALSE;
	public function profiler()
	{
		return View::factory('profiler/stats')->render();
	}

	protected $_partials = array(
		'notices' => '_elements/notices',
		'header'  => '_elements/header',
		'footer'  => '_elements/footer',
	);

	public function base_url()
	{
		return URL::base();
	}

	/**
	 * Collects all notices
	 *
	 * @uses   Notices
	 * @return array
	 */
	public function notices()
	{
		$data = array();

		foreach (Notices::get() as $types)
		{
			foreach ($types as $array)
			{
				$data[] = array
				(
					'type'    => $array['type'],
					'message' => __($array['key'], $array['values']),
				);
			}
		}

		return $data;
	}

	/**
	 * Var method to return an array of routes. Subviews should extend this,
	 * call parent::routes() and add their own to it.
	 *
	 * @return array
	 */
//	public function routes()
//	{
//		return array(
//			'welcome_index'  => Route::url('default', array('controller' => 'welcome', 'action' => 'index')),
////			'user_index' => Route::url('default', array('controller' => 'user')),
////			'user_job'   => Route::url('default', array('controller' => 'jobs', 'action' => 'index')),
////			'job_form'   => Route::url('default', array('controller' => 'jobs', 'action' => 'form')),
//		);
//	}

} // End View_Layout