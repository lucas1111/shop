<?php

	$password=md5(123123);
	echo $password;
	echo "<br>";
	$sql="insert admin(username,password, email) values('123','$password','123@qq.com')";
	echo $sql;