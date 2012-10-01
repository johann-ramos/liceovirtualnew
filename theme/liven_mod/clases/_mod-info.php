<?php
	error_reporting(E_ALL);
	ini_set('display_errors', '1');

	require_once(dirname(__FILE__) . '/database.php');
	class Moodle{
		public function getData(){
			$array = Array();
			$db = new MySQL();
			$query = "SELECT * FROM ".PREFIX."course WHERE format = 'site'";
			$consulta = $db->consulta($query);
				while($valores = $db->fetch_array($consulta)){
					$array[] = $valores;
				}
			return $array;
		}	
	}
?>
