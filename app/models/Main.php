<?php 

namespace app\models;
use app\core\Model;	

class Main extends Model
{
	public function getUsers()
	{
		$result = $this->db->assoc('SELECT * FROM `users`');
		return $result;
	}

	public function getDataUser($id)
	{
		/* Подготовка данных*/
		$params = [
			'id' => $id,
		];
		$result = $this->db->assoc('SELECT * FROM `users` WHERE `id` = :id', $params);
		return $result;
	}
}
?>