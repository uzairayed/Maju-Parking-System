<?php

error_reporting (E_ALL ^ E_NOTICE);
error_reporting(0);

$insert = false;



if(isset($_POST['majuID']))
{
  // echo "testing";
   $server = "localhost";
   $username = "root";
   $password = "";

    $con = mysqli_connect($server, $username, $password);

    if(!$con)
    {
      die("Connection to this database failed due to ". mysqli_connect_error());
    }

    // echo "Sucessfully connected to the database";

    $majuID = $_POST['majuID'];
    $vehicleName = $_POST['vehicleName'];
    $phoneNumber = $_POST['phoneNumber'];
    $vehicle = $_POST['vehicle'];

     
    $sql = "INSERT INTO `mps`.`mps` (`majuID`, `vehicleName`, `phoneNumber`, `vehicle`, `dt`) VALUES ('$majuID', '$vehicleName', '$phoneNumber', '$vehicle', current_timestamp())"; 

    // $result = mysqli_query($con, $sql);

    // echo $sql;

    if($con->query($sql)==true)
    {
      // echo "successfully inserted";
      $insert = true;
    }
    else
    {
      echo "Error: $sql <br> $con->error";
    }

    $con->close();
  }
?>





<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Maju Parking System</title>
    <meta name="viewport" content="width=device-width,
      initial-scale=1.0"/>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    
    <div class="container">
      <h1 class="form-title">MAJU Parking System</h1>
      <form action="index.php" method="post">
        <div class="main-user-info">
          <!-- <div class="user-input-box">
            <label for="fullName">Full Name</label>
            <input type="text"
                    id="fullName"
                    name="fullName"
                    placeholder="Enter Full Name"/>
          </div> -->
          <div class="user-input-box">
            <label for="majuID">Maju I.D</label>
            <input type="text"
                    id="majuID"
                    name="majuID"
                    required
                    placeholder="Enter MAJU I.D"/>
          </div>
          <div class="user-input-box">
            <label for="vehicleName">Vehicle Name</label>
            <input type="text"
                    id="vehicleName"
                    name="vehicleName"
                    placeholder="Toyota Corolla"/>
          </div>
          <div class="user-input-box">
            <label for="phoneNumber">Phone Number</label>
            <input type="text"
                    id="phoneNumber"
                    name="phoneNumber"
                    placeholder="Enter Phone Number"/>
          </div>
          <!-- <div class="user-input-box">
            <label for="password">Password</label>
            <input type="password"
                    id="password"
                    name="password"
                    placeholder="Enter Password"/>
          </div> -->
          <!-- <div class="user-input-box">
            <label for="confirmPassword">Confirm Password</label>
            <input type="password"
                    id="confirmPassword"
                    name="confirmPassword"
                    placeholder="Confirm Password"/>
          </div> -->
        </div>
        <div class="vehicle-details-box">
          <span class="vehicle-title">Vehicle Type</span>
          <div class="vehicle-category">
            <input type="radio" name="vehicle" id="vehicle" value="Car">
            <label for="CAR">CAR</label>
            <input type="radio" name="vehicle" id="vehicle" value="Bike">
            <label for="BIKE">BIKE</label>
            <!-- <input type="radio" name="gender" id="other">
            <label for="other">Other</label> -->
          </div>
        </div>
        <div class="form-submit-btn">
          <input type="submit" value="Enter">
        </div>
        
</form>
   <?php

    if($insert == true)
{
    echo "<center><p style='color:white;margin: 10px;padding: 10px;background-color:green'>Query Inserted Succesfully</p><center>";
}
    ?>
    <div class="form-submit-btn">
    <a href="http://localhost/mps/admin.php">
          <input type="submit" value="Admin Panel"></a>
        </div>  
    </div>
  </body>
</html>