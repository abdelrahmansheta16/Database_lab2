<html>
<head>
<title>Lab 1</title>
</head>
<body>
<?php 
$message = "";
if(!empty($_GET['message'])) {
    $message = $_GET['message'];
}
?>
<form name="register" action="register.php" onsubmit="return validateForm()" method="post">
Email: <input type="text" name="email"><br>
Name: <input type="text" name="name"><br>
Password: <input type="text" name="password"><br>
Confirm Password: <input type="text" name="confirmPassword"><br>
<input type="submit" value="Register">
</form>
<?php echo $message ?>
<script>
function validateForm() {
var email = document.forms["register"]["email"].value;
var name = document.forms["register"]["name"].value;
var password = document.forms["register"]["password"].value;
var confirmPassword = document.forms["register"]["confirmPassword"].value;
var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

if (email == "") {
    alert("Email is missing");
    return false;
}
else if(name == ""){
    alert("Name is missing");
    return false;
}
else if(password == ""){
    alert("Password is missing");
    return false;
}
else if(password != confirmPassword){
    alert("Password doesn't match");
    return false;
}
else if (!filter.test(email)) {
    alert('Please provide a valid email address');
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