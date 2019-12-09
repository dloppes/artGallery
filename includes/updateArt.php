<?php

session_start();
include 'connection.php';


$title= $_POST['art_title'];
$type= $_POST['art_type'];
$art_id= $_POST['art_id'];
$artist_id= $_POST['Artists'];


$id = preg_split("/[\s,]+/", $artist_id);
echo $id[0];
 
$sql="UPDATE art SET art_title='$title', art_type='$type', artist_id='$id[0]'
WHERE art_id='$art_id'";


if ($conn->query($sql) === TRUE) { 
    
    header('Location: .././public/admin/listArt.php?message=Art ' . $_POST['art_title'] . '  Successufully Updated!');
    
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
echo "<script type='text/javascript'>alert('failed!')</script>";
}

$conn->close();
?>