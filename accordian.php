<link rel="stylesheet" href="css/accordian.css" type="text/css">

<div id="page" class="side_acc">
  <ul id="example4" class="accordion">
    <li>
      <h3>Quiz</h3>
      <div class="panel">
        <nav>
          <ul>
            <li><a href="jobquiz.php">Job Quiz</a></li>
            <li><a href="startquiz.php">Php Quiz</a></li>
            <li><a href="g.k_quiz.php">General Knowledge Quiz</a></li>
          </ul>
        </nav>
      </div>
    </li>
    <li>
      <h3>videos</h3>
      <div class="panel">
        <nav>
          <ul>
            <li><a>PHP MySql Tutorial</a></li>
            <li><iframe width="208" height="150" src="http://www.youtube.com/embed/OK_o81JXyM8" frameborder="0" allowfullscreen></iframe></li>
            <li><a>CMS in PHP</a></li>
            <li><iframe width="208" height="150" src="http://www.youtube.com/embed/u3ry84gg0fw" frameborder="0" allowfullscreen></iframe></li>
          </ul>
        </nav>
      </div>
    </li>
    <!--<li>
      <h3>Articles</h3>
      <div class="panel">
        <nav>
          <ul>
            <li class="sel"><a href="#">Industry</a></li>
            <li><a href="#">Location</a></li>
            <li><a href="#">Topic</a></li>
          </ul>
        </nav>
      </div>
    </li>
    <li>
      <h3>outsourcing magazine</h3>
      <div class="panel">
        <nav>
          <ul>
            <li class="sel"><a href="#">Industry</a></li>
            <li><a href="#">Location</a></li>
            <li><a href="#">Topic</a></li>
          </ul>
        </nav>
      </div>
    </li>-->
  </ul>
</div>
<script type="text/javascript" src="js/jquery1.js" charset="utf-8"></script> 
<script type="text/javascript" src="js/jquery2.js" charset="utf-8"></script> 
<script type="text/javascript">
$('#example4').accordion({
canToggle: true,
canOpenMultiple: false
});
</script> 
