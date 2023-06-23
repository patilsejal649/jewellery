<?php
  session_start();
  if(isset($_SESSION['username'])){
    echo "welcome ".$_SESSION['username'];
    echo "<br>";
    echo "your password is ".$_SESSION['password'];
    echo "<br>";
    echo "your email is ".$_SESSION['email'];
  }else{
    echo "please login again to continue";
  }

  
  
?>
