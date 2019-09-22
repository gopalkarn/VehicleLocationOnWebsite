<?php
require 'database/config.php';
session_start();
?>
<!DOCTYPE HTML>
<htmL>
  <head>
    <link rel="stylesheet" href="css/style.css">
    <title>Vehicle Theft Detection</title>
    <style type="text/css"></style>
  </head>
  <body>
  	<?php
  	if (isset($_SESSION['username'])){
  		echo $_SESSION['username'];
  		$username = $_SESSION['username'];
  		$query13="select * from admin where username='$username'";
  		$runquery13=mysqli_query($con,$query13);
  		$rowdata=mysqli_fetch_array($runquery13);
  		$username=$rowdata['username'];
  		$img=$rowdata['img'];
  		$vehicle=$rowdata['vehicle'];
  		echo "<table>
  		<tr><img src='admin/$img'/></tr>
  		<tr><h3>Subscriber name: $username</h3></tr>
  		<tr><h3>Vehicle number: $vehicle</h3></tr>
  		</table>";
    }
  	else {
  		echo "welcome admin";
  	}
  	?>
    <table>
    <tr>
    <td>
        <center>
        <a href="map2.php">
            <input type="button" name="map" value="Locate" style="background-color: #f01d6a; color:#000000; width: 100px;height: 40px;position: relative;top: 5px;bottom: 2px"/ >
         </a>
        </center>
       
        </td>
    </tr>
    </table>
  </body>
</htmL>