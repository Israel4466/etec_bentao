<?php

	

	$name = $_POST['name'];
	$age = $_POST['age'];
	
	//test the post data
	echo "<p>Nome: $name e tem $age anos</p>";
	
	$connection = new MongoDB\Client("mongodb://root:mongopwd@mongo:27017");
	
	$db = $connection->gettingstarted;
	$col = $db->users;
	

	$doc = ["name" => $name,"age" => $age];
	
	$col->insertOne($doc);
	echo "<p>User inserted successfully: ";
	
	
?>
