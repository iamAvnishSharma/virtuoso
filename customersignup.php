<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$email = $password = $confirm_password = "";
$email_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate email
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter a email.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM customer WHERE email = ?";
        
        if($stmt = mysqli_prepare($db, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Set parameters
            $param_email = trim($_POST["email"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $email_err = "This email is already taken.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($email_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO customer (email, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($db, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_email, $param_password);
            
            // Set parameters
            $param_email = $email;
            $param_password = $password;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: customerlogin.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($db);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>

<style>

body{
	background-color: #000000;
}
	

.topbar{
	width: auto;
	height: 10%;
	color:white;
	padding-top: 15px;
	 font-size: 40px; 
	 text-align: center;

}

.signupbox{
background-color: #dcdcdc;
	height: 520px;
	width: 700px;
	margin-left: auto;
	margin-right: auto;
	margin-top: 35px;

}
99
</style>

<script>
	
	function opencustlogin() {
		window.open("employeelogin.html");
		// body...
	}
</script>
</head>




<body>
	<div class="topbar">Virtuoso</div>

	<div class="signupbox">
		<div style="padding: 20px 10px 10px 10px; text-align: center; font-size: 30px;"> Welcome, let's get to know you! </div>
	

	<div>
	<form action="" method="POST">
  <div>
  	<div style="margin: 10px 30px;">
    <input type="text" placeholder="First name" name="fname" required style="width: 300px; padding-left: 10px; height: 30px;">

    
    <input type="text" placeholder="Last name" name="lname" required style=" width:300px; padding-left: 10px; height: 30px;" >
	</div>
    <input type="text" placeholder="Email" name="email" required style="padding-left: 10px;margin: 10px 30px; height: 30px; width: 627px;">
    <br>
    <span class="help-block"><?php echo $email_err; ?></span>

    <input type="number" placeholder="Contact number" name="contactno" required style="padding-left: 10px;margin: 10px 30px; height: 30px;width: 627px;">
    <br>

    <input type="password" placeholder="Password" name="password" required style="padding-left: 10px;margin: 10px 30px; height: 30px;width: 627px;">
    <br>
    <span class="help-block"><?php echo $password_err; ?></span>
    <input type="password-repeat" placeholder="Re-enter password" name="confirm_password" required style="padding-left: 10px;margin: 10px 30px;height: 30px;width: 627px;">
    <br>
    <span class="help-block"><?php echo $confirm_password_err; ?></span>
    
    <p style="margin: 10px 30px;">By creating an account you agree to our<a href="tnc.html" target="_blank" style="padding-left: 10px;color:dodgerblue">Terms & Privacy</a>.</p>


    <div style="margin-left: 30px; margin-bottom: 0px; margin-right: 30px;">
      <button type="submit" class="signupbtn" style=" background-color:#0b4260;width: 639px; height: 30px; border:none; color: white;">Sign Up</button>
    </div>
    <p style="margin-left: 30px; margin-top: 10px;">Already have an account?</p>
    <div style="margin-top: 0px; margin-left: 30px; margin-right: 30px;">
      <button type="submit" class="loginalt" style=" background-color:#0b4260;width: 639px; height: 30px; border:none; color: white;" onclick="opencustlogin()">Login</button>
    </div>
    <div style="margin-left: 30px; margin-top: 5px;margin-right: 30px;"><a href="index.php"> Back to home page</a></div>
  </div>
</form>

	</div>
</div>
</body>

</html>