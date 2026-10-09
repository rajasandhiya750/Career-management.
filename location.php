<?php
include "db.php";

$rs = '';
$message = '';

if(isset($_POST['keyword']))
{
$paging_query="select * from adminform where location LIKE '%".$_POST['keyword']."%' order by id";

$result=mysql_query($paging_query);
$rs=mysql_fetch_array($result);
}
if($rs=='')
{$message = 'No Results...';}
else
{$rs = mysql_fetch_array($result);}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="css/styles.css" />
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

<body onload="set_focus()">
<div class="master">
  <?php include('header.php'); ?>
  <table width="856" border="0" align="center" cellpadding="0" cellspacing="1">
    <tr >
      <form name="form1" method="post" action="">
        <td width="719"><input type="text" id="keyword"  name="keyword" value="location" onclick="this.value='';" onblur="this.value=!this.value?'location':this.value;"/>
          <input type="submit" value="Search" />
          <table  border="0" align="center" >
            <tr >
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
              <td width="92%"><span class="footer"><?php echo $slno;?></span> &nbsp; <span class="jobtitle"><?php echo ucwords($rs['jobtitle']);?></span>
                  <span class="title">Profile:</span> <span class="bodytext"><?php echo ucwords($rs['profile']);?></span>
                  <span class="title">Location:</span><span class="message"><?php echo ucfirst($rs['location']);?></span> &nbsp; <span class="title1">Skill Require: </span><span class="bodytext1"><?php echo ucwords($rs['Skill']);?></span> <span class="company">&nbsp;Company Name:</span><span class="footer2"><?php echo ucwords($rs['company_name']);?></span></td>
              <td width="8%" align="center"><a href="full_details.php?id=<?php echo $rs['id']?>" onclick="openchild();" target="subwindow">View</a></td>
            </tr>
            <?php $slno++ ;} while($rs = mysql_fetch_array($result));}?>
            <?php if(message!=""){?>
            <tr>
              <td height="" colspan="6" align="center" class="no_message"><?php echo $message?></td>
            </tr>
            <?php } ?>
          </table></td>
      </form>
    </tr>
  </table>
  <div id="content"><?php include('info.php') ?></div>
  <div class="clear"></div>
  <?php include('footer.php') ?>
</div>
</body>
</html>