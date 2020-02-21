                                    
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="log-in.css">
		<title>SIGNUP</title>
		</style>
<script>
function equ()
{
	if(document.f4.r7.value!=document.f4.r8.value)
	{
		alert("PASSWORD MUST BE SAME");                                                                                                   		document.f4.r8.focus();
		return false;
	}
	else
	{
		return true;
	}
}
</script>
	<body>
		<div class="login-box">
			
			<div class="signup">
			<form name="f4" method="POST" action="#" onSubmit="return(equ());">
			<div class="m"><h4>SIGNUP<h4></div>
			<hr>
			<table cellspacing="10">
			<tr>
				<div class="textbox">
			<td>FIRST NAME</td>
			<td>:</td>
			<td><input type="text" name="r1" required></td>
		</div>
			</tr>
			<tr>
				<div class="textbox">
			<td>LAST NAME</td>
			<td>:</td>
			<td><input type="text" name="r2" required></td>
		</div>
			</tr>
			<tr>
				<div class="textbox">
			<td>EMAIL</td>
			<td>:</td>
			<td><input type="email" name="r3" required></td>
		</div>
			</tr>
		
			<tr>
				<div class="textbox">
			<td>PHONE</td>
			<td>:</td>
			<td><input type="number" name="r4"  required="required"></td>
		</div>
			</tr>
			<tr>
			<tr>
			<td>ADDRESS</td>
			<td>:</td>
			<td><textarea name="r5"  required="required"></textarea></td>
			</tr>
			<tr>
			<td>PASSWORD</td>
			<td>:</td>
			<td><input type="password" name="r6"  required="required"></td>
			</tr>
			<tr>
			<td>CONFRIM PASSWORD</td>
			<td>:</td>
			<td><input type="password" name="r7" required></td>
			</tr>
			</table>
			<input type="submit" name="submit" value="Sign Up" class="btn">
			<p>Already have an account? <a href="signin.php">Sign In</a></p>
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
// Check connection
if ($dbc->connect_error) {
    die("Connection failed: " . $dbc->connect_error);
}
 
    if(isset($_POST['submit'])) {

    //get the name and comment entered by user
    $firstname = $_POST['r1'];
$lastname = $_POST['r2'];
$email=$_POST['r3'];
$phone=$_POST['r4'];
$address=$_POST['r5'];
$password=$_POST['r6'];
$cpassword=$_POST['r7'];

 

	/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";


// Create connection
$dbc = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($dbc->connect_error) {
    die("Connection failed: " . $dbc->connect_error);
}*/
	if ($password != $cpassword) {
			echo "two passwords do not match";
		}
	else{
    $n="select * from user_tb1 where firstname='$firstname' and lastname='$lastname' and email='$email' and phone='$phone' and address='$address'and 
	password='$password'";
    $check=mysqli_query($dbc,$n);

    $checkrows=mysqli_num_rows($check);
	
     if($checkrows!=0) {
      echo "customer exists";
      header("location:index.html");
   } else {  
    //insert results from the form input
      $query = "INSERT INTO user_tb1 (firstname,lastname,email,phone,address,password) VALUES('$firstname', '$lastname','$email','$phone','$address','$password')";

  $result = mysqli_query($dbc, $query) or die('Error querying database.');
  

      //mysqli_close($dbc);
	  $dbc->close();
    }
	
	echo "Customer Added";
	header("location:index1.html");
}
    };

  ?>

