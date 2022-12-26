<?php

$update = false;

error_reporting(0);

$server = "localhost";
$username = "root";
$password = "";
$dbname = "mps";

$con = mysqli_connect($server, $username, $password, $dbname);

if (!$con) {
  die("Connection to this database failed due to " . mysqli_connect_error());
} else {

  //  echo "Sucessfully connected to the database<br>";
}

$sql = "SELECT * FROM `mps` WHERE `vehicle` = 'Car'";

$result = mysqli_query($con, $sql);
$result2 = mysqli_query($con, $sql);



//find the number of records return
$num = mysqli_num_rows($result);

// echo "Total Records found(Cars) : ".$num;
// echo "<br>";

// $no = 1;

// if($num>0)
// {
//     //using while loop
//     while($row = mysqli_fetch_assoc($result))
//     {
//         echo $row['Sno']. ".  Student ID : ". $row['majuID']. "  in Car " . $row['vehicleName'];
//         echo "<br>";
//         // $no = $no+1;
//     }
// }
$Sno = $_POST['Sno'];
$majuID = $_POST['majuID'];
$vehicleName = $_POST['vehicleName'];
$phoneNumber = $_POST['phoneNumber'];
// $vehicle = $_POST['vehicle'];

// $sql = "UPDATE `mps` SET `majuID` = '$majuID', `vehicleName` = '$vehicleName', `phoneNumber` = '$phoneNumber', `vehicle` = 'Car' WHERE `mps`.`Sno` = `$Sno`";
$sql = "UPDATE `mps` SET `majuID` = '$majuID', `vehicleName` = '$vehicleName', `phoneNumber` = '$phoneNumber', `vehicle` = 'Car' WHERE `mps`.`Sno` = '$Sno';";

// echo $sql;
$result = mysqli_query($con, $sql);
if (!mysqli_affected_rows($con)) {
  // echo("Successfully Updated Query at : ".$Sno);
  $update = false;

} else
  $update = true;
if ($con->query($sql) == true) {
  // echo "successfully updated";
} else {
  echo "Error: $sql <br> $con->error";
}

$con->close();



?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Maju Parking System</title>
  <meta name="viewport" content="width=device-width,
      initial-scale=1.0" />
  <link rel="stylesheet" href="queStyle.css" />
</head>

<body>

  <div class="container">
    <h1 class="form-title">MPS:Update Record(Car)</h1>
    <form action="updateQue(C).php" method="post">

      <div class="main-user-info">
        <div class="user-input-box">
          <label for="majuID">Maju I.D</label>
          <input type="text" id="majuID" name="majuID" placeholder="Enter MAJU I.D" />
        </div>
        <div class="user-input-box">
          <label for="vehicleName">Vehicle Name</label>
          <input type="text" id="vehicleName" name="vehicleName" placeholder="Toyota Corolla" />
        </div>
        <div class="user-input-box">
          <label for="phoneNumber">Phone Number</label>
          <input type="text" id="phoneNumber" name="phoneNumber" placeholder="Enter Phone Number" />
        </div>
      </div>
      <div class="vehicle-details-box">
        <span class="vehicle-title">Vehicle Type</span>
        <div class="vehicle-category">
          <input type="radio" name="vehicle" id="vehicle" value="Car">
          <label for="CAR">CAR</label>

        </div>
        <div class="user-input-box">
          <label for="sno">Sno</label>
          <input type="text" id="Sno" name="Sno" required placeholder="Enter the Sno here" />
        </div>
      </div>
      <div class="form-submit-btn">
        <input type="submit" value="Update">
      </div>


    </form>
    <?php
      if ($update == true) {
        echo "<center><p style='color:white;margin: 10px;padding: 10px;background-color:green'>Query Updated Succesfully at Sno : `$Sno`</p><center>";
      }
      ?>
  </div>
  <div class="container">
    <h1 class="form-title">Existing Car Records</h1>
    <div class="records-info">
      <?php


      if ($num > 0) {
        echo "<br>";

        //using while loop
        while ($row = mysqli_fetch_assoc($result2)) {

          echo "Sno : " . $row['Sno'] . ".  Student ID : " . $row['majuID'] . "  in Car : " . $row['vehicleName'];
          echo "<br>";
          $no = $no + 1;
        }
      }
      ?>
    </div>
    <div class="form-submit-btn">
      <a href="http://localhost/mps/admin.php">
        <input type="submit" value="Admin Panel"></a>
    </div>



  </div>
</body>

</html>