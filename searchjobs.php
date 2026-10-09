<?php
//include "session.php";
include "db.php";

if(isset($_POST['keyword']))
$query="select * from adminform where jobtitle LIKE '%".$_POST['keyword']."%' order by id";
else
$paging_query = "select * from adminform order by id";
	include_once "paging.php";
	$sql_paging_record = $paging_query." LIMIT $set_limit, $limit";

$result=mysql_query($sql_paging_record);
$rs=mysql_fetch_array($result);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="css/styles.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>
function openchild(thisurl)
{
msgWindow=window.open( '' ,'subwindow','toolbar=no,location=no,directories=no,status=yes,scrollbars=yes,menubar=no,resizable=yes,width=550,height=500');
msgWindow.focus();
msgWindow.location.href = thisurl;
}

</script>
<link href="body text.css" rel="stylesheet" type="text/css" />
<style>
#info{margin-left:35px;}
</style>
</head>

	<body>
    <div class="master">
      <?php include('header.php'); ?>
      <table width="854" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="720" align="center" valign="baseline" ><table  border="0" align="center" >
              <tr bgcolor="#275CB6">
              <td colspan="7"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                  <td width="50" height="19" align="center" bgcolor="#E4E4E4"><table width="86%" border="0" cellpadding="0" cellspacing="0" bordercolor="#E4E4E4">
                      <tr align="center">
                        <td width="50%"><?php echo @$first_page_arrow; ?></td>
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
              <?php
	$slno=(($page * $limit)-$limit) + 1;
	  do
  {
 	 	if($slno%2==0)
  		$bgcolor = '#AABFEA';
		else
		$bgcolor = '#E3EBF9';
		
  ?>
              <tr bgcolor="<?php echo $bgcolor;?> ">
              <td width="92%"><span class="footer"><?php echo $slno;?></span> &nbsp; <span class="jobtitle"><?php echo ucwords($rs['jobtitle']);?></span>
                  <span class="title">Profile:</span> <span class="bodytext"><?php echo ucwords($rs['profile']);?></span>
                  <span class="title">Location:</span><span class="message"><?php echo ucfirst($rs['location']);?></span> &nbsp; <span class="title1">Skill Require: </span><span class="bodytext1"><?php echo ucwords($rs['Skill']);?></span> <span class="company">Company Name:</span><span class="footer2"><?php echo ucwords($rs['company_name']);?></span></td>
              <td width="8%" align="center"><a href="full_details.php?id=<?php echo $rs['id']?>" onclick="openchild();" target="subwindow" style="color:#00C;">View</a></td>
            </tr>
              <?php $slno++ ;} while($rs = mysql_fetch_array($result))?>
            </table>
            </td>
          
        </tr>
        
      </table>
      <?php include('info.php') ?>
        <div class="clear"></div>
	<?php include('footer.php') ?></div>
      <p class="bodytext">&nbsp;</p>
    </div>
</body>
</html>