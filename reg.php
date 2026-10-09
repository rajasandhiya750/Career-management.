<?php 
include('db.php');
include('function.php');
if(isset($_POST['submit']))
{
$full_name = $_POST['full_name'];
$email_address=$_POST['email_address'];
$username=$_POST['username'];
$password=$_POST['password'];
$cpwd=$_POST['cpwd'];
$Highest_Qualification = $_REQUEST['Highest_Qualification'];
$yof = $_REQUEST['yof'];
$inst = $_REQUEST['inst'];

$query="Insert into registration (full_name,email_address,username,password,cpwd,Highest_Qualification,yof,inst) 
       values ( '$full_name','$email_address','$username','$password','$cpwd','$Highest_Qualification','$yof','$inst')";
$result=mysql_query($query);
}
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/styles.css" />
<script type="text/javascript" src="js/validation.js"></script>
</head>

<body>
<div class="master">
  <?php include('header.php'); ?>
  <div id="content">
  	<div class="login add">
    <h1>Submit Resume &amp; Double your chance Of Getting Jobs...</h1>
    <h2>Create Account</h2>
    <form id='register' action='' method='post' name="form1" onsubmit="return ValidateForm()">
      <fieldset >
        <legend>Register</legend>
        <input type='hidden' name='submitted' id='submitted' value='1'/>
        <br />
        <label for='name' >Your Full Name*: </label>
        <input type='text' name='full_name' id='name' maxlength="50" />
        <br />
        <label for='email' >Email Address*:</label>
        <input type="text" name="email_address" id='email_address' maxlength="50" />
        <br />
        <label for='username' >UserName*:</label>
        <input type='text' name='username' id='username' maxlength="50" />
        <br />
        <label for='password' >Password*:</label>
        <input type='password' name='password' id='password' maxlength="50" />
        <br />
        <label for='password' >confirm_password:</label>
        <input type='password' name='cpwd' id='cpwd' maxlength="50" />
        <br />
   </fieldset>   
   <fieldset>  
        <legend>Educational Qualification </legend>
        <div class="clear"></div>
        <label for='Highest_Qualification'>Highest Qualification*: </label>
        <?php
		
		 $name = 'Highest_Qualification';
		$options = array( '- Select -', 'B.A', 'B.Arch','BCA', 'B.B.A', 'B.Com','BDS', 'B.E/B.Tech', 'B.Ed','BHM', 'BL/LLB', 'B.Pharm','B.Sc', 'CA', 'CA Inter','Class 12', 'Diploma', 'M.A',
		'M.Arch', 'MBA','MBBS', 'MCA', 'M.Com','MD/MS', 'M.Ed', 'M.E/M.Tech/MS','ML/LLM', 'M.Pharm', 'Mphil','M.Sc', 'PGDCA', 'PG Diploma','PGDM', 'Phd', 'Other',
	);
		$selected = 1;
		
		print_r (dropdown( $name, $options, $selected ));
		
		?>

        <br />
        
        <label for='yof' >Year of passing*: </label>

  <?php
		
		 $name = 'yof';
		$options = array( '- Select Year -', '2011', '2010','2009', '2008', '2007','2006', '2005', '2004','2003', '2002', '2001','2000', '1999', '1998','1997', '1996', '1995',
		 '1994', '1993','1992', '1991', '1990','1989', '1988', '1987','1986', '1985', '1984','1983', '1982', '1981','1980', '1979', '1978',
		  '1977','1976', '1975', '1974','1973', '1972', '1971','1970', '1969', '1968','1967', '1966', '1965','1964', '1963', '1962', 
		  '1961', '1960','1959', '1958', '1957','1956', '1955', '1954','1953', '1952', '1951','1950', '1949', '1948','1947', '1946', '1945','1944', '1943', '1942','1941', '1940');
		$selected = 1;
		
		print_r (dropdown( $name, $options, $selected ));
		
		?>
	
        <br />
        <label for='Institute/University' >Institute/University*: </label>
        <input type="text" name="inst" value="" />
       
        <br />
        <label>&nbsp;</label>
        <input type='submit' name='submit' value='Submit' class="submit1" />
      </fieldset>
    </form>
    <div class="clear"></div>
    </div>
  </div>
  <?php include('footer.php') ?>
</div>
</body>
</html>