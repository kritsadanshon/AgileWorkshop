<?php
	include './connect.php';
 
	var account_id = $GET["id"];
	
	$query_string = "SELECT * FROM `ACCOUNT`;";
	$result_query = $link->query($query_string);
	while($row = $result_query->fetch_assoc()){
		var_dump($row);
	}
?>