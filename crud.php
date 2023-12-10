<?php
require_once 'connection.php';
session_start();

// if(isset($_POST['submit']))
// {

$username = $_POST["username"];
$uname = $_POST["uname"];
$email = $_POST["email"];
$gender = $_POST["gender"];
$number = $_POST["people"];
$password = $_POST["pwd"];
$confirm_password = $_POST["a_pwd"];


$users_query = "INSERT INTO signup (username,uname,email,gender,people,pwd)
 VALUES ('$username','$uname','$email','$gender','$number','$password')";
$result = $conn->query($users_query);
if ($result === true) {
    $_SESSION['flag1'] = 1;
    header("Location:web2.php");
    die();
} else {
    $_SESSION['flag1'] = 0;
    header("Location:web2.php");
    die();
    echo 'Error creating user: ' . $conn->error;
}

// }
// else{
// echo "register button not submitted";
// }
?>