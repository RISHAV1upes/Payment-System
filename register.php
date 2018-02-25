<?php
session_start();

require 'config.php';
require 'email.php';
$name= $_POST['name'];
$email = $_POST['email'];
$sapid = $_POST['sapid'];
$year=$_POST['year'];
$branch = $_POST['branch'];
$batch = $_POST['batch'];
$mobile = $_POST['phone'];
$f=false;
$_SESSION['name']=$name;
$errMsg1=$errMsg2=$errMsg3=$errMsg4="";
function emailcheck($field){
    $query=mysql_query("Select * from register where email='$field'");
    
    if(mysql_num_rows($query)) return 1; 
    else return 0;
}  
if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
{
	$errMsg1= "Only letters and white space allowed in name.";
    $f=	true;
}
if(strlen($batch)<1)
  {
	  $errMsg2=  "Batch should be of one digit.";
        $f=true;
  }
  if(is_numeric($mobile) == false)
  {
	  $errMsg3=  " Please enter only numeric values as Mobile number.";
       $f=true;
}
  if(strlen($mobile)<10)
  {
	  $errMsg4=  "Mobile Number should be of ten digits.";
        $f=true;
  }
if(emailcheck($email))
  {
	  $errMsg4=  "This Email is already registered with us. Please Check Your Mail.";
        $f=true;
  }
  if($f==true)
{  
echo "<script>alert('$errMsg1$errMsg2$errMsg3$errMsg4');window.location='index.php';</script>";
}


else
{
	
       
            $insert_registration=mysql_query("Insert into `register`(name,email,sapid,year,branch,batch,phone) values('$name','$email','$sapid','$year','$branch','$batch','$mobile')");
            $id=mysql_insert_id();
            $message =  <<<EOD
<p><img src="https://avatars0.githubusercontent.com/u/12233893?v=3&amp;s=200" alt="logo" width="104" height="104" /></p>
<h1><span style="color: #0000ff;">UPES CSI</span></h1>
<p>&nbsp;</p>
<p><span style="color: #000000;">Hi $name,</span></p>
<p>&nbsp;</p>
<p>Thanks for Registering in UPES-CSI Student Chapter.&nbsp;</p>
<p>Your CSI ID is <b>UPESCSI-$id</b> &nbsp;</p>
<p><a href="http://register.upescsi.in/membership.php">Click here</a>&nbsp;to complete your Registration. Ignore if you did not initiate the request.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>TEAM&nbsp;UPES-CSI</p>
<h1>&nbsp;</h1>
EOD;
           $a= mailer($message,$email);
	        if($insert_registration)
	        {      
              echo "<script>alert('Please Check Your Mail to Complete Your Registration.');window.location ='membership.php';</script>"; 
	        }
	        else
	        {
              echo "<script>alert('Error occured. Please try again.');window.location ='index.php';</script>";
            }
}
		


?>
