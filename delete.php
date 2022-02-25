<?php
  session_start();
  include("connect.php");
  $id=$_POST['id'];
  if(isset($id)){
    $query= "DELETE FROM account WHERE id ='".$id."'";
    $result=mysqli_query($conn,$query);  
    $_SESSION['deldata'] = "1";
  }else{
    echo "error";
  }
?>
