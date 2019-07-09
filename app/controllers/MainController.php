<?php

namespace app\controllers;
use app\core\Controller;

class MainController extends Controller
{
	public function indexAction()
	{
		$result = $this->model->getUsers();
		$vars = [
			'user' => $result,
		];
		$this->view->render('Пользователи', $vars);
	}

	public function showAction()
	{
		$result = $this->model->getDataUser($this->route['id']);
		$vars = [
			'user' => $result,
		];
		$this->view->render('Информация пользователя', $vars);
	}
}
?>