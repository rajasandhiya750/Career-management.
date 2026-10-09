<?php
error_reporting(0);
session_start();
ob_start();
?>
<div class="meta">
  <div class="metalinks"> <a href="http://www.facebook.com/" target="_blank"><img src="images/fb.png" alt="" width="15" height="14" /></a> <a href="http://twitter.com/" target="_blank"><img src="images/twitter.png" alt="" width="17" height="14" /></a> <a href="http://in.myspace.com/" target="_blank"><img src="images/myspace.png" alt="" width="17" height="14" /></a> <a href="https://plus.google.com/" target="_blank"><img src="images/google_plus.png" alt="" width="15" height="14" /></a> </div>
  
</div>
<div id="header"> <a href="index.php" class="logo"><img src="images/logo.png" alt="" /></a> <span class="slogan">Your Key to Success</span>
  <link rel="stylesheet" href="css/tinydropdown.css" type="text/css" />
  <script type="text/javascript" src="js/tinydropdown.js"></script>
  <ul id="menu" class="menu">
    <li><a href="index.php">Home</a></li>
    <li><a href="services.php">Services</a>
      <ul>
        <li><a href="clogin.php">Job Seekers</a></li>
        <li><a href="admin/index.php">Employers</a></li>
      </ul>
    </li>
    <li><a href="upload_resume.php">Submit Resume</a></li>
    <li><a href="searchjobs.php">Search</a>
      <ul>
        <li><a href="skill.php">Jobs by Skill</a></li>
        <li><a href="location.php">Jobs by Location</a></li>
        <li><a href="experience.php">Jobs by Experience</a></li>
      </ul>
    </li><li><a href="events.php">Events</a></li>
    <li><a href="feedback.php">Feedback</a></li>
    <li><a href="registration.php">Registration</a></li>
    <li class="last"><a href="clogin.php">Login</a></li>
  </ul>
  <script type="text/javascript">
var dropdown=new TINY.dropdown.init("dropdown", {id:'menu', active:'menuhover'});
</script>
  <div class="clear"></div>
</div>
