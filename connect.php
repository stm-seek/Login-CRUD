<?php
    

    session_start();

    $servername = "sci.dusit.ac.th";
    $username = "6211011940007";
    $password = "egy6y3e5y";
    $dbname = "6211011940007_db";

    /* $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydatabase"; */

    // Create Connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed" . mysqli_connect_error());
    }

    if (isset($_POST['submit'])) {

        $username = $_POST['username'];
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $phone = $_POST['phone'];
        $profile = $_POST['profile'];

        $user_check = "SELECT * FROM account WHERE username = '$username' LIMIT 1";
        $result = mysqli_query($conn, $user_check);
        $user = mysqli_fetch_assoc($result);

        $validatedUsername = false;
        if (empty($user)) {
            $validatedUsername = true;
        } else {
            $_SESSION['userDuplicate'] = "1";
        }

        if (isset($validatedUsername) && $validatedUsername === true) {
            $query = "INSERT INTO account (username, fname, lname, phone, urlfacebook, status)
                VALUE ('$username', '$firstname', '$lastname', '$phone', '$profile', 'm')";
            $result = mysqli_query($conn, $query);
            if ($result) {
                $_SESSION['successuser'] = "1";

            } else {
                $_SESSION['error'] = "1";
            }
        }
    }

    $results = mysqli_query($conn, "SELECT * FROM account");
    if (!isset($_SESSION['username'])) {
        header("location: 404.php");
    }
?>
