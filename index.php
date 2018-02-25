<!DOCTYPE html>
<html>
<head>
<title>HOME||UPES-CSI</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/bootstrap-select.css">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.min.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="favicon.png">  
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Oxygen:300,400,700&amp;subset=latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">

<!-- css links of gallery and map -->
<link href="css1/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css1/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css1/caption-hover.css" />
<link rel="stylesheet" type="text/css" href="css1/circle-hover.css" />
<link href="css1/slider.css" rel="stylesheet" type="text/css" media="all">
<link href="css1/style.css" rel="stylesheet" type="text/css" media="all">
<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<script src="js1/SmoothScroll.min.js"></script>
<script type="text/javascript" src="js1/modernizr.custom.js"></script>

<!--end of css link for gallery and map-->

<link href="footer/css/style.min.css" rel="stylesheet" type="text/css">
<script src='https://www.google.com/recaptcha/api.js'></script> 

       
</head>
<body >
<header>
	<div class="container">
		<!--logo-->
			<div class="logo col-xs-4">
			   <a href="http://www.upescsi.in"><img style="width:50px;height:50px;" src="favicon.png"></a>
				<!--<h1><a href="index.html">UPES-CSI</a></h1>-->
			</div>
		<!--//logo-->
		  <div class="w3layouts-login">
				<a data-toggle="modal" data-target="#myModal" href="#" style="font-size:20px"><i class="glyphicon glyphicon-user"> </i>Register</a>
			</div>    
				<div class="clearfix"></div>
    <!--Login modal-->
        <div class="modal fade"  id="myModal" tabindex="-1" role="dialog" 
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content" style="background-color:white;" >
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            &times;</button>
                        <h4 class="modal-title" id="myModalLabel">
                            Register here</h4>
                    </div>
                    <div class="modal-body" style="margin-top:20px">
                        <div class="row">
                            <div class=" col-xs-offset-2 col-xs-8 extra-w3layouts" >
                          
                                <!-- Tab panes -->
                                    <div class="tab-pane" id="Registration">
                                        <form  class="form-horizontal" action="register.php" method="post">
                                        <div class="form-group" style="padding-bottom:10px">
                                            <label for="name" class="col-sm-2 left control-label">Name *</label>
                                            <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="name" maxlength="50" pattern="[A-Za-z ]{1,32}" placeholder="Name" required/>
                                             </div>
                                        </div>
                                        <div class="form-group" style="padding-bottom:10px">
                                            <label for="email" class="col-sm-2 control-label"> Email *</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="required" />
                                            </div>
                                        </div>
																				
                                        <div class="form-group" style="padding-bottom:10px">
                                            <label for="sapid" class="col-sm-2 control-label">Sap ID *</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="sapid" name="sapid" placeholder="Sap ID" required="required" />
                                            </div>
                                        </div>
										<div class="form-group" style="padding-bottom:10px">
                                            <label for="year" class="col-sm-2 control-label">Year *</label>
                                            <div class="col-sm-10">
                                                <select type="text" class="form-control" id="year" name="year" placeholder="Year" required="required" />
                                                <option value="" disabled="disabled" selected="selected">Please Select Your Year</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                </select>
											</div>
                                        </div>

                                        <div class="form-group" style="padding-bottom:10px">
                                            <label for="password" class=" col-sm-2 control-label" >Branch *</label>
                                            <div class="col-sm-4">
                                                <select type="text" class="form-control" id="branch" name="branch" placeholder="Enter your Branch" required="required" />
                                                <option value="" disabled="disabled" selected="selected">Select Your Branch</option>
                                                <option value="CSE-CCVT">CSE-CCVT</option>
                                                <option value="CSE-MFT">CSE-MFT</option>
                                                <option value="CSE-CSF">CSE-CSF</option>
                                                <option value="CSE-BAO">CSE-BAO</option>
                                                <option value="CSE-OSOS">CSE-OSOS</option>
						<option value="CSE-OGI">CSE-OGI</option>
                                                <option value="CSE-BFSI">CSE-BFSI</option>
                                                <option value="CSE-IOT">CSE-IOT</option>
                                                <option value="CSE-IT Infra">CSE-IT Infra</option>
                                                <option value="CSE-ECRA">CSE-ECRA</option>
                                                <option value="CSE-G&G">CSE-G&G </option>
                                                <option value="CSE-TI">CSE-TI </option>
                                                <option value="CSE-MOBILE COMPUTING">CSE-MOBILE COMPUTING </option>
                                                <option value="CSE-BIGDATA">CSE-BIG DATA </option>
                                                <option value="CSE-DEVOPS">CSE-DEVOPS </option>
						<option value="CSE-OGI">B.Tech. CSE-LLB Cyber Laws</option>
						<option value="OTHERS"> OTHERS</option>
						
						</select> 
             								</div>
											<label for="batch" class="col-sm-2 control-label">Batch *</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="batch" name="batch" placeholder="Enter your Batch" required="required" />
                                            </div>
											
                                        </div>
										
                                        <div class="form-group" style="padding-bottom:10px">
                                            <label for="mobile" class="col-sm-2 control-label">
                                                Mobile *</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" pattern="[789][0-9]{9}" maxlength="10" minlength="10"  min="0" id="mobile" name="phone" placeholder="Whatsapp Number" required="required" />
                                            </div>
                                        </div>
										<div class="g-recaptcha col-xs-6" data-sitekey="6Ldd7SQUAAAAAB_QloWZIIGEcbRDvqIYHe0dhzov"></div>
                                        <div class="row">
                                            <div class="col-sm-2">
                                            </div>
                                            <div class="col-sm-10">
                                                <button type="submit" class="submit btn btn-primary btn-sm" style="font-weight:2000">
                                                    Save & Continue</button>
                                                </div>
                                        </div>
                                        </form>
                                    </div>
                               
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!--//Login modal-->
    </div>
