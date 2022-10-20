<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Animated Login Form | CodingNepal</title>
    <link rel="stylesheet" href="style_login.css">
  </head>
  <body>
    <?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $database = "user";
   
   $conn = mysqli_connect($servername,$username,$password,$database);
   if($_SERVER["REQUEST_METHOD"] == "POST")
{
   
   $username = $_POST["username"];
   $email = $_POST["email"];
   $upassword = $_POST["password"];
   $cpassword = $_POST["cpassword"];
   $exists = false;
   if($upassword == $cpassword && $exists == false)
   {
      $sql="INSERT INTO `usertable` (`username`, `email`,`password`,`date`) VALUES ('$username', '$email','$upassword',current_timestamp())";
      $result = mysqli_query($conn,$sql); 
   }
    
   
}
   ?>
   
    ?>
    <div class="center">
      <h1>Sign In</h1>
      <form action = "signup.php" method ="post">
        <div class="txt_field">
          <input type="text"  name = "username" required>
          <span></span>
          <label>Please Enter Username</label>
        </div>
        <div class="txt_field">
          <input type="mail" name = "email"  required>
          <span></span>
          <label>Enter an Email id</label>
        </div>
        <div class="txt_field">
          <input type="password" name ="password" required>
          <span></span>
          <label>Enter Password</label>
        </div>
        <div class="txt_field">
            <input type="password" name = "cpassword" required>
            <span></span>
            <label>Confirm Password</label>
          </div>
        
        <input type="submit" value="Sign In">
      </form>
    </div>

  </body>
</html>
