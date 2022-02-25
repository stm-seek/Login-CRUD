<?php
    $id = $_POST['id'];
    include("connect.php");
    $query="select * from account where id = '".$id."'";
    $result = mysqli_query($conn,$query);
    $row=mysqli_fetch_array($result);
    echo json_encode($row);
?>
