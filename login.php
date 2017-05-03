
<?php

  $username = $_POST['username'];
  $password = $_POST['password'];

  $connection = mysqli_connect("localhost", "root", "") or die("Database Connection Failed" .mysqli_connect_error());


  //mysqli_connect("localhost","root","");
  mysqli_select_db($connection, "naveen") or die("cdjjdcn");

  $result = mysqli_query($connection, "select * from authentication where Email = '$username' and Password = '$password' ")

            or die("Unable to connect".mysqli_query_error());

  $row = mysqli_fetch_array($result);
  if($row['Email'] == $username && $row['Password'] == $password){
      if ($row['selecto'] == FACULTY){
          header('Location: facultychoose.html');

      }else{
          header('Location: studentchoose.html');

      }

  }else {
    echo "Failed";
  }


  $connection->close();

/*
 * Following code will get single user details
 * A user is identified by user id (uid)
 */
 // If the values are posted, insert them into the database.
//  require_once 'db_connect.php';
// if (isset($_POST['submit'])){
// $username = $_POST['username'];
// $password = $_POST['password'];
//
// $sql = "SELECT * FROM `authentication` WHERE Name='$username' and Password='$password'";
// $result = mysql_query($sql) or die(mysql_error());
// $count = mysql_num_rows($result);
// if ($count == 1){
// echo "You are logged in";
// }else {
// echo "Login Failed";
// }
// }
//  $_GET["Email"] = 'naveen.jolaniya.14cse@bml.edu.in';
// array for JSON response

/*$response = array();

// include db connect class
require_once __DIR__ . '/db_connect.php';

// connecting to db
$db = new DB_CONNECT();

// check for post data
if (isset($_REQUEST["username"]) && isset($_REQUEST["password"])) {
    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];



    // get a user from users table
	 //echo "SELECT *FROM authentication WHERE Email = '$username' and  Password = '$password'";
    $result = mysql_query("SELECT *FROM authentication WHERE Email = '$username' and  Password = '$password'");
if(strpos ($username,'@bml.edu.in') !== false){
    if (!empty($result)) {
        // check for empty result
        if (mysql_num_rows($result) > 0) {

            $result = mysql_fetch_array($result);

            $user = array();
            $response["uid"] = $result["ID"];
            $response["ID"] = $result["ID"];
            $response["Email"] = $result["Email"];
            $response["Password"] = $result["Password"];
           /*  $user["created_at"] = $result["created_at"];
            $user["updated_at"] = $result["updated_at"];
            // success
            $response["success"] = 1;

            /* // user node
            $response["user"] = array();

            array_push($response["user"], $user);


            // echoing JSON response
            echo json_encode($response);
			//print_r($response) ;
        } else {
            // no user found
            $response["success"] = 0;
            $response["message"] = "No user found";

            // echo no users JSON
            echo json_encode($response);
        }
    } else {
        // no user found
        $response["success"] = 0;
        $response["message"] = "No user found";

        // echo no users JSON
        echo json_encode($response);

    }
	}else {
		$response["success"] = 0;
		$response["message"] = "Only BML I'D is allowed!";

    // echoing JSON response
    echo json_encode($response);
	}
} else {
    // required field is missing
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";

    // echoing JSON response
    echo json_encode($response);
}/*/
?>
