<!-----------------------------------------------------Calling Header ----------------------------------------------------------------->
<?php

$title = "New Artist";

include '../../includes/adminHeader.php'; 

?>
<!-------------------------------------------------------------------------------------------------------------------------------------->
<!-------------------------------------------------Form for New Art -------------------------------------------------------------------->
        <div class="container">
            <h2>New Artist</h2>
            <form class="form-horizontal" method= "POST" action="../../includes/insertNewArtist.php">
              <div class="form-group">
                <label class="control-label col-sm-2" for="name">First Name:</label>  
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="name" value="Enter your first name" name="fName">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="name">Last Name:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="lastName" value="Enter Last Name" name="lName">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="address">Address:</label>
                <div class="col-sm-10">          
                  <input type="text" class="form-control" id="address" value="Enter address" name="address">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="website">Website:</label>
                <div class="col-sm-10">          
                  <input type="text" class="form-control" id="website" value="Enter website" name="website">
                </div>
              </div>
                   <div class="form-group">        
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="create" class="btn btn-default">Create</button>
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