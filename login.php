<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> AgroFair | Login	</title>

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

	a{
		margin-top: 20px;
		font-size: 20px;
	}
	

	.navbar-brand{
	font-size: 30px;
	}
	
	.navbar-default{
		background-color: transparent;
	}

	.row{
		margin-top: 20vh;
	}

	h1#title{
		margin-top: 100px;
	}

	img{
		height: 100px;
		width: auto;
	}

	.form-control{
		width: 40%;
		margin: auto;

	}

	.row{
		margin: auto;
		padding-right: 90px;
		padding-top: 30px;
	}

	#cam{
		width: 150px;
		height: 150px;
		background-image: url("icons/camera.svg");
		object-fit: contain;
		margin-top: 50px;
		background-size: 100%;background-repeat: no-repeat;
	}

		#gps{
		width: 150px;
		height: 150px;
		background-image: url("icons/gps.svg");
		margin-top: 50px;background-size: contain;
		background-repeat: no-repeat;
	}

	.form-control{
		margin-top: 40px;
		background-color: transparent;
		border: none;
		max-width: 500px;
		box-shadow: none;
		border-bottom: 1px solid black;
		border-radius: 0px;
	}

	.form-control:focus{
		box-shadow: none;
		border-bottom: 1px solid #92ef00;
	}

	.btn{
		background-color: #92ef00;
		border: none;
		height: 60px;
		font-size: 20px;
		padding-top: 5px;
		margin: auto;
		margin-top: 90px;
		font-weight: bold;
		max-width: 200px;
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
<nav class="navbar navbar-default">
	<div class="container">
		<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
			<h1 class="navbar-brand">AgroFair</h1>
		</div>
	</div>
</nav>
<main>
	<div class="container">
		<div class="row">
		<center><h1>Log In</h1></center>
			<div class="col-lg-8 col-lg-offset-2">
			<form id="login" action="/bin/back/farm/login.php" method="post">
				<input type="text" name="name" placeholder="Username" class="form-control form-group" required>
				<input type="password" name="passwd" placeholder="Password" class="form-control form-group" required>
				<input type="submit" name="Submit" class="btn btn-primary btn-block" required>
			</form>
		</div>
	</div>
	</div>
</main>
</body>
</html>