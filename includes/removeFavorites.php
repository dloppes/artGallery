<!------------------------------------------------ Starting Session --------------------------------------------------------------------->
<?php

session_start();
include 'connection.php';
// -------------------------------------------------------------------------------------------------------------------------------------->

//------------------------------------------------ Query to SQL -------------------------------------------------------------------------> 
$cust_username = $_SESSION["login_user"];
$art_id= $_GET['art_id'];

$sql= "DELETE FROM favorite_art
      WHERE art_id = $art_id AND cust_username = '$cust_username'";


if ($conn->query($sql) === TRUE) {
    header('Location: .././public/customer/favorites.php?message=Art successfully Unliked!');
    
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
echo "<script type='text/javascript'>alert('failed!')</script>";
}
// -------------------------------------------------------------------------------------------------------------------------------------->

$conn->close();
?>