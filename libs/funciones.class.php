<?php
session_start();
class funciones{
	private $dir = '';
	private $db = '';
	function __construct($param){
		$this -> dir = $param;
		require_once $this -> dir.'classes/dataBase.class.php';
		$this -> db = new dataBase($this -> dir);
	}
	function getParametro($idParam){
		$sql = "SELECT `valor` FROM parametros where id = '".$idParam."'";
// 	  	 echo $sql;
		$result = $this -> db -> QueryFetchArray($sql);
// 		echo "<pre>"; print_r($sql);echo "</pre>";
// 		file_put_contents("zzz_sql.sql", $sql);
		return $result[0]['valor'];
// 		return $sql;
	}
}
?>
