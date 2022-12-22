<?php

   $server = "localhost";
   $username = "root";
   $password = "";

    $con = mysqli_connect($server, $username, $password);

    if(!$con)
    {
      die("Connection to this database failed due to ". mysqli_connect_error());
    }

    echo "S"

?>





<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Responsive Registration Form</title>
    <meta name="viewport" content="width=device-width,
      initial-scale=1.0"/>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    
    <div class="container">
      <h1 class="form-title">MAJU Parking System</h1>
      <form action="#">
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
            <input type="radio" name="vehicle" id="vehicle">
            <label for="CAR">CAR</label>
            <input type="radio" name="vehicle" id="vehicle">
            <label for="BIKE">BIKE</label>
            <!-- <input type="radio" name="gender" id="other">
            <label for="other">Other</label> -->


            
          </div>
        </div>
        <div class="form-submit-btn">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </body>
</html>