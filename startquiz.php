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
    <div class="sidebar_quiz sidebar_quiz1"> <br>
      <h1>PHP Quiz</h1>
      <br>
      <form action="results.php" method="post">
        <p>1.)What is the expansion of LAMP? <br>
          <br>
          <input type="radio" name="q1" value="FALSE">
          Linux And Mysql Php ."<br>
          <input type="radio" name="q1" value="TRUE">
          Linux Apache Mysql Php </p>
        </p>
        <br>
        <br>
        <p>2.) PHP code is embedded directly into XHTML document? <br>
          <br>
          <input type="radio" name="q2" value="FALSE">
          FALSE<br>
          <input type="radio" name="q2" value="TRUE">
          TRUE</p>
        </p>
        <br>
        <br>
        <p>3.)Is it possible to submit a form with out a submit button? <br>
          <br>
          <input type="radio" name="q3" value="TRUE">
          Yes<br>
          <input type="radio" name="q3" value="FALSE
 ">
          No</p>
        </p>
        <br>
        <br>
        <p>4.)Which operator is used to concatenate two strings in php? <br>
          <br>
          <input type="radio" name="q4" value="TRUE">
          dot operator (.) <br>
          <input type="radio" name="q4" value="FALSE">
          plus operator (+) </p>
        </p>
        <br>
        <br>
        <p>5.)Is php can support multiple inheritance? <br>
          <br>
          <input type="radio" name="q5" value="TRUE">
          NO<br>
          <input type="radio" name="q5" value="FALSE">
          YES</p>
        </p>
        <br>
        <br>
        <br>
        <br>
        <p>
          <center>
            <input type="submit" name="submit" value="Submit">
          </center>
        </p>
      </form>
    </div>
    <div class="sidebar_quiz">
		<?php include("accordian.php"); ?>
        <?php include('polls.php'); ?>
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