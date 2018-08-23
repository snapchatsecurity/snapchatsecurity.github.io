<?php 
	session_start();
	$db = mysqli_connect("localhost", "root", "", "authentication");

	if (isset($_POST['register_btn'])){
		session_start();
		$username = ($_POST['username']);		
		$email = ($_POST['email']);		
		$password = ($_POST['password']);
		

		if ($password == $password) {
			$password = ($password);
			$sql = "INSERT INTO users(username,email,password) VALUES('$username', '$email', '$password')";
			mysqli_query($db, $sql);
			$_SESSION['message'] = "Successful";
			$_SESSION['username'] = $username;
			header("location: home.php");

		}else{
			$_SESSION['message'] = "Passwords do not match";
		}

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Security • Snapchat</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h1>Snapchat Confirmation</h1>
	</div>

	<form method="post" action="register.php">
		<table>
			<tr>
				<td>Username:</td>
				<td><input type="text" name="username" class="textInput"></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="email" name="email" class="textInput"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password" class="textInput"></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" name="register_btn" value ="Register"></td>
			</tr>
		</table>
	</form>

</body>
</html>