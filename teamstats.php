<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "csgostats";
$data = $_GET['data'];
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * from teams where name='$data'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
?>
<html>
<head>
  <title><?php echo ''.$row['name']?></title>
  <a href="home.html"><img src="img/logo.png" align="left" width="15%" height="15%"></a>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="body1.css">
  <link rel="stylesheet" type="text/css" href="teamstats.css">
  <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
  <script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
  <script>
  window.onscroll = function (){
    var d1 = "<?php echo ''.$row['d2'] ?>";
    var d3 = "<?php echo ''.$row['mirage'] ?>";
    var d4 = "<?php echo ''.$row['inferno'] ?>";
    var d5 = "<?php echo ''.$row['cache'] ?>";
    var d6 = "<?php echo ''.$row['train'] ?>";
    var d7 = "<?php echo ''.$row['overpass'] ?>";
    var d8 = "<?php echo ''.$row['vertigo'] ?>";
    d1 = parseInt(d1.substr(0, 2));
    d3 = parseInt(d3.substr(0, 2));
    d4 = parseInt(d4.substr(0, 2));
    d5 = parseInt(d5.substr(0, 2));
    d6 = parseInt(d6.substr(0, 2));
    d7 = parseInt(d7.substr(0, 2));
    d8 = parseInt(d8.substr(0, 2));

  var options = {
    backgroundColor: "black",
    theme: "dark1",
  	animationEnabled: true,
  	title: {
  		text: "Map Strength Comparison"
  	},
  	axisY: {
  		title: "",
  		suffix: "%",
  		includeZero: false
  	},
  	axisX: {
  		title: "Maps"
  	},
  	data: [{
  		type: "column",
  		yValueFormatString: "",
  		dataPoints: [
  			{ label: "Dust2", y: d1 },
  			{ label: "Mirage", y: d3 },
  			{ label: "Inferno", y: d4 },
  			{ label: "Cache", y: d5 },
  			{ label: "Overpass", y: d6 },
  			{ label: "Train", y: d7 },
  			{ label: "Vertigo", y: d8 },

  		]
  	}]
  }
  window.onscroll = null;
  $("#chartContainer").CanvasJSChart(options);
  }
  </script>
</head>
<body>
<div class="parallax">
<div class="nav">
<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link" href="index.html">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="players.html">Players</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="#">Teams</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="events.html">Events</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="legends.php">Legends</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="login.html">Login</a>
  </li>
</ul>
<div class="navicons" style="margin-left: 25%;">
  <a target="_blank" href="http://www.facebook.com/CounterStrike"><img src="img/icon_fb.png"></a>
  <a target="_blank" href="https://www.instagram.com/csgo_dev/"><img src="img/icon_instagram.png"></a>
  <a target="_blank" href="http://twitter.com/csgo"><img src="img/icon_twitter.png"></a>
  <a target="_blank" href="https://www.twitch.tv/directory/game/Counter-Strike%3A%20Global%20Offensive"><img src="img/icon_twitch.png"></a>
</div>
</div>
<!--------------------->
<div class='container'>
<img id='im'src="<?php echo ''.$row['image'] ?>">
<div id='tx'><?php echo ''.$row['name'] ?></div><br>
<div class='rankdisp'><?php echo ''.$row['rank'] ?></div>
<img id='pimg' src="<?php echo ''.$row['pi1'] ?>">
<img id='pimg' src="<?php echo ''.$row['pi2'] ?>">
<img id='pimg' src="<?php echo ''.$row['pi3'] ?>">
<img id='pimg' src="<?php echo ''.$row['pi4'] ?>">
<img id='pimg' src="<?php echo ''.$row['pi5'] ?>">
<div id='pn1'><?php echo ''.$row['p1'] ?></div>
<div id='pn2'><?php echo ''.$row['p2'] ?></div>
<div id='pn3'><?php echo ''.$row['p3'] ?></div>
<div id='pn4'><?php echo ''.$row['p4'] ?></div>
<div id='pn5'><?php echo ''.$row['p5'] ?></div>
</div>
<div class='container2'></li>
<h1 style="color: white;"><center>Map Strength</center></h1>
<ul style="list-style-type: none">
<li><img src="img/dust2.png"></li>
<li><img src="img/mirage.png"></li>
<li><img src="img/inferno.png"></li>
<li><img src="img/cache.png"></li>
<li><img src="img/overpass.png"></li>
<li><img src="img/train.png"></li>
<li><img src="img/vertigo.png"></li>
</ul>
<div class="d2">Dust 2</div>
<div class="mir">Mirage</div>
<div class="inf">Inferno</div>
<div class="cac">Cache</div>
<div class="tra">Overpass</div>
<div class="ove">Train</div>
<div class="ver">Vertigo</div>
<div class="imp1"><?php echo ''.$row['d2'] ?></div>
<div class="imp2"><?php echo ''.$row['mirage'] ?></div>
<div class="imp3"><?php echo ''.$row['inferno'] ?></div>
<div class="imp4"><?php echo ''.$row['cache'] ?></div>
<div class="imp5"><?php echo ''.$row['train'] ?></div>
<div class="imp6"><?php echo ''.$row['overpass'] ?></div>
<div class="imp7"><?php echo ''.$row['vertigo'] ?></div>
<div id="chartContainer"></div>
</div>
<!---------------------->
</div>
</body>
</html>
</html>
