<?php
// from github.com/sshaper/cps276_examples/blob/master/php-hashed-login/classes/Admin.php
	function login($post){
	   
	    $pdo = new PdoMethods();
	    $sql = "SELECT username, password FROM admin WHERE username = :username";
		$bindings = array(
			array(':username', $post['username'], 'str')
		);

	    $records = $pdo->selectBinded($sql, $bindings);

		/** IF THERE WAS AN RETURN ERROR STRING */
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
        <form action="login.php" method="post">
        <h1>Login</h1>
        
        <div class="form-group">
            <label for="email">Name</label>
            <input type="text" class="form-control" name="email" id="email">
        </div>

        <div class="form-group">
            <label for="password">Email Adress</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-success" name="submit" id="submit" value="Login" >
        </div>

    </main>
</body>
</html>