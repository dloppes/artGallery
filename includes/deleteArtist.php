<!------------------------------------------------ Starting Session --------------------------------------------------------------------->

<?php

session_start();
include 'connection.php';
// -------------------------------------------------------------------------------------------------------------------------------------->

//------------------------------------------------ Query to SQL -------------------------------------------------------------------------> 
$sql= "DELETE FROM artist
      WHERE  artist_id = '$_GET[artist_id]'";


if ($conn->query($sql) === TRUE) {
    header('Location: .././public/admin/deleteArtist.php?message=Artist ' . $_GET['artist_fName'] . ' Successufully Deleted!');
    
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
echo "<script type='text/javascript'>alert('failed!')</script>";
}
// -------------------------------------------------------------------------------------------------------------------------------------->

$conn->close();
?>