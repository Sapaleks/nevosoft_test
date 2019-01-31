<?php

/**
 * Class Controller
 */
class Controller
{

	/**
	 * @var
	 */
	public $model;
	/**
	 * @var View
	 */
	public $view;

	/**
	 * Controller constructor.
	 */
	function __construct()
	{
		$this->view = new View();
	}


	/**
	 *
	 */
	function action_index()
	{

	}
}
