<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>

<body>
<div class="master">
  <?php include('header.php'); ?>
  <div id="content">
    <div class="login clogin">
      <form name="f_login" id="f_login" method="post" action="">
        <label>Username:</label>
        <input type="text" name="username" id="uid" size="20" />
        <label>Password:</label>
        <input type="password" name="pwd" id="pwd" size="20" />
        <label>&nbsp;</label>
        <input type="submit" value="Login" name="sub" class="submit1 buttons" />
      </form>
    </div>
    <div class="login clogin fright">
      <h1><a href="registration.php"><img src="images/images.jpg" alt="" /></a></h1>
    </div>
    <?php
if(isset($_POST['sub']))
{
	 $_SESSION['username']=$_POST['username'];
	$uid = $_POST['username'];
	$pwd = $_POST['pwd'];
	$_SESSION['status']=true;
	include 'db.php';
		
	$query = "SELECT username, pwd FROM registration WHERE username= '".$uid."' and pwd= '".$pwd."'";
	$result = mysql_query($query);
           if($row=mysql_fetch_array($result))
           {
              echo header("Location:index.php");
           }
 else { echo "<h3> <center><span style='color:red;'>Wrong user name and password </span></center></h3>";

           }  
}
?>
    <?php include('info.php') ?>
  </div>
  <div class="clear"></div>
</div>
<?php include('footer.php') ?>
</div>
</body>
</html>