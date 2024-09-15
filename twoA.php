<?php
session_start();
$_SESSION['coffee'] = array (array ("name" => "Americano", "price" => 20000),
							 array ("name" => "Mochaccino", "price" => 22000),
							 array ("name" => "Cappuccino", "price" => 22500));
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<form method = "GET" action = "twoB.php">
	<h1> Welcome to WP Caffee </h1>
	<h3> Specify quantity of order </h3>
	<?php
	$minuman = $_SESSION['coffee'];
	echo "<ul>";
	foreach ($minuman as $key => $value)
	{
		$name = $minuman[$key]["name"];
		$price = $minuman[$key]["price"];

		echo "<li> $name <input type='text' name='orders[]''> <br><br> </li>";
	}

	echo "</ul>";
	?>
	<input type = "submit" name = "submit" value = "Submit">
</body>
</html>