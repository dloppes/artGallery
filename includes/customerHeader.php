<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../../private/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>
<?php
if(isset($title) && !empty($title)) {

echo $title;

}

else {

echo "Art Gallery";
}
?>
</title>
<style>
    
            body{
              background-image: url('../../private/img/background.jpg');
            }
            </style>

</head>


<body>
<!----------------------------------------- Authenticator to valide user trying to access the page ----------------------------------->

<?php
include 'customerAuthenticator.php';
?>
<!------------------------------------------------------------------------------------------------------------------------------------>
<br>

  <div class="topnav">
   <img class="logo" src="../../private/img/Black and White Squares Industrial Logo.png" alt="logo">
    <a href="../../includes/logout.php">Logout</a>
    <a href=".././customer/updateCustomer.php">Update Customer</a>
    <a href=".././customer/favorites.php">Favorites</a>
    <a href=".././customer/customerMenu.php">Customer Menu</a>
  </div>

  