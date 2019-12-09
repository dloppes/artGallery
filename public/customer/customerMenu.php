<?php

$title = "Favorites";

include '../../includes/customerHeader.php'; //calling the header

?>
<!----------------------------------------- Particular style for this page only ---------------------------------------------------------->
<style>

.table table-striped {
border-collapse: collapse;
width: 100%;
padding: 10px;
}

th, td {
text-align: left;
padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
background-color: blue;
color: white;
}

</style>
<!----------------------------------------------------------------------------------------------------------------------------------------->
<!------------------------------------- Accessing the Database to populate my Table ------------------------------------------------------>

<form class="modal-content" method= "POST" action="./search.php">
          <div class="container">
            <h1>Search via wildcard</h1>
            <hr>
            
            <label for="title"><b>title</b></label>
            <input type="text" name="title">
      
            <label for="type"><b>type</b></label>
            <input type="type" name="type">

            <label for="artist_name"><b>Aritst last name / first name</b></label>
            <input type="text" name="artist_name">
            
            <div class="clearfix">
              <button type="submit" class="signupbtn">Update</button>
            </div>
          </div>
        </form>
      </div>

<?php
  include("../../includes/connection.php");

  $title = $_POST['title'] ?? "";
  $type = $_POST['type'] ?? "";
  $artist_name = $_POST['artist_name'] ?? "";

  if(!$title == "") {
        $sql = "SELECT * FROM art
         join artist on art.artist_id = artist.artist_id WHERE art.art_title LIKE '%$title%'";
  } elseif (!$type == "") {
        $sql = "SELECT * FROM art
        join artist on art.artist_id = artist.artist_id WHERE art.art_type LIKE '%$type%'";
    } elseif(!$artist_name == "") {
      
      $sql = "SELECT * FROM artist
      inner join art on art.artist_id = artist.artist_id WHERE artist.artist_fName LIKE '%$artist_name%' OR artist.artist_lName LIKE '%$artist_name%'";
    } else {
        $sql = "SELECT * FROM artist inner join art on art.artist_id = artist.artist_id";
    }

    $nRows = 0;
    if (isset($sql)) {
        $result = $conn->query($sql);
        $nRows = $result->num_rows;
        if ($conn->query($sql) === TRUE) {
            
        }
    }

    $data = [];

    if($nRows >0){

      while($row = $result->fetch_assoc()){
        $data[]=$row;
      }
    }

      echo "
        <table class='table table-striped'>
          <tr>
            <th>Art Title</th>
            <th>Art Type</th>
            <th>Artist First Name</th>
            <th>Artist Last Name</th>
            <th>Action</th>
          </tr>
          ";

      foreach($data as $row){

          echo "
          <tr>
          <td>" . $row["art_title"] . "</td>
          <td>" . $row["art_type"] . "</td>
          <td>" . $row["artist_fName"] . "</td>
          <td>" . $row["artist_lName"] . "</td>
          <td> <a href='../../includes/insertFavorites.php?art_id={$row['art_id']}'>Like</a></td>";
      }
      echo "</table>";
    ?>

<?php

include './../../includes/alertMessage.php'; 

?>
<!----------------------------------------------------------------------------------------------------------------------------------------->
<?
include '../../includes/footer.php'; // calling the footer

?>