<?php

session_start();
include 'connection.php';


$cust_username = $_POST['cust_username'];
$firstName= $_POST['cust_fName'];
$lastName= $_POST['cust_lName'];
$email= $_POST['cust_email'];
$password= $_POST['cust_password'];
$oldCust_username = $_SESSION["login_user"];
 
$sql="UPDATE customer SET cust_username = '$cust_username', cust_fName='$firstName', cust_lName = '$lastName', cust_email = '$email', 
cust_password = '$password'
WHERE cust_username='$oldCust_username'";

//---------------------- Setting new customer username into the session (in case customer changes it)---------------------------------
$_SESSION['login_user'] = $cust_username;
// -----------------------------------------------------------------------------------------------------------------------------------

if ($conn->query($sql) === TRUE) { 
    header('Location: .././public/customer/updateCustomer.php?message=Admin ' . $_POST['cust_userName'] . '  Successufully Updated!');
    echo "good";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
echo "<script type='text/javascript'>alert('failed!')</script>";
}

$conn->close();
?>