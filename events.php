<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>JOB Portal</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="css/styles.css" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript" src="js/fade-plugin.js"></script>
<script type="text/javascript">
(function($) {
function init() {

  $("#example1 .effectContainer").fadeTransition({pauseTime: 4000,
										 transitionTime: 1000,
										 ignore: "#introslide",
										 delayStart: 4000,
										 pauseOnMouseOver: true,
										 createNavButtons: true});
										 
  var example3 = $("#example3 .effectContainer").fadeTransition().fader();          
  $("#back").click(function(e) { example3.prev(); e.preventDefault(); });
  $("#next").click(function(e) { example3.next(); e.preventDefault(); });
}


$(document).ready(init);
})(jQuery);
</script>
</head>

<body>
<div class="master">
  <?php include('header.php'); ?>
  <div id="content">
    <div id="example1">
      <div class="effectContainer">
        
        <div class="slide r1">
          <h1>Willie Nelson's Country Throwdown</h1>
          <small>Sunday, Jan 15, 2012 at 3:00 PM (PT)</small>
          <small>Catheys Valley, CA</small>
          <span>This event has ended!</span>
          <img src="images/Events-Calander.jpg" alt="" width="200">
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          
        </div>
        <div class="slide r1">
          <h1>Contrary to popular belief</h1>
          <small>Sunday, Jan 26, 2012 at 3:00 PM (PT)</small>
          <small>madame center, newyork</small>
          <img src="images/image3.png" alt="" width="200">
          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
          
        </div>
      </div>
    </div>
    <?php include('info.php') ?>
    <div class="clear"></div>
  </div>
  <?php include('footer.php') ?>
</div>
</body>
</html>
