<?php

session_start();
include("config.php");



$con = mysqli_connect('localhost', 'root', '');
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


$db = "ngo_db";
$sql = "CREATE DATABASE IF NOT EXISTS $db;";
mysqli_query($con, $sql);


// use ngo db for further queries
mysqli_select_db($con, $db);



if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM registered_user where email='$email'and password='$password';";

    $res = mysqli_query($con, $sql);
    $result = mysqli_fetch_array($res);


    if ($result) {

        $sql = "SELECT * FROM registered_user where email='$email'and password='$password';";

        echo "loggin in";

        $_SESSION["login"] = "1";
        $_SESSION["user_email"] = $email;
        $_SESSION["user_phone"] = $result['Contact'];
        $_SESSION["user_name"] = $result['Firstname'] . ' ' . $result['Lastname'];

        header("location: ../dashboard.php");
    } else {
        $loginErr = 'No such user exists!';
        header("location: ../login.php?error=1");
    }


    mysqli_close($con);


    // // name
    // if (empty($_POST["name"])) {
    //     $errorname = "Name is required";
    //     $anyErr = true;
    // } else {
    //     $name = $_POST["name"];
    //     $name = trim($name);
    //     if (ctype_alpha(str_replace(' ', '', $name)) === false) {
    //         $errorname = "Please write a valid name";
    //         $anyErr = true;
    //     }
    // }

    // // email
    // if (empty($_POST["email"])) {
    //     $erroremail = "Email is required";
    //     $anyErr = true;
    // } else {
    //     $email = trim($_POST["email"]);
    //     // $pattern = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
    //     if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
    //         $erroremail = "Enter valid email";
    //         $anyErr = true;
    //     }
    // }

    // // phone
    // if (empty($_POST["phone"])) {
    //     $errorphone = "Phone is required";
    //     $anyErr = true;
    // } else {
    //     $phone = trim($_POST["phone"]);
    //     if (!ctype_digit($phone)) {
    //         $errorphone = "Only digits are allowed";
    //         $anyErr = true;
    //     }
    //     if (strlen($phone) < 10) {
    //         $errorphone = "Phone number cannot be less than 10 digits";
    //         $anyErr = true;
    //     }
    // }

    // if (empty($_POST["gender"])) {
    //     $genderErr = "Gender is required";
    // } else {
    //     $gender = test_input($_POST["gender"]);
    // }

    // if (empty($_POST["address"])) {
    //     $addressErr = "Address is required";
    // } else {
    //     $address = test_input($_POST["address"]);
    // }
}

?>


<?php

?>