</div>
</header>

<!--//-->	
	<div class=" header-right">
		<div class="banner">
			 <div class="slider" >
			    <div class="callbacks_container">
			      <ul class="rslides" id="slider">		       
					 <li>
			          	 <div class="banner1">
			           		<div class="caption">
							    <h4 class="animated fadeInLeftBig wow" data-wow-duration="1000ms"data-wow-delay="1000ms" style="font-family:Times New Roman;font-size:20px;color:black;">Why to join us</h4>
					          	<h3 class="animated fadeInRightBig wow" data-wow-duration="1000ms"data-wow-delay="1200ms" style="font-family:Times New Roman;color:blue;font-size:30px;"><span></span>2100+ Happy registered members in last 4 years.</h3>
					          	
			          		</div>
			          	</div>
			         </li>
					 <li>
			          	 <div class="banner2">
			           		<div class="caption">
							     <h4 class="animated fadeInRightBig wow" data-wow-duration="1000ms"data-wow-delay="3200ms" style="font-family:Times New Roman;font-size:20px;color:black;">Why to join us</h4>
					          	<h3 class="animated fadeInLeftBig wow" data-wow-duration="100000ms"data-wow-delay="400000ms" style="font-family:Times New Roman;color:blue;font-size:30px;"><span></span>Various Technical and Fun events</h3>
                                
			          		</div>
			          	</div>
			         </li>
			        <li>
			          	 <div class="banner3">
			           		<div class="caption">
							   <h4 style="font-family:Times New Roman;color:black;font-size:20px;">Book now</h4>
					          	<h3 style="font-family:Times New Roman;color:blue;font-size:30px;">India's best CSI Student Chapter <br> 
2013-Present
</h3>
					          	
			          		</div>
			          	</div>
			         </li>	
					 
			  
			      </ul>
				  

			  </div>
       
			</div>
		</div>
	</div>
	 
<!-- Blog -->
<section class="our-blog" id="blog">
	<h3 class="text-center slideanim" style="padding-top:50px">Gallery</h3>
    <div class="container">
		<div class="row">
			<div class="col-sm-6 col-xs-12 col-md-3">
				<div class="view view-seventh slideanim">
                    <img src="images1/blog1.jpg" alt="" class="img-responsive"/>
                    <div class="mask">
                        <h5>Inaugration Ceremony</h5>
                        <p>Richa Choudhary,Faculty Coordinator </p>
					</div>
                </div>
			</div>
			<div class="col-sm-6 col-md-3  col-xs-12">
				<div class="view view-seventh slideanim">
                    <img src="images1/blog2.jpg" alt="" class="img-responsive"/>
                    <div class="mask">
                        <h5>Inauguration Dance</h5>
                        <p>Yugmak 2016</p>
                    </div>
                </div>
			</div>
			<div class="col-sm-6 col-xs-12 col-md-3">
				<div class="view view-seventh slideanim">
                    <img src="images1/blog3.jpg" style="width:250px;height:250px;" alt="" class="img-responsive"/>
                    <div class="mask">
                        <h5>Mudit Srivastav</h5>
                        <p>President UPES-CSI</p>
                    
                    </div>
                </div>
			</div>
			<div class="col-sm-6 col-xs-12 col-md-3" style="margin-bottom:30px">
				<div class="view view-seventh slideanim">
                    <img src="images1/blog4.jpg" alt="" class="img-responsive"/>
                    <div class="mask">
                        <h5>Tech-MUN</h5>
                        <p>Yugmak 2017</p>
					</div>
                </div>
			</div>
			
			<div class="col-sm-6 col-xs-12 col-md-3">
				<div class="view view-seventh slideanim">
                    <img src="images1/blog5.jpg" alt="" class="img-responsive"/>
                    <div class="mask">
                        <h5>Yugmak 2017</h5>
                        <p></p>
						
                    </div>
                </div>
			</div>
			<div class="col-sm-6 col-xs-12 col-md-3" style="margin-bottom:30px">
				<div class="view view-seventh slideanim">
                    <img src="images1/blog6.jpg" alt="" class="img-responsive" />
                    <div class="mask">
                        <h5>Inter School IT Quiz</h5>
                        <p></p>
					</div>
                </div>
			</div>
			
			<div class="col-sm-6 col-xs-12 col-md-3">
				<div class="view view-seventh slideanim">
                    <img src="images1/blog7.jpg" alt="" class="img-responsive"/>
                    <div class="mask">
                        <h5>Workshop of C</h5>
                        <p>Exam Booster</p>
					</div>
                </div>
			</div>
			
			<div class="col-sm-6 col-xs-12 col-md-3">
				<div class="view view-seventh slideanim">
                    <img src="images1/blog8.jpg" alt="" class="img-responsive"/>
                    <div class="mask">
                        <h5>Freshman Orientation</h5>
                        <p></p>
					</div>
                </div>
			</div>
		</div>
	</div>
