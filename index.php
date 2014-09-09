<!DOCTYPE html>
<html>
<head>
<title>Badge Tracker</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/main.js"></script>
</head>

<body onload ="init()">
	<div class="header">
	    <a href=".">
	        <div class="logo"></div>
	        <h2 class="title">138th Scout Group Badge Tracker</h2>
	    </a>
	</div>
	<div class="content-wrapper">
	    <div class="main-content">
			<div id="container">
			  <div class="item transition metal">Metal</div>
			  <div class="item post-transition metal">Metal</div>
			  <div class="item alkali metal">Metal</div>
			  <div class="item transition metal">Metal</div>
			  <div class="item lanthanoid metal inner-transition">Metal</div> 
			  <div class="item halogen nonmetal">Non Metal</div> 
			  <div class="item alkaline-earth metal">Metal</div>
			</div>
			<button onclick = "filter('.metal')">Filter</button>
	    </div>
    </div>
    <div style="clear: both;"></div>
</div>
</body>

</html>
