<?php

include('connect.php');

// Check login

if(isset($_POST['login_user'])){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    $sql="SELECT * FROM account Where username='".$username."' and password='".$password."' ";
    $result = mysqli_query($conn,$sql);

         if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_array($result);
        $_SESSION["user_id"] = $row["id"];
        $_SESSION["status"] = $row["status"];
        
        if($_SESSION["status"]=="a"){
            $_SESSION['user_admin'] = "1";
            $_SESSION['username'] = $username;
            header("location: view.php");
            /* header("refresh:2; url= view.php"); */
            
        }else{
            $_SESSION['userlevel'] = "m";
            header("location: index.php");
        }

    }else{
        $_SESSION['wronguser'] = "1";
        header("location: index.php");
      }
    }


?>