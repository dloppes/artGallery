<!-----------------------------------------------------Calling Header ----------------------------------------------------------------->
<?php

$title = "Update Art";

include '../../includes/adminHeader.php'; 

?>

<!-------------------------------------------------Form for New Art -------------------------------------------------------------------->
<div class="container">
            <h2>Update Artist</h2>
            <form class="form-horizontal" method= "POST" action="../../includes/updateArtist.php">

            <div class="form-group hidden">


                <label class="control-label col-sm-2" for="name">id</label>  
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="id" value=<?php echo $_GET['artist_id']; ?> name="artist_id">
                </div>
              </div>


              <div class="form-group">
                <label class="control-label col-sm-2" for="name">First Name:</label>  
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="name" value=<?php echo $_GET['artist_fName']; ?> name="artist_fName">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="name">Last Name:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="lastName" value=<?php echo $_GET['artist_lName']; ?> name="artist_lName">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for=  "address">Address:</label>
                <div class="col-sm-10">          
                  <input type="text" class="form-control" id="address" value=<?php echo $_GET['artist_address']; ?> name="artist_address">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="website">Website:</label>
                <div class="col-sm-10">          
                  <input type="text" class="form-control" id="website" value=<?php echo $_GET['artist_website']; ?> name="artist_website">
                </div>
              </div>
                   <div class="form-group">        
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="create" class="btn btn-default">Update</button>
                </div>
              </div>
            </form>
            <?php

include './../../includes/alertMessage.php'; 

?>
           
          </div>
<!-------------------------------------------------------------------------------------------------------------------------------------->


<!---------------------------------------------------Calling footer ------------------------------------------------------------------->
<?php

include '../../includes/footer.php';

?>