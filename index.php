<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> AgroFair | Home	</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link rel="stylesheet" href="animate.css">

<style type="text/css">
body{
	overflow-x: hidden;
  background-color:white;
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

	.about h1{
		font-size: 50px;
	}

	.about p{
		font-size: 20px;
		color: white;
	}

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
	background-color: white;
	height: 100%;
	}

	.main{
	background-color: white;
	min-height: 100vh;
	}

	h4{
	font-family: "Helvetica";
	font-weight: lighter;
	font-size: 23px;
	margin-left: 30px;
	}


	img#logo{
		width: 100px;
		height: 100px;
	}

	img#andro{
		width: 450px;
		margin: 0px;
	}

	@media screen and (max-width: 500px){
		img#andro{
			width: 300px;
		}
	}

	.slant{  
    width: 0;
	height: 0;
	border-style: solid;
	border-width: 0 0 500px 1920px;
	border-color: transparent transparent #92ef00 transparent;
	margin-top: -500px;
	}

	.about{
		width: 100%;
		height: 90px;
		background-color: #92ef00;
		margin-top: 0px;
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

	.inp:focus{
		box-shadow: none;
		border-bottom: 1px solid #7ed221;
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
	@font-face {
  font-family: "Arciform";
  src: url("fonts/Arciform.otf"); 
  }
  @font-face{
    font-family: "LemonMilk";
    src: url("fonts/LemonMilk.otf");
}
    
	.box{
  position: relative;
  background: white;
  height: 400px;
  width: 600px;
  margin: auto;
  display: block;
  border-top: solid 0.1px white;
  margin-top: 8%;
}

.vueconf-logo {	
position: absolute;
height: 50%;
width: 50%;
top: 25%;
left: 25%;
animation: slideInBounce 1s 1,
flip 0.5s 1s 1;
}

.sun{
  position: absolute;
  height: 20%;
  width: 30%;
  right: 20%;
  top: 10%;
}

.bush{
  position: absolute;
  height: 20%;
  width: 15%;
  right: 18%;
  bottom: 21%;
  //border: solid red 1px;
}

.tree-left{
  position: absolute;
  height: 25%;
  width: 20%;
  left: 5%;
  bottom: 25%;
}

.growActive{
  animation: grow 0.5s 1;
}

.growShrinkActive{
  animation: growShrink 0.5s 1;
}

.tree-right{
  position: absolute;
  height: 30%;
  width: 35%;
  left: 9%;
  bottom: 25%;
}

@keyframes slideInBounce {
  0%{
    transform: rotate(-180deg);
    top: -100%;
  }
 70%{
    transform: rotate(-180deg);
    top: 33%;
  }
  100%{
    transform: rotate(-180deg);
    top: 25%;
  }
}

@keyframes flip{
  0%{
    transform: rotate(-180deg);
  }
  100%{
    transform: rotate(0deg);
  }
}

@keyframes grow{
  0%{
    transform: translatey(100%);
    
  }
  100%{
    transform: translatey(0%);
  }
}

@keyframes growShrink{
  0% {
    transform-origin: center;
    transform: scale(0);
  }
  50% {
    transform-origin: center;
    transform: scale(1.3);
  }
  100% {
    transform-origin: center;
    transform: scale(1);
  }
}
.arciform{
	font-family: LemonMilk;
	margin-top:350px;
	width:100%;
	text-align:center;
  font-size:100px;
  animation-delay: 3s;
  animation-duration:3s;
}
#myDiv{
	display:none;
}
#app{
  animation-delay: 9.2s
}

</style>
</head>
<body onload="hello()">
<div id="logo-animation"><div id="app" class="animated bounceOutDown">
<div class="box">
 
<svg class="vueconf-logo" viewBox="0 0 191 169" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;"><g id="VueConf-Logo"><path id="VueConf-Triangle-Green" d="M95.04,0l95.04,168l-190.08,0l95.04,-168Z" style="fill:#92ef00;"/><path id="VueConf-Triangle-Blue" d="M95.04,67.95l61.624,100.05l-123.248,0l61.624,-100.05Z" style="fill:#1d2f00;"/><path id="VueConf-Triangle-White" d="M95.04,122.992l27.51,45.968l-55.02,0l27.51,-45.968Z" style="fill:#fff;"/></g></svg>
  
  <svg v-if="showSun" v-bind:class="sunClass"x viewBox="0 0 89 87" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;"><g id="Sun"><ellipse id="Sun-Circle-White" cx="44.28" cy="43.2" rx="44.28" ry="43.2" style="fill:#92ef00;"/><ellipse id="Sun-Circle-Green" cx="44.28" cy="43.2" rx="26.88" ry="26.224" style="fill:#fff;"/></g></svg>
  
  <svg class="bush" viewBox="-5 -20 70 100" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;"><g id="Bush"><ellipse v-bind:class="bushCircleLeftClass" v-if="showBushCircleLeft" id="Bush-Circle-Left" cx="29.4" cy="28.32" rx="29.4" ry="28.32" style="fill:#92ef00;"/><ellipse v-if = "showBushCircleRight"  v-bind:class="bushCircleRightClass" id="Bush-Circle-Right" cx="58.8" cy="38.76" rx="18.562" ry="17.88" style="fill:#92ef00;"/></g></svg>
  
  <svg class="tree-left" viewBox="0 -10 77 147" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;"><g id="Tree-Left"><rect v-bind:class="treeLeftBaseClass" v-if="showTreeLeftBase" id="Tree-Left-Base" x="33.171" y="42.234" width="10.32" height="104.766" style="fill:#1d2f00;"/><ellipse v-bind:class="treeLeftCircleBottomClass" v-if="showTreeLeftCircleBottom" id="Tree-Left-Circle-Bottom" cx="38.331" cy="59.367" rx="38.331" ry="36.122" style="fill:#92ef00;"/><ellipse v-bind:class="treeLeftCircleTopClass" v-if="showTreeLeftCircleTop" id="Tree-Left-Circle-Top" cx="38.331" cy="23.245" rx="24.666" ry="23.245" style="fill:#92ef00;"/></g></svg>

