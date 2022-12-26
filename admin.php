<?php


// error_reporting(0);

 $server = "localhost";
 $username = "root";
 $password = "";
 $dbname = "mps";

  $con = mysqli_connect($server, $username, $password, $dbname);

  $sql = "SELECT * FROM `mps` WHERE `vehicle` = 'Car'";

  $result2 = mysqli_query($con, $sql);

  $num = mysqli_num_rows($result2); 



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
    <title>Admin Page</title>
</head>
<body>
    <div class="container">
        <h1 class="form-title">MAJU Parking System</h1>
        <div class="form-submit-btn">
        <a href="http://localhost/mps/index.php">
        <input type="submit" value="Insert Data">
        </a>
      </div>
      <div class="form-submit-btn">
        <a href="http://localhost/mps/delete.php">
        <input type="submit" value="Delete Data">
</a>

      </div>
      <div class="form-submit-btn">
        <a href="http://localhost/mps/updateQue(C).php">
        <input type="submit" value="Update Data for Cars"></a>
      </div>
      <div class="form-submit-btn">
        <a href="http://localhost/mps/updateQue(B).php">
        <input type="submit" value="Update Data for Bikes"></a>
      </div>

      <!-- <div class="form-submit-btn" style="">
       <a href="http://localhost/mps/index.php">
        <button>Insert Data</button>
     </a>
    </div> -->
     
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
      </div>
    </div>
    
</body>
</html>