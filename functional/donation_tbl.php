<?php

$servername = 'localhost';
$username = 'root';
$password = '';

// create conn
$con = mysqli_connect($servername, $username, $password);


// check conn
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}




// create db

$db = "ngo_db";
$sql = "CREATE DATABASE $db;";
if (mysqli_query($con, $sql)) {
    // do nothing
} else {
    // show error
    mysqli_error($con);
}

// use ngo db for further queries
mysqli_select_db($con, $db);

$table_name = "donation_tbl";

$query = "SELECT ID FROM $table_name";
$result = mysqli_query($con, $query);

$sql = "CREATE TABLE IF NOT EXISTS
        $table_name(
            Name VARCHAR(50),
            Email VARCHAR(50),
            Phone VARCHAR(10),
            Gender VARCHAR(10),
            Age INT,
            Donated_amount INT,
            Payment_mode VARCHAR(50),
            Payment_date DATETIME DEFAULT CURRENT_TIMESTAMP
        )";

mysqli_query($con, $sql);



// insert query


$name = $_SESSION['name'];
$email = $_SESSION['email'];
$phone = $_SESSION['phone'];
$gender = $_SESSION['gender'];
$age = $_SESSION['age'];
$amount = $_POST['amount'];
$mode  = $_POST['mode'];



$sql = "INSERT INTO $table_name (Name, Email, Phone,  Gender, Age, Donated_amount, Payment_mode) values (?,?,?,?,?,?,?);";
$pst = mysqli_prepare($con, $sql);
mysqli_stmt_bind_param($pst, "ssssiis", $name, $email, $phone, $gender, $age, $amount, $mode);
mysqli_stmt_execute($pst);


mysqli_close($con);
