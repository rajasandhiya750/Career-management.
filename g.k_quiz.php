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
    <div class="sidebar_quiz sidebar_quiz1" style="width:35%;">
      <h1>General Knowledge Quiz</h1>
      <br>
      <form action="results.php" method="post">
        <p>1.)Who among the following was India's longest serving Prime Minister? <br>
          <br>
          <input type="radio" name="q1" value="TRUE">
          Jawaharlal Nehru<br>
          <input type="radio" name="q1" value="FALSE">
          Indira Gandhi<br>
          <input type="radio" name="q1" value="FALSE">
          Lal Bahadur Shastri<br>
          <input type="radio" name="q1" value="FALSE">
          V.P.Singh</p>
        </p>
        <br>
        <br>
        <p>2.) Which former Indian President died as a result of a road accident? <br>
          <br>
          <input type="radio" name="q2" value="TRUE">
          Giani Zail Singh<br>
          <input type="radio" name="q2" value="FALSE">
          Rajendra Prasad<br>
          <input type="radio" name="q2" value="FALSE">
          Faqruddin Ali Ahmed<br>
          <input type="radio" name="q2" value="FALSE">
          R.Venkatraman</p>
        </p>
        <br>
        <br>
        <p>3.)Which former President had the unique distinction of getting two consecutive terms in office? <br>
          <br>
          <input type="radio" name="q3" value="TRUE">
          Dr Rajendra Prasad<br>
          <input type="radio" name="q3" value="FALSE
 ">
          Dr Fakhruddin Ali Ahmed<br>
          <input type="radio" name="q3" value="FALSE">
          Dr Zakir Hussain<br>
          <input type="radio" name="q3" value="FALSE
 ">
          Giani Zail Singh</p>
        </p>
        <br>
        <br>
        <p>4.)Who is popularly known as 'Father of Indian Constitution'? <br>
          <br>
          <input type="radio" name="q4" value="FALSE">
          Jawaharlal Nehru <br>
          <input type="radio" name="q4" value="TRUE">
          B.R.Ambedkar <br>
          <input type="radio" name="q4" value="FALSE">
          Mahatma Gandhi <br>
          <input type="radio" name="q4" value="FALSE">
          Bal Gangadhar Tilak </p>
        </p>
        <br>
        <br>
        <p>5.)The Samadhi of Rajiv Gandhi is known as <br>
          <br>
          <input type="radio" name="q5" value="FALSE">
          Vir Sthal<br>
          <input type="radio" name="q5" value="FALSE">
          Vijay Ghat<br>
          <input type="radio" name="q5" value="FALSE">
          Shakti Sthal<br>
          <input type="radio" name="q5" value="TRUE">
          Vir Bhoomi</p>
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