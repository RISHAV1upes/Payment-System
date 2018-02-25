<doctype>
<html>
<title>Member Page|| UPES-CSI</title>
<head>
     
        <link rel="shortcut icon" href="favicon.png">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="css/indexcss.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">
        <link rel="stylesheet" href="footer/css/style.min.css" type="text/css" />
        <link rel="stylesheet" href="css/style1.css">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
<script type='text/javascript'>
function displayForm(c) {
    if (c.value == "1") {    
        jQuery('#1year').toggle('show');
        jQuery('#2year').hide();
		jQuery('#3year').hide();
		jQuery('#4year').hide();
    }
	    if (c.value == "2") {    
        jQuery('#2year').toggle('show');
        jQuery('#1year').hide();
		jQuery('#3year').hide();
		jQuery('#4year').hide();
    }  
	if (c.value == "3") {    
        jQuery('#3year').toggle('show');
        jQuery('#2year').hide();
		jQuery('#1year').hide();
		jQuery('#4year').hide();
    }    
	if (c.value == "4") {    
        jQuery('#4year').toggle('show');
        jQuery('#2year').hide();
		jQuery('#3year').hide();
		jQuery('#1year').hide();
    }
};
</script>
</head>


<?php
  session_start();
$nm=$_SESSION['name'];
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
		
		
	 
<?php if(!empty($nm))	{echo "<h1>Welcome $nm</h1><br><br>"; }?>	
<form class="form-horizontal" action="payment.php" method="post">
     									
     <div class="row form-group">
     <label for="uid" class="col-sm-2 col-xs-offset-2 col-sm-offset-0 col-xs-3 control-label" style="margin-right:20px;"> <span style="color:blue">CSI-ID</span><span style="color:red"> *</span></label>
     <div class="col-sm-10 col-xs-7" style="width:24%">
        <input type="text" class="form-control" id="uid" name="id" style="color:blue" placeholder="UPESCSI-XXX" required="required" />
      </div></div>
     <div class="row">
	 <div class="col-sm-3">
    <input value="1" type="radio" name="member" required="required" onClick="displayForm(this)"></input><span style="font-family:Times New Roman;font-size:20px;">1 Year Membership</span>
     </div>
	 <div class="col-sm-3">
    <input value="2" type="radio" name="member" required="required" onClick="displayForm(this)"></input><span style="font-family:Times New Roman;font-size:20px;">2 Year Membership</span>
     </div>
	<div class="col-sm-3">
    <input value="3" type="radio" name="member" required="required" onClick="displayForm(this)"></input><span style="font-family:Times New Roman;font-size:20px;">3 Year Membership</span>
    </div>
	<div class="col-sm-3">
	<input value="4" type="radio" name="member" required="required" onClick="displayForm(this)"></input><span style="font-family:Times New Roman;font-size:20px;">4 Year Membership</span>
    </div>
	</div>
	<div class="display" style="display:none" id="4year">
	<h3>Why to join UPES-CSI for 4 Year</h3><br>
	<h4>
	Student Id Card<br>
	National Convention<br>
	Gaming Events large scale<br>
	Faculties Doubt clearing session<br>
	blogs access<br>
	Yearly Magazine<br>
	Mini Conventions<br>
	Project Work, paper prezi<br>
	discounts, coupons all round the year <br>
	CSR responsibilities activities<br></h4>
	<span style="color:red">Membership Fee: Rs 1500<br>Please note this amount for future reference</span>
    </div>
	<div class="display" style="display:none" id="3year">
	<h3>Why to join UPES-CSI for 3 Year</h3><br>
	<h4>
	Student Id Card<br>
	National Convention<br>
	Gaming Events large scale<br>
	Faculties Doubt clearing session<br>
	Yearly Magazine<br>
	blogs access<br>
	Mini Conventions<br>
	Project Work, paper prezi<br>
	<span style="color:red">Membership Fee: Rs 1200<br>Please note this amount for future reference</span>
    </div>
	<div class="display" style="display:none" id="2year">
    <h3>Why to join UPES-CSI for 2 Year</h3><br>
	<h4>
	Student Id Card<br>
	National Convention<br>
	Gaming Events large scale<br>
	blogs access<br>
	Mini Conventions<br>
	<span style="color:red">Membership Fee: Rs 850<br>Please note this amount for future reference</span>
    </div>
    <div class="display" style="display:none"  id="1year">
	 <h3>Why to join UPES-CSI for 1 Year</h3><br>
	<h4>
	Student Id Card<br>
	National Convention<br>
	Gaming Events large scale<br>
	Faculties Doubt clearing session<br>
	blogs access<br>




 





	<span style="color:red">Membership Fee: Rs 500<br>Please note this amount for future reference</span>
	</div>

    <div id="float_right">
        <input type="submit" class="submit btn btn-primary" style="margin-right:20px" name="pay" value="PAYTM">
		
        <input type="submit" class="submit btn btn-primary" name="pay1" value="Cash">
    </div>
</form>

	
		   	   
<!------------------footer---->
<div class="bottom-footer" style="margin-top:290px;">
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


<!------------------footer------>


</body>
</html>
