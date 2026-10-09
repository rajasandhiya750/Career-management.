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
    <div class="sidebar_quiz sidebar_quiz1" style="width:60%;"> <br>
      <h1>Job Quiz</h1>
      <br>
      <form action="results.php" method="post">
        <p>1.)Why are you the best person for this job?<br>
          <br>
          <input type="radio" name="q1" value="PRE HOME PAGE
">
          "I've held a lot of positions like this one, and that experience will help me here."<br>
          <input type="radio" name="q1" value="FALSE">
          "Because I am good at what I do."</p>
        <input type="radio" name="q1" value="FALSE">
        "Our discussion here leads me to believe this is a good place to work."
        </p>
        <br>
        <input type="radio" name="q1" value="TRUE">
        "You need someone who can produce results, and my background and experience are proof of my ability. For example..."
        </p>
        <br>
        <br>
        <p>2.) Describe yourself. <br>
          <br>
          <input type="radio" name="q2" value="FALSE">
          Outline personal data, hobbies, and interests.<br>
          <input type="radio" name="q2" value="FALSE">
          Give an overview of your personality and work habits.</p>
        <input type="radio" name="q2" value="TRUE">
        Give three specific examples of your personality traits and accomplishments.
        </p>
        <br>
        <input type="radio" name="q2" value="FALSE">
        NONE
        </p>
        <br>
        <br>
        <p>3.) What are you looking for in a position?<br>
          <br>
          <input type="radio" name="q3" value="TRUE">
          "I'm looking for an opportunity to apply my skills and contribute to the growth of the company while helping create some advancement opportunities for myself."<br>
          <input type="radio" name="q3" value="FALSE
 ">
          "I'm looking for an organization that will appreciate my contributions and reward my efforts." </p>
        <input type="radio" name="q3" value="FALSE">
        "I'm looking for a position that will allow me to make enough money to support my lifestyle. I am a hard worker and will give a concerted effort to earn the money I need."<br>
        <input type="radio" name="q3" value="FALSE">
        NONE
        </p>
        <br>
        <br>
        <p>4.)What are your short term objectives?<br>
          <br>
          <input type="radio" name="q4" value="FALSE">
          "Short term, I just want a job."<br>
          <input type="radio" name="q4" value="FALSE">
          "Bills are beginning to pile up. In the short run I need to find work so I can keep up with my obligations."</p>
        <input type="radio" name="q4" value="TRUE">
        "Short-term, I'd like to find a position that is a good fit and where I can contribute to a company's bottom line.
        The position we are here to discuss today would appear to be such an opportunity. Could you tell me more about it?" <br>
        <input type="radio" name="q4" value="FALSE">
        none
        </p>
        <br>
        <br>
        <p>5.)What are your long term objectives? <br>
          <br>
          <input type="radio" name="q5" value="FALSE">
          "I would think over long term I would be preparing myself to do your job."<br>
          <input type="radio" name="q5" value="TRUE">
          "If selected I would hope to meet my goals and take advantage of opportunities to learn so I will be considered for other positions within the company. 
          I hope to build my career with a company such as this one."</p>
        <input type="radio" name="q5" value="FALSE">
        "Long term, I hope to start my own business."<br>
        <input type="radio" name="q5" value="FALSE">
        none
        </p>
        <br>
        <br>
        <!--<p>6.)Where do you see yourself in five years?<br>
      <br>
      <input type="radio" name="q5" value="FALSE">
      "In five years I will have either been promoted to your job or have started my own business."<br>
      <input type="radio" name="q5" value="FALSE">
      "This is a very volatile market. I find it difficult to project out five years."</p>
    <input type="radio" name="q5" value="TRUE">
    "That really depends on the firm I join. I would like to take a position with some responsibility and room for growth. 
    The key is with the right challenge I intend to continually contribute and grow with the firm."<br>
    <input type="radio" name="q5" value="FALSE">
    none
    </p>
    <br>
    <br>
    <p>7.)What are your strengths? <br>
      <br>
      <input type="radio" name="q5" value="FALSE">
      "I am good at giving constructive criticism to my coworkers. This honesty is something I'm very proud of and have found essential to having open working relationships."<br>
      <input type="radio" name="q5" value="FALSE">
      "I consider myself to be very consistent. I have proven myself to be someone who can be counted upon to do what is expected."</p>
    <input type="radio" name="q5" value="TRUE">
    "I have a determination and ability to get things done. At the same time, I have strong analytical abilities and problem solving skills. 
    These skills combine to give me a unique ability to solve problems and then implement productive solutions."<br>
    <input type="radio" name="q5" value="FALSE">
    none
    </p>
    <br>
    <br>
    <p>8.)What do subordinates think of you?<br>
      <br>
      <input type="radio" name="q5" value="FALSE">
      "They perceive me as a leader. The people who have worked for me learned a great deal under my direction and accomplished in many cases more than they thought possible."<br>
      <input type="radio" name="q5" value="FALSE">
      "My employees would tell you they got direction when they needed and the room to work when it was appropriate. 
      I believe a measure of a good manager is how much he is able to get done through others."</p>
    <input type="radio" name="q5" value="TRUE">
    "They perceive me as someone who cared about them personally and had high expectations. Former employees would highlight three of my priorities, 
    which are to build loyalty and a team environment, obtain results and develop people."<br>
    <input type="radio" name="q5" value="FALSE">
    none
    </p>--> 
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