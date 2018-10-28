<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cutomer Portal</title>


	<style type="text/css">
		

	.smallbar{
		width: 100%; 
		height: 10px; 
		border-top: 1px solid; 
		border-bottom: 1px solid;
		 padding-top: 20px; 
		 margin-top:60px;
		  background-color: #dcdcdc; 
		  border-color: #d3d3d3;
		}

	.complaintlabel{

		height: 30px;
		
		background-color: #dcdcdc;
		border-bottom: 1px solid #bcbcbc; 
		
		padding-top: 10px;
		padding-left: 10px;
	}

	.compsubmit{

		width: 100%;
		height: 37px;
		background-color: #dcdcdc;
		border:solid 1px #bcbcbc ;


	}
	.compsubmit:hover{

		border:solid 1px gray;
	}

	.contacts{
		padding-top: 30px;
		font-size: 18px;
		padding-left: 10px;
	}
	

	</style>
</head>



<body>

	<div style="padding-top: 20px;"> 
		<div style="display: inline-block; float: left; padding-left: 20px;"><input type="image" name="" src="cases.png"></div>
		<div style="float: left; padding-left: 10px; padding-top: 4px; font-size: 20px;">Customer Portal</div>
		<div style="display: inline-block;float: right;margin-right: 20px;"><button id="abc" style="width: 100px; height: 30px; 
		border: 1px solid #d3d3d3; background-color: #dcdcdc; font-size: 15px;"><a href="logout.php"> Log Out </a></button></div>
	</div>

	<div class="smallbar">
	</div>


	<div style="margin-left: 60px; margin-right: 60px;">
		<div style=" background-color: white; width: 100%; height: 20px;"></div>
		<div style="background-color: #dcdcdc; width: 100%; height: 100px;text-align: center; padding-top: 20px; font-size: 40px;">Welcome to the Customer Portal!
			<br>
		<div style="font-size: 20px; padding-top: 10px;"> Trust us, we are always here to help.</div>
		</div>
		<div style=" background-color: white; width: 100%; height: 30px;"></div>
		<div>
			<div style="width:55%; background-color:white;height:300px;float: left; border: solid 1px #bcbcbc;">
				<div class="complaintlabel">Please explain your problem:</div>
				<div><textarea style="width:673px; height:206.5px; border: none; text-indent: 10px; padding-top: 10px;"></textarea></div>
				<div><button class="compsubmit">Submit</button></div>
			</div>
			
			<div style="width:40%; background-color:white;height:300px;float: right; border: solid 1px #bcbcbc;">
				<div class="complaintlabel">Get in touch with us!</div>
				<div class="contacts">Phone: +91-9404585798</div>
				<div class="contacts" style="padding-bottom: 20px;">Email: help@virtuoso.com</div>
				<hr>
				<div class="contacts" style="text-align: center; padding-top: 10px;">Want us to call you back?</div>
				<div class="contacts" style="text-align: center;">Give a miss-call on 1800-800-999</div>
			</div>
		</div>



	</div>

</body>


</html>