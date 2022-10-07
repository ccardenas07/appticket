<?php

	@session_start();
	include("dbFunctions.php");
	//POST Variables
	$name=$_POST['name'];
	$lastname=$_POST['lastname'];
	$mail=$_POST['mail'];
	$phone="o".$_POST['phone'];
	$ci="o".$_POST['ci'];
	$fecha= date("Y-m-d H:i:s");
	
	 if(!(isset($_POST['phone'])))
	 {
		$phone=null;
	 }
	 if(!(isset($_POST['mail'])))
	 {
		$mail=null;
	 }
	//Check if every mandatory variable is not NULL
	if (!(isset($_POST['name'])) || !(isset($_POST['lastname'])) || !(isset($_POST['ci']))) {
		echo "error";
		exit;
	}
	
	//Establish DB connection
	connectToDB();
	$result=0;
	//Verify the existence of a user: if exists UPDATE city, else INSERTS into the DB
	$selection= mysql_query("SELECT id FROM  ticket WHERE  ci ='$ci'");
	$result = @mysql_result($selection,0);
	if($result != null)
	{
		//echo "si hay";
		$updateQuery = "UPDATE ticket  SET name= '$name',lastname= '$lastname',phone='$phone',mail='$mail',fecha='$fecha',ip='".$_SERVER['REMOTE_ADDR']."' WHERE id = '$result';";
		//Try to update into database
		if (!mysql_query($updateQuery, $connection))
		{
			die('Error: ' . mysql_error());
		}
		else
		{
			header( "Location: home.html");
			closeDB($connection);
			//echo "success update";
		}			
	}
	else
	{
		//echo "no hay";
		$insertQuery = "INSERT INTO ticket( name, lastname, mail, phone, ci, fecha, ip) VALUES ('$name','$lastname','$mail','$phone','$ci','$fecha','".$_SERVER['REMOTE_ADDR']."')";
		//Try to update into database
		if (!mysql_query($insertQuery, $connection))
		{
			die('Error: ' . mysql_error());
		}
		else
		{
			header( "Location: ticket.html");
			closeDB($connection);
			//echo "success update";
		}	
	}
	
?>