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
    } else {
        mysqli_error($con);
    }



    // use ngo db for further queries
    mysqli_select_db($con, $db);



    $table_name = "volunteer_tbl";



    $sql = "CREATE TABLE IF NOT EXISTS
        $table_name(
            -- id INT(6) UNSIGNED AUTO_INCREMENT,
            fldName VARCHAR(50),
            fldEmail VARCHAR(50),
            fldPhone VARCHAR(10),
            fldGender VARCHAR(10),
            fldLocation VARCHAR(150),
            fldEvent TEXT
        )";

    mysqli_query($con, $sql);

    // insert query
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!empty($_POST['email'])) {

            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $gender = $_POST['gender'];
            $location = $_POST['location'];
            $chk = implode(',', $_POST['check_list']);

            echo $name, $email, $phone, $gender, $location, $chk;

            $sql = "INSERT INTO $table_name (fldName, fldEmail, fldPhone,  fldGender, fldLocation, fldEvent) values (?,?,?,?,?,?);";

            $pst = mysqli_prepare($con, $sql);
            
            mysqli_stmt_bind_param($pst, "ssssss", $name, $email, $phone, $gender, $location, $chk);
            
            mysqli_stmt_execute($pst);

        }
    }

    mysqli_close($con);
