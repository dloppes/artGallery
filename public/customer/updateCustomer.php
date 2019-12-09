<!-------------------------------------------------- Calling the header ----------------------------------------------------------------->

<?php

$title = "Customer";

include '../../includes/customerHeader.php'; //

?>
<!---------------------------------------------------------------------------------------------------------------------------------------->
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
 .signupbtn {
     width: 100%;
  }
}
body{
  background-color: lightgoldenrodyellow;
}
</style>

<!------------------------------------- Accessing the Database to identify my customer and bring his information----------------------->
<?php
    include("../../includes/connection.php");

    $username = $_SESSION['login_user'];

$sql = "SELECT * FROM customer
WHERE cust_username = '$username'";
    $result = $conn->query($sql);
    
    $nRows = $result->num_rows;


    if($nRows > 0){
      while($row = $result->fetch_assoc()){
        $user=$row;
      }
    }


    ?>
<!-------------------------------------------------Form for New Art -------------------------------------------------------------------->

     
        <form class="modal-content" method= "POST" action="../../includes/updateCustomer.php">
          <div class="container">
            <h1>Update your Profile</h1>
            <p>Please fill in this form to update your account details.</p>
            <hr>
            
            <label for="userName"><b>Username</b></label>
            <input type="text" value=<?php echo $user['cust_username'] ?> name="cust_username">
      
            <label for="name"><b>First Name</b></label>
            <input type="text" value=<?php echo $user['cust_fName'] ?> name="cust_fName">
      
            <label for="lname"><b>Last Name</b></label>
            <input type="text" value=<?php echo $user['cust_lName'] ?> name="cust_lName" >
      
            <label for="address"><b>Address</b></label>
            <input type="text" value=<?php echo $user['cust_address'] ?> name="cust_address" >
      
            <label for="email"><b>Email</b></label>
            <input type="text" value=<?php echo $user['cust_email'] ?> name="cust_email" >
      
            <label for="psw"><b>Password</b></label>
            <input type="password" value=<?php echo $user['cust_password'] ?> name="cust_password" >
            
            <div class="clearfix">
              <button type="submit" class="signupbtn">Update</button>
            </div>
          </div>
        </form>
      </div>
      
      
<?php      
      include '../../includes/footer.php'; // calling the footer

?>