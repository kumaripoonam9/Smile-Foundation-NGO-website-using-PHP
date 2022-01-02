<?php

$con = mysqli_connect('localhost', 'root', '');

// check conn
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}



// use ngo db for further queries
mysqli_select_db($con, 'ngo_db');

$email = $_SESSION['user_email'];



$sql = "SELECT * FROM volunteer_tbl where fldEmail='$email';";

$vol_res = mysqli_query($con, $sql);




$sql = "SELECT * FROM donation_tbl where Email='$email';";

$donation_res = mysqli_query($con, $sql);



// mysqli_close($con);


?>


<?php

?>