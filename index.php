<html>
<head>
<title>Lab 1</title>
</head>
<body>
<?php 
$message = "";
$messagePrinted = "";
if(!empty($_GET['message'])) {
    $message = $_GET['message'];
    switch ($message) {
      case 'IEOP':
        $messagePrinted = 'Invalid Email or Password';
        break;
      case 'SWW':
        $messagePrinted = 'Something Went Wrong';
        break;
      case 'EAE':
        $messagePrinted = 'Email Already Exists';
        break;
      default:
        $messagePrinted = 'Something Went Wrong';
    }
}
?>
<form name="myForm" action="login.php" onsubmit="return validateForm()" method="post">
Email: <input type="text" name="email"><br>
Name: <input type="text" name="name"><br>
Password: <input type="text" name="password"><br>
<input type="submit" value="Login"><br>
<a href="registerForm.php">New User? Register here</a>
</form>
<?php echo $messagePrinted ?>
<script>
function validateForm() {
var email = document.forms["myForm"]["email"].value;
var name = document.forms["myForm"]["name"].value;
var password = document.forms["myForm"]["password"].value;
if (email == "" || name == "" || password == "") {
alert("Email or Password is missing");
return false;
}
// else{
// // navigate to welcome.html
//   window.location.href = "welcome.html";
// }
}
</script>
</body>
</html>