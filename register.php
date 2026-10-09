<?php include 'function.php'; ?>
<html>
<head>
<script type="text/javascript">



function f_password()
{
if(document.f_name.pwd.value != '' && document.f_name.pwd.value == document.f_name.cpwd.value) 
{
	if(document.f_name.pwd.value.length < 6)
	{
	alert("Password should be more than 6 characters!")
	}
}
else 
alert("Please check your password!");
}


function f_username()
{
if(document.f_name.username.value.length < 5)
{
alert("Username should be more than 5 characters!")
}
else
return false;
}

function f_email()
{
var e=/^([a-zA-Z0-9_.-])+@+([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
if(e.test(document.f_name.email.value))
{
return true;
}
else
{
alert("Please enter valid email!");
}

}



function phone()
{
p=/[0-9]/;
if(document.f_name.phn.value!='')
{
if(p.test(document.f_name.phn.value))
{
return true;
}
else
{
alert("Please enter only numbers!");
}

}
else
alert("Please enter phone number!");
}




function first_name()
{
	
if(document.f_name.firstname.value=='')
{
alert("Please enter your first name!");
}

else if(!isNaN(document.f_name.firstname.value))
	{
		alert ("Please enter only alphabets!");
		}
	
else
return false;
}


function last_name()
{
if(document.f_name.lastname.value=='')
{
alert("Please enter your last name!");
}

else if(!isNaN(document.f_name.lastname.value))
	{
		alert ("Please enter only alphabets!");
		}
	
else
return false;
}


</script>
<link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>

<body>
<div class="login">
  <h1 style="color:#900; margin:0 0 20px;">REGISTRATION FORM</h1>
  <form name="f_name" method="post" onSubmit="first_name(); last_name(); f_username(); f_email(); f_password(); phone()">
    <label>Firstname:</label>
    <input type="text" name="firstname" size="33">
    <label> Last Name:</label>
    <input type="text" name="lastname" size="33">
    <label>Date Of Birth : </label>
    <select name="year" class="year">
      <option value="00">Year</option>
      <?php
for($i=1970;$i<2010;$i++)
{
	echo"<option value=$i> $i </option>";
}	
?>
    </select>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <select name="month" class="year">
      <option value="00">Month</option>
      <?php
for($i=1;$i<=12;$i++)
{
	echo"<option value=$i> $i </option>";
}	
?>
    </select>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <select name="day" class="year">
      <option value="00">Day</option>
      <?php
for($i=1;$i<32;$i++)
{
	echo"<option value=$i> $i </option>";
}	
?>
    </select>
    <div class="clear"></div>
    <label> Username:</label>
    <input type="text" name="username" size="33">
    <label> Email:</label>
    <input type="text" name="email" size="33">
    <label> Password:</label>
    <input type="password" name="pwd" size="33">
    <label> Confirm password:</label>
    <input type="password" name="cpwd" size="33">
    <label> Phone no.:</label>
    <input type="text" name="phn" size="33" >
    
    <label> Gender:</label>
    <input type="radio" value="male" name="gender" class="radio">
    <h3>Male</h3>
    <input type="radio" name="gender" value="female" class="radio">
    <h3>Female</h3>
    
    <div class="clear"></div>
       <label>Highest Qualification*: </label>
        <?php
		
		 $name = 'Highest_Qualification';
		$options = array( '- Select -', 'B.A', 'B.Arch','BCA', 'B.B.A', 'B.Com','BDS', 'B.E/B.Tech', 'B.Ed','BHM', 'BL/LLB', 'B.Pharm','B.Sc', 'CA', 'CA Inter','Class 12', 'Diploma', 'M.A',
		'M.Arch', 'MBA','MBBS', 'MCA', 'M.Com','MD/MS', 'M.Ed', 'M.E/M.Tech/MS','ML/LLM', 'M.Pharm', 'Mphil','M.Sc', 'PGDCA', 'PG Diploma','PGDM', 'Phd', 'Other',
	);
		$selected = 1;
		
		print_r (dropdown( $name, $options, $selected ));
		
		?>

        <br />
         <label>Year of passing*: </label>

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
    <label>&nbsp;</label>
    <input type="submit" value="Submit" name="submit" class="submit1">
  </form>
  <?php

if(isset($_POST['submit']))
{
	include 'db.php';
	$firstname = ($_REQUEST['firstname']);
	$lastname = ($_REQUEST['lastname']);
	$dob = $_REQUEST['year']."/".$_REQUEST['month']."/".$_REQUEST['day'];
	$username1 = $_REQUEST['username'];
	$email = $_REQUEST['email'];
	$pwd = $_REQUEST['pwd'];
	$cpwd = $_REQUEST['cpwd'];
	$phn = $_REQUEST['phn'];
	$gender = $_REQUEST['gender'];
	$sql = "SELECT * FROM registration";
	$result = mysql_query($sql);
	while($row = mysql_fetch_array($result))
	{
		$already_user = $row['username'];
		if($username1 === $already_user)
		{
			echo "Username already exists!";
			}
	}
	//if($firstname=' ' || $lastname=' ' || $username=' ' || $email = ' ' || $pwd=' ' || $cpwd=' ' || $phn=' ')
		if(!$pwd=$cpwd)
		{ 
		   echo "<h3> <center><span style='color:red;'>Password doesn't match </span></center></h3>";
		}
		else
		{
			mysql_query("INSERT INTO registration VALUES('','$firstname','$lastname','$dob','$username1','$email','$pwd','$cpwd','$phn','$gender')");
			
			
			echo "<h3> <center><span style='color:red;'>Congratulations!!! Now you are the member of our website. For shopping you have to login first 
  <a href= 'clogin.php' >Click Here </a>
  </span></center></h3>";
			
		}
		
	
	}
?>
</div>
</body>
</html>