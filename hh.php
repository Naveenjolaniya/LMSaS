<?php
$connection3 = mysqli_connect("localhost", "root", "") or die("Database Connection Failed" .mysqli_connect_error());


//mysqli_connect("localhost","root","");
mysqli_select_db($connection3, "naveen") or die("cdjdcn");
$all=mysqli_query($connection3, "select * FROM `add_leave` ") or die("Unable to connect".mysqli_query_error());
$all_print=mysqli_fetch_array($all);


if(mysqli_num_rows($all)>0)
{
   while($row=mysqli_fetch_assoc($all))
   {
     echo " " . $row["S.no"]. "  ". $row["Name"]. "  ". $row["Roll No."]. "  ".$row["Date"]."  ". $row["Reason"]. "  ". $row["Branch"]."<br>";

   }
}
else {
  {
    echo "0 results";
  }
}























// echo '123';
// //$tquery = "SELECT MAX(`sum`) FROM `score` WHERE SubjectName = 'OOPS';";
// $rowSQL1 = mysqli_query($connection3, "select max(`sum`) AS sum from `score` where SubjectName = 'OOPS';");
// 					//	$rowSQL1 = mysqli_query($connection3,  "SELECT MAX(sum) AS sum FROM score WHERE SubjectName = 'OOPS'" );
// 						//$sql = "SELECT MAX(sum) AS sum FROM score WHERE SubjectName = \'OOPS\'";
// 					//echo $rowSQL1;
// 						$row = mysqli_fetch_array( $rowSQL1 );
// 						//$largestNumber1 = $row['max'];
// 						echo $rowSQL1;
// 						// $rowSQL = mysqli_query($connection3, "SELECT MAX(sum) AS sum FROM score WHERE SubjectName = 'MACHINE LEARNING' ;" );
// 						// $row = mysqli_fetch_array( $rowSQL );
// 						// $largestNumber2 = $row['max'];
// 						// $rowSQL = mysqli_query($connection3, "SELECT MAX(sum) AS sum FROM score WHERE SubjectName = 'COMPUTER NETWORKS' ;" );
// 						// $row = mysqli_fetch_array( $rowSQL );
// 						// $largestNumber3 = $row['max'];
// 						// $rowSQL = mysqli_query($connection3, "SELECT MAX(sum) AS sum FROM score WHERE SubjectName = 'SOFTWARE ENGINEERING';" );
// 						// $row = mysqli_fetch_array( $rowSQL );
// 						// $largestNumber4 = $row['max'];
// 						// $rowSQL = mysqli_query($connection3, "SELECT MAX(sum) AS sum FROM score WHERE SubjectName = 'DISTRIBUTED SYSTEMS';" );
// 						// $row = mysqli_fetch_array( $rowSQL );
// 						// $largestNumber5 = $row['max'];
// 						// $rowSQL = mysqli_query($connection3, "SELECT MAX(sum) AS sum FROM score WHERE SubjectName = 'INTERNET OF THINGS';" );
// 						// $row = mysqli_fetch_array( $rowSQL );
// 						// $largestNumber6 = $row['max'];
// 						// $rowSQL = mysqli_query($connection3, "SELECT MAX(sum) AS sum FROM score WHERE SubjectName = 'DIGITAL IMAGE PROCESSING';" );
// 						// $row = mysqli_fetch_array( $rowSQL );
// 						// $largestNumber7 = $row['max'];
// 						// $rowSQL = mysqli_query($connection3, "SELECT MAX(sum) AS sum FROM score WHERE SubjectName = 'DIGITAL HARDWARE DESIGN';" );
// 						// $row = mysqli_fetch_array( $rowSQL );
// 						// $largestNumber8 = $row['max'];
// 						// $rowSQL = mysqli_query($connection3, "SELECT MAX(sum) AS sum FROM score WHERE SubjectName = OPERATING SYSTEMS';" );
// 						// $row = mysqli_fetch_array( $rowSQL );
// 						// $largestNumber9 = $row['max'];
// 						// $rowSQL = mysqli_query($connection3, "SELECT MAX(sum) AS sum FROM score WHERE SubjectName = 'OOPS';" );
// 						// $row = mysqli_fetch_array( $rowSQL );
// 						// $largestNumber10 = $row['max'];
// 				/*		$SQL = mysqli_query($connection3, "SELECT Tid FROM score WHERE sum = '$largestNumber1'");
// 						$row = mysqli_fetch_array( $rowSQL );
// 						$$teacherId1 = $row['Tid'];
// 						$SQL = mysqli_query($connection3, "SELECT Tid FROM score WHERE sum = '$largestNumber2'");
// 						$row = mysqli_fetch_array( $rowSQL );
// 						$$teacherId 2= $row['Tid'];
// 						$SQL = mysqli_query($connection3, "SELECT Tid FROM score WHERE sum = '$largestNumber3'");
// 						$row = mysqli_fetch_array( $rowSQL );
// 						$$teacherId3= $row['Tid'];
// 						$SQL = mysqli_query($connection3,"SELECT Tid FROM score WHERE sum = '$largestNumber4'");
// 						$row = mysqli_fetch_array( $rowSQL );
// 						$$teacherId4 = $row['Tid'];
// 						$SQL = mysqli_query($connection3,"SELECT Tid FROM score WHERE sum = '$largestNumber5'");
// 						$row = mysqli_fetch_array( $rowSQL );
// 						$$teacherId5 = $row['Tid'];
// 						$SQL = mysqli_query($connection3,"SELECT Tid FROM score WHERE sum = '$largestNumber6'");
// 						$row = mysqli_fetch_array( $rowSQL );
// 						$$teacherId6 = $row['Tid'];
// 						$SQL = mysqli_query("SELECT Tid FROM score WHERE sum = '$largestNumber7'");
// 						$row = mysqli_fetch_array( $rowSQL );
// 						$$teacherId7 = $row['Tid'];
// 						$SQL = mysqli_query($connection3,"SELECT Tid FROM score WHERE sum = '$largestNumber8'");
// 						$row = mysqli_fetch_array( $rowSQL );
// 						$$teacherId8 = $row['Tid'];
// 						$SQL = mysqli_query($connection3,"SELECT Tid FROM score WHERE sum = '$largestNumber9'");
// 						$row = mysqli_fetch_array( $rowSQL );
// 						$$teacherId9 = $row['Tid'];
// 						$SQL = mysqli_query($connection3,"SELECT Tid FROM score WHERE sum = '$largestNumber10'");
// 						$row = mysqli_fetch_array( $rowSQL );
// 						$$teacherId10 = $row['Tid'];
// 						$SQL = mysql_query($connection3, "SELECT Teacher Name  FROM score WHERE Tid = '$teacherId1'");
// 						$row = mysql_fetch_array $rowSQL );
// 						$$teacherName1 = $row['Teacher Name'];
// 						$SQL = mysql_query($connection3, "SELECT Teacher Name  FROM score WHERE Tid = '$teacherId2'");
// 						$row = mysql_fetch_array $rowSQL );
// 						$$teacherName2 = $row['Teacher Name'];
// 						$SQL = mysql_query($connection3,"SELECT Teacher Name  FROM score WHERE Tid = '$teacherId3'");
// 						$row = mysql_fetch_array $rowSQL );
// 						$$teacherName3 = $row['Teacher Name'];
// 						$SQL = mysql_query($connection3,"SELECT Teacher Name  FROM score WHERE Tid = '$teacherId4'");
// 						$row = mysql_fetch_array $rowSQL );
// 						$$teacherName4 = $row['Teacher Name'];
// 						$SQL = mysql_query($connection3,"SELECT Teacher Name  FROM score WHERE Tid = '$teacherId5'");
// 						$row = mysql_fetch_array $rowSQL );
// 						$$teacherName5 = $row['Teacher Name'];
// 						$SQL = mysql_query($connection3,"SELECT Teacher Name  FROM score WHERE Tid = '$teacherId6'");
// 						$row = mysql_fetch_array $rowSQL );
// 						$$teacherName6 = $row['Teacher Name'];
// 						$SQL = mysql_query($connection3,"SELECT Teacher Name  FROM score WHERE Tid = '$teacherId7'");
// 						$row = mysql_fetch_array $rowSQL );
// 						$$teacherName7 = $row['Teacher Name'];
// 						$SQL = mysql_query($connection3,"SELECT Teacher Name  FROM score WHERE Tid = '$teacherId8'");
// 						$row = mysql_fetch_array $rowSQL );
// 						$$teacherName8 = $row['Teacher Name'];
// 						$SQL = mysql_query($connection3, "SELECT Teacher Name  FROM score WHERE Tid = '$teacherId9'");
// 						$row = mysql_fetch_array $rowSQL );
// 						$$teacherName9 = $row['Teacher Name'];
// 						$SQL = mysql_query($connection3,"SELECT Teacher Name  FROM score WHERE Tid = '$teacherId10'");
// 						$row = mysql_fetch_array $rowSQL );
// 						$$teacherName10 = $row['Teacher Name'];
// 						echo $fullname1 " " “is allocated to ”" " $teacherName1;
// 						// echo $fullname2 " " “is allocated to ”" " $teacherName2;
// 						// echo $fullname3 " " “is allocated to ”" " $teacherName3;
// 						// echo $fullname4 " " “is allocated to ”" " $teacherName4;
// 						// echo $fullname5 " " “is allocated to ”" " $teacherName5;
// 						// echo $fullname6 " " “is allocated to ”" " $teacherName6;
// 						// echo $fullname7 " " “is allocated to ”" " $teacherName7;
// 						// echo $fullname8 " " “is allocated to ”" " $teacherName8;
// 						// echo $fullname9 " " “is allocated to ”" " $teacherName9;
// 						// echo $fullname10 " " “is allocated to ”" " $teacherName10;
// */
