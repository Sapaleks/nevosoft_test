<?php

/**
 * Class Model_Main
 */
class Model_Main extends Model
{

	/**
	 * @return array
	 */
	public function get_data()
	{
		if (!isset($_SESSION['order'])) {
			$_SESSION['order'] = 'ts DESC';
		}

		if (!isset($_SESSION['filter'])) {
			$_SESSION['filter'] = 0;
		}

		$page = (isset($_POST['page'])) ? $_POST['page'] : 1;
		$order = (isset($_POST['order'])) ? $_POST['order'] : $_SESSION['order'];
		$filter = (isset($_POST['filter'])) ? $_POST['filter'] : $_SESSION['filter'];
		$count = $this->get_total_count($filter);

		$query = $this->db->prepare(
			'SELECT * FROM logs ' .
			($filter ? 'WHERE type=' . $filter : '') . ' ' .
			' ORDER BY ' . $order . ' ' .
			'OFFSET ' . (($page - 1) * 100 . ' LIMIT ') . '100'
		);

		$query->execute();

		$result['items'] = $query->fetchAll(PDO::FETCH_ASSOC);
		$result['page'] = $page;
		$result['order'] = $order;
		$result['filter'] = $filter;
		$result['items_count'] = $count;

		$_SESSION['order'] = $order;
		$_SESSION['filter'] = $filter;

		return $result;
	}

	/**
	 * @param $email
	 * @param $name
	 * @param $text
	 * @return bool
	 */
	public function add($email, $name, $text)
	{
		$query = $this->db->prepare(
			'INSERT INTO tasks (email, name, text) VALUES(:email, :name, :text)'
		);
		$query->bindValue(':email', $email);
		$query->bindValue(':name', $name);
		$query->bindValue(':text', $text);
		$query->execute();
		return true;
	}


	/**
	 * @param int $filter
	 * @return mixed
	 */
	public function get_total_count($filter = 0)
	{
		$query = $this->db->prepare(
			'SELECT COUNT(*) as count FROM logs ' .
			($filter ? 'WHERE type=' . $filter : '')
		);

		$query->execute();
		$result = $query->fetch(PDO::FETCH_ASSOC);

		return $result['count'];
	}


}
