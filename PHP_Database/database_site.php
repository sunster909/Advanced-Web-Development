<html> 
<head> 
<title>Disney Pins</title> 

</head> 

<style>
*{
    font-family: "Arial";
}

h1{
    margin: 20px;
}
body{
    background-color: #FF6C6C;
    margin-left: 20px;
}

</style> 
<body> 
<form method="post">

<?php 
$pintype = $_POST["pintype"];
$category = $_POST["category"];
$cost = $_POST["cost"];

if (!isset($_POST['submit'])) {
?> 
<h1> <center> Disney Pin Finder </center> </h1> <br /> 

<h3> Pin Type: </h3>
Limited Edition<input type="radio" value="Limited Edition"
name="pintype"><br />
Open Edition<input type="radio" value="Open Edition"
name="pintype"><br />
Hidden Mickey<input type="radio" value="Hidden Mickey"
name="pintype">
<br /> <br />
<h3>Choose <i> one </i> category: </h3>
All<input type="checkbox" value="All2" name="category[]"><br />
Attractions / Rides<input type="checkbox" value="Attractions" name="category[]"><br />
Cast Exclusive<input type="checkbox" value="Cast_Exclusive" name="category[]"><br />
Characters<input type="checkbox" value="Characters" name="category[]"><br />
Princesses<input type="checkbox" value="Princesses" name="category[]"><br />
Villains<input type="checkbox" value="Villains" name="category[]"><br />
<br /><br />
<h3>Price: </h3>
<select name="cost">
<option value="Low ">Low</option>
<option value="Medium">Medium</option>
<option value="High">High</option>
<br /> <br />
<input type="submit" value="Submit" name="submit"> 
</form>

<?
} else {
echo "You are looking for a(n) ".$pintype." pin.<br /><br />";
echo "Your price range is ".$cost.", and you are interested in finding";
foreach ($category as $c) {
echo " ".$c." pins.<br /><br />";
}


$servername = "sunster90925695.ipagemysql.com";
$username = "sunster909";
$password = "dance909";
$dbname = "testnicholson";






// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO disneypins (pintype, category, cost)
VALUES ('$pintype', '$category', '$cost')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