<svg class="tree-right" viewBox="0 -16 110 171" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;"><g id="Tree-Right"><rect v-bind:class="treeRightBaseClass" v-if="showTreeRightBase" id="Tree-Right-Base" x="49.615" y="54.96" width="10.32" height="115.2" style="fill:#1d2f00;"/><ellipse v-if="showTreeRightCircle" v-bind:class="treeRightCircleClass" id="Tree-Right-Circle" cx="54.775" cy="56.76" rx="54.775" ry="56.76" style="fill:#92ef00;"/></g></svg>
  <p class="arciform animated jackInTheBox"> AGROFAIR</p>
</div>
</div></div>
<div id="myDiv" class="animated bounceInUp">
<nav class="navbar navbar-default">
	<div class="container">
		<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
			<h1 class="navbar-brand" style="opacity:1 !important;">Agrofair</h1>
		</div>
		
	</div>
</nav>
<div class="container main">
<div class="row">
		<div class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-4 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
		<h1 id="intro">Introducing the Agrofair Webapp</h1><br><br>
		<p>We feel that most farmers in India today are not in-line with continuously changing technology. Agrofair attempts to bridge this gap between the two by providing recommendations of crop based on the weather, soil type, rain and tries to increase the overall profitability of the farmer.
</p>
<p>
Currently, our product uses RGB image recognition in order to determine the soil type and geolocation to aggregate weather information, thus giving inputs on what crop the farmer should plant in order to make the most money.
</p>
We plan to 1. Add support for using an IoT device in order to determine various properties of the soil 2. Add english-text-to-hindi-speech support to increase user accessibility 3. Collect data based on the %age of farmers using our app and fine-tune our recommendations to enable them to earn more overall</p>
			<form>
				<a href="learn.php" type="submit" class="btn btn-primary btn-block">
					Start Using Agrofair
				</a>
			</form>
	</div>
	<div class="col-lg-4 col-lg-offset-2 col-md-5 col-md-offset-5 col-sm-4 col-sm-offset-4">
		<img src="img/andro.png" id="andro">
	</div>
	</div>
</div>
<div class="slant">	
</div>
<div class="about">
</div>
</div>
<script src="vue.js"></script>
<script>
var app = new Vue({
el: "#app",
data: {
    //treeLeft stuff
    showTreeLeftBase: false,
    showTreeLeftCircleBottom: false,
    showTreeLeftCircleTop: false,
    treeLeftBaseClass: "",
    treeLeftCircleBottomClass: "",
    treeLeftCircleTopClass: "",
    //treeRight stuff
    showTreeRightBase: false,
    showTreeRightCircle: false,
    treeRightBaseClass: "",
    treeRightCircleClass: "",
    //bush stuff
    showBushCircleLeft: "",
    showBushCircleRight: "",
    bushCircleLeftClass: "",
    bushCircleRightClass: "",
    //sun stuff
    showSun: false,
    sunClass : "sun"
  },
  methods: {
    toggleTreeLeftBase: function () {
      this.showTreeLeftBase = true
      this.treeLeftBaseClass = "growActive"
      setTimeout( () => {
        this.toggleTreeLeftCircleBottom()
 this.toggleTreeRightBase()
 this.toggleBushCircleLeft()
      }, 500)  
    },
    toggleTreeLeftCircleBottom: function () {

      this.showTreeLeftCircleBottom = true
      this.treeLeftCircleBottomClass = "growShrinkActive"
     setTimeout( () => {
      this.toggleTreeLeftCircleTop()
     }, 500)  
   },
    toggleTreeLeftCircleTop: function () {
     this.showTreeLeftCircleTop = true
     this.treeLeftCircleTopClass= "growShrinkActive"
   },
    toggleTreeRightBase: function() {
      this.showTreeRightBase = true
      this.treeRightBaseClass= "growShrinkActive"
      setTimeout(() => {
         this.toggleTreeRightCircle()
      }, 500)
    },
    toggleTreeRightCircle: function () {
      this.showTreeRightCircle = true
      this.treeRightCircleClass = "growShrinkActive"
      setTimeout(() =>{
        this.toggleSun()
      },250)
    },
    toggleBushCircleLeft: function () {       
      this.showBushCircleLeft = true
      this.bushCircleLeftClass = "growShrinkActive"
      setTimeout(() => {
        this.toggleBushCircleRight()
      }, 250)
    },
    toggleBushCircleRight: function () {                   
      this.showBushCircleRight = true
      this.bushCircleRightClass = "growShrinkActive"
    },
    toggleSun: function () {
      this.showSun = true
      this.sunClass = "sun growShrinkActive"
    }
  },
  created () {
    setTimeout( () => {
      this.toggleTreeLeftBase()
    }, 2000)  
  }
})
</script>
<script type="text/javascript">
      var myVar;
function hello() {
    myVar = setTimeout(showPage, 10000);
}
 
function showPage() {
	
  document.getElementById("logo-animation").style.display = "none";
  document.getElementById("myDiv").style.display = "block";

  }
 
  </script>

</body>
</html>