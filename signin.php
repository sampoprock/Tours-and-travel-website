<html>
	<head>
		<link rel="stylesheet" type="text/css" href="log-in.css"/>
		<title>SIGNIN</title>
	</head>
	<body>
		<div class="login-box">
			
			<div class="signin">
			<form name="f4" method="POST">
			<div class="m"><h4>SIGNIN<h4></div>
			<hr>
			<table cellspacing="10">
			<tr>
				<div class="textbox">
			<td>EMAIL</td>
			<td>:</td>
			<td><input type="email" name="t1" required></td>
		</div>
			</tr>
			<tr>
				<div class="textbox">

			<td>PASSWORD</td>
			<td>:</td>
			<td><input type="password" name="t2"  required="required"></td>
		</div>
			</tr>
			</table>
			<!--<a href="services.html"> -->
			<input type="submit" name="2" value="Sign In" class="btn">
			<p>No account? <a href="signup.php">Create One!</a></p>
			</form>
			</div>
			
			
		</div>
		
	</body>
</html>
  <?php
  $servername = "localhost";
$username = "root";
$password = "";
$dbname = "pthology";


// Create connection
$dbc = new mysqli($servername, $username, $password, $dbname);
// Check consnection
if ($dbc->connect_error) {
    die("Connection failed: " . $dbc->connect_error);
}
 
    if(isset($_POST['2'])) {

    //get the name and comment entered by user
    
$email=$_POST['t1'];
$password=$_POST['t2'];


 

	
    $n="select email,password from user_tb1 where email='$email' and password='$password'";
    $check=mysqli_query($dbc,$n);

    $checkrows=mysqli_num_rows($check);
	
     if($checkrows!=0) {
      echo "customer exists";

	  //include("services.html");
	 header("location:index1.html");
   } else { 
   	
   echo "username and password combination does not match";
      $dbc->close();
    }
	
	
    };
  ?>

