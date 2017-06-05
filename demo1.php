<!DOCTYPE html>
<html>
<head>
	<title>Title</title>
<style>
table#t01{
	width: 20%;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
}
table#t01 th {
    background-color: black;
    color: white;
}
</style>
</head>
<body>

<?php
session_start();
include_once "connect.php";


$result = $conn->query("SELECT pname FROM pages");
$outp = $result->fetch_all(MYSQLI_ASSOC);
//print_r(array_values ($outp ));
echo "<table id='t01' border='0' >
<tr>
<th>Name of Pages</th>
</tr>";
for ($i = 0; $i <= count($outp)-1; $i++ ){
	echo "<tr>";
	echo "<td>" . $outp[$i]['pname'] . "</td>";?>
	<td>
    <form action='delete.php?name="<?php echo $outp[$i]['pname']; ?>"' method="post">
        <input type="hidden" name="name" value="<?php echo $outp[$i]['pname']; ?>">
        <input type="submit" name="submit" value="Delete">
    </form>
	</td> <?php
	echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>	

<form name="inputForm" action="insert.php" onsubmit="return validateForm()" method="POST">
<p>
<label for="pname">Page Name: </label>
<input type="text" name="pname" id="pname"  autofocus required>
</p>
<input type="submit" value="Submit">

</form>

<script>

// for below function form should be like this: <form name="inputForm" action="insert.php" onsubmit="return validateForm()" method="POST">
/*function validateForm() {  
    var x = document.forms["inputForm"]["pname"].value.trim();
    if (x == "") {
        
       // document.forms["inputForm"]["pname"].style.color = "red";
        return false;
    }
}*/
</script>
</body>
</html>