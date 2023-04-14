<?php
include('includes/dbconnection.php');
session_start();
error_reporting(0);
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
	<title>Bus Pass Managament</title>
</head>
<body>  
	<?php include_once('includes/header.php');?>	
	
	<p><a href="index.php">Home</a> > About</p> 
	 
	
	<div class="welcome" id="welcome">
		<?php
$sql="SELECT * from tblpage where PageType='aboutus'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
		<div class="container">   
			<div class="agileits-title">
				<h3><?php  echo $row->PageTitle;?></h3>
			</div> 
			<div class="welcomerow-agileinfo">
				
				<p><?php  echo $row->PageDescription;?></p>
			</div> 
			</div> <?php $cnt=$cnt+1;}} ?>
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
	
	<script type="text/javascript" src="js/numscroller-1.0.js"></script>
	 
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	
	<script type="text/javascript">
		$(document).ready(function() {
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	
    <script src="js/bootstrap.js"></script>
</body>
</html>