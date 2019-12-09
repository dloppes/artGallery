<!------------------------------------------------ Starting Session --------------------------------------------------------------------->
<?php

session_start();
include 'connection.php';
// -------------------------------------------------------------------------------------------------------------------------------------->

//------------------------------------------------ Query to SQL ------------------------------------------------------------------------->
$username= $_POST['username'];
$firstName= $_POST['fName'];
$lastName= $_POST['lName'];
$address = $_POST['address'];
$email= $_POST['email'];
$password = $_POST['password'];



$sql = "INSERT INTO customer (cust_username, cust_fName, cust_lName, cust_address, cust_email, cust_password)
VALUES ( '$username', '$firstName', '$lastName', '$address' , '$email' , '$password')";


if ($conn->query($sql) === TRUE) {
   
    header('Location: .././public/Main/login.php?message=Customer ' . $_POST['username'] . ' Successufully Created! Please proceed to login!');
} else {
//echo "Error: " . $sql . "<br>" . $conn->error;
header('Location: .././public/Main/signup.php?message=username has already been taken. Please choose something else !');


}
// -------------------------------------------------------------------------------------------------------------------------------------->

//------------------------------------------------ Closing Session----------------------------------------------------------------------->
$conn->close();
?>