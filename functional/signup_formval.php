<?php


$errorname = $erroremail = $errorphone = $genderErr = $addressErr = "";
$name = $email = $phone = $gender = $address = "";

$anyErr = false;

$con = mysqli_connect('localhost', 'root', '');

// check conn
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// create db
$db = "ngo_db";
$sql = "CREATE DATABASE IF NOT EXISTS $db;";

mysqli_query($con, $sql);

// use ngo db for further queries
mysqli_select_db($con, $db);

$table_name = "registered_user";
$sql = "CREATE TABLE IF NOT EXISTS
    $table_name(
        Firstname VARCHAR(50) NOT NULL,
        Lastname VARCHAR(50) NOT NULL,
        Email VARCHAR(50) PRIMARY KEY,
        Contact VARCHAR(10),
        Password VARCHAR(30)
    )";

mysqli_query($con, $sql);

// echo 'table created';

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    // echo $fname, $lname, $email, $phone, $password;





    // insert query
    $sql = "INSERT INTO $table_name (Firstname, Lastname, Email, Contact, Password) values (?,?,?,?,?);";
    $pst = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($pst, "sssss", $fname, $lname, $email, $phone, $password);

    if (mysqli_stmt_execute($pst)) {
        echo "<script> alert('Successfully registered! Please login now.'); </script>";
    }


    mysqli_close($con);

}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>


<?php

?>