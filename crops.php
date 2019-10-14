

<!DOCTYPE html>
<html>
<head>
	<title> AgroFair | Crops	</title>

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
	border-color: transparent transparent #f1f1f1 transparent;
	margin-top: -350px;
	}

	.slanttr{  
    width: 0;
	height: 0;
	border-style: solid;
	border-width: 0 1920px 200px 0;
	border-color: transparent #f1f1f1 transparent transparent;
	margin-top: 0px;
	}

	.navbar-brand{
		font-size: 30px;
	}

	.about{
		width: 100%;
		min-height: 500px;
		background-color: #f1f1f1;
		margin-top: -20px;
	}

	h1#intro{
		margin-top: 50px;
	}

	#title{
		font-size: 40px;
		color: #92ef00;
	}

	p{
		margin-top: -30px;
	}

	.thumbnail{
		width: 300px;
		height: 300px;
		border-radius: 300px;
		margin-top: 20px;
		background-color: black;
		background-size: cover;
	}

	a{
		font-size: 20px;
		margin-top: 20px;
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
		font-size: 16px;
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


</style>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
			<h1 class="navbar-brand">AgroFair</h1>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav navbar-right">
			</ul>
		</div>
	</div>
</nav>
</div>
<div class="container main">
<center><h1 id="title">What Crops you should buy</h1></center>



<div class="row">
		<div class="col-lg-5 col-lg-offset-1 col-md-7 col-md-offset-1 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2 info">
		<h1 id="intro"><?php echo 'Maize' ?></h1><br><br>
		<p>
			

		</p>
		<br><br><br>
		<ul>
		<li>
			<img src="/icon/water.png" class="water"><p> Meanwater Required : <?php echo '1000' ?></p>
		</li>
		<br><br>
		<li>
			<img src="/icon/rupee.png" class="water"><p> Profit : <?php echo '96000'  ?></p>
		</li>
		</ul>
	</div>
	<div class="col-lg-4 col-lg-offset-2 col-md-1 col-md-offset-0 col-sm-3 col-sm-offset-4 col-xs-3 col-xs-offset-4">
		<div class="thumbnail oof" style="background-image: url('/img/c<?php echo '8'; ?>.jpg')"></div>
	</div>


</div>



<br><br>

</div>



</body>
</html>