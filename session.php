<?php
error_reporting(0);
session_start();
ob_start();
?>
<?php 
session_start();
if($_SESSION['username'] == "")
{
	header("location:clogin.php");
}
else
{
	$admin = $_SESSION['username'];
}

?>