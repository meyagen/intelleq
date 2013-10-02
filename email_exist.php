<?php

$email = &$_POST['emails'];

	mysql_connect("localhost", "root", "") or die("We couldn't connect!");
	mysql_select_db("cms");
	
	$useremail = mysql_query("SELECT email FROM users WHERE email='$email'");
	$countermail = mysql_num_rows($useremail);

	if($countermail!=0){
		echo 1;
	}
	else{
		$useremail = mysql_query("SELECT email_address FROM membership WHERE email_address='$email'");
		$countermail = mysql_num_rows($useremail);
		if($countermail!=0){
			echo 1;
		}
		else echo 0;
	}

?>