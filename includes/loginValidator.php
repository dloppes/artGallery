<!------------------------------ Starting PHP code to valide user Input ----------------------------------------------------------------->
<?php

session_start();
include '../includes/connection.php';
// -------------------------------------------------------------------------------------------------------------------------------------->

//---------------------------------- check to see if the form has been submitted -------------------------------------------------------->
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// -------------------------------------------------------------------------------------------------------------------------------------->

//----------------------------------------------- create SQL statement ------------------------------------------------------------------>
$username = $_POST['username'];
$pass = $_POST['password'];

$sql = "SELECT admin_username FROM admin WHERE admin_username='$username' and 
admin_password='$pass'";
// -------------------------------------------------------------------------------------------------------------------------------------->

// ------------------------------------------------query db------------------------------------------------------------------------------>
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
// -------------------------------------------------------------------------------------------------------------------------------------->

// -------------------------------------count the number of records found---------------------------------------------------------------->
$count = mysqli_num_rows($result);
// -------------------------------------------------------------------------------------------------------------------------------------->

// ---------------------------if result matches $username and $password, table row must be 1 row----------------------------------------->
if ($count > 0) {

// ---------------------------------- set our session variable -------------------------------------------------------------------------->
  $permission = 
   $_SESSION['login_user'] = $row['admin_username'];
   $_SESSION['token'] = "admin";
    header('Location:.././public/admin/adminMenu.php');
} 
else {

    $sql = "SELECT cust_username FROM customer WHERE cust_username='$username' and 
    cust_password='$pass'";
// ---------------------------------------------- query db ------------------------------------------------------------------------------> 
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

// ----------------------------------------------- count the number of records found ---------------------------------------------------->
    $count = mysqli_num_rows($result);

    if ($count > 0) {
// -------------------------------------- set our session variable ---------------------------------------------------------------------->
       $permission = 
        $_SESSION['login_user'] = $row['cust_username'];
        $_SESSION['token'] = "customer";
        header('Location:.././public/customer/customerMenu.php'); 
        exit();
    }

    header('Location:.././public/main/login.php?userInvalid='.$username);

    exit();
}
mysqli_close($connection);
}
 
 ?> 
<!-------------------------------------------------------------------------------------------------------------------------------------->