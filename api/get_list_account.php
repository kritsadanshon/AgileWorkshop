<?php
	include './connect.php';
 
	var account_id = $GET["id"];
	
	$result_query = mysqli_query($link, $query_string);
	while($row = mysqli_fetch_assoc($result_query)){
		var_dump($row);
	}
?>