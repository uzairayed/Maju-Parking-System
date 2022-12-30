<?php

 $server = "localhost";
 $username = "root";
 $password = "";
 $dbname = "mps";

  $con = mysqli_connect($server, $username, $password, $dbname);

  if(!$con)
  {
    die("Connection to this database failed due to ". mysqli_connect_error());
  }
  else{

   echo "Sucessfully connected to the database<br>";
}

$sql = "SELECT * FROM mps";
$result = mysqli_query($con, $sql);

//find the number of records return
$num = mysqli_num_rows($result); 
echo "Total Records found: ".$num;
echo "<br>";

//rows returned by the sql query

if($num>0)
{
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    //using while loop
    while($row = mysqli_fetch_assoc($result))
    {
        // echo var_dump($row);
        echo $row['Sno']. ".  Student ID : ". $row['majuID']. "  in Car/Bike " . $row['vehicleName'];
        echo "<br>";
    }
    
}


?>