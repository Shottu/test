<?php

namespace app\core;
use app\core\View;

abstract class Controller
{
	public $route;
	public $view;

	function __construct($route)
	{
		$this->route = $route;
		$this->view = new View($route);
		$this->model = $this->loadModel($this->route['controller']);
	}

	public function loadModel($name)
	{
		$patch = 'app\models\\'.ucfirst($name);
		if (class_exists($patch)) {
			return new $patch;
		}
	}
}
?>