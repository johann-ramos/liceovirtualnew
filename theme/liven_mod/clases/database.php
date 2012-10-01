<?php
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
	include_once(dirname(__FILE__) . '/../../../config.php');
	//$data proviene del archivo config.php en la raíz del proyecto
	$data = Array('host'=>      $CFG->dbhost,
				'dbname'=>    $CFG->dbname,
				'user'=>      $CFG->dbuser,
				'pass'=>      $CFG->dbpass,
				'prefix'=>    $CFG->prefix);
				
	define('HOST', $data['host']);
	define('DBNAME', $data['dbname']);
	define('USER', $data['user']);
	define('PASS', $data['pass']);
	define('PREFIX', $data['prefix']);
	
	if(!class_exists('MySQL')){
		class MySQL{  
			//////////////////////////////////////////////////////
			private $SERVIDOR = HOST; 
			private $USUARIO  = USER;	
			private $PASSWORD = PASS;
			private $BD	  = DBNAME;	
			
			//////////////////////////////////////////////////////
			private $conexion;  			
			private $total_consultas;  
			//////////////////////////////////////////////////////
			
			public function MySQL()
			{  
				if(!isset($this->conexion)){  
					$this->conexion = (mysql_connect($this->SERVIDOR , $this->USUARIO , $this->PASSWORD)) or die(mysql_error());  
					mysql_select_db($this->BD , $this->conexion) or die(mysql_error());
					mysql_set_charset('utf8');
				}  
			}  
			//--------------------------------------------------//  
			public function consulta($consulta)
			{  
				$this->total_consultas++;  
				$resultado = mysql_query($consulta,$this->conexion);  
				if(!$resultado){
					echo 'MySQL Error: ' . mysql_error();
					echo "\nquery: " .$consulta;
					exit;  
				}  
				return $resultado;   
			}  
			//--------------------------------------------------//  
			public function fetch_array($consulta)
			{   
				return mysql_fetch_array($consulta);  
			}  
			//--------------------------------------------------//  
			public function num_rows($consulta)
			{   
				return mysql_num_rows($consulta);  
			}  
			//--------------------------------------------------//  
			public function getTotalConsultas()
			{  
			return $this->total_consultas;  
			}  
			//--------------------------------------------------//  
			public function help()
			{ 
				echo    "USAGE: 					<br>
					=============================			<br>
					\$db = new MySQL( );  				<br>
					\$consulta = \$db->\$consulta			<br>
					------------------------------			<br>
					funciones:					<br>
					----------					<br>
					1) consulta &nbsp;&nbsp;&nbsp;(\$consulta);	<br>
					2) fetch_array(\$consulta);			<br>
					3) num_rows &nbsp;(\$consulta);			<br>
					4) getTotalConsultas( );			<br>
					==============================			<br>
					 ";		
			} 
			//--------------------------------------------------//  
		}
	}
?>
