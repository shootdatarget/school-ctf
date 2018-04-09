<div class="">
	<h1>Vulnerability: SQL Injection</h1>


	<div class="">

		<h3>User ID:</h3>

		<form action="#" method="GET">
			<input type="text" name="id">
			<input type="submit" name="Submit" value="Submit">
		</form>


	</div>

	
</div>
<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sec";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";






if(isset($_GET['Submit'])){
	
	// Retrieve data
	
	$id = $_GET['id'];

	$getid = "SELECT username, password FROM users WHERE id = '$id'";
	
	$result = mysqli_query($conn,$getid) or die('<pre>' . mysql_error() . '</pre>' );

	$num = mysqli_num_rows($result);

	

	

	while ($row=mysqli_fetch_row($result))
    {
    printf ("%s %s \n",$row[0],$row[1]);
    }

}
?>