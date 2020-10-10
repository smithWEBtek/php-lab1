<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>MyDoc</title>
</head>

<body>


	<? echo "Hello, World!"; ?>
	<? echo "Hello, World!"; ?>
	<? echo "Hello, World!"; ?>
	<? echo "Hello, World!"; ?>
	<?php echo $_SERVER['HTTP_USER_AGENT']; ?>

	<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
?>
<h3>strpos() must have returned non-false</h3>
<p>You are using Internet Explorer</p>
<?php
} else {
?>
<h3>strpos() must have returned false</h3>
<p>You are not using Internet Explorer</p>
<?php
}
?>

</body>
 
</html>