<?php
   include("config.php");
   session_start();

    
   if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: customerportal.php");
    exit;
    }
   $error = "";
   
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM customer WHERE email = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        $_SESSION["loggedin"] = true;
         header("location: customerportal.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
<head>
	<title>Customer Login</title>
<style>
body{
	
	background-image: url("bg1.jpg");
	background-size:cover;
	background-repeat: no-repeat;
	background-position: center;


}
.logindiv{

	background-color: white;
	height: 330px;
	width: 390px;
	margin-left: auto;
	margin-right: auto;
	margin-top: 150px;
}
.portalname{
	color: black; 
	padding-top: 10px;
	text-align: center; 
	padding-bottom: 5px; 
	padding-top: 25px; 
	font-size: 40px; 

}
</style>
</head>

<body>  

	<div class="logindiv">
		<div class="portalname">Virtuoso</div>
		<div style="text-align: center;">Customer</div>
        <div style="color: black; margin: 5px 30px; font-size: 20px;"> Sign in</div>
        <form action="" method="POST">
		<div style="margin: 20px 30px;"><input type="text" name="username" placeholder="Email or phone" size="43px"></div>
		<div style="margin: 20px 30px;"><input type="Password" name="password" placeholder="Password" size="43px"></div>
        <div style="margin: 20px 30px;"><button style="background-color:#0b4260;width: 333px; height: 28px; border:none; color: white;">Sign in</button></div>
        </form>
        <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
		<div style="margin: 0px 30px;">No account?<a href="customersignup.php" class="createacc"> Create one!</a></div>
		<div style="margin-left: 30px; margin-top: 5px;margin-right: 30px;"><a href="index.php"> Back to home page</a></div>
	</div>


</body>
</html>