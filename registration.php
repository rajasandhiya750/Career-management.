<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration</title>
<link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>

<body>
<div class="master">
<?php include('header.php'); ?>
<div id="content">
<?php include('register.php'); ?>
<div class="sidebar_quiz">
		<?php include("accordian.php"); ?>
        <?php include("polls.php"); ?>
        <a href="quiz.php"><img src="images/quiz.gif" alt="" width="230"/></a>
        <h3>You are the visitor no : </h3>
        <a><img alt="" hspace="0" vspace="0" border="0" src="http://cagemonitor.com/counter.php?id=1f67a106ddcf9df3e0da05d1f0104d67&theme=1a&digits=10&size=big&siteId=boc_sb_g2n"/></a>
     </div>
<?php include('info.php') ?>
<div class="clear"></div>
</div>
<?php include('footer.php') ?>
</div>

</body>
</html>