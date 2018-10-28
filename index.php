<html>
<head>
<title>Virtuoso Portal</title>

<style>

body{
	background-color: black;
	height: 100%;
	align-items: center;
	justify-content: center;
}
.cir{
	text-align: center;
}
.cir div
{ display: inline-block;
vertical-align: middle; }
.cust,.emp {
	height:150px;
	width: 150px;
	background-color: #808080;
    border: none;
    color: white;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 50%;
}

.cust:hover, .emp:hover{
	background-color: #0b4260;
}
</style>

<script>

	function openCustLogin() {
		window.open("customerlogin.php");
	}

	function openEmpLogin() {
		window.open("employeelogin.php");
	}
	

</script>
</head>

<body>
<div style="font-size: 35px; color:#d3d3d3; text-align: center; vertical-align: middle; padding: 200px 200px 0px 200px;"> WELCOME TO VIRTUOSO </div>

<div class="cir">
	<div style=" padding-top: 30px; padding-right:25px; "> <button class="cust" onclick="openCustLogin()">Customer </button></div>
	<div style=" padding-top: 30px; padding-left: 25px; "><button class="emp" onclick="openEmpLogin()">Employee </button></div>
</div>
</body>
</html>