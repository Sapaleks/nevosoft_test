<?php

/**
 * Class Controller_Login
 */
class Controller_Login extends Controller
{
	/**
	 * Controller_Login constructor.
	 */
	function __construct()
	{
		parent::__construct();
		$this->model = new Model_Login();
	}

	/**
	 *
	 */
	function action_index()
	{

		if (isset($_POST['login']) && isset($_POST['password'])) {
			$login = $_POST['login'];
			$password = $_POST['password'];

			$user = $this->model->get_admin($login, $password);

			if ($user) {
				$data["login_status"] = "access_granted";
				$_SESSION['admin'] = $user['id'];
				header('Location:/');
			} else {
				$data["login_status"] = "access_denied";
			}
		} else {
			$data["login_status"] = "";
		}

		$this->view->generate('login_view.php', 'template_view.php', $data);
	}

	/**
	 *
	 */
	function action_logout()
	{
		unset($_SESSION['admin']);
		header('Location:/');
	}
}
