<?php
include 'config.php';

$name= $_POST['name'];
$email = $_POST['email'];
$sapid = $_POST['sapid'];
$year=$_POST['year'];
$branch = $_POST['branch'];
$batch = $_POST['batch'];
$mobile = $_POST['phone'];
$f=false;
$errMsg1=$errMsg2=$errMsg3=$errMsg4="";
if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
{
	$errMsg1= "Only letters and white space allowed in name.";
    $f=	true;
}
if(strlen($batch)<1)
  {
	  $errMsg2=  "Batch should be of one digits.";
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
  if($f==true)
{  
echo "<script>alert('$errMsg1$errMsg2$errMsg3$errMsg4');window.location='index.html';</script>";
}
else
{
	
	if(($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
{
        //your site secret key
        $secret = '6Ldd7SQUAAAAALWMN9h1Y79-ZpiorARiLPAzhE0i';
        //get verify response data
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        if($responseData->success)
        {
            $insert_registration=mysql_query("Insert into `register` values('','$name','$email','$sapid','$year','$branch','$batch','$mobile')");
	        if($insert_registration)
	        {
              echo "<script>window.location ='membership.php';</script>"; 
	        }
	        else
	        {
              echo "<script>alert('Error occured. Please try again.');window.location ='index.html';</script>";
            }
		}
		else
        {
            echo "<script>alert('Please click on the reCAPTCHA box and submit again');window.location ='index.html';</script>";
        }
}
else
{
   echo "<script>alert('Please click on the reCAPTCHA box and submit again');window.location ='index.html';</script>";
}
}

?>
