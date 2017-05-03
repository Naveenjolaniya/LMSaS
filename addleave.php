<?php
// include 'login.php';



  $username = $_POST['name'];
  $rollno = $_POST['roll_no'];
  // $datea = $_POST['date'];
  // $timea = $_POST['time'];
  $reason = $_POST['reason'];
  $branch = $_POST['branch'];

 //  $username = 'Naveen';
 // $rollno = '123';
 // $datea = '12/2/2016';
 // $timea = '12:23 AM';
 // $reason = 'asdf';
 // $branch = 'cse';

  $connection1 = mysqli_connect("localhost", "root", "") or die("Database Connection Failed" .mysqli_connect_error());


  //mysqli_connect("localhost","root","");
  mysqli_select_db($connection1, "naveen") or die("cdjdcn");

  $sql2 = mysqli_query($connection1, "insert into naveen.add_leave values('', '$username', '$rollno', CURRENT_TIMESTAMP ,CURRENT_TIMESTAMP, '$reason', '$branch')");
  // $sql2 = mysqli_query($connection1, "insert into naveen.add_leave values('', 'b', 'c', 'D' ,'e', 'f', 'G')");


  /*if(mysqli_query($connection, $sql)){
    echo "Records inserted successfully.";
  } else{
    echo "ERROR: Could notmkdmkdmck able to execute $sql. " . mysqli_error($sql);
  }*/
  echo $sql2;
  if ($sql2) {
    // echo "entry filled";
    echo "Your leave has been submitted to faculty";
  } else {
    echo "Error: " . $sql2 . "<br>" . $connection1->error;
  }

  $connection1->close();

?>
