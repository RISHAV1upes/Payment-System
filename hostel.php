<doctype>
<html>
<title>PAYMENT|| UPES-CSI</title>
<head>
     <script>
	function verify(message){
      var str=document.getElementById("uid").value;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                alert('Please Check your Mail to get verification code.');
            }
        };
        xmlhttp.open("GET", "email.php?email=" + message+"&body="+str, true);
        xmlhttp.send();
    }

                    
	 </script>
        <link rel="shortcut icon" href="favicon.png">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="css/indexcss.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">
        <link rel="stylesheet" href="footer/css/style.min.css" type="text/css" />
        <link rel="stylesheet" href="css/style1.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>


<?php
 
 require_once 'functions/function.php';
 getpart('header');?>
 <body id="bootstrap-overrides" style="margin-top:120px;">

		<nav class="navbar navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header ">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="top-navbar-1">
				     <div class="nav navbar-nav navbar-left hidden-xs">
					 <a href="#"><img style="width:85px;height:70px;" src="favicon.png"></a>
					 </div>
				     
					<ul class="nav navbar-nav navbar-right " style="text-align:center">
						<li class="active"><a class="scroll-link" target="_blank" href="index.php" style="font-family:Times New Roman;font-size:130%;"><i class="fa fa-user-plus"></i>New Register</a></li>

					</ul>
				</div>
			</div>
		</nav>
	 <?php
session_start();
$nm=$_SESSION['name'];
if(!empty($nm))	{echo "<h1>Welcome $nm</h1><br><br>"; }?>	
		<center>
		<h3>Please Fill out the following details</h3><br>
    <form class="form-horizontal" action="payment1.php" method="post" style="margin-top:10px;">
     									
     <div class="row form-group" style="padding-bottom:5px">
     <label for="uid" class="control-label" style=""> <span style="color:blue">CSI-ID</span><span style="color:red"> *</span></label><br><br>
     <div class="" style="width:30%">
        <input type="text" class="form-control" id="uid" name="id" style="color:blue" placeholder="UPESCSI-XXX" required="required" />
      </div>
	  </div>
      <div class="row form-group">
     <label for="hostel" class=" control-label" style=""><span style="color:blue">Name of person whom you paid</span><span style="color:red"> *</span></label><br><br>
     <div class="" style="width:30%">
        <input type="text" class="form-control" id="csiname" name="Paidname" onchange="verify(this.value);" style="color:blue" placeholder="Name of person whom you paid"  required="required" />
		 <label for="hostel" class=" control-label" style=""><span style="color:blue">Verification Code</span><span style="color:red"> *</span></label><br><br>
     <div class="" style="width:30%">
        <input type="text" class="form-control"  name="verf"  style="color:blue" placeholder="Verification Code"  required="required" />
		
		
      </div>
	  </div>   									
     <div class="row form-group">
     <label for="hostel" class=" control-label" style=""><span style="color:blue">Hostel Name</span><span style="color:red"> *</span></label><br><br>
     <div class="" style="width:30%">
        <input type="text" class="form-control" id="hostel" name="hostel" style="color:blue" placeholder="Enter Your Hostel Name" required="required" />
      </div>
	  </div>
     
    <div id="float_right"  class="row">
        <input type="submit" class="submit btn btn-primary" name="" value="Submit">

    </div>	  
    </form></center>
	 
	<div class="bottom-footer hidden-xs" style="margin-top:20px;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-7">
              <p>©UPES-CSI. All Rights Reserved</p>
            </div>
            <div class="col-sm-12 col-md-5">
                <ul class="social-media">
                    <li class="social-icons"><a href="https://www.facebook.com/upescsi" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                    <li class="social-icons"><a href="https://www.instagram.com/upescsi" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li class="social-icons"><a href="https://www.twitter.com/upescsi" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    
                </ul>
			</div>
               
		</div>
	</div>
</div>
	<div class="bottom-footer hidden-sm hidden-md hidden-lg" style="">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-7">
              <p>©UPES-CSI. All Rights Reserved</p>
            </div>
            <div class="col-sm-12 col-md-5">
                <ul class="social-media">
                    <li class="social-icons"><a href="https://www.facebook.com/upescsi" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                    <li class="social-icons"><a href="https://www.instagram.com/upescsi" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li class="social-icons"><a href="https://www.twitter.com/upescsi" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    
                </ul>
			</div>
               
		</div>
	</div>
</div>
	   	   


</body>
</html>
