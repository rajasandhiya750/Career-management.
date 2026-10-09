<?php
error_reporting(NULL);
session_start();
if(isset($_SESSION['status']))
{ $_SESSION['user'];
}
else
{ echo header('Location:login.php');
}
?>

<?php
session_start();
ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shopping</title>

<link href="style.css" rel="stylesheet" type="text/css" />


<link type="text/css" href="menu.css" rel="stylesheet" />
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="menu.js"></script>
    
    
    <script type="text/javascript" src="menu.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>



</head>

<body>
<center>






<div id="wrapper" style="height:400">
<div id="banner">

<div id="logo">
<a href="index.php"><img src="stuff/logo.gif" class="logo" /></a>
</div>

<div id="search">
<img src="stuff/banner.gif" />
</div>

</div>

<center>
<div id="menu">
<?php
if(isset($_SESSION['status']))
{
	include 'menu1.php';
	}
	else
	{
		include 'menu.php';
		}
?>
</div>

</center>



<div id= "main" style="height:400">

<?php
$q=$_REQUEST['q'];

echo "<table height='200'><tr><td><h3 align=center>Now You Can Access/Purchase Products</h3>
	<center><a href=home.php?q=$q>Go to Shopping Cart</a></center></td></tr></table>";
?>
<table border="0" align="center" >
<tr>
<td align="center"><img src="stuff/103833_C9095_New_ToniGuy.jpg" /></td>
</tr>
<tr>
<th >
<marquee behavior="scroll" direction="left" scrollamount="5" height="100">
<img src="stuff/79.jpg"/>
&nbsp;
<img src="stuff/Revlon_black_ai.png" />&nbsp;
<img src="stuff/L_oreal_logo.gif" height="100" width="100" />&nbsp;
<img src="stuff/avon_logo.gif" />&nbsp;
<img src="stuff/aquolina_logo-100x100.jpg" />&nbsp;
<img src="stuff/Davidoff_Cool_Water_ai.png" />&nbsp;
<img src="stuff/Vaseline_ai.png"/>&nbsp;
<img src="stuff/No7_logo.gif" />&nbsp;


<img src="stuff/olay_2010-100x100.png" />&nbsp;
<img src="stuff/dove-shampoo.gif"/>&nbsp;
<img src="stuff/logo_NiceNEasyT.jpg"/>&nbsp;
<img src="stuff/john-frieda-57989-100x100.jpg"/>&nbsp;
<img src="stuff/gucci.jpg"/>&nbsp;
<img src="stuff/yuko_logo_small.gif"/>
</marquee>
</th>
</tr>
</table>
</div>

</div>

<div id="footer" >
<?php include 'f.php'; ?>
</div>

</center>
</body>
</html>


