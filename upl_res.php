<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>

<body>
<div class="master">
  <?php include('header.php'); ?>
  <div id="content">
    <?php include('slider.php'); ?>
    <div class="upload">
      <?php
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 30000))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    //echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    //echo "Type: " . $_FILES["file"]["type"] . "<br />";
    //echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    //echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo "<h4>This File ".$_FILES["file"]["name"] . " already exists.<br>Please upload another file. </h4>";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      echo "<h4>Thanks for uploading " . $_FILES["file"]["name"] . "</h4>";
      }
    }
  }
else
  {
  echo "<h4>Invalid File<br>Please Try Again.</h4>";
  if(($_FILES["file"]["size"] > 30000))
  {
	echo "<h1>Size should be small</h1>";  
  }
  else
  {
	  echo "";  
  }
  }
?>
    </div>
    <?php include('info.php') ?>
    <div class="clear"></div>
  </div>
  <?php include('footer.php'); ?>
</div>
</body>
</html>
