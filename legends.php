<?php
include('E:\project\XAMPP\htdocs\cs\php\connect.php');
?>

<html>
<head>
  <title>Legends</title>
  <a href="home.html"><img src="img/logo.png" align="left" width="15%" height="15%"></a>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="body.css">
  <link rel="stylesheet" type="text/css" href="css/legendsacc.css">
</head>
<body>
<div class="parallax">
<div class="nav">
<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link" href="home.html">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="players.html">Players</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="teams.html">Teams</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="events.html">Events</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="#">Legends</a>
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
<!-------------------------------->
<?php
$sql = "SELECT * from legends;";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      $img = $row['image'];
      $pl1 = $row['pi1'];
      $pl2 = $row['pi2'];
      $pl3 = $row['pi3'];
      $pl4 = $row['pi4'];
      $pl5 = $row['pi5'];
      echo '<button class="accordion"><img src="'.$img.'"></button>';
      echo '<div class="panel">';
      echo '<ul class="llist">';
      echo '<li><img src="'.$pl1.'" class="legimg"></li>';
      echo '<li><img src="'.$pl2.'" class="legimg"></li>';
      echo '<li><img src="'.$pl3.'" class="legimg"></li>';
      echo '<li><img src="'.$pl4.'" class="legimg"></li>';
      echo '<li><img src="'.$pl5.'" class="legimg"></li>';
      echo '</ul>';
      echo '</div>';
    }
}
else {
    echo "0 results";
}
$conn->close();
?>

<!-------------------------------->
<script type="text/javascript">
var acc = document.getElementsByClassName("accordion");
var i;
for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}
</script>
</div>
</body>
</html>
