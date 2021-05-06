<?php
session_start();
require_once("dbconfig.php");

$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 

// $connection = new mysqli($host, $db_user, $db_password, $db_name);

if($db->connect_errno!=0){
    echo "Error: " . $db->connect_errno . "<br>";
    echo "Description: " . $db->connect_error;
}
else{
    $login = $_POST['login'];
    $password = $_POST['password'];

    $sql =  "SELECT * FROM users WHERE login='$login' AND password='$password'";

    if($result = $db->query($sql)){
        $userCount = $result->num_rows;
        if($userCount>0){
            $_SESSION['logged-in'] = true;
            $row = $result->fetch_assoc();
            $user = $row['login'];

            $result->free_result();

            $_SESSION['user'] = $user;
            unset($_SESSION["loginError"]);
            header('location: index.php');

        }
        else{
            $_SESSION['loginError'] = '<span class="error-msg">Invalid inputs.</span>';
            header('location: login.php');
        }

    }
    $db->close();
}
?>