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
	function getComentarios(){
		$sql = "SELECT `date` as fecha, `comentario` as contenido FROM comentarios order by date desc LIMIT 0 , 5";
// 		// 	  	 echo $sql;
		$comentarios = $this -> db -> QueryFetchArray($sql);
// 		// 		echo "<pre>"; print_r($sql);echo "</pre>";
		
		$salida = '';
		
		for ($i = 0; $i < count($comentarios); $i++) {
			$salida.= '
				<p class="wb-stl-normal"> </p>
				<p class="wb-stl-normal">'.$comentarios[$i]['fecha'].'</p>
				<p class="wb-stl-normal"><a href="comentarios.php">'.$comentarios[$i]['contenido'].'</a></p>
				<p class="wb-stl-normal" style = "border-bottom: 1px solid #7afb3a;"> </p>
			';
		}
		return $salida;
	}
	function getMisTrabajos(){
		// 		$sql = "SELECT `valor` FROM mistrabajos where id = '".$idParam."'";
		// 		// 	  	 echo $sql;
		// 		$result = $this -> db -> QueryFetchArray($sql);
		// 		// 		echo "<pre>"; print_r($sql);echo "</pre>";
		// 		// 		file_put_contents("zzz_sql.sql", $sql);
		// 		return $result[0]['valor'];
		// 		// 		return $sql;
		$comentarios = array();
		$pos = 0;
		$comentarios[$pos]['fecha'] = '2013 01 20';
		$comentarios[$pos]['imagen'] = '1494b05e8bf8751cdf473874350a6cb7_120x120.jpg';
		$comentarios[$pos]['contenido'] = 'Ut wisi enim ad minim veniam, quis nostrud exercitation vel illum dolore eu feugiat nulla facilisis. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros';
		$pos++;
		$comentarios[$pos]['fecha'] = '2013 01 19';
		$comentarios[$pos]['imagen'] = 'b6906e8d4d46223fb50e9646cc4d4426_120x120.jpg';
		$comentarios[$pos]['contenido'] = 'Nam liber tempor cum soluta nobis eleifend option congue nihil. Claritas est etiam processus dynamicus, qui sequitur mutationem. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros';
		$pos++;
		$comentarios[$pos]['fecha'] = '2013 01 17';
		$comentarios[$pos]['imagen'] = '0ccb6ff15783bcbd122c0184e1fe0eab_120x117.jpg';
		$comentarios[$pos]['contenido'] = 'Claritas est etiam processus dynamicus, qui sequitur mutationem. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros. Claritas est etiam processus dynamicus, qui sequitur mutationem.';
		
	
		$salida = '';
		$salida.= '
			<table border = 0 width = 850 >';
		for ($i = 0; $i < count($comentarios); $i++) {
			$salida.= '
				<tr>
					<td style = "width: 25%">
						<img alt="" src="gallery/'.$comentarios[$i]['imagen'].'" style="width: 120px; height: 120px;">
					</td>
					<td style = "width: 75%; vertical-align:text-top;">
						<p class="wb-stl-normal">'.$comentarios[$i]['fecha'].'</p>
						<p class="wb-stl-normal"><a href="misTrabajos.php">'.$comentarios[$i]['contenido'].'</a></p>
						<p class="wb-stl-normal" style = "border-bottom: 1px solid #7afb3a;"> </p>
					</td>
				</tr>
			';
		}
		$salida.= '
			</table>';
		return $salida;
	}
}
?>
