<!------------------------------------------------ Starting Session --------------------------------------------------------------------->

<?php
session_start();
if ($_SESSION["token"] != "admin"){
 echo "Sorry access to this page has been denied!!";
 exit();
}
?>
