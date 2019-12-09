<!---------------------------------------------------Calling Header ---------------------------------------------------------------------->
<?php

$title = "Delete Admin";

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

    $sql = "SELECT admin_username, admin_fName, admin_lName, admin_email FROM admin";
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
            <th>Admin Username</th>
            <th>Admin First Name</th>
            <th>Admin Last Name</th>
            <th>Admin Email</th>
            <th>Action</th>
          </tr>
          
          ";

     foreach($data as $row){

        echo "
          <tr>
          <td>" . $row["admin_username"] . "</td>
          <td>" . $row["admin_fName"] . "</td>
          <td>" . $row["admin_lName"] . "</td>
          <td>" . $row["admin_email"] . "</td>
          <td> <a href='../../includes/deleteAdmin.php?admin_username={$row['admin_username']}'>Delete</a></td>";
    
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