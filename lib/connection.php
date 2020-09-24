<?php 
class Connection{
	private $server;
	private $user;
	private $pass;
	private $port;
	private $database;
	private $link;

	function __construct(){
		$this->setConnect();
		$this->connect();
	}

	private function setConnect(){
		require_once 'conf.php';
		$this->server=$server;
		$this->user=$user;
		$this->pass=$pass;
		$this->port=$port;
		$this->database=$database;
	}

	private function connect(){
		$this->link=mysqli_connect($this->server,$this->user,$this->pass,$this->database);
		if (!$this->link) {
			die(mysqli_err($this->link));
		}else{
			//echo "!CONEXION EXITOSA¡";
		}
	}

	public function getConnect(){
		return $this->link;
	}

	public function close(){
		mysqli_close($this->link);
	}
}
?>