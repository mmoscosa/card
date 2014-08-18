<?php require('config/routes.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, height=device-height, minimal-ui, user-scalable=no, ">
	<title>Martin Moscosa </title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/main.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.transit/0.9.9/jquery.transit.min.js"></script>
	<script src="/js/midway.js"></script>
	<script src="/js/min/card-min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="business-card" id="front">
				<div class="midway-horizontal midway-vertical panel panel-default">
				  <div class="panel-body">
				  </div>
				  <div class="footer">
				  	mmoscosa <span>Meet on the Level</span>
				  </div>
				  <div class="low-footer">&nbsp;</div>
				</div>
			</div>
			<div class="business-card" id="back">
				<div class="midway-horizontal midway-vertical panel panel-default">
				  <div class="top">&nbsp;</div>
				  <div class="panel-body">
				  	<div id="name">
				  		Martin  <span class="apellido">Moscosa</span> 
				  		<span class="position">Project Manager & Web Developer</span>
				  	</div>
				  </div>
				  <div class="details-container">
				  	<ul id="details">
				  		<li id="location">
				  			<i class="fa fa-map-marker"></i>				  			
				  			<a href="https://goo.gl/maps/Pi9po">
					  			<ul>
					  				<li>Guadalajara, Jalisco</li>
					  				<li>Mexico</li>
					  			</ul>
				  			</a>
				  		</li>
				  		<li id="telephone">
				  			<i class="fa fa-phone"></i>		
				  			<ul>
				  				<li><a href="tel:+52 (1) 333 50 51 745">+52 333 50 51 745</a></li>
				  			</ul>		  			
				  		</li>
				  		<li id="online">
				  			<i class="fa fa-globe"></i>	
				  			<ul>
				  				<li><a href="mailto:martin.moscosa@mmoscosa.com?subject=Business Card">martin.moscosa@mmoscosa.com</a></li>
				  				<li><a href="http://mmoscosa.com">http://mmoscosa.com</a></li>
				  			</ul>			  			
				  		</li>
				  	</ul>
				  </div>
				  <div class="low-footer">&nbsp;</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
	  <div class="container">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="http://mmoscosa.com">mmoscosa.com</a>
	    </div>
	    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      
      <ul class="nav navbar-nav navbar-right">
      	<li><a href="https://twitter.com/mmoscosa"><i class="fa fa-twitter"></i><span class="visible-xs">Twitter</span></a></li>
      	<li><a href="http://lnkd.in/bsgnfhv"><i class="fa fa-linkedin"></i><span class="visible-xs">LinkedIn</span></a></li>
        <li><a href="/vcard/Martin Moscosa.vcf">Add me to your contacts (vCard)</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
	  </div>
	</nav>
</body>
</html>
