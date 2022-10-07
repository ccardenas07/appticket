<?php	

$connection = 0;
	
	function connectToDB(){	
		global $connection;
		
		$dbServer = "localhost";
		$dbUser = "appigluc_ecobike";
		$dbPass = "3c0b!ke_2014";
		$dbName = "appigluc_fb_ecobiketicket";
		
		/*$dbServer = "localhost"; // change this
		$dbUser = "root";// change this
		$dbPass = "";// change this
		$dbName = "indurama";// change this*/
		
		$maxIntents = 3;
		$intent = 0;
		$connection = mysql_connect($dbServer, $dbUser, $dbPass);
		
		
		while ( !$connection ){
			$intent++;		
			if ( $intent == $maxIntents ){
				echo "No se puede conectar con el servidor de BD";
				exit;
			}
			$connection = mysql_connect($dbServer, $dbUser, $dbPass); 
		}
		mysql_select_db($dbName) or die("Error de conexi&oacute;n con la BD");
		//echo "Conexion a BD $dbName OK";
	}
	
	function closeDB($con){
		mysql_close($con);
	}

?>