<?PHP
// require_once __DIR__ . '/db_connect.php';
//
// // connecting to db
// $db = new db_connect();
$connection2 = mysqli_connect("localhost", "root", "") or die("Database Connection Failed" .mysqli_connect_error());


//mysqli_connect("localhost","root","");
mysqli_select_db($connection2, "naveen") or die("cdjdcn");



    $firstname = $_POST['first_name'];
    $fullname = $_POST['occupation'];
     $x = $_POST['cat_name'];
     $z = $_POST['drink'];
     $q5 = $_POST['talent'];
    // $fullname ='CC';
    //  $x = 2;
    //  $q5 = 'PHD';
    //  $z = 4;
    echo $fullname, $x, $z, $q5;
     echo $x, $q5, $z;
     if($q5=='PHD')
     { $y=5;
     }
     elseif(q5=='MASTERS')
     { $y=4;
     }
     elseif(q5=='BACHELORS')
     { $y=3;
     }
     elseif(q5=='PROJECT DONE')
     { $y=2;
     }
     else
     {
     $y=1;
     }
     $sum = ($x * 0.2) + ($y * 0.5) + ($z * 0.3);
     echo $sum;
  //   $SQL3 = mysqli_query($connection2, "insert into naveen.score(Subject Name, sum) VALUES( '$fullname', '$sum')");
     $sql3 = mysqli_query($connection2, "INSERT INTO `score` (`Tid`, `Tacher_Name`, `SubjectName`, `sum`) VALUES (NULL, '$firstname', '$fullname', '$sum')");
//header "thankspage.html";
     echo $sql3;
     if ($sql3) {
       echo "entry filled";
     } else {
       echo "Error: " . $sql3 . "<br>" . $connection2->error;
     }

     $connection2->close();


     ?>
