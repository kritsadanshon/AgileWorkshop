<?php
	include './connect.php';
 
	$account_id = $_GET["id"];
	
	$query_string = "SELECT `account_id`,`account_name`,`bank_code`,`acc_type`,`logo_path` FROM `account`";
	$result_query = mysqli_query($link, $query_string);
	while($row = mysqli_fetch_assoc($result_query)){
		var_dump($row);
	}
?>