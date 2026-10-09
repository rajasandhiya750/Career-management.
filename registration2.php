<?php 
include('db.php');
include('function.php');


if(isset($_POST['submit']))
{


$gender=$_POST['gender'];
$Nationality =$_POST['Nationality'];
$loc=$_POST['loc'];
$phn=$_POST['phn'];
$exp=$_POST['exp'];
$ind = $_REQUEST['ind'];
$Role  = $_REQUEST['Role'];


$query="Insert into reg2(gender,Nationality ,loc,phn,exp,ind,Role) 
       values('$gender','$Nationality','$loc','$phn','$exp','$ind','$Role')";
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
          <legend> Personal Detail </legend>
          <input type='hidden' name='submitted' id='submitted' value='1'/>
          <br />
          <label for='gender' >gender*:</label>
          <input type="radio" value="male" name="gender" class="radio">
          <small>Male</small>
          <input type="radio" name="gender" value="female" class="radio">
          <small>Female</small><br />
          <div class="clear"></div>
          <label for='NATIONALITY' >NATIONALITY*:</label>
           <?php
		
		 $name = 'Nationality';
		$options = array( '- Select -', 'Anywhere', 'Ahmedabad','Bangalore', 'Chennai', 'Delhi','Delhi Region', 'Gurgaon', 'Hyderabad','Kolkata', 'Mumbai', 'Noida','Pune', 'Agartala',
		 'Agra','Ahmednagar', 'Aizawal', 'Ajmer',
		 'Alappuzha / Alleppey', 'Aligarh','Allahabad', 'Ambala', 'Amritsar','Anand', 'Ankleshwar', 'Asansol','Aurangabad', 'Baddi', 'Bahgalpur','Bareillyv', 'Baroda', 'Belgaum','Bellary',
		  'Bharuch', 'Bhatinda',
		  'Bhavnagar','Bhilaigarh', 'Bhopal', 'Bhubaneshwar','Bhuj', 'Bidar', 'Bilaspur','Bokaro', 'Chandigarh', 'Cochin / Kochi / Ernakulam','Coimbatore', 'Cuttack', 'Dalhousie','Daman', 'Dehradun',
		   'Dhanbad', 
		  'Dharamsala', 'Dharwad','Dispur', 'Durgapur', 'Erode','Faizabad', 'Faridabad', 'Gandhinagar','Gangtok', 'Ghaziabad', 'Goa','Gorakhpur', 'Gulbarga', 'Guntur','Guwahati', 'Gwalior', 
		  'Haldia','Hisar', 'Hosur', 'Hubli','Idukki', 'Imphal' ,'Indore','Itanagar', 'Jabalpur', 'Jaipur','Jaisalmer', 'Jalandhar' ,'Jalgaon','Jammu', 'Jamnagar', 'Jamshedpur','Jodhpur', 'Kakinada' ,
		  'Kandla','Kannur', 'Kanpur', 'Karnal','Kasargod', 'Kavaratti' ,'Kharagpur','Kohima', 'Kolar', 'Kolhapur','Kollam', 'Kozhikode / Calicut' ,'Kulu/Manali','Kurnool', 
		  'Kurukshetra', 'Lucknow','Ludhiana', 
		  'Madurai' ,'Malappuram','Mangalore', 'Mathura', 'Meerut','Mohali', 'Moradabad' ,'Mysore','Nagercoil', 'Nagpur', 'Nasik','Nellore', 'Nizamabad' ,'Ooty','Pallakad', 
		  'Panipat', 'Paradeep','Pathanamthitta', 'Pathankot' ,
		  'Patiala','Patna', 'Pondicherry', 'Porbandar','Port Blair', 'Puri' ,'Quilon','Raipur', 'Rajamundry', 'Rajkot','Ranchi', 'Rohtak','Roorkee', 'Rourkela',
		   'Salem','Shillong', 'Shimla' ,'Shimoga','Sholapur', 'Silchar', 'Siliguri','Silvassa', 'Sonipat / Sonepat','Srinagar', 'Surat', 'Thanjavur','Thrissur / Trissur',
		    'Thiruvananthapuram / Trivandrum' ,'Tirunalveli','Tirupati', 
		   'Tuticorin', 'Udaipur','Ujjain', 'Vadodara','Valsad', 'Vapi', 'Varanasi','Vellore', 'Vijayawada' ,'Visakhapatnam','Warangal', 'Wayanad', 'Yamunanagar','Other India', 'Australia','Bahrain',
		    'Bangladesh', 'Belgium','Canada', 'China' ,'Egypt','France', 'Germany', 'Gulf','Hongkong', 'Indonesia','Ireland', 'Japan', 'Jordan','Kuwait', 'Lebanon' ,'Macau',
			'Malaysia', 'Maldives', 'Mauritius','Mexico', 'Nepal','Netherlands', 'New Zealand', 'Oman','Pakistan', 'Philippines' ,'Qatar','Russia', 'Saudi Arabia', 'Singapore',
		 'South Africa', 'South Korea','Spain', 'SriLanka', 'Sweden','Switzerland', 'Taiwan' ,'Thailand','UK', 'United Arab Emirates', 'US','Vietnam', 'Yemen','Zimbabwe', 
		 'Other International');
		$selected = 1;
		
		print_r (dropdown( $name, $options, $selected ));
		
		?>
	
         
         
          <br />
          <label for='username' >CURRENT LOCATION*:</label>
           <?php
		
		 $name = 'loc';
		$options = array( '- Select -', 'Anywhere', 'Ahmedabad','Bangalore', 'Chennai', 'Delhi','Delhi Region', 'Gurgaon', 'Hyderabad','Kolkata', 'Mumbai', 'Noida','Pune', 'Agartala',
		 'Agra','Ahmednagar', 'Aizawal', 'Ajmer',
		 'Alappuzha / Alleppey', 'Aligarh','Allahabad', 'Ambala', 'Amritsar','Anand', 'Ankleshwar', 'Asansol','Aurangabad', 'Baddi', 'Bahgalpur','Bareillyv', 'Baroda', 'Belgaum','Bellary',
		  'Bharuch', 'Bhatinda',
		  'Bhavnagar','Bhilaigarh', 'Bhopal', 'Bhubaneshwar','Bhuj', 'Bidar', 'Bilaspur','Bokaro', 'Chandigarh', 'Cochin / Kochi / Ernakulam','Coimbatore', 'Cuttack', 'Dalhousie','Daman', 'Dehradun',
		   'Dhanbad', 
		  'Dharamsala', 'Dharwad','Dispur', 'Durgapur', 'Erode','Faizabad', 'Faridabad', 'Gandhinagar','Gangtok', 'Ghaziabad', 'Goa','Gorakhpur', 'Gulbarga', 'Guntur','Guwahati', 'Gwalior', 
		  'Haldia','Hisar', 'Hosur', 'Hubli','Idukki', 'Imphal' ,'Indore','Itanagar', 'Jabalpur', 'Jaipur','Jaisalmer', 'Jalandhar' ,'Jalgaon','Jammu', 'Jamnagar', 'Jamshedpur','Jodhpur', 'Kakinada' ,
		  'Kandla','Kannur', 'Kanpur', 'Karnal','Kasargod', 'Kavaratti' ,'Kharagpur','Kohima', 'Kolar', 'Kolhapur','Kollam', 'Kozhikode / Calicut' ,'Kulu/Manali','Kurnool', 
		  'Kurukshetra', 'Lucknow','Ludhiana', 
		  'Madurai' ,'Malappuram','Mangalore', 'Mathura', 'Meerut','Mohali', 'Moradabad' ,'Mysore','Nagercoil', 'Nagpur', 'Nasik','Nellore', 'Nizamabad' ,'Ooty','Pallakad', 
		  'Panipat', 'Paradeep','Pathanamthitta', 'Pathankot' ,
		  'Patiala','Patna', 'Pondicherry', 'Porbandar','Port Blair', 'Puri' ,'Quilon','Raipur', 'Rajamundry', 'Rajkot','Ranchi', 'Rohtak','Roorkee', 'Rourkela',
		   'Salem','Shillong', 'Shimla' ,'Shimoga','Sholapur', 'Silchar', 'Siliguri','Silvassa', 'Sonipat / Sonepat','Srinagar', 'Surat', 'Thanjavur','Thrissur / Trissur',
		    'Thiruvananthapuram / Trivandrum' ,'Tirunalveli','Tirupati', 
		   'Tuticorin', 'Udaipur','Ujjain', 'Vadodara','Valsad', 'Vapi', 'Varanasi','Vellore', 'Vijayawada' ,'Visakhapatnam','Warangal', 'Wayanad', 'Yamunanagar','Other India', 'Australia','Bahrain',
		    'Bangladesh', 'Belgium','Canada', 'China' ,'Egypt','France', 'Germany', 'Gulf','Hongkong', 'Indonesia','Ireland', 'Japan', 'Jordan','Kuwait', 'Lebanon' ,'Macau',
			'Malaysia', 'Maldives', 'Mauritius','Mexico', 'Nepal','Netherlands', 'New Zealand', 'Oman','Pakistan', 'Philippines' ,'Qatar','Russia', 'Saudi Arabia', 'Singapore',
		 'South Africa', 'South Korea','Spain', 'SriLanka', 'Sweden','Switzerland', 'Taiwan' ,'Thailand','UK', 'United Arab Emirates', 'US','Vietnam', 'Yemen','Zimbabwe', 
		 'Other International');
		$selected = 1;
		
		print_r (dropdown( $name, $options, $selected ));
		
		?>
          	
          <br />
          <label for='password' >PHONE*:</label>
          <input type='text' name='phn' maxlength="50" />
          <br />
        </fieldset>
        <fieldset>
          <legend>Professional Detail</legend>
          <div class="clear"></div>
          <label for='password' > TOTAL EXPERIRNCE:</label>
          <?php
		
		 $name = 'exp';
		$options = array( '- Select -', '1', '2','3', '4', '5','6', '7', '8','9', '10', '11','12', '13',
		 '14','15');
		$selected = 1;
		
		print_r (dropdown( $name, $options, $selected ));
		
		?>
          
          <br />
          <label for='CURRENT INDUSTRY' >CURRENT INDUSTRY*:</label>
            <input type="text" name="ind" value="" >
          
          
          </br>
          <label for="role">ROLE*:</label>
          <input type="text" name="Role" value="" >
          
          <label>&nbsp;</label>
          <input type='submit' name='submit' value='Submit' class="submit1" />
        </fieldset>
      </form>
      <div class="clear"></div>
    </div>
  </div>
  <?php include('footer.php') ?>
</div>
</div>
</body>
</html>