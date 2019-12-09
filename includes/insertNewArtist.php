<!------------------------------------------------ Starting Session --------------------------------------------------------------------->
<?php

session_start();
include 'connection.php';
// -------------------------------------------------------------------------------------------------------------------------------------->

//------------------------------------------------ Query to SQL ------------------------------------------------------------------------->
$firstname= $_POST['fName'];
$lastname= $_POST['lName'];
$address= $_POST['address'];
$website= $_POST['website'];


$sql = "INSERT INTO artist (artist_fName, artist_lName, artist_address, artist_website)
VALUES ( '$firstname', '$lastname',  '$address', '$website')";


if ($conn->query($sql) === TRUE) {
    
    echo "Artist Inserted Successfuly!";
    header('Location: .././public/admin/newArtist.php?message=New Artist ' . $_POST['fName'] . ' Successufully Created!');

    echo "Artist Inserted Successfuly!";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
//echo "<script type='text/javascript'>alert('failed!')</script>";
}
// -------------------------------------------------------------------------------------------------------------------------------------->

//------------------------------------------------ Closing Session----------------------------------------------------------------------->
$conn->close();
?>