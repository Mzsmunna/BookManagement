<?php
	ob_start();
	session_start();
	require_once 'dbconnect.php';
	
	// it will never let you open index(login) page if session is set
	if ( isset($_SESSION['Username'])!="" ) {
		header("Location: home.php");
		exit;
	}
	
	if( isset($_POST['btn-login']) ) {	
		
		$Username = $_POST['Username'];
		$Password = $_POST['Password'];
		
		$Username = strip_tags(trim($Username));
		$Password = strip_tags(trim($Password));
		
		$pass = hash('sha256', $Password); // password hashing using SHA256
		
		$res=mysql_query("SELECT * FROM users WHERE Username='$Username'");
		
		$row=mysql_fetch_array($res);
		
		$count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row
		
		if($row['Usertype']=="Admin")
		{
			if( $count == 1 && $row['Password']==$Password ) {
				$_SESSION['Username'] = $row['ID'];
			header("Location: home.php");
			} else {
				$errMSG = "Wrong Credentials, Try again...";
			}

		}else{
			if( $count == 1 && $row['Password']==$Password ) {
				$_SESSION['Username'] = $row['ID'];
			header("Location: homeb.php");
			} else {
				$errMSG = "Wrong Credentials, Try again...";
			}
		}
		
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Library Management- Login & Registration System</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>

<div class="container">

	<div id="login-form">
    <form method="post" autocomplete="off">
    
    	<div class="col-md-12">
        
        	<div class="form-group">
            	<h2 class="">Sign In.</h2>
            </div>
        
        	<div class="form-group">
            	<hr />
            </div>
            
            <?php
			if ( isset($errMSG) ) {
				
				?>
				<div class="form-group">
            	<div class="alert alert-danger">
				<span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                </div>
            	</div>
                <?php
			}
			?>
            
            <div class="form-group">
            	<div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
            	<input type="text" name="Username" class="form-control" placeholder="Username" required />
                </div>
            </div>
            
            <div class="form-group">
            	<div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
            	<input type="password" name="Password" class="form-control" placeholder="Your Password" required />
                </div>
            </div>
            
            <div class="form-group">
            	<hr />
            </div>
            
            <div class="form-group">
            	<button type="submit" class="btn btn-block btn-primary" name="btn-login">Sign In</button>
            </div>
            
            <div class="form-group">
            	<hr />
            </div>
            
            <div class="form-group">
            	<a href="register.php">Sign Up Here...</a>
            </div>
        
        </div>
   
    </form>
    </div>	

</div>

</body>
</html>