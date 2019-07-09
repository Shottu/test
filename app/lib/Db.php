<?php 

namespace app\lib;
use PDO;

class Db
{
	protected $dbh;
	
	function __construct()
	{
		$config = require 'app/config/db.php';
		$this->dbh = new PDO('mysql:host='.$config['host'].';dbname='.$config['dbname'], $config['user'], $config['password']);
	}

	public function query($sql, $params = [])
	{
		$data = $this->dbh->prepare($sql);
		if (!empty($params)) {
			foreach ($params as $key => $val) {
				$data->bindValue(':'.$key, $val);
			}
		}
		$data->execute();
		return $data;
	}

	public function assoc($sql, $params = [])
	{
		$result = $this->query($sql, $params);
		return $result->fetchAll(PDO::FETCH_ASSOC);
	}
}
 ?>