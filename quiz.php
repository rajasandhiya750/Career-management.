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
    <div class="quiz">
      
      <div style="float:left; width:600px;">
      	<h2>Please Select one of the following quiz to test your knowledge:- </h2>
      	<a href="g.k_quiz.php">General Knowledge Quiz</a> <a href="jobquiz.php">Job Quiz</a> <a href="startquiz.php">Php Quiz</a> </div>
      </div>  
    <div class="sidebar_quiz">
		<?php include("accordian.php"); ?>
        <?php include("polls.php"); ?>
        <a href="quiz.php"><img src="images/quiz.gif" alt="" width="230"/></a>
        <h3>You are the visitor no : </h3>
        <a><img alt="" hspace="0" vspace="0" border="0" src="http://cagemonitor.com/counter.php?id=1f67a106ddcf9df3e0da05d1f0104d67&theme=1a&digits=10&size=big&siteId=boc_sb_g2n"/></a>
     </div>
	<?php include('info.php') ?>
  </div>
  <div class="clear"></div>
  <?php include('footer.php') ?>
</div>
</body>
</html>