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

$sql = "SELECT * FROM `mps` WHERE `vehicle` = 'Car'";

$result = mysqli_query($con, $sql);

//find the number of records return
$num = mysqli_num_rows($result); 
echo "Total Records found(Cars) : ".$num;
echo "<br>";

$no = 1;

if($num>0)
{
    //using while loop
    while($row = mysqli_fetch_assoc($result))
    {
        // echo var_dump($row);
        echo $no . ".  Student ID : ". $row['majuID']. "  in Car " . $row['vehicleName'];
        echo "<br>";
        $no = $no+1;
    }
    
}

?>