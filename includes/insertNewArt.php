<!------------------------------------------------ Starting Session --------------------------------------------------------------------->
<?php

session_start();
include 'connection.php';
// -------------------------------------------------------------------------------------------------------------------------------------->
//------------------------------------------------ Query to SQL ------------------------------------------------------------------------->
$art_title= $_POST['title'];
$art_type= $_POST['type'];
$artist_id= $_POST['Artists'];


$id = preg_split("/[\s,]+/", $artist_id);
echo $id[0];

$sql = "INSERT INTO art (art_title, art_type, artist_id)
VALUES ( '$art_title', '$art_type', '$id[0]')";


if ($conn->query($sql) === TRUE) {
    header('Location: .././public/admin/newArt.php?message=Art ' . $_POST['title'] . ' Successufully Created!');
} else {
echo "Error: " . $sql . "<br>" . $conn->error;

}
// -------------------------------------------------------------------------------------------------------------------------------------->
//------------------------------------------------ Closing Session----------------------------------------------------------------------->
$conn->close();
?>