
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> AgroFair | Enter Information	</title>

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
		background-image: url("icon/camera.svg");
		object-fit: contain;
		margin-top: 50px;
		background-size: 100%;background-repeat: no-repeat;
	}

		#gps{
		width: 150px;
		height: 150px;
		background-image: url("icon/gps.svg");
		margin-top: 50px;background-size: contain;
		background-repeat: no-repeat;
	}

	.form-control{
		margin-top: 30px;
		background-color: transparent;
		border: none;
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
		margin-top: 40px;
		font-weight: bold;
		max-width: 300px;
		border-radius: 5px;
		-webkit-transition:0.3s ease;
	}

	.btn:hover{
		background-color: #6eb420;
	}

	input[type="file"]{
		margin-top: -30px;
		margin-left: 280px;
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
		<center>
		<h1>Enter the required information</h1>
		</center>
			<div class="col-lg-2 col-lg-offset-3">
				<div id="cam"></div><br>
				<h5>Upload a <b>PHOTO</b> of the soil of your land</h5>
			</div>
			<div class="col-lg-2 col-lg-offset-2">
				<div id="gps"></div><br>
				<h5>Mark your <b>LOCATION</b> on the map (currently not available due to security reasons)</h5>
			</div>
		</div>
		<div class="row">
			<form id="basic_data" action="/bin/back/farm/soil_upload.php" method="post" enctype="multipart/form-data">
				<input type="file" accept="image/*" name="soil" id="soil" required>
				<input type="number" name="size" placeholder="Enter size of the field (in acres)" class="form-control form-group" required min="0">
				<input type="number" name="lat" style="display: none;" value="25.4670"><input type="number" name="long" style="display: none;" value="91.3662">
				<input type="submit" name="submit" class="btn btn-primary btn-block" required>
			</form>
		</div>
	</div>
</main>
</body>
</html>