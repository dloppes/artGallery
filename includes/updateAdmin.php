<?php

session_start();
include 'connection.php';


$firstName= $_POST['admin_fName'];
$lastName= $_POST['admin_lName'];
$userName= $_POST['admin_username'];
$email= $_POST['admin_email'];
$password= $_POST['admin_password'];
$oldAdmin = $_POST['test'];
 
$sql="UPDATE admin SET admin_fName='$firstName', admin_lName = '$lastName', admin_username = '$userName' , admin_email = '$email', admin_password = '$password'
WHERE admin_username='$oldAdmin'";


if ($conn->query($sql) === TRUE) { 
    //echo $oldAdmin;
    //echo "Error: " . $sql . "<br>" . $conn->error;
    //echo "Error: " . $sql . "<br>" . $conn;
    header('Location: .././public/admin/listAdmin.php?message=Admin ' . $_POST['admin_username'] . '  Successufully Updated!');
    
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
echo "<script type='text/javascript'>alert('failed!')</script>";
}

$conn->close();
?>