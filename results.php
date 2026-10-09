<?php
include('db.php'); 

$query = "select * from result ";
$result=mysql_query($query);
$rs=mysql_fetch_array($result);

$q1=$_POST['q1'];

$q2=$_POST['q2'];

$q3=$_POST['q3'];

$q4=$_POST['q4'];

$q5=$_POST['q5'];

$score=0;
if($q1=="TRUE")
{
$score=$score+1;
}
if($q2=="TRUE")
{
$score=$score+1;
}
if($q3=="TRUE")
{
$score=$score+1;
}
if($q4=="TRUE")
{
$score=$score+1;
}
if($q5=="TRUE")
{
$score=$score+1;
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>

<body>
<div class="master">
  <?php include('header.php'); ?>
  <div id="content">
    <div id="content1">
      <div>
        <h1><br>
          <span class="style2">The test is not official, it's just a nice way to see how much you know, or don't know.......</span><br>
          <br>
          <span class="style4">CONGRATULATION</span><br>
          <br>
          <span class="style1"> <?php echo "Your quiz score is ".$score." "?> </span><br>
          <br>
        </h1>
      </div>
    </div>
    <?php include('info.php') ?>
  </div>
  <div class="clear"></div>
  <?php include('footer.php') ?>
</div>
</body>
</html>
