
<?php
include "db.php";

$rs = '';
$message = '';

if(isset($_POST['keyword']))
{
$paging_query="select * from adminform where qualification LIKE '%".$_POST['keyword']."%' order by id";
//echo $paging_query;
	include_once "paging.php";
	$sql_paging_record = $paging_query." LIMIT $set_limit, $limit";

$result=mysql_query($sql_paging_record);
$rs=mysql_fetch_array($result);
}
if($rs=='')
$message = 'No Results...';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link type="text/css" href="menu.css" rel="stylesheet" />
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="menu.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>
	function openchild(thisurl)
	{
	msgWindow=window.open( '' ,'subwindow','toolbar=no,location=no,directories=no,status=yes,scrollbars=yes,menubar=no,resizable=yes,width=550,height=500');
	msgWindow.focus();
	msgWindow.location.href = thisurl;
	
	
	
	}
	
	function set_focus()
	{
		document.form1.keyword.focus();
	}

	</script>


<link href="body text.css" rel="stylesheet" type="text/css" />
</head>

<body onload="set_focus()"><table width="857" border="0" align="center" cellpadding="0" cellspacing="1">
  <tr>
    <td colspan="2">
    <div id="menu">
		<ul class="menu">
		<li><a href="home.php" ><span>Home</span></a></li>
		<li class="bodytext"><a href="#"><span>Services</span></a>
		<div><ul>
			<li><a href="jobseekers.php"><span>Job seekers</span></a></li>
			<li><a href="admin/index.php" ><span>Employers</span></a></li>
		</ul></div></li>
        <li><a href="submitresume.php"><span>Submit Resume</span></a></li>
		<li class="last"><a href="searchjobs.php"><span>Search Jobs</span></a>
        <div><ul>
			<li><a href="skill.php#" ><span>Jobs By Skill</span></a></li>
			<li><a href="location.php" ><span>Jobs By Location</span></a></li>
            <li><a href="industry.php" ><span>Jobs By Industry</span></a></li>									
        </ul></div></li>
        <li><a href="jobseekers.php"><span>Job Seekers</span></a>
         <div><ul>
			<li><a href="jobseekers.php" ><span>Login</span></a></li>
			<li><a href="logout.php.php" ><span>Logout</span></a></li>									
        </ul></div></li>
		
		<li class="last"><a href=""><span>Education</span></a>
 		<div><ul>
		<li><a href="rightresume.php" ><span>Right Resume</span></a></li>
		<li><a href="resumehighlighter.php" ><span>Resume Highlighter</span></a>
		</ul></div>
        <li class="last"><a href="events.php"><span>Events</span></a></li>
        </ul>
    </div>
    </td>
  </tr>
  <tr>
    <td colspan="2"><img src="image/career.jpg" width="855" height="150" alt="g" /></td>
  </tr>
  <tr ><form name="form1" method="post" action="">
    <td width="720" valign="top"> <input type="text" id="keyword"  name="keyword" value="Fill ur Qualification" />
      <input type="submit" value="Search" />
      <table  border="0" align="center" >
        <tr background="#E4E4E4">
          <td colspan="7"><table width="856" border="0" align="center" cellpadding="0" cellspacing="0">
            <?php if($rs!="")
	  {?>
            <tr bgcolor="#E4E4E4">
              <td width="50" height="19" align="center" ><table width="86%" border="0" cellpadding="0" cellspacing="0" bordercolor="#E4E4E4">
                <tr align="center">
                  <td width="50%" bgcolor="#E4E4E4"><?php echo @$first_page_arrow; ?></td>
                  <td width="50%" bgcolor="#E4E4E4"><?php echo @$prev_page_arrow; ?></td>
                  </tr>
                </table></td>
              <td align="center" bgcolor="#E4E4E4">&nbsp; <?php echo @$page_no; ?></td>
              <td width="50" align="center" bgcolor="#E4E4E4"><table width="78%" border="0" cellpadding="0" cellspacing="0" bordercolor="#E4E4E4">
                <tr align="center">
                  <td width="50%" bgcolor="#E4E4E4"><?php echo @$next_page_arrow; ?></td>
                  <td width="50%" bgcolor="#E4E4E4"><?php echo @$last_page_arrow; ?></td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
          </tr>
        <?php } ?>
        <?php
	  if($rs!="")
	  {
	$slno=(($page * $limit)-$limit) + 1;
	  do
  {
 	 	if($slno%2==0)
  		$bgcolor = '#AABFEA';
		else
		$bgcolor = '#E3EBF9';
		
  ?>
        <tr bgcolor="<?php echo $bgcolor;?> ">
          <td width="651" ><span class="footer"><?php echo $slno;?></span> &nbsp; <span class="jobtitle"><?php echo ucwords($rs['jobtitle']);?></span><br />
            <span class="title">Profile:</span> <span class="bodytext"><?php echo ucwords($rs['profile']);?></span><br />
            <span class="title">Location:</span><span class="message"><?php echo ucfirst($rs['location']);?></span> &nbsp; <span class="title">Skill Require: </span><span class="bodytext1"><?php echo ucwords($rs['Skill']);?></span> &nbsp;Company Name:<span class="footer"><?php echo ucwords($rs['company_name']);?></span></td>
          <td width="60" ><a href="full_details.php?id=<?php echo $rs['id']?>" onclick="openchild();" target="subwindow">View</a></td>
          </tr>
        <?php $slno++ ;} while($rs = mysql_fetch_array($result));}?>
        <?php if(message!=""){?>
        <tr>
          <td height="" colspan="6" align="center"><?php echo $message?></td>
          </tr>
        <?php } ?>
        </table>
      <table width="719" border="0" align="center" bgcolor="">
        <tr>
          <td width="246" height="42" class="bodyheading">Job Seekers</td>
          <td width="202" class="bodyheading">Employers</td>
          <td width="257" class="bodyheading">Information</td>
          </tr>
        <tr>
          <td class="bodytext"><img src="images/images.jpg" width="16" height="9" alt="s" /><span class="bodytext1"><a href="jshome.php">Home</a></span></td>
          <td class="bodytext"><img src="images/images.jpg" width="16" height="9" alt="s" /><span class="bodytext1"><a href="ehome.php">Home</a></span></td>
          <td class="bodytext"><img src="images/images.jpg" width="16" height="9" alt="s" /><span class="bodytext1"><a href="ihome.php">Home</a></span></td>
          </tr>
        <tr>
          <td class="bodytext1"><img src="images/images.jpg" width="16" height="9" alt="s" /><a href="jobseekers.php">Register Now/Login</a></td>
          <td class="bodytext"><img src="images/images.jpg" width="16" height="9" alt="s" /><span class="bodytext1"><a href="http://localhost/Assurejobz/admin/" >Employers Login</a></span></td>
          <td class="bodytext"><img src="images/images.jpg" width="16" height="9" alt="s" /><span class="bodytext1"><a href="aboutus.php">About Us</a></span></td>
          </tr>
        <tr>
          <td class="bodytext"><img src="images/images.jpg" width="16" height="9" alt="s" /><span class="bodytext1"><a href="searchjobs.php">Search Jobs</a></span></td>
          <td class="bodytext"><img src="images/images.jpg" width="16" height="9" alt="s" /><span class="bodytext1"><a href="searchresume.php">Search Resume</a></span></td>
          <td class="bodytext"><img src="images/images.jpg" width="16" height="9" alt="s" /><span class="bodytext1"><a href="contactus.php">ContactUs</a></span></td>
          </tr>
        <tr>
          <td class="bodytext"><img src="images/images.jpg" width="16" height="9" alt="s" /><span class="bodytext1"><a href="submitresume.php">Upload Resume</a></span></td>
          <td class="bodytext"><img src="images/images.jpg" width="16" height="9" alt="s" /><span class="bodytext1"><a href="blog.php">Blog</a></span></td>
          <td class="bodytext"><img src="images/images.jpg" width="16" height="9" alt="s" /><span class="bodytext1"><a href="resources.php">Resources</a></span></td>
          </tr>
        <tr>
          <td height="25" class="bodytext"><img src="images/images.jpg" width="16" height="9" alt="s" /><span class="bodytext1"><a href="carrercenter.php">Career Center</a></span></td>
          <td class="bodytext"><img src="images/images.jpg" width="16" height="9" alt="s" /><span class="bodytext1"><a href="feedback.php">Feedback</a></span></td>
          <td class="bodytext"><img src="images/images.jpg" width="16" height="9" alt="s" /><span class="bodytext1"><a href="terms.php">Terms &amp; Condition</a></span></td>
          </tr>
      </table></td></form>
    <!--<td width="135" valign="top" style="position:fixed;"><img src="images/te.png" alt="g" width="135" height="49" align="top" valign="top" />
      <img src="image/mphasis_panel.gif" alt="t5rr" width="135" height="35" align="center" />
      <img src="image/willis-135x35-5-5-11.gif" alt="t" width="135" height="35" align="center" /><br>
      <img src="image/patni05-122011.gif" width="135" height="35" alt="43" align="center"/><br>
      <img src="image/accenture05_122011.gif" width="135" height="35" alt="1" align="center" /> 
      <img src="image/cognizant135x35.gif" width="135" height="35" alt="2" align="center"/>
      <img src="image/everest-135x35c.gif" width="135" height="35" alt="3" align="center" />
      <img src="image/ihg-27april10.gif" width="135" height="35" alt="4"  align="center"/>
      <img src="image/KRONOS-2ndNov10.gif" width="135" height="35" alt="5" align="center" />
      <img src="image/lifestyle135x35.gif" width="135" height="35" alt="6" align="center"/>
      <img src="image/ltinfotech05_2011.gif" width="135" height="35" alt="7" align="center"/>
      <img src="image/mahindrafinance135x35.gif" width="135" height="35" alt="8" align="center"/>
      <img src="image/novartis-3rdjan11.gif" width="135" height="35" alt="10" align="center"/>
      <img src="image/synechron-panel-13may11.gif" width="135" height="35" alt="xs" align="center"/>
    <img src="image/cognizant135x35.gif" width="135" height="35" alt="h" /></td>-->
  </tr>
  <tr>
    <br /><td colspan="2" align="center" class="footer">Copyright ©1990 - 2011 CDS.All rights reserved © 2011 Info Edge India Ltd(Shairy Kalra).
    </center><a href="http://apycom.com/"></a>
    </td>
  </tr>
</table>
</body>
</html>