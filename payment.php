<?php
include 'config.php';

$uid	= substr($_POST['id'],8);
$member = $_POST['member'];

if(isset($_POST['pay']))
{
$pay 	= $_POST['pay'];
}

if(isset($_POST['pay1']))
{
$pay 	= $_POST['pay1'];
}

$f=false;
 $errMsg1="";
 if(is_numeric($uid) == false)
 {
	  $errMsg1=  "Only numeric values are ID.";
       $f=true;
}
	 
if($f==true)
{  echo "<script>alert('$errMsg1');window.location='membership.php';</script>";
}
else
{
$check=mysql_query("SELECT * FROM register WHERE id='$uid '");

if(mysql_num_rows($check)!=0){
$insert_registration=mysql_query("UPDATE register SET mode_pay='$pay' ,membership='$member',flag='1' WHERE id='$uid' AND flag='0' ");
}
else{
echo "<script>alert('Incorrect CSI ID'.$uid);window.location ='membership.php';</script>"; 
}


    if(isset($_POST['pay1'])){
		echo "<script>window.location ='hostel.php';</script>";
	}
	if($insert_registration){
        echo "<script>window.location ='final.php';</script>";    }
	else{
        echo "<script>alert('ThisID is already registered.');window.location ='index.html';</script>";
       }
	


}
    
?>