<?php

$soil = $_GET['soil'];

switch ($soil) {
	case '0':
		$soil_name = 'Silt';
		break;
	case '1':
		$soil_name = 'Clay';
		break;
	case '2':
		$soil_name = 'Sand';
		break;
	default:
		break;
}

$soil_info =  file_get_contents('info/s' . $soil . '.txt');

$weather = ((json_decode(file_get_contents("http://api.openweathermap.org/data/2.5/weather?lat=" . $_GET['lat']  . "&lon=" . $_GET['lon'] . "&APPID=eecaca2e558f10ff81077761131e6f70"))) -> weather)[0] -> main;

?>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> AgroFair | Information	</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
</script>
<style>

	@font-face {
	font-family: "Helvetica";
	src: url('fonts/helv.ttf');
	}

	@font-face{
		
	font-family: "SF UI Display";
	src:url('fonts/sf.otf');
	}

	.container{
		margin-top: 20px;
	}

	#head{
		margin-left: 30px;
		margin-top: 10px;
		font-size: 40px;
	}

	body{
	background-color: #f9f9f9;
	height: 100%;
	overflow-x: hidden;
	}

	.main{
	background-color: #f9f9f9;
	min-height: 100vh;
}

	h4{
	font-family: "Helvetica";
	font-weight: lighter;
	font-size: 23px;
	margin-left: 30px;
	}

	hr{
	 max-width: 90%;
	 height: 0.5px;
	 background-color: black;
	}

	img#logo{
		width: 100px;
		height: 100px;
	}


	.container{
		margin-top: 20px;
	}

	#head{
		margin-left: 30px;
		margin-top: 10px;
		font-size: 40px;
	}

	hr{
	 max-width: 90%;
	 height: 0.5px;
	 background-color: black;
	}

	img#andro{
		width: 450px;
		margin: 0px;
		margin-top: -40px;
		margin-left: -140px;
	}

	.slantbr{  
    width: 0;
	height: 0;
	border-style: solid;
	border-width: 0 0 200px 1920px;
	border-color: transparent transparent #92ef00 transparent;
	margin-top: -350px;
	}


	.about{
		width: 100%;
		min-height: 500px;
		background-color: #92ef00;
		margin-top: -20px;
	}

	h1.intro{
		margin-top: 20px;
		font-size: 70px;
		color: black;
	}

	h1#weather{
		color: white;
	}

	#title{
		font-size: 40px;
		color: #92ef00;
		margin-bottom: 60px;
	}

	p{
		margin-top: -30px;
	}

	#weathpng{
		width: 500px;
		height: 500px;
		margin-top: 20px;
		background-image:url(icon/cloudy.svg);
		object-fit: contain;
		background-size: 100%;
		margin-bottom: 0px;
	}

	.navbar-brand{
		font-size: 30px;
	}

	#soilpng{
		width: 300px;
		height: 300px;
		background-position: center;
		margin-top: 20px;
		background-repeat: no-repeat;
		background-size: contain;
		background-image: url("img/soil.png");
	}

	.inp{
		background-color: #f7f7f7;
		margin-bottom: 50px;
		border: none;
		width: 50%;
		box-shadow: none;
		border-bottom: 1px solid black;
		border-radius: 0;
		padding: 0px;
	}

	p{
		font-size: 20px;
	}

	.inp:focus{
		box-shadow: none;
		border-bottom: 1px solid #7ed221;
	}

	ul{
		list-style-type: none;
		margin-left: -50px;
	}

	ul img{
		width: auto;
		height: 30px;
		opacity: 1;
		margin-top: -10px;
	}

	ul p{
		margin-left: 50px;
		font-size: 20px;
		margin-top: -30px;
	}

	@media screen and (max-width: 991px) {
    p{
    	text-align: center;
    	margin-top: 20px;
    }

    h1{
    	text-align: center;
    }

    ul img{
    	margin-left: 100px;
    }

    .info{
    	margin-top: 310px;
    }

    .oof{
    	margin-top: -770px;
    	margin-left: -50px;
    }

    .slantbr{
    	margin-top: 0px;
    }
}

@media screen and (max-width: 480px) {

    .oof{
    	margin-top: -830px;
    	margin-left: -80px;
    }
}

	@media screen and (max-width: 767px) {

    .oof{
    	margin-top: -790px;
    	margin-left: -80px;
    }

    .slantbr{
    	margin-top: 0px;
    }

    ul img{
    	margin-left: 50px;
    }
}

@media screen and (min-width: 480px) {

    .slantbr{
    	margin-top: -100px;
    }
}

@media screen and (min-width: 992px) {

    .slantbr{
    	margin-top: -250px;
    }
}

	.btn{
		margin:auto;
		margin-top: 80px;
		background-color: #92ef00;
		border: none;
		height: 60px;
		font-size: 20px;
		padding-top: 15px;
		font-weight: bold;
		max-width: 270px;
		margin-left: 0px;
		border-radius: 5px;
		-webkit-transition:0.3s ease;
	}

	.btn:hover{
		background-color: #6eb420;
	}

	.btn:active .btn-primary:active{
		background-color: #6eb420;
	}

	.about p{
		color: white;
	}

	.endbutt{
		margin-bottom: 30px;
		background-color: transparent;
		color: #fff;
		border: 2px solid white;
	}

	.endbutt:hover{
		color: #92ef00;
		background-color: white;
		border: 2px transparent;
	}

	.endbutt:active{
		display: block;
	}

	.endbutt:visited{
		margin-bottom: 30px;
		background-color: transparent;
		border: 2px solid white;
	}


</style>
</head>
<body>
<nav class="navbar navbar-default">
	<div class="container">
		<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
			<h1 class="navbar-brand">Agrofair</h1>
		</div>
		
	</div>
</nav>
<div class="container main">
<center><h1 id="title">Your Field</h1></center>
<div class="row">
		<div class="col-lg-5 col-lg-offset-1 col-md-7 col-md-offset-1 col-sm-8 col-sm-offset-2 col-xs-9 col-xs-offset-2 info">
		<h1 class="intro" ="intro">Soil - <?php echo ($soil == 0)?('Silt'):(($soil == 1)?('Clay'):('Sand')); ?></h1><br><br>
		<p><?php echo $soil_info; ?></p>
		<br><br><br>
	</div>
	<div class="col-lg-4 col-lg-offset-2 col-md-1 col-md-offset-0 col-sm-3 col-sm-offset-4 col-xs-3 col-xs-offset-4">
		<div id="soilpng"></div>
	</div>
	</div>
</div>
<div class="slantbr">	
</div>
<div class="about">
	<div class="container">
		<div class="row">
		<div class="col-lg-4 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-2 col-xs-3 col-xs-offset-2">
		<div id="weathpng"></div>
		</div>
		<div class="col-lg-5 col-lg-offset-2 col-md-6 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
		<h1 class="intro" id="weather">Weather Information</h1><br><br>
		<p><?php echo $weather; ?></p>
	</div>
	</div>
	<div class="row">
		<div class="col-lg-4 col-lg-offset-4">
		<a href="/crops.php" class="btn btn-block endbutt">Next</a>
	</div>
	</div>
</div>
</body>
</html>