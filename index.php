<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>
<html>
<head>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<p>the page to redirected to after login</p>
<form action="logout.php">
<input type="submit" value="logout">
</form>
<body>
</html>
