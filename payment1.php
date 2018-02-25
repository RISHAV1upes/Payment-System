<?php
include 'config.php';

$uid	= substr($_POST['id'],8);
$hostel = $_POST['hostel'];
$csiname= $_POST['Paidname'];
$ver=hexdec( substr(sha1($_POST['id']), 0, 7) );
$check=$_POST['verf'];
$f=false;
 $errMsg1=$errMsg2="";
 if(is_numeric($uid) == false)
 {
	  $errMsg1=  "Only numeric values are ID.";
       $f=true;
}

if ($ver!=$check) 
{
	$errMsg2= "Incorrect verification Id.";
    $f=	true;
}
	 
if($f==true)
{  echo "<script>alert('$errMsg1$errMsg2');window.location='hostel.php';</script>";
}
else
{
$insert_registration=mysql_query("UPDATE register SET cash_collect='$csiname',hostel='$hostel',flag='2' WHERE id='$uid' AND flag='1'");

	if($insert_registration){
        echo "<script>window.location ='final1.php';</script>";    }
	else{
        echo "<script>alert('This ID is already registered.');window.location ='hostel.php';</script>";
       }
	


}
    
?>