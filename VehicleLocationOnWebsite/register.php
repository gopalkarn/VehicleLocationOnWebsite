<?php
require 'database/config.php';
?>
<!DOCTYPE HTML>
<htmL>
  <head>
    <link rel="stylesheet" href="css/style.css">
    <title>Vehicle Theft Detection Registration</title>
  </head>
  <body background="city.jpg">
   <div id="Mainwrapper">
    <form method="post" enctype="Multipart/form-data">
      <table align="center" style="color: white;width: 350px;height: 200px; position: relative;top: 
      220px;border:1>
      <tr>
        <td style="position: relative;left: 50px;bottom: 5px;background-color: #d5bdbd">
          <center><h3>REGISTERATION FORM</h3></center>
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
        <td><center>VehicleNo</center></td>
        <td><input type="text" name="vehicle" placeholder="Your Vehicle Number"/></td>
      </tr>
      <tr>
        <td allign="center">Upload Image</td>
        <td><input type="file" name="img1"/></td>
      </tr>
      <tr>
        <td>
          <center>
            <a href="register.php">
            <input type="submit" name="Register" value="Register" style="background-color: #f01d6a; color:#000000; width: 150px;height: 40px;position: relative;top: 5px;bottom: 2px"/ >
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
if(isset($_POST['Register'])){
  $username=$_POST['username'];
  $password=$_POST['password'];
  $vehicle=$_POST['vehicle'];
  $img=$_FILES['img1']['name'];
  $temp_name=$_FILES['img1']['tmp_name'];
  $filepath="admin/$img";
  move_uploaded_file($temp_name,$filepath);
  $query2="insert into admin (username,password,vehicle,img) values('$username','$password','$vehicle','$img')";
  $runquery2=mysqli_query($con,$query2);
  if($runquery2){
    echo'<script>alert("Account has been register")</script>';
  }
}


?>