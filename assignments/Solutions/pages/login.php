<?php
// from github.com/sshaper/cps276_examples/blob/master/php-hashed-login/classes/Admin.php
//require_once 'Solutions\classes\Pdo_methods.php';	
//C:\Users\offic\Desktop\cps276\assignments\Solutions\classes\Pdo_methods.php

function login(){
		if($records == 'error'){
			return "There was an error logging it";
		}
		
		/** */
		else{
			if(count($records) != 0){
	            /** IF THE PASSWORD IS NOT VERIFIED USING PASSWORD_VERIFY THEN RETURN FAILED, OTHERWISE RETURN SUCCESS, IF NO RECORDS ARE FOUND RETURN NO RECORDS FOUND. */
	            if(password_verify($post['password'], $records[0]['password'])){
	                session_start();
	                $_SESSION['access'] = "accessGranted";
	                return "success";
	            }
	            else {
	                return "There was a problem logging in with those credentials";
	            }
			}
			else {
				return "There was a problem logging in with those credentials";
			}
		}
    }






?>


<!DOCTYPE html>
	<html lang="en">
	<head>
		<title>login page</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
			
	</head>
	<body>

	<main class="container"> 
			<form method='post' action='index.php?page=login'>
			<h1>Login</h1>
			
			<div class="form-group">
				<label for="email">Email</label>
				<input type="text" class="form-control" name="email" id="email">
			</div>

			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" name="password" id="password">
			</div>

			<div class="form-group">
				<input type="submit" class="btn btn-success" name="submit" id="submit" value="Login" >
			</div>

		</main>
	</body>
	</html>
	