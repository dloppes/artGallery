<!-----------------------------------------------------Calling Header ----------------------------------------------------------------->
<?php

$title = "Update Art";

include '../../includes/adminHeader.php'; 

?>

<!------------------------------------- Accessing the Database to populate my Table ------------------------------------------------------>
<?php
  include("../../includes/connection.php");

    $sql = "SELECT artist_fName, artist_lName, artist_id FROM artist";
    $result = $conn->query($sql);

    ?>
<!-------------------------------------------------Form for New Art -------------------------------------------------------------------->
<div class="container">
            <h1>Update Art</h1>
            <form class="form-horizontal" method= "POST" action="../../includes/updateArt.php">

            <div class="form-group hidden">
                <label class="control-label col-sm-2" for="Type">Art ID:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="type" value=<?php echo $_GET['art_id']; ?> name="art_id">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-2" for="Title">Art Title:</label>  
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="title" value=<?php echo $_GET['art_title']; ?> name="art_title">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="Type">Art Type:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="type" value=<?php echo $_GET['art_type']; ?> name="art_type">
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
                  <button type="create" class="btn btn-default">Update</button>
                  <label class="control-label col-sm-2">
                </div>
              </div>
            </form>
            <?php

include './../../includes/alertMessage.php'; 

?>
          </div>
<!--------------------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------- Calling footer ------------------------------------------------------------------->
<?php

include '../../includes/footer.php'; // calling the footer

?>