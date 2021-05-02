<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="ffd.css">

<style>
	table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;

}

tr:nth-child(even) {
    background-color: white;
}
</style>
	<title></title>
</head>
<body>

</body>
</html>
<?php
include_once 'database.php';
?>

<?php
if(isset($_GET['PID1'])){
$regValue = $_GET['PID1'];
}


if(isset($_GET['PID2'])){
$regValue2 = $_GET['PID2'];
}

if(isset($_GET['PID3'])){
$regValue3 = $_GET['PID3'];
}

if(isset($_GET['PID1'])){
$favcolor=$regValue;
}

if(isset($_GET['PID2'])){
$favcolor=$regValue2;
}

if(isset($_GET['PID3'])){
$favcolor=$regValue3;
}


switch ($favcolor) {
  case $regValue:
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "INSERT INTO cart (name,code,price)
VALUES ('DAVIDOFF Cool Water Eau de Toilette 100 ml for Women', 'pid2', '₹3,840')";
if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
    break;






  case $regValue2:
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "INSERT INTO cart (name,code,price)
VALUES ('DAVIDOFF Cool Water Eau de Toilette 125 ml for men', 'pid1', '₹3,450')";
if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
    break;








  case $regValue3:
  $conn = new mysqli($servername, $username, $password, $dbname);

$sql = "INSERT INTO cart (name,code,price)
VALUES ('JAGUAR Classic Black Eau de Toilette 100 ml for Men', 'pid3', '₹1,980')";
if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "SELECT * FROM cart";
$result = $conn->query($sql);


    break;
}

?>

<h4> Product Added to Cart </h4>

<a href="demo1.php" class="btn btn-warning " role="button" aria-disabled="true">Go Back</a>


 </body>
</html>