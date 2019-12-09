<!-------------------------------------------------- calling the header ------------------------------------------------------------------>
<?php
$title = "Admin Menu";
include '../../includes/adminHeader.php';
?>
<!----------------------------------------- Particular style for this page only ---------------------------------------------------------->
    <style>
    
            body{
              background-color: lightgoldenrodyellow;
            }

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
<!---------------------------------------------------------------------------------------------------------------------------------------->
<!------------------------------------- Accessing the Database to populate my Table ------------------------------------------------------>
  <?php
  include("../../includes/connection.php");

    $sql = "SELECT art_id, art_title, art_type, artist.artist_fName, artist.artist_lName FROM art join artist on art.artist_id =
     artist.artist_id";
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
          </tr>
          
          ";

      foreach($data as $row){

        echo "
          <tr>
          <td>" . $row["art_title"] . "</td>
          <td>" . $row["art_type"] . "</td>
          <td>" . $row["artist_fName"] . "</td>
          <td>" . $row["artist_lName"] . "</td>";
       
      }
      echo "</table>";
    ?>

<?php

include './../../includes/alertMessage.php'; 

?>
<!------------------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------Calling footer ------------------------------------------------------------------->
               <?php

include '../../includes/footer.php'; // calling the footer

?>