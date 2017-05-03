<?php

  $username = $_POST['userNameSignup'];
  $email = $_POST['userEmailSignup'];
  $password = $_POST['userPasswordSignup'];
  $or = $_POST['dd'];
  $connection = mysqli_connect("localhost", "root", "") or die("Database Connection Failed" .mysqli_connect_error());


  //mysqli_connect("localhost","root","");
  mysqli_select_db($connection, "naveen") or die("cdjjdcn");

  $sql = mysqli_query($connection, "insert into authentication(Name, Email, Password, Id,selecto) values('$username', '$email', '$password' ,DEFAULT,'$or')")
            or die("Unable to connect".mysqli_query_error());

  /*if(mysqli_query($connection, $sql)){
    echo "Records inserted successfully.";
  } else{
    echo "ERROR: Could notmkdmkdmck able to execute $sql. " . mysqli_error($sql);
  }*/

  if ($sql) {
    echo "Success";
  } else {
    echo "Error: " . $sql . "<br>" . $connection->error;
  }

  $connection->close();

?>
