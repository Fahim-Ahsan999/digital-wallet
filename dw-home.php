

<!DOCTYPE html>
<html>
<head>
	<title>HTML Form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	
	<h1>Page 1 [Home]</h1>
    <h3>Digital Wallet</h3>
    <a href="dw-home.php">1. Home</a> 
    <a href="trans-history.php">2.Tansaction History</a>


   <?php

    	define("filepath", "data.txt");

    	$Select-catagory= $Phone= $Ammount= "";
    	$isValid = true;
    	$Select-catagoryEr= $PhoneEr= $AmmountEr= "";
    	$successfulMessage = $errorMessage = "";
    	
    	if($_SERVER['REQUEST_METHOD'] === "POST") {

		$Select-catagory = $_POST['select-catagory'];
		$Phone = $_POST['phone'];
		$Ammount = $_POST['ammount'];

		if($isValid($select-catagory)) {
		$Select-catagoryEr = "Select Any of them";
		$flag = true;}

		if($empty($phone)) {
		$PhoneEr = "Enter Phone number";
		$flag = true;}

		if($empty($ammount)) {
		$AmmountEr = "Enter first namme";
		$flag = true;}

	}

		function write($data) {
		$resource = fopen(filepath, "a");
		$fw = fwrite($resource, $content . "\n");
		fclose($resource);
		return $fw;}

	function test_input($content){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	?>

  
     <h3> Fund Transfer </h3>
         <form action="dw-home.php" method="POST" autocomplete="on">

    	<label for="select-catagory">Select Catagory:</label>
		<select id="select-catagory">
			<option value="Send-money">Send Money</option>
			<option value="Mob-rech">Mobile Recharge</option>
			<option value="cash-out">Cash Out</option>
		</select> </span><?php echo $Select-catagoryEr;?></span><br><br> <br><br>

		<label for="phone">To:</label>
		<input type="tel" id="phone" name="phone" pattern="[0-9]">
	</span><?php echo $PhoneEr;?></span><br><br>

		<label for="ammount">Ammount:</label>
		<input type="txt" id="ammount" name="ammount">
	   </span><?php echo $AmmountEr;?></span><br><br>

		<input type="submit" name="submit" value="Submit">
</form>
</body>

	