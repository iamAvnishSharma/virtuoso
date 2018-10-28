<html>
<head>
<title>Virtuoso Employee Portal</title>
<style>

body{
	background-color:#d3d3d3;
}
	ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdownbar {
  float: left;
  overflow: hidden;
}

.dropbtn {
    background-color: #d3d3d3;
    color: #696969;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    width: 300px;
    text-align: left;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #dcdcdc;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    width: 300px;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}


.dbcontainer{

	background-color: white;
	border-style: solid;
	margin: 10px;
	padding: 20px;
	border:10px;
	border-color: #a9a9a9;
	height: 440px;

}


.dbgrid{
	border-style: solid;
	width:400px;
	height: 200px;
	align-self: left;
	border-color: #a9a9a9;
	border-width: 1px;
	display: inline-block;
	align-self: auto;
	margin-bottom: 20px;


}

.db{
	display: inline-block;
	justify-content: center;
	width: 400px;
	margin-right: 10px;
	margin-bottom: 30px;	
	margin-left: 10px;
}

.boxestopbar{

	height:30px; 
	border-bottom: solid #a9a9a9 1px;
	background-color: #dcdcdc;
	padding: 7px 0 0 7px;
	vertical-align: middle;

}
</style>
</head>

<body>

<div> 
<ul>
  <li style="padding: 4px;"><input type="image" src="apps.png" alt="Apps"></li>
  <li><a>VIRTUOSO 365</a></li>
  <li><a href="services.html" target="_blank">Services</a></li>
  <li><a>Dashboard</a></li>
  <li style="float: right; margin-right: 25	px;"><a href="logout.php">Log Out</a></li>
</ul>
</div>
<div style="height: 10px; background-color: white;"></div>
<div style="height: 10px; background-color:#d3d3d3;"></div>
<div class="dropdown">
<button onclick="myFunction()" class="dropbtn" style="padding-left: 20px; font-size: 20px;">System Dashboards</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="#">Customer Service Manager Dashboard</a>
    <a href="#">Customer Service Executive Dashboard</a>
    <a href="#">Field Service Administrator Dashboard</a> 
  </div>
</div>

<div class="dbcontainer">
	<div class="db">
		<div class="dbgrid">
			<div class="boxestopbar"> Case Upsell Leaders </div>
			
		</div>
		<div class="dbgrid">
		<div class="boxestopbar"> Case by origin </div>
		 </div>
		
	</div>

	<div class="db">
		<div class="dbgrid">
			<div class="boxestopbar"> Case priority </div>
			
		</div>
		<div class="dbgrid">
			<div class="boxestopbar"> Case by incident type </div>
		</div>
		
	</div>

	<div class="db" >
		<div class="dbgrid">
			<div class="boxestopbar"> My Activities </div>
			
		</div>
		<div class="dbgrid">
			<div class="boxestopbar"> Performance </div>
		</div>
		
	</div>
	
</div>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

</body>
</html>
