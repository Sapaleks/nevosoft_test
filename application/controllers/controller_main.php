<?php

/**
 * Class Controller_Main
 */
class Controller_Main extends Controller
{
	/**
	 * Controller_Main constructor.
	 */
	public function __construct()
	{
		parent::__construct();
		$this->model = new Model_Main();
	}


	/**
	 *
	 */
	public function action_index()
	{
		$data = $this->model->get_data();
		$this->view->generate('main_view.php', 'template_view.php', $data);
	}

	/**
	 *
	 */
	public function action_add()
	{
		try {
			$this->model->add($_POST['email'], $_POST['name'], $_POST['text']);
		} catch (Exception $e) {
			die($e->getMessage());
		}

		die(json_encode(['result' => 'success']));

	}

	/**
	 *
	 */
	public function action_edit()
	{
		if (!empty($_POST)) {
			$data = json_decode($_POST['data']);
			$this->model->edit_task($_POST['id'], $data);
		}
	}


}