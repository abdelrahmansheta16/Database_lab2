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

$sql = "SELECT * FROM user WHERE email='".$_POST["email"]."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  header("Location: index.php?message=EAE");
} else {
    $sql = "INSERT INTO user (email, name, password)
    VALUES ('".$_POST["email"]."', '".$_POST["name"]."', '$md5Password')";
    if ($conn->query($sql) === TRUE) {
        echo " Hello " . $_POST["name"]. "<br>";
      } else {
        header("Location: index.php?message=SWW");
      }
}

$conn->close();
?>