<!------------------------------------------------ Starting Session --------------------------------------------------------------------->
<?php

session_start();
include 'connection.php';
// -------------------------------------------------------------------------------------------------------------------------------------->

//------------------------------------------------ Query to SQL ------------------------------------------------------------------------->
$username= $_POST['username'];
$password= $_POST['password'];
$firstName= $_POST['fName'];
$lastName= $_POST['lName'];
$email= $_POST['email'];



$sql = "INSERT INTO admin (admin_username, admin_password, admin_fName, admin_lName, admin_email)
VALUES ( '$username', '$password', '$firstName', '$lastName' , '$email')";


if ($conn->query($sql) === TRUE) {
   
    header('Location: .././public/admin/newAdmin.php?message=New Admin ' . $_POST['username'] . ' Successufully Created!');
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
//echo "<script type='text/javascript'>alert('failed!')</script>";
}
// -------------------------------------------------------------------------------------------------------------------------------------->

//------------------------------------------------ Closing Session----------------------------------------------------------------------->
$conn->close();
?>