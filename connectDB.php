<?php
	$con = mysql_connect("localhost","root","");
	if(!$con)
		die("Cannot connect to MySQL: ". mysql_error());
	
	$dbSelect = mysql_select_db("camjobs",$con);
	if(!$dbSelect)
		die("Cannot connect to camjobs: ".mysql_error());
?>