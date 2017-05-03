<?php
// include 'addleave.php';
// $con = mysqli_connect("localhost","root","");
// if (!$con)
//   {
//   die('Could not connect: ' . mysqli_error());
//   }
// mysqli_select_db("naveen", $con);
$connection2 = mysqli_connect("localhost", "root", "") or die("Database Connection Failed" .mysqli_connect_error());


//mysqli_connect("localhost","root","");
mysqli_select_db($connection2, "naveen") or die("cdjdcn");
$result12 = mysqli_query($connection2, "SELECT * FROM add_leave");
while($row = mysqli_fetch_array($result12))
  {
  echo $row['Name']. $row['Roll No.']. $row['Date']. $row['Reason']. $row['Branch'];
  echo "<br />";
  }
