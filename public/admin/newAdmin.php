<!-----------------------------------------------------Calling Header ----------------------------------------------------------------->
<?php

$title = "New Admin";

include '../../includes/adminHeader.php'; 

?>
<!-------------------------------------------------------------------------------------------------------------------------------------->
<!-------------------------------------------------Form for New Art -------------------------------------------------------------------->
        <div class="container">
                <br><br><br><br><br><br>
                <h1>Create Admin</h1>
                <form class="form-horizontal" method= "POST" action="../../includes/insertNewAdmin.php">
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="name">First Name:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="name" placeholder="Enter your first name" name="fName">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="name">Last Name:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="lastName" placeholder="Enter Last Name" name="lName">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Username:</label>
                    <div class="col-sm-10">          
                      <input type="text" class="form-control" id="pwd" placeholder="Enter username" name="username">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Email:</label>
                    <div class="col-sm-10">          
                      <input type="email" class="form-control" id="pwd" placeholder="Enter email" name="email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Password:</label>
                    <div class="col-sm-10">          
                      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                    </div>
                  </div>
                  <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-default">Create</button>
                    </div>
                  </div>
                </form>
                <?php

include './../../includes/alertMessage.php'; 

?>
              </div>
<!-------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------Calling footer ------------------------------------------------------------------->
 <?php
              include '../../includes/footer.php'; // calling the footer

?>