<?php
require 'database/config.php';
session_start();
?>
<!DOCTYPE HTML>
<htmL>
  <head>
    <link rel="stylesheet" href="css/style.css">
    <title>Vehicle Theft Detection Login</title>
  </head>
  <body background="city.jpg">
   <div id="Mainwrapper">
    <form method="post" enctype="Multipart/form-data">
      <table align="center" style="color: white;width: 350px;height: 200px; position: relative;top: 
      220px;border:1>
      <tr>
        <td style="position: relative;left: 50px;bottom: 5px;background-color: #d5bdbd">
          <center><h3>LOG IN FORM</h3></center>
        </td>
      </tr>
      <tr>
        <td><center>Username</center></td>
        <td><input type="text" name="username" placeholder="Your Username"/></td>
      </tr>
      <tr>
        <td><center>Password</center></td>
        <td><input type="password" name="password" placeholder="Your Password"/></td>
      </tr>
      <tr>
        <td>
          <center>
            <input type="submit" name="SignIn" value="LogIn" style="background-color: #f01d6a; color:#000000; width: 100px;height: 40px;position: relative;top: 5px;bottom: 2px"/ >
          </center>
        </td>
        <td>
          <center>
            <a href="register.php">
            <input type="button" name="Register" value="Register" style="background-color: #f01d6a; color:#000000; width: 150px;height: 40px;position: relative;top: 5px;bottom: 2px"/ >
          </a>
          </center>
        </td>
      </tr>
  
      </table>


    </form>
   </div>
  </body>
</htmL>
<?php
if (isset($_POST['SignIn'])){
  $username=$_POST['username'];
  $password=$_POST['password'];
  $query1="select * from admin where username = '$username' AND password='$password'";
  $runquery1=mysqli_query($con,$query1);
  if(mysqli_num_rows($runquery1)>0){
    header('location:testpage.php');
    $_SESSION['username']=$username;
  }
  else{
    echo '<script>alert("invalid username or password")</script>';
  }
}

?>