</section>
<!-- /Blog -->

    <!--Vertical Tab-->

	<!--Plug-in Initialisation-->
	<script type="text/javascript">
    $(document).ready(function() {

        //Vertical Tab
        $('#parentVerticalTab').easyResponsiveTabs({
            type: 'vertical', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#nested-tabInfo2');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
    });
</script>
	<div class="w3layouts-partners">
		<h3>Our Sponsors</h3>
	 		<div class="container">
				<ul>
					<li><a href="#"><img class="img-responsive" src="images/lg.png" style="height:175px;width:150px;margin-right:25px;" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="images/lg1.png" style="height:175px;width:150px;margin-right:25px;" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="images/lg2.png" style="height:180px;width:165px;margin-right:25px;" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="images/lg3.jpg" style="height:175px;width:150px;margin-right:25px;" alt=""></a></li>
					
					<li><a href="#"><img class="img-responsive" src="images/lg4.jpg" style="height:170px;width:145px;margin-right:25px;" alt=""></a></li>
				</ul>
			</div>
		</div>	
<section class="contact-us" id="contact">
	<h3 class="text-center slideanim">Contact Us</h2>
	<div class="container">
		<div class="row">
            <div class="col-md-8 col-xs-12 slideanim">
                
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3440.681491772241!2d77.96617271478836!3d30.41677738174836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3908d4890d7c1735%3A0x22d3ae324c238e3c!2sUniversity+of+Petroleum+and+Energy+Studies!5e0!3m2!1sen!2sin!4v1475524302853" width="550" height="400 frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-md-4 col-xs-12 slideanim">
                <h4>
                
                <p>Email:<a href="mailto:name@example.com">upes.csi@gmail.com<br>mail@upescsi.com</a><br>Phone:+91-9719159680</p>
                <p>Address:SOCSE,University of Petroleum & Energy Studies, P.O. Bidholi Via-Prem Nagar, Dehradun-248007</p>
          </div>
            <div class="clearfix"></div>
        </div>
    </div>
</section>

	<div class="bottom-footer">
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


<script>
$(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slide");
    }
  });
});
</script>
<script src="js/bootstrap.js"></script>
<script src="js/responsiveslides.min.js"></script>
   <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
<script src="js/bootstrap-select.js"></script>
<script>
  $(document).ready(function () {
    var mySelect = $('#first-disabled2');

    $('#special').on('click', function () {
      mySelect.find('option:selected').prop('disabled', true);
      mySelect.selectpicker('refresh');
    });

    $('#special2').on('click', function () {
      mySelect.find('option:disabled').prop('disabled', false);
      mySelect.selectpicker('refresh');
    });

    $('#basic2').selectpicker({
      liveSearch: true,
      maxOptions: 1
    });
  });
</script>
<link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
<script src="js/easyResponsiveTabs.js"></script>
			<script type="text/javascript">
				$(document).ready(function() {
					/*
						var defaults = {
						containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 1200,
						easingType: 'linear' 
						};
					*/
										
					$().UItoTop({ easingType: 'easeOutQuart' });
										
					});
			</script>
			<!-- start-smoth-scrolling -->
			<script type="text/javascript" src="js/move-top.js"></script>
			<script type="text/javascript" src="js/easing.js"></script>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
					});
				});
			</script>
</body>
</html>
