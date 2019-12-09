<!---------------------------------------------------Calling Header ------------------------------------------------------------------->
<?php

$title = "Sign Up";

include '../../includes/header.php'; //calling the header

?>
<!-------------------------------------------------------------------------------------------------------------------------------------->

<!---------------------------------------------------Particular Style for this Pgae----------------------------------------------------->
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
 

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
 body{
  /* background-color: lightgoldenrodyellow; */
  background-image: url('../../private/img/background1.jpg');
} 

</style>
<!-------------------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------Sign Up Form ---------------------------------------------------------------------->
  <form class="modal-content" method= "POST" action="../../includes/insertNewCustomer.php">
    <div class="container">
  
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="userName"><b>Username</b></label>
      <input type="text" placeholder="Create an unique username" name="username" required>
      <?php
include './../../includes/alertMessage.php'; 
?>

      <label for="name"><b>First Name</b></label>
      <input type="text" placeholder="Enter your first name" name="fName" required>

      <label for="lname"><b>Last Name</b></label>
      <input type="text" placeholder="Enter your last name" name="lName" required>

      <label for="address"><b>Address</b></label>
      <input type="text" placeholder="Enter your address" name="address" required>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>

      <div class="clearfix">
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>

</div>
<!-------------------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------Calling Footer -------------------------------------------------------------------->
<?php

include '../../includes/footer.php'; 

?>
<!-------------------------------------------------------------------------------------------------------------------------------------->