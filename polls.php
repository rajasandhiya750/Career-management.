<?php 
include("inc/db.php");
include("inc/functions.php"); 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ajax Poll Script - Demo</title>
<script src="inc/js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="inc/js/poll.js" type="text/javascript"></script>

</head>

<body>
	<?php getPoll(1); ?>
</body>
</html>