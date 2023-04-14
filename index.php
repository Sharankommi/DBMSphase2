<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
	<link href="css/style.css" type="text/css" rel="stylesheet" media="all"> 
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" /> 
	<link href="css/font-awesome.css" rel="stylesheet">		
	<link href="//fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<title>DBMS PHASE-2</title>
</head>
<body>  
	
	<?php include_once('includes/header.php');?>	

	<div class="agileits-banner">
		<div class="bnr-agileinfo"> 
			</div>
		
			<div class="banner-text agileinfo">
				<h1>Welcome </h1> 
			<p>Bus Pass Registration</p> 
		
		</div>
	</div>

	<?php include_once('includes/footer.php');?>   
	
	<script src="js/jquery-2.2.3.min.js"></script> 
	<script src="js/SmoothScroll.min.js"></script> 
	<script src="js/jarallax.js"></script> 
	<script type="text/javascript">
		
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>  

	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	
    <script src="js/bootstrap.js"></script>
</body>
</html>