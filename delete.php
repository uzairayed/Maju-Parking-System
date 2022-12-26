<?php

$delete = false;

error_reporting(0);

 $server = "localhost";
 $username = "root";
 $password = "";
 $dbname = "mps";

  $con = mysqli_connect($server, $username, $password, $dbname);

  $sql = "SELECT * FROM `mps` WHERE `vehicle` = 'Car'";

  $result2 = mysqli_query($con, $sql);
  $num = mysqli_num_rows($result2);

    $Sno = $_POST['Sno'];
    
  
  $sql = "DELETE FROM `mps` WHERE `mps`.`Sno` = '$Sno'"; 
  $con->query($sql);

  if(mysqli_affected_rows($con))
    {
      // echo("Successfully Updated Query at : ".$Sno);
      
      $delete = true;

    }
    else $delete = false;

//    if($con->query($sql)==true)
//      {
//        $delete = true;
//      }
//      else
//      {   
//          $delete = false;
//        echo "Error: $sql <br> $con->error";
//      }

  if(!$con)
  {
    die("Connection to this database failed due to ". mysqli_connect_error());
  }
  else{

  //  echo "Sucessfully connected to the database<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="queStyle.css" />
    <title>Delete</title>
    <div class="container">
      <h1 class="form-title">MPS: Deleting Car Records</h1>
      <form action="delete.php" method="post">
      
        <div class="main-user-info">
          <div class="user-input-box">
            <label for="Sno">Enter the Sno:</label>
            <input type="text"
                    id="Sno"
                    name="Sno"
                    required
                    placeholder="ex:1"/>
</div>
</div>
        
        <div class="form-submit-btn">
          <input type="submit" value="Delete">
        </div>
        <?php

        if($delete == true)
        {
        echo "<center><p style='color:white;margin: 10px;padding: 10px;background-color:red'>Query Deleted Succesfully</p><center>";
        }
?>  
        
       
</div>

    <div class="container">
      <h1 class="form-title">Existing Car Records</h1>

      <div class="records-info">
     <?php

      
      if($num>0)
      {
        echo "<br>";

          //using while loop
          while($row = mysqli_fetch_assoc($result2))
          {
            
              echo "Sno : ".$row['Sno']. ".  Student ID : ". $row['majuID']. "  in Car : " . $row['vehicleName'];
              echo "<br>";
          }
      }
      ?> 
      </form>
      <div class="form-submit-btn">
        <a href="http://localhost/mps/admin.php">
          <input type="submit" value="Admin Panel"></a>
        </div> 
      </div>
      
</head>
<body>
    
</body>
</html>
