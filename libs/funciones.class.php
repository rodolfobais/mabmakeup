<?php
// session_start();
class funciones{
	private $dir = '';
	private $db = '';
	function __construct($param){
		$this -> dir = $param;
// 		echo "<br/>path: ".$_SERVER['DOCUMENT_ROOT'].'/admin/configs/default.conf.php<br/>';
		require_once $_SESSION['rootSite'].'classes/dataBase.class.php';
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
	function getComentarios($cant){
		$sql = "SELECT `date` as fecha, `comentario` as contenido FROM comentarios order by date desc LIMIT 0 , ".$cant."";
// 		// 	  	 echo $sql;
		$comentarios = $this -> db -> QueryFetchArray($sql);
// 		// 		echo "<pre>"; print_r($sql);echo "</pre>";
		
		$salida = '';
		
		for ($i = 0; $i < count($comentarios); $i++) {
			$salida.= '
				<p class="wb-stl-normal"> </p>
				<p class="wb-stl-normal">'.$comentarios[$i]['fecha'].'</p>
				<p class="wb-stl-normal" style = "height:80px;overflow:auto;"><a href="comentarios.php">'.$comentarios[$i]['contenido'].'</a></p>
				<p class="wb-stl-normal" style = "border-bottom: 1px solid #7afb3a;"> </p>
			';
		}
		return $salida;
	}
	function getMisTrabajos($cant){
		$sql = "SELECT `fecha`, `imagen`, `comentario` FROM mistrabajos order by id desc LIMIT 0 , ".$cant."";
		// 		// 	  	 echo $sql;
		$comentarios = $this -> db -> QueryFetchArray($sql);	
		$salida = '';
		for ($i = 0; $i < count($comentarios); $i++) {
			$salida.= '
				<tr>
					<td style = "width: 230px">
						<img alt="" src="gallery/'.$comentarios[$i]['imagen'].'" style="width: 220px; height: 220px;">
					</td>
					<td style = "vertical-align:text-top;">
						<p class="wb-stl-normal">'.$comentarios[$i]['fecha'].'</p>
						<p class="wb-stl-normal" style = "height:200px;overflow:auto;"><a href="misTrabajos.php">'.$comentarios[$i]['comentario'].'</a></p>
						<p class="wb-stl-normal" style = "border-bottom: 1px solid #7afb3a;"> </p>
					</td>
				</tr>
			';
		}
		return $salida;
	}
	function getDocumentos(){
// 		echo "<pre>"; print_r($_SESSION);echo "</pre>";
		$sql = "SELECT 
					`nombre`, 
					(SELECT `descrp` as valor FROM `cursos` where `cursos`.`id` = `documentos`.`idcurso`) as idcurso, 
					`fecha` 
				FROM `documentos` 
				WHERE `documentos`.`idcurso` IN 
				(SELECT `alumno_curso`.`idcurso` FROM `alumno_curso` WHERE `alumno_curso`.`idalumno` = '".$_SESSION['userId']."')
				ORDER BY `documentos`.`idcurso`";
		// 		// 	  	 echo $sql;
		$comentarios = $this -> db -> QueryFetchArray($sql);
		$salida = '
			<tr>
				<td>Curso</td>
				<td>Documento</td>
			</tr>';
		for ($i = 0; $i < count($comentarios); $i++) {
			$salida.= '
			<tr>
				<td>
					'.$comentarios[$i]['idcurso'].'
				</td>
				<td>
					<a href="gallery/'.$comentarios[$i]['nombre'].'" target = "_blank">'.$comentarios[$i]['nombre'].'</a>
				</td>
			</tr>
			';
		}
		return $salida;
	}
}
?>
