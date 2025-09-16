<?php

/*
$name = "Misha"; //String
$age = "19"; // Integer
$email = "misha@gmail.com"; // String
$height = "192cm"; // Float/Double
$IsSingle = true; // Boolean

echo $name , " " , $age , " " , $email , " " , $height , " " , $IsSingle;
*/


/*
$num_01 = 10;
$num_02 = 20;

$addition = $num_01 + $num_02;
echo $addition , "</br>";

$sub = $num_01 - $num_02;
echo $sub , "</br>";

$mul = $num_01 * $num_02;
echo $mul , "</br>";

$div = $num_01 / $num_02;
echo $div , "</br>";
*/


/*
$num_01 = $_GET["num01"];
$num_02 = $_GET["num02"];
$operator = $_GET["op"];


if($operator == "add")
{
	$result = $add = $num_01 + $num_02;
  echo $result . "</br>";
}

else if($operator == "sub")
{
	$result = $add = $num_01 - $num_02;
  echo $result . "</br>";
}

else if($operator == "mul")
{
	$result = $add = $num_01 * $num_02;
  echo $result . "</br>";
}

if($operator == "div")
{
	$result = $add = $num_01 / $num_02;
  echo $result . "</br>";
}
// /index.php?op=add
*/


/*
$num_01 = $_GET["num01"];
$num_02 = $_GET["num02"];
$operator = $_GET["op"];
$result = "";
if($operator == "add")
{
	$result = $num_01 + $num_02;
}

else if($operator == "sub")
{
	$result = $num_01 - $num_02;
}

else if($operator == "mul")
{
	$result = $num_01 * $num_02;
}

if($operator == "div")
{
	$result = $num_01 / $num_02;
}

echo "<script>alert('". $result . "')</script>"
// /index.php?op=add&num01=1&num02=1
*/



$servername = "127.0.0.1";
$username = "MishaDB";
$password = "8uekc55p2vlvPN";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

?>
