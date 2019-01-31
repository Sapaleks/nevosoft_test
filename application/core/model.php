<?php

require_once(__DIR__ . '/../../config.php');

/**
 * Class Model
 */
class Model
{
	public $db;

	public function __construct()
	{
		//$this->db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
		$this->db = new PDO('pgsql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
	}

}