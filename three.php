<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> University of Surabaya </title>
</head>
<style>
	h1
	{
		color: <?php echo themeColor(); ?>;
	}
</style>
<body>
	<h1> University of Surabaya </h1>
	<form method = "POST" action: "">
		<label for = "selectTheme"> Select a theme: </label>
		<select name = "themes">
			<option value = "red" <?php echo isSelected("red"); ?>> Red </option>
        	<option value = "green" <?php echo isSelected("green"); ?>> Green </option>
        	<option value = "blue" <?php echo isSelected("blue"); ?>> Blue </option>
    </select>
    <input type = "submit" name = "submit" value = "Submit">
	</form>

	<?php
	function isSelected($theme) 
	{
    	if (isset($_COOKIE['themes']) && $_COOKIE['themes'] == $theme) 
    	{
        	return 'selected';
    	} 
    	else 
    	{
        	return '';
    	}
    }

    function themeColor() 
	{
    	if (isset($_COOKIE['themes'])) 
    	{
        	return $_COOKIE['themes'];
    	} 
    	else 
    	{
        	return 'red';
    	}
	}

	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) 
	{
    	$selected_theme = $_POST['themes'];
    	setcookie('themes', $selected_theme, time() + 600);
    	header("Location: three.php");
    }
	?>
</body>
</html>