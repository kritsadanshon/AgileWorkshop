<?php
	include './connect.php';
 
	$account_id = $_GET["id"];
	
	$query_string = "SELECT * FROM account WHERE account_id=".$account_id;
	$result_query = mysqli_query($link, $query_string);
	while($row = mysqli_fetch_assoc($result_query)){
		echo json_encode($row);
	}
?>