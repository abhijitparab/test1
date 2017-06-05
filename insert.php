<?php

session_start();

if (isset($_POST["pname"]) && empty($_POST["pname"])) {


header('Location: ' . 'demo1.php'); // or we can use : echo '<script>window.location.href = "the-target-page.php";</script>';
exit(); 
}

else {

require_once('connect.php');


$pname = mysqli_real_escape_string($conn,$_POST['pname']);

$sql = "INSERT INTO pages VALUES (pid,'$pname', '', '', '', '', '', '', '', '', '', '')";	

if (!mysqli_query($conn,$sql)) {
  die('Error: ' . mysqli_error($conn));
}
echo "1 record added";

mysqli_close($conn);
header('Location: ' . 'demo1.php'); // or we can use : echo '<script>window.location.href = "the-target-page.php";</script>';
exit();

}

?>