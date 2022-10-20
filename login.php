<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";
$userPassword = '".$_POST["password"]."';
$md5Password = md5($userPassword);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM user WHERE email='".$_POST["email"]."' and password='$md5Password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo " Hello " . $row["name"]. "<br>";
  }
} else {
  header("Location: index.php?message=IEOP");

}

$conn->close();
?>