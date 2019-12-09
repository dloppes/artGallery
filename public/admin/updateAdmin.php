<!-----------------------------------------------------Calling Header ----------------------------------------------------------------->
<?php

$title = "Update Admin";

include '../../includes/adminHeader.php'; 

?>
<!-------------------------------------------------------------------------------------------------------------------------------------->
<!-------------------------------------------------Form for New Art -------------------------------------------------------------------->
        <div class="container">
                <h1>Update Admin</h1>
                <form class="form-horizontal" method= "POST" action="../../includes/updateAdmin.php">
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="name">First Name:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="name" value=<?php echo $_GET['admin_fName']; ?> name="admin_fName">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="name">Last Name:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="lastName" value=<?php echo $_GET['admin_lName']; ?> name="admin_lName">
                    </div>
                  </div>
                  <div class="form-group hidden">
                    <label class="control-label col-sm-2" for="pwd">Username:</label>
                    <div class="col-sm-10">          
                      <input type="text" class="form-control" id="username" value=<?php echo $_GET['admin_username']; ?> name="test">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Username:</label>
                    <div class="col-sm-10">          
                      <input type="text" class="form-control" id="username" value=<?php echo $_GET['admin_username']; ?> name="admin_username">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Email:</label>
                    <div class="col-sm-10">          
                      <input type="email" class="form-control" id="pwd" value=<?php echo $_GET['admin_email']; ?> name="admin_email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Password:</label>
                    <div class="col-sm-10">          
                      <input type="password" class="form-control" id="pwd" value=<?php echo $_GET['admin_password']; ?> name="admin_password">
                    </div>
                  </div>
                  <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-default">Update</button>
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