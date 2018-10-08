<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title>PROMOTEAUTO | Website Solution for Used Car Dealers, Used Car Dealers Management System</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta property="og:locale" content="en_UK" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="PromoteAuto: Used car dealers Branding, Reliable used car dealers website development" />
		<meta property="og:description" content="PromoteAuto - Website Solution for Used Car Dealers in UK, Used Car Dealers stock feeding"/>
		<meta name="keywords" content="Car Dealers Website, Digital Marketing for Used Car Dealers, Used Car Dealers stock feed, car dealers in United Kingdom, Fully Managed used car dealers website, Free used car Stock Feeding for dealers" />
		<meta property="og:url" content="https://www.PromoteAuto.com/" />
		<meta property="og:site_name" content="PromoteAuto" />

		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		<link href="css/animate.css" rel="stylesheet" type="text/css" />
		<link href="css/styles.css" rel="stylesheet" type="text/css" />
		<link rel="shortcut icon" href="images/favicon.png">

							
<script src="https://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

						
</head>
<?php
 if (ISSET($_POST['username']))
	{
		$msg = 'Name : '.$_POST['username'].'<br>';
		$msg .= 'E-mail : '.$_POST['email'].'<br>';
		$msg .= 'Business : '.$_POST['business'];
		
		$to      = 'promoteauto@gmail.com';
		$subject = 'PROMOTEAUTO Dealers Request';
		$message = $msg;
		$headers = 'From: noreply@promoteauto.com' . "\r\n" .
			'Reply-To: "'.$_POST['email'].'"' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();

		$send = mail($to, $subject, $message, $headers);
		
		if($send)
		{ 
	?>
	<script type="text/javascript">
		$(window).on('load',function(){
			$('#myModal').modal('show');
		});
	</script>			
	<?php	
		}
		else{ ?>
	<script type="text/javascript">
		$(window).on('load',function(){
			$('#myModal1').modal('show');
		});
	</script>			
		<?php }
	}
?>

<script type="text/javascript">
jQuery(document).ready(function () {
    jQuery('.modal').on('hidden.bs.modal', function (e) {
        window.location.href = '';
    });
});
</script>

<body>
<header>
<div class="top_panel clearfix">
			<div class="container">
				<div class="logo pull-left">
						<a href="#"><img src="images/logo.png"/></a>
										</div>
										<div class="main_menu pull-right">
											<nav class="navbar navbar-inverse">
												<div class="navbar-header">
													<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
														<span class="icon-bar"></span>
														<span class="icon-bar"></span>
														<span class="icon-bar"></span>                        
													</button>
												</div>  
												<div class="collapse navbar-collapse" id="myNavbar">

													<ul class="nav navbar-nav">
													     <li class="active"><a href="#">+44 79 8020 8030</a></li>
													     <li><a href="#">dealers@promoteauto.com</a></li>
													 </ul>

													<!--ul class="nav navbar-nav">
														<li class="active"><a href="#">buy</a></li>
														<li><a href="#">sell</a></li>
														<li><a href="#">more</a></li>
														<li><a href="#">account</a></li>
													</ul-->
												</div>
											</nav>
				</div>
			</div>
</div>
</header>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Success</h4>
        </div>
        <div class="modal-body">
          <p>Thanks for your request..!</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Modal -->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Failure</h4>
        </div>
        <div class="modal-body">
          <p>Something went wrong..!</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
<main>
<div class="content">
<div class="main_banner">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/banner.png" alt=""/>
    </div>
  </div>
