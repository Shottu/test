<?php 

namespace app\lib;

class Helper
{
	public static function debug($str)
	{
		echo "<pre>";
		var_dump($str);
		echo "<pre>";
	}
}