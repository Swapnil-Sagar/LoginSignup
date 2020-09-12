<?php
  session_start();
  header('location:index.php');

  $con = mysqli_connect('localhost:3307','root','');

  mysqli_select_db($con,'studreg');

  $name = $_POST['user'];
  $pass = $_POST['password'];
  $cpass = $_POST['password2'];
  $auth = $_POST['authority'];

  $s = " select * from usertable where name = '$name'";

  $result = mysqli_query($con, $s);
  $num = mysqli_num_rows($result);

  if($num == 1){
    echo "username already taken";
  }
  else if($pass != $cpass)
  {
    echo "Password did not match";
  }
  else {
      $reg = "insert into usertable(name , password , authority) values ('$name' ,'$pass' , '$auth')";
      mysqli_query($con, $reg);
      echo "Registration Successfull";
  }
?>
