<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1> Order Confirmation </h1>
	<?php
	if (isset($_GET['orders']) && is_array($_GET['orders']))
	{
		$minuman = $_SESSION['coffee'];
		$endtotal = 0;
		$orders = $_GET["orders"];
		echo "<ol>";
			
		foreach ($orders as $key => $value) 
		{
        	if ($value > 0) 
        	{
            	$name = $minuman[$key]["name"];
            	$price = $minuman[$key]["price"];

            	$minumanprice = $price * $value;
            	$endtotal += $minumanprice;

            	echo "<li> $name <br>";
            	echo "Order Qty: $value x Rp. $price = Rp. $minumanprice <br><br></li>";
        	}		
    	}

    	echo "</ol>";
    	echo "<h2> Total Order: Rp. $endtotal </h2>";
	}
	?>
</body>
</html>