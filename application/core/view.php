<?php

/**
 * Class View
 */
class View
{

	/**
	 * @var array
	 */
	public $items;

	/**
	 * @var
	 */
	public $page;

	/**
	 * @var
	 */
	public $items_count;

	/**
	 * @var
	 */
	public $order;

	/**
	 * @var
	 */
	public $filter;

	/**
	 * @var
	 */
	public $content_view;

	/**
	 * @param $content_view
	 * @param $template_view
	 * @param null $data
	 */
	function generate($content_view, $template_view, $data = null)
	{
		$this->content_view = $content_view;
		$this->items = $data['items'];
		$this->page = $data['page'];
		$this->items_count = $data['items_count'];
		$this->order = $data['order'];
		$this->filter = $data['filter'];

		include 'application/views/' . $template_view;
	}

	/**
	 * @param $timestamp
	 * @return false|string
	 */
	function convert_time($timestamp)
	{
		$time = date("Y-m-d H:i:s", $timestamp);

		return $time;
	}
}
