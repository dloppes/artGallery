<!-----------------------------------------------------Calling Header ----------------------------------------------------------------->
<?php
$title = "Artist List";
include '../../includes/adminHeader.php'; 
?>
<!-------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------- Particular style for this page only -------------------------------------------------------->
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
<!------------------------------------- Accessing the Database to populate my Table ----------------------------------------------------->
<?php
  include("../../includes/connection.php");

    $sql = "SELECT artist_id, artist_fName, artist_lName, artist_address, artist_website FROM artist";
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
            <th>Artist First Name</th>
            <th>Artist Last Name</th>
            <th>Artist Address</th>
            <th>Artist Website</th>
            <th>Action</th>
          </tr>
          
          ";

          foreach($data as $row){

        echo "
        <tr>
        <td>" . $row["artist_fName"] . "</td>
        <td>" . $row["artist_lName"] . "</td>
        <td>" . $row["artist_address"] . "</td>
        <td>" . $row["artist_website"] . "</td>
        <td> <a href='updateArtist.php?artist_id={$row['artist_id']}&artist_fName={$row['artist_fName']}
        &artist_lName={$row['artist_lName']}&artist_address={$row['artist_address']}&artist_website={$row['artist_website']}'>Update</a></td>";
      }
      
      echo "</table>";
      
    ?>
      <?php

include './../../includes/alertMessage.php'; 

?>
<!----------------------------------------------------Calling footer ------------------------------------------------------------------->       
          <?php

include '../../includes/footer.php';
?>
<!-------------------------------------------------------------------------------------------------------------------------------------->