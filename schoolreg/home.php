<?php

session_start();
if(!isset($_SESSION['username'])){
header('location:index.php');
}
?>

<html>
<head>
  <title> Home Page </title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body class="homepage">
  <div class="container">
  <a class="float-right" href="logout.php"> LOGOUT </a>
  <h1>Scholarship Id Dashboard</h1>
  <h1>Welcome <?php echo $_SESSION['username']; ?></h1>

  <button class="referencebtn" onclick="myFunction()">Get My Reference Number</button>

  <p id="demo"></p>
  <script>
  function myFunction() {
  var x = Math.floor((Math.random() * 10000) + 1);
  document.getElementById("demo").innerHTML = x;
}
</script>




</div>
</body>

</html>
