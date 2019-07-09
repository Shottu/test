<?php

namespace app\core;

class View
{
	public $patch;
	public $route;
	public $layout = 'default';

	function __construct($route)
	{
		$this->route = $route;
		$this->patch = $route['controller'].'/'.$route['action'];
	}

	public function render($title, $vars = [])
	{
		$patch = 'app/views/'.$this->patch.'.php';

		if (file_exists($patch)) {
			if (count($vars) > 0) extract($vars);
			ob_start();
			require $patch;
			$content = ob_get_clean();
			require 'app/views/layouts/'.$this->layout.'.php';
		} else $this->errorCode(404);
	}

	public function redirect($url)
	{
		header('location: '.$url);
		exit();
	}

	public static function errorCode($code)
	{
		http_response_code($code);
		$patch = 'app/views/errors/'.$code.'.php';
		(file_exists($patch)) ? require $patch : header('location: /');
		exit();
	}
}
?>