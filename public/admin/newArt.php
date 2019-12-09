<!-----------------------------------------------------Calling Header ----------------------------------------------------------------->
<?php

$title = "New Art";

include '../../includes/adminHeader.php';

?>
<!---------------------------------------------------------------------------------------------------------------------------------------->
<!------------------------------------- Accessing the Database to populate my Table ------------------------------------------------------>
<?php
  include("../../includes/connection.php");

    $sql = "SELECT artist_fName, artist_lName, artist_id FROM artist";
    $result = $conn->query($sql);

    ?>

<!-------------------------------------------------Form for New Art -------------------------------------------------------------------->
        <div class="container">
            <h1>New Art</h1>
            <form class="form-horizontal" method= "POST" action="../../includes/insertNewArt.php">
              <div class="form-group">
                <label class="control-label col-sm-2" for="Title">Art Title:</label>  
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="title" placeholder="Enter Art Title" name="title">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="Type">Art Type:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="type" placeholder="Enter Art Type" name="type">
                </div>
              </div>  
<!--------------------------- Code to populate dopdown list with artist registered in my database so admin can choose from ----------->
              <div class="artist">
              <label class="control-label col-sm-2" for="artist">Select Artist:</label>
              <select name="Artists" id="">
              <?php

              
                while($rows = $result->fetch_array())

                {

                  echo "<option> $rows[artist_id] $rows[artist_fName] $rows[artist_lName]</option>";
                
                }

              ?>
              
              </select>
              <br>
              <br>

<!------------------------------------------------------------------------------------------------------------------------------------>
                  <button type="create" class="btn btn-default">Create</button>
                  <label class="control-label col-sm-2">
                </div>
              </div>
            </form>
<!--------------------------------------- Alert Message that New Art has been created --------------------------------------------------->
            <?php

include './../../includes/alertMessage.php'; 
?>
          </div>
<!-------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------Calling footer ------------------------------------------------------------------->
          <?php

include '../../includes/footer.php'; // calling the footer

?>