 <?php
$con = mysqli_connect("localhost","vysoxnyu_college","harshit@123","vysoxnyu_college");
// $con = mysqli_connect("localhost","root","","vysoxnyu_college");

// Check connection
if ($con -> connect_errno) {
  echo "Failed to connect to MySQL: " . $con -> connect_error;
  exit();
}
date_default_timezone_set("Asia/Calcutta");
    $cdate= date('Y-m-d H:i');
?> 