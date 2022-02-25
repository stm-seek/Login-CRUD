<?php
  session_start();
  include("connect.php");
  $id = $_POST['idz'];
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $fname = mysqli_real_escape_string($conn, $_POST['fname']);
  $lname = mysqli_real_escape_string($conn, $_POST['lname']);
  $phone = mysqli_real_escape_string($conn, $_POST['phone']);
  $urlfacebook = mysqli_real_escape_string($conn, $_POST['urlfacebook']);
  $sql = "UPDATE account SET
    username = '" . $username . "' ,
    password = '" . $password . "' ,
    fname = '" . $fname . "' ,
    lname = '" . $lname . "' ,
    phone = '" . $phone . "' ,
    urlfacebook = '" . $urlfacebook . "'
    WHERE id = '" . $id . "' ";
  $query = mysqli_query($conn, $sql);

  if ($query) {
    header("location: view.php");
    $_SESSION['edituser'] = "1";
    
  } else {
    echo "error";
  }

?>