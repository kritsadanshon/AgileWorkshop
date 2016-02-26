<?php
	include './connect.php';
 
	var account_id = $GET["id"];
	
	$query_string = "SELECT `account_id`,`account_name`,`bank_code`,`acc_type`,`logo_path` FROM `ACCOUNT`;";
	$result_query = mysqli_query($link, $query_string);
	while($row = mysqli_fetch_assoc($result_query)){
		var_dump($row);
	}
?>