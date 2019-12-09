<?php

session_start();
include 'connection.php';


$firstName= $_POST['artist_fName'];
$lastName= $_POST['artist_lName'];
$address= $_POST['artist_address'];
$website= $_POST['artist_website'];
$id= $_POST['artist_id'];
 
$sql="UPDATE artist SET artist_fName='$firstName', artist_lName = '$lastName', artist_address = '$address' , artist_website = '$website' WHERE artist_id='$id'";


if ($conn->query($sql) === TRUE) { 
    
    header('Location: .././public/admin/listArtist.php?message=Artist ' . $_POST['artist_fName'] . ' Successufully Updated!');
    
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
echo "<script type='text/javascript'>alert('failed!')</script>";
}

$conn->close();
?>