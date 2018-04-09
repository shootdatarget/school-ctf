<div class="">
	<h1>Berapa jumlah hari dalam bulan januari</h1>


	<div class="">

		<h3>User ID:</h3>

		<form action="#" method="GET">
			<input type="text" name="id" maxlength="1">
			<input type="submit" name="Submit" value="Submit">
		</form>


	</div>

	
</div>
<?php







if(isset($_GET['Submit'])){
	
	// Retrieve data
	
	$id = $_GET['id'];
	
	if($id==31)
	{
		$this->load->view("q2-a.php");
	}else{
		echo "not true, think harder!!";
	}
}
?>