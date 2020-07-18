<!DOCTYPE html>
<html>
	<head>
		<title>Simple Poll</title>
		<style type="text/css">
			.outer {
				width: 300px;
				height: 10px;
				border: 1px solid #000;
				background-color: #fff;
			}
			.inner {
				height: 10px;
				background-color: #690;
			}
		</style>
	</head>
<body>
		
		
		<?php

			// suppress error notices
			error_reporting(E_ALL & ~E_NOTICE);
            
	          // database credentials
			$db_user = 'root';
			$db_password = '';
			$db_host = 'localhost';
			$db_name = 'dw'; 
// connect to database
$db = mysqli_connect ($db_host, $db_user, $db_password, $db_name) OR die ('Could not connect to MySQL: ' . mysqli_connect_error());

	                 // has a vote occurred?
			if(isset($_POST['submit']))
			{
				$error = array();
				
				// let's make sure they voted
			 	if(empty($_POST['nextpresident']))
				{
					$error['vote'] = 'You must vote. It is part of your civic responsibility.';	
				}
				
				// if no errors
				if(sizeof($error) == 0)
