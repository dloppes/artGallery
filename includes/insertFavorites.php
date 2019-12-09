<!------------------------------------------------ Starting Session --------------------------------------------------------------------->
<?php

session_start();
include 'connection.php';
// -------------------------------------------------------------------------------------------------------------------------------------->

//------------------------------------------------ Query to SQL ------------------------------------------------------------------------->
$cust_username = $_SESSION["login_user"];
$art_id= $_GET['art_id'];

$sql = "INSERT IGNORE INTO favorite_art (cust_username, art_id)
VALUES ( '$cust_username', '$art_id')";


if ($conn->query($sql) === TRUE) {
    
    echo "Artist Inserted Successfuly!";
    header('Location: .././public/customer/customerMenu.php?message=Art Successfully Added to your Favorite List!');

    echo "Artist Inserted Successfuly!";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
//echo "<script type='text/javascript'>alert('failed!')</script>";
}
// -------------------------------------------------------------------------------------------------------------------------------------->
//------------------------------------------------ Closing Session----------------------------------------------------------------------->
$conn->close();
?>