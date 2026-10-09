<?php
include "db.php";

$query = "select * from adminform where  id =  '".$_GET['id']."'";
$result=mysql_query($query);
$rs=mysql_fetch_array($result);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.TEXT {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 14px;
	line-height: normal;
	font-weight: bold;
	color: #930;
}
-->
</style>
</head>

<body>
 
<table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="90%" border="0" align="center">
  <tr>
    <td colspan="3" align="center"><h2><font color="#993300">JOB DESCRIPTION</font></h2></td>
  </tr>
  <tr>
    <td width="116" align="left" class="TEXT">Job Title</td>
    
    <td width="3">:</td>
    <td width="401" align="left"><?php echo $rs['jobtitle'];?></td>
  </tr>
  <tr>
    <td align="left" class="TEXT">Location</td>
    <td>:</td>
    <td align="left"><?php echo $rs['location'];?></td>
  </tr>
   <tr>
    <td align="left" class="TEXT">Profile</td>
    <td>:</td>
    <td align="left"><?php echo $rs['profile'];?></td>
  </tr>
   <tr>
    <td align="left" class="TEXT">Qualification</td>
    <td>:</td>
    <td align="left"><?php echo $rs['qualification'];?></td>
  </tr> 
  <tr>
    <td align="left" class="TEXT">Experience</td>
    <td>:</td>
    <td align="left"><?php echo $rs['experience'];?></td>
  </tr>
   <tr>
    <td align="left" class="TEXT">Salary</td>
    <td>:</td>
    <td align="left" ><?php echo $rs['salary'];?></td>
  </tr> 
  <tr>
    <td align="left" class="TEXT">CompanyName</td>
    <td>:</td>
    <td align="left"><?php echo $rs['company_name'];?></td>
  </tr>
  <tr>
    <td align="left" class="TEXT">Skill</td>
    <td>:</td>
    <td align="left"><?php echo $rs['Skill'];?></td>
  </tr>
</table></td>
  </tr>
</table>


</body>
</html>