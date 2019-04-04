<!DOCTYPE html>
<html>
<body>

<?php
$servername = "sunster90925695.ipagemysql.com";
$username = "sunster909";
$password = "dance909";
$dbname = "testnicholson";
$theCost = $_POST['price'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM disneypins WHERE price = '$theCost'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " -Type: " .$row["type"]." -Cost: ".$row["price"]." -Name: " .$row["name"]. " -Year: " .$row["year"]."<br/>";
    }
} else {
    echo "<br/>0 results";
}
$conn->close();
?> 
<form method="post">
<input name="price">
<button>Pin Type Search</button>
</form>
</body>
</html> 