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
<?php
  include("../../includes/connection.php");


  $cust_username = $_SESSION["login_user"];

    $sql = "SELECT * FROM favorite_art
     inner join art on art.artist_id = favorite_art.art_id join artist on art.artist_id = artist.artist_id WHERE cust_username = '$cust_username'";

    $result = $conn->query($sql);

    $nRows = $result->num_rows;

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
          <td> <a href='../../includes/removeFavorites.php?art_id={$row['art_id']}'>Unlike</a></td>";
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