<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  
<?php
// define variables and set to empty values
$nameErr = $emailErr = $phoneErr ="";
$name = $email = $phone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if(empty($_POST["name"])){
	$nameErr = "Name is required";
}else{
  $name = test_input($_POST["name"]);
  if(!preg_match("/^[a-z]*$/",$name)){$nameErr = "harus menggunakan huruf kecil";
  }
}
if(empty($_POST["email"])){
	$emailErr = "Email is required";
}else{
  $email = test_input($_POST["email"]);
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	  $emailErr = "invalid email format";
  }
}
if(empty($_POST["phone"])){
	$phoneErr = "Phone is required";
}else{
  $phone = test_input($_POST["phone"]);
  if(!preg_match("/^[0-9]*$/",$phone)){$phoneErr = "harus menggunakan angka";
  }
}
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>validasi</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Phone Number: <input type="text" name="phone" value="<?php echo $phone;?>">
  <span class="error">* <?php echo $phoneErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $phone;
echo "<br>";
?>

</body>
</html>