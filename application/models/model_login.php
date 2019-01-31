<?php

/**
 * Class Model_Login
 */
class Model_Login extends Model
{

	/**
	 * @param $name
	 * @param $pass
	 * @return mixed
	 */
	public function get_admin($name, $pass)
	{
		global $dbObject;
		$query = $dbObject->prepare(
			'SELECT id FROM users WHERE name = :user AND pass = :pass AND admin = 1'
		);
		$query->bindValue(":user", $name);
		$query->bindValue(":pass", md5($pass));
		$query->execute();
		$result = $query->fetch(PDO::FETCH_ASSOC);

		return $result;

	}

}
