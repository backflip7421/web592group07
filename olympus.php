<!DOCTYPE html>
<?php
	$appid = "web592group07.appspot.com";
	$page = $_GET['p'];
	if($page=='') $page='main';
		$title = $page;
	function panel_include($title,$file,$ptype='default'){
		echo "<div class='panel panel-$ptype'>";
		echo "<div class='panel-heading'>$title</div>";
		echo "<div class='panel-body'>";
		if(file_exists($file)){
			include($file);
		}else{
			echo "ไม่พบไฟล์ $file";
		}
		echo "</div>";
		echo "</div>";
	}
	use google\appengine\api\cloud_storage\CloudStorageTools;
	function userpic($uid){
		global $appid;
		$userpic="gs://$appid/{$uid}.jpg";
		if(!file_exists($userpic)){
			return "user.png";
		}
		return CloudStorageTools::getImageServingUrl($userpic,["size"=>200]);
	}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
<link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>INSTANT - Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/css/bootstrap.css" rel="stylesheet">
  <link href="css/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet"> 
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  <link rel="stylesheet" href="animate/animate.css" />
  <link rel="stylesheet" href="animate/set.css" />
<link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet"> 
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
	<link type="text/css/jquery" rel="stylesheet" href="src.js">
	<link type="text/css/jquery" rel="stylesheet" href="nav.js">
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="images/favicon.ico">


  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="images/favicon.ico">
  <link rel="stylesheet" href="gallery/blueimp-gallery.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f4f2f2;
      padding: 25px;
    }
	#bordview {
		border: 2px solid grey;
	}
  </style>
   
  </head>

  <body>

    <!-- Static navbar -->
    <!-- Static navbar -->
	<!-- Static navbar -->

	<div id="headerwrap3">
	    <div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3">
					<h4></h4>
					<h1></h1>
					<h4></h4>
				</div>
			</div><! --/row -->
	    </div> <!-- /container -->
	</div><! --/headerwrap -->
	<div class="main-nav" class="navbar navbar-default" id="mainnav">
	 
	  	
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="main.php">
            <h1><img class="img-responsives" src="logo.png" alt="logo"></h1>
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li class="scroll active"><a href="main.php">HOME</a></li>
            <li class="scroll"><a href="#works">PRODUCTS</a></li> 
                            
            <li><?php include("main_user.php"); ?>   </li>
                 
          </ul>
        </div>
      </div>
    </div>
	<section id="works"></section>
	<div class="container">
		<div class="row centered mt mb">
			<h1>PRODUCTS</h1>
			<?php include("main_body_olympus.php"); ?>
			
		</div><! --/row -->
		<?php include("main_feedback_olympus.php"); ?>
	</div><! --/container -->
		
	<div id="social">
		<div class="container">
			<div class="row centered">
				
			
			</div><! --/row -->
		</div><! --/container -->
	</div><! --/social -->

	<div id="footerwrap">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-4">
					
				</div>
			
				<div class="col-lg-4">
					
				</div>
				<div class="col-lg-4">
					
				</div>
			</div>
		</div>
	</div><! --/footerwrap -->
	


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
<script>
$('a').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 600);
    return false;
});
</script>
<script>
$(document).ready(function() {
  var navpos = $('#mainnav').offset();
  console.log(navpos.top);
    $(window).bind('scroll', function() {
      if ($(window).scrollTop() > navpos.top) {
       $('#mainnav').addClass('navbar-fixed-top');
       }
       else {
         $('#mainnav').removeClass('navbar-fixed-top');
       }
    });
});
</script>