</div>
</div>
<div id="animatedElement" class="productivity text-center">
<div class="container">
<h1>Unleash Your Productivity</h1>
<p>Create your brand and add value to your business. </p>
<ul class="clearfix">
<li>
<img src="images/Product_06.png"/>
<span>Responsive Website</span>
</li>
<li>
<img src="images/Product_12.png"/>
<span>Branding</span>
</li>
<li>
<img src="images/Product_03.png"/>
<span>Mobile Friendly</span>
</li>
<li>
<img src="images/Product_09.png"/>
<span>Hosting</span>
</li>
<li>
<img src="images/Product_19.png"/>
<span>SEO</span>
</li>
<li>
<img src="images/Product_25.png"/>
<span>Dashboard</span>
</li>
<li>
<img src="images/Product_22.png"/>
<span>CMS</span>
</li>
<li>
<img src="images/Product_28.png"/>
<span>Control Panel</span>
</li>
</ul>
<p></p>
</div>
</div>
<div id="animatedElement" class="stock">
<h1 class="text-center">Stock Management</h1>
<p class="text-center">Managing your stock has never been easier. 
</p>
<div class="lg_container">
<div class="container">
<ul class="list_bg">
<li>Registration Lookup</li>
<li>Add Videos to your vehicle</li>
<li>Add Photos with Drag & Drop Option</li>
<li>Add 360 Degree photos to your Ad</li>
<li>Download stocks as a list in Excel</li>
<li>Choose FeaturedCar, CarOfTheWeek</li>
<li>Silent Salesman PDF for each Ad</li>
<li>Apply Bulk Action on Multiple Ad</li>
</ul>
</div>
</div>
</div>
<div id="animatedElement" class="exclusive clearfix">
<div class="container">
<div class="feed pull-left">
<h2>Feed Your Stock</h2>
<p>Relax and let our system manage your stocks</p>
<ul class="list_bg">
<li>Feed Your stocks to different Automotive Market place such as AutoTrader, Motors, AutoVolo, eBayMotors, gumTree etc</li>
<li>Control on what you want to feed</li>
<li>ad-hoc feed request</li>
</ul>
</div>
<div class="ex_right pull-right">
<h2>Exclusive</h2>
<p>Turn visitor into potential customer with our exclusive service</p>
<ul class="list_bg">
<li>Visitor chat 19:00 to 22:00</li>
<li>Visitor Analytics</li>
<li>Customisable Visitor BOT to answer Frequently Asked Questions</li>
<li>Full Backup of entire website</li>
</ul>
</div>
</div>
</div>
<div id="animatedElement" class="performance">
<h1 class="text-center">Performance Dashboard</h1>
<p class="text-center">Review your business performance with our All-In-One Performance Dashboard</p>
<div class="lg_container">
<div class="container">
<div class="per_list pull-right">
<div class="per_row key">
<h3>Key Peformance Indicator (KPI) Report</h3>
<ul class="list_bg">
<li>Track your number of cars sold, profit by month for last six month</li>
</ul>
</div>
<div class="per_row usage">
<h3>VRM Usage Report</h3>
<ul class="list_bg">
<li>Review Pending Request and Answer them.</li>
<li>All User request can be viewed and updated without going through your Inbox.</li>
</ul>
</div>
<div class="per_row reports">
<h3>Customer Request Summary & Detailed Reports</h3>
</div>
<div class="per_row status">
<h3> Overview of Stocks by Status</h3>
</div>
</div>
</div>
</div>
</div>
<div id="animatedElement" class="call_action text-center">
<h1>call to action</h1>
<p>Save Your and Customer time. Well designed Contact, Finance, MOT forms will solve the needs in few clicks</p>
<div class="lg_container">
</div>
<h5>mot service and request</h5>
</div>
<div id="animatedElement" class="contact_us text-center">
<h1>More About Our Products</h1>
<p>Tired of Looking for the best website solution to your brand? Bored of using the useless service? Then, Just fill and taste the awesome product designed to fulfill your needs</p>
<div class="container">
<form id="contact_form" action="" method="post">
<input type="text" name="username" id="username" placeholder="Enter Your Name"/>
<input type="text" name="email" id="email" placeholder="Enter Your Email"/>
<input type="text" name="business" id="business" placeholder="Enter Your Business"/> <br/> <br/>
<button class="btn_new bg" type="submit">submit</button>
</form>
</div>
</div>
</div>
</main>

<!-- tawk.to chat plugin -->

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5a1c8408bb0c3f433d4cb919/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->



<footer>
<div class="container">
<ul class="footer_links">
<li><a href="#">about us</a></li>
<li><a href="#">privacy and policy</a></li>
<li><a href="#">terms and conditions</a></li>
<li><a href="#">contact us</a></li>
</ul>
<ul class="social_links">
<h4>get touch with us</h4>
<li><a href="https://www.facebook.com/promoteautouk"><i class="fa fa-facebook"></i></a></li>
<li><a href="https://twitter.com/promoteautouk"><i class="fa fa-twitter"></i></a></li>
<li><a href="https://www.instagram.com/promoteautouk/"><i class="fa fa-instagram"></i></a></li>
<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
</ul>
<p>@2017 promoteauto all rights reserved</p>
</div>
</footer>


<script async src="https://www.googletagmanager.com/gtag/js?id=UA-89298749-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-89298749-1');
</script>


<script>
$(document).ready(function(){
$(window).scroll(function(){
if ($(window).scrollTop() >= 50) {
$('header').addClass('fixed-header');
}
else {
$('header').removeClass('fixed-header');
}
});
$('.main_menu .navbar-toggle').click(function()
{
$('header').toggleClass('fixed-header');
$('body').toggleClass('no_scroll');
});

$(window).scroll(function() {
		$('#animatedElement').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				$(this).addClass("slideUp");
			}
		});
	});
	
	$('#animatedElement').click(function() {
		$(this).addClass("slideUp");
	});
});
</script>

<!-- For Validation -->
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script src="js/jquery.validationEngine.js"></script>
<script src="js/jquery.validationEngine-en.js"></script>
<!-- Validation Code Ends  -->
<script>
	$(document).ready(function(){
		$("#contact_form").validate({
			rules: {
				username: {
					required: true,
					minlength: 2,
					maxlength: 25,					
				},
				email:{					
					required:true,
					email :true,
					minlength: 5,
					maxlength: 100						
				},
				business: {
					required: true,
					minlength: 2,
					maxlength: 100					
				}
			},
			messages: {
				"username": {
					required: "Name field is required."
				},
				"email": {
					required: "Email field is required."
				},
				"business": {
					required: "Business field is required."
				}
			},
			submitHandler: function(form) { // <- pass 'form' argument in
				$(".submit").attr("disabled", true);
				form.submit(); // <- use 'form' argument here.
			}			
		});
	});
	function get_action(form) {
		
		var v = grecaptcha.getResponse();
		if(v.length == 0)
		{
			document.getElementById('captcha').innerHTML="U dient goedgekeurd te worden door de Google reCaptcha.";
			return false;
		}
		if(v.length != 0)
		{
			document.getElementById('captcha').innerHTML="";
			return true; 
		}
	}	
</script>