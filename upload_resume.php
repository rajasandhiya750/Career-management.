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
      <h1>Submit Resume</h1>
      <form action="upl_res.php" method="post" enctype="multipart/form-data">
        <label for="Filename">Upload resume:</label>
        <input type="file" name="file" id="file" />
        <br />
        <input type="submit" name="submit" value="Submit" class="submit" />
      </form>
    </div>
    <?php include('info.php') ?>
    <div class="clear"></div>
  </div>
  <?php include('footer.php') ?>
</div>
</body>
</html>