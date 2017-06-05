<?php

session_start();

if (isset($_POST["name"]) && empty($_POST["name"])) {


header('Location: ' . 'demo1.php'); // or we can use : echo '<script>window.location.href = "the-target-page.php";</script>';
exit(); 
}

else {

require_once('connect.php');


$pname = $_POST['name'];
$sql = "Delete from pages where pname='" . $pname . "'";	
echo $pname;
if (!mysqli_query($conn,$sql)) {
  die('Error: ' . mysqli_error($conn));
}
echo "1 record deleted";

mysqli_close($conn);
header('Location: ' . 'demo1.php'); // or we can use : echo '<script>window.location.href = "the-target-page.php";</script>';
exit();

}

?>