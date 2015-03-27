<?php

	require dirname(__FILE__)."/php/csrf.php";
	$new_token = new CSRF('review');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="The Cup Store is your premier source for custom printed disposable paper and plastic cups, glassware, containers, coffee sleeves and much more. Grow your brand and your business one cup at a time - print your logo or other artwork on a cup!">
	<meta name="keywords" content="paper cups, plastic cups, glassware, coffee sleeves, gelato cups, ice cream cups, compostable cups, biodegradeable cups, eco cups, printed paper cups, printed plastic cups, custom printed cups, imprinted paper cups, imprinted plastic cups, promotional cups, logo on cups, custom cups, customized cups">
    
    <title>Quote Request | The Cup Store</title>

    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/tcs-style.css">
	<link rel="stylesheet" href="../css/font-awesome.css">
	<link rel="stylesheet" href="css/b-check-demo.css">
	<link rel="stylesheet" href="css/b-check-style.css">


	<link rel="icon" type="image/png" href="images/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="images/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="images/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="images/favicon-16x16.png" sizes="16x16">

	<!--TypeKit fonts-->
	<script src="//use.typekit.net/eco7azw.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
	
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script scr="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->	

	<!--[if lt IE 10]>
			<script src="js/jquery.placeholder.min.js"></script>
		<![endif]-->

</head>
<body>

<!--HEADER SECTION-->
<header class="tcs-header">
<nav class="navbar navbar-default navbar-fixed-top"><!--applies BS nav bar styles and effects-->
	<div class="container-fluid"><!--makes it full width-->

	<!--1st ROW-->
	<div class="row blacktop">

		<div class="col-sm-6 hidden-xs social"><!--contains SM icons which disappear on mobile nav-->
			<a href="https://www.facebook.com/TheCupStore1"><i class="fa fa-facebook"></i></a>
			<a href="https://twitter.com/thecupstore"><i class="fa fa-twitter"></i></a>
			<a href="https://www.linkedin.com/company/the-cup-store?trk=prof-following-company-logo"><i class="fa fa-linkedin"></i></a>
			<a href="http://www.instagram.com/thecupstore"><i class="fa fa-instagram"></i></a>
			<a href="https://www.pinterest.com/thecupstore/"><i class="fa fa-pinterest"></i></a>	
		</div>

		<div class="hidden-xs col-sm-6 phone">
			<p>$USD <a href="http://www.thecupstore.com"><span class="flag-icon flag-icon-us"></span></a> <a href="http://www.thecupstore.ca"><span class="flag-icon flag-icon-ca-tsp"></span></a> <a href="tel:+18666415900">Toll-Free: 1-866-641-5900</a></p>
		</div>

		<div class="visible-xs col-xs-12 phone"><!--Puts the flags on separate line on mobile-->
			<p>$USD <a href="http://www.thecupstore.com"><span class="flag-icon flag-icon-us"></span></a> <a href="http://www.thecupstore.ca"><span class="flag-icon flag-icon-ca-tsp"></span></a> </p>
		</div>

		<div class="visible-xs col-xs-12 phone">
			<p><a href="tel:+18666415900">Toll-Free: 1-866-641-5900</a></p>
		</div>


	</div>


<!--2nd ROW-->
		<div class="navbar-header"><!--contains the logo and hidden button-->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#tcsnavbar-links">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="../index.php"><img src="../images/tcs-logo.jpg" alt="The Cup Store logo"></a>
		</div><!--end navbar-header-->

		<div class="collapse navbar-collapse" id="tcsnavbar-links"><!--contains the actual nav links-->

		<!--<ul class="nav navbar-nav nav-pills navbar-right">
    		<li><button href="quote-request.php" class="btn btn-primary navbar-btn hidden-xs" type="button">Quote Request</button></li>
	 	</ul>-->

		<ul class="nav navbar-nav navbar-right"><!--these classes used to align links properly-->
			<li><a href="../index.php">Home</a></li>
			<li class="dropdown">
					<a href="products.php" class="dropdown-toggle" data-toggle="dropdown">Products <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
						<li><a href="../products.php"><strong>All Products</strong></a></li>
						<li class="divider"></li>
						<li><a href="../prod-paper-cups.php">Paper Cups</a></li>
						<li><a href="../prod-eco-paper-cups.php">Eco-Paper Cups</a></li>
						<li><a href="../prod-double-paper-cups.php">Double-Walled Paper Cups</a></li>
						
						<li class="divider"></li>
						<li><a href="../prod-plastic-cups.php">Plastic Cups</a></li>
						<li><a href="../prod-eco-plastic-cups.php">Eco-Plastic Cups</a></li>
						<li><a href="../prod-frosted-plastic-cups.php">Translucent Plastic Cups</a></li>

						<li class="divider"></li>
						<li><a href="../prod-glassware.php">Glassware</a></li>
						<li><a href="../prod-coffee-sleeves.php">Coffee Sleeves</a></li>
						<li><a href="../prod-gelato-cups.php">Gelato Cups</a></li>
						</ul>
					</li>
			<li><a href="../order-info.php">Order Information</a></li>
			<li><a href="../about-us.php">About Us</a></li>
			<li><a href="../contact-us.php">Contact Us</a></li>
			<li><a href="quote-request.php" class="hidden-xs"><strong>Quote Request</strong></a></li>
		</ul>
					
		</div><!--end nav links-->



	</div><!--end container-fluid-->

	<div class="QR-bar visible-xs-block"><a href="quote-request.php">Request a Quote</a></div><!--Quote Request bar appears on mobile only-->


</nav><!--end navbar-->
</header>


<!--MAIN CONTENT-->

<!--PAGE TITLE-->
<section class="tcs-pagetitle">
	<div class="container-fluid">
		<h1>Quote Request Form</h1>
		<p>We are happy to provide you with quotes on any of our products and will respond to all inquiries within a 24-hour period. </p>
	</div>
</section>

	<div class="b-check wrapper-wide">


		<form action="php/action.php" id="b-check-form" name="b-check-form" method="post" novalidate>

			<!-- start response from server -->
			<div class="b-row">
				<div id="response"></div>
			</div><!-- end response from server -->

			<!-- start token -->
			<div class="b-row">
				<?php echo $new_token->get_token(); ?>
			</div>
			<!-- end token -->


<fieldset class="fieldset"><!--1st section of form contains contact info-->
			<legend>Your Contact Information</legend>
			<p><strong>*</strong> indicates a required field</p>

			<!-- start name -->
			<div class="b-row">
				<div class="span6">
					<div class="field checking check">
						<i class="fa fa-user icon-left"></i>
						<input type="text" name="first-name" placeholder="Your name">
					</div>
				</div>
				<div class="span6">
					<div class="field checking check">
						<i class="fa fa-building-o icon-left"></i>
						<input type="text" name="last-name" placeholder="Company name">
					</div>
				</div>
			</div>
			<!-- end name -->

			<!-- start email phone -->
			<div class="b-row">
				<div class="span6">
					<div class="field checking check">
						<i class="fa fa-envelope-o icon-left"></i>
						<input type="email" name="email" placeholder="*Email">
					</div>
				</div>
				<div class="span6">
					<div class="field checking check">
						<i class="fa fa-phone icon-left"></i>
						<input type="text" name="phone" placeholder="Phone number">
					</div>
				</div>
			</div>
			<!-- end email phone -->

			<!-- start additional info -->
			<div class="b-row">
				<div class="span12">
					<div class="field checking check">
						<i class="fa fa-home icon-left"></i>
						<textarea name="message" placeholder="Mailing address for shipping cost estimates" spellcheck="false"></textarea>
					</div>
				</div>
			</div>
			<!-- end additional info -->
</fieldset>

<fieldset class="fieldset"><!--2nd section of form contains product info-->
			<legend>Product Information</legend>
			<!--start Sec2 row1-->
			<div class="b-row">
				<!-- start item type -->
				<div class="span6">
					<div class="field checking check">
						<label class="select">
							<select name="type">
								<option value="none" selected disabled>*Choose item type</option>
								<optgroup label="Paper">
									<option value="Paper Cups">Paper Cups</option>
									<option value="Double-Walled Paper Cups">Double-walled Paper Cups</option>
									<option value="ECO Paper Cups">ECO Paper Cups</option>
								</optgroup>

								<optgroup label="Plastic"> 
									<option value="Clear Plastic Cups">Clear Plastic Cups</option>
									<option value="Frosted Plastic Cups">Frosted Plastic Cups</option>
									<option value="ECO Plastic Cups">ECO Plastic Cups</option>
								</optgroup>

								<optgroup label="Miscellaneous">
									<option value="Coffee Sleeves">Coffee Sleeves</option>
									<option value="Gelato Cups">Gelato Cups</option>
								</optgroup>

								<optgroup label="Tumblers + Barware">
									<option value="T+B - On the Rocks">On the Rocks</option>
									<option value="T+B - Double Old-Fashioned">Double Old-Fashioned</option>
									<option value="T+B - Beverage">Beverage</option>
									<option value="T+B - Cooler">Cooler</option>
									<option value="T+B - Tumbler">Tumbler</option>
									<option value="T+B - Mixing">Mixing Glass</option>
									<option value="Glass Pitcher">Pitcher</option>
								</optgroup>	

								<optgroup label="Pilsners">
									<option value="Pilsner - On Tap">On Tap</option>
									<option value="Pilsner - Classic">Classic</option>
									<option value="Pilsner - Pub">Pub</option>
									<option value="Pilsner - Grand">Grand</option>
								</optgroup>	

								<optgroup label="Beer Glasses">
									<option value="Lager">Lager</option>
									<option value="Stem Beer">Stem Beer</option>
									<option value="Beer Mug">Mug</option>
									<option value="Beer Mug - ribbed">Mug (ribbed)</option>
								</optgroup>

								<optgroup label="Shooters + Tasters">
									<option value="S+T - Taster">Taster</option>
									<option value="S+T - Shot">Shot</option>
									<option value="S+T - Cordial">Cordial</option>
									<option value="S+T - Frosted">Frosted</option>
								</optgroup>

								<optgroup label="Stemware">
									<option value="Red Wine">Wine Glass</option>
									<option value="White Wine">White Wine Glass</option>
									<option value="Martini">Martini</option>
									<option value="Flute">Flute</option>
								</optgroup>

							</select>
							<i></i><!--this is the dropdown arrows-->
						</label>
					</div>
				</div>	<!-- end select item type-->

				<!-- start item size -->
				<div class="span6">
					<div class="field checking check">
						<input type="text" name="size" placeholder="Enter item size(s)">
					</div>
				</div><!-- end select item size-->
			</div><!--end Sec2 row1-->


			<!-- start Sec2 row2 -->
			<div class="b-row">
				<!-- start printing type -->
				<div class="span6">
					<div class="field checking check">
						<label class="select">
							<select name="printing">
								<option value="none" selected disabled>*Item printing option</option>
								<option value="Blank - No printing">Blank - No printing</option>
								<option value="1-sided printing">Custom Print - 1 side</option>
								<option value="2-sided printing">Custom Print - 2 sides</option>
							</select>
							<i></i>
						</label>
					</div>
				</div>	<!-- end printing type-->

				<!-- start quantity -->
				<div class="span6">
					<div class="field checking check">
						<input type="text" name="quantity" placeholder="Enter item quantities">
					</div>
				</div><!-- end quantity -->

			</div><!--end Sec2 row2-->

			<!-- start Sec2 row3 -->
			<div class="b-row">
				<!-- start lid type -->
				<div class="span6">
					<div class="field checking check">
						<label class="select">
							<select name="lids">
								<option value="none" selected disabled>Choose lid type</option>
								<option value="None">None</option>
								<option value="Flat vented">Flat, vented</option>
								<option value="Flat tear-back">Flat, tear-back</option>
								<option value="Flat straw">Flat, straw slot</option>
								<option value="Flat straw - ECO">Flat, straw slot, compostable</option>
								<option value="Dome coffee">Dome, coffee</option>
								<option value="Dome sip">Dome, sip</option>
								<option value="Dome sip - ECO">Dome, sip, compostable</option>
								<option value="Dome gelato">Dome, gelato</option>
							</select>
							<i></i>
						</label>
					</div>
				</div>	<!-- end lid type-->

				<!-- start color -->
				<div class="span6">
					<div class="field checking check">
						<input type="text" name="color" placeholder="How many colors in your logo?">
					</div>
				</div><!-- end color -->

			</div><!--end Sec2 row3-->


			<!-- start Sec2 row4 -->
			<div class="b-row">
				<!-- start PMS -->
				<div class="span12">
					<div class="field checking check">
						<input type="text" name="pms" placeholder="Indicate any PMS colors to match">
					</div>
				</div><!-- end color -->
			</div><!--end Sec2 row4-->


			<!-- start Sec2 row5 -->
			<div class="b-row">
			<!--start comments-->
				<div class="span12">
					<div class="field checking check">
						<i class="fa fa-comment icon-left"></i>
						<textarea name="comment" placeholder="Please enter any additional questions or comments" spellcheck="false"></textarea>
					</div>
				</div>
			</div>
			<!-- end additional info -->

</fieldset>
			<!-- start progress bar -->
			<div class="b-row">
				<span class="bar"></span>
			</div>
			<!-- end progress bar -->

			<div class="hr"></div>

			<!-- start buttons -->
			<div class="b-row">
				<div class="span6">
					<button type="reset" class="reset-button-bcheck" id="reset">Clear Form</button>

				</div>
				<div class="span6">
					<button type="submit" class="button-bcheck" id="submit">Submit Request</button>
				</div>
			</div>
			<!-- end buttons -->
		</form>
	</div>
</body>

<!--FOOTER SECTION-->

<footer class="tcs-footer">
	<div class="container">
      <div class="row"><!--This will contain 4 cols on desktop, 2 on mobile-->
     
      	<div class="col-xs-12 col-sm-3"><!--contact info-->
      		<h3><i class="fa fa-heart-o"></i> CONNECT WITH US</h3>
      		<p><strong>The Cup Store</strong><br />1320 Route 9<br />Champlain, NY 12919<br /><a href="tel:+18666415900">Toll-free: 1-866-641-5900</a><br /><a href="mailto:info@thecupstore.com">Email us here</a></p>
      		
      		<div class="footer-social">
      			<a href="https://www.facebook.com/TheCupStore1"><i class="fa fa-facebook"></i></a>
				<a href="https://twitter.com/thecupstore"><i class="fa fa-twitter"></i></a>
				<a href="https://www.linkedin.com/company/the-cup-store?trk=prof-following-company-logo"><i class="fa fa-linkedin"></i></a>
				<a href="http://www.instagram.com/thecupstore"><i class="fa fa-instagram"></i></a>
				<a href="https://www.pinterest.com/thecupstore/"><i class="fa fa-pinterest"></i></a>
			</div>

      		<p><a href="http://thecupstore.ca">Visit our Canadian website</a></p>
      		<hr class="visible-xs-block"><!--creates a line separating this section from columns below on mobile only-->
      	</div><!--end contact info-->


      	<div class="col-xs-7 col-sm-3"><!--product page links-->
      		<h3><i class="fa fa-coffee"></i> PRODUCTS</h3>
      		<ul>
	      		<li><a href="../prod-paper-cups.php">Paper Cups</a></li>
	            <li><a href="../prod-eco-paper-cups.php">Eco-Paper Cups</a></li>
	            <li><a href="../prod-double-paper-cups.php">Double-Walled Paper Cups</a></li>
				<li><a href="../prod-plastic-cups.php">Plastic Cups</a></li>
	            <li><a href="../prod-eco-plastic-cups.php">Eco-Plastic Cups</a></li>
	            <li><a href="../prod-frosted-plastic-cups.php">Translucent Plastic Cups</a></li>
	            <li><a href="../prod-glassware.php">Glassware</a></li>
	            <li><a href="../prod-coffee-sleeves.php">Coffee Sleeves</a></li>
	            <li><a href="../prod-gelato-cups.php">Gelato Cups</a></li>
      		</ul>
      	</div><!--end product links-->

      	<div class="col-xs-5 col-sm-3"><!--website links-->
      		<h3><i class="fa fa-link"></i> SITE LINKS</h3>
      		<ul>
      			<li><a href="../index.php">Home</a></li>
      			<li><a href="../order-info.php">Order Information</a></li>
      			<li><a href="../about-us.php">About Us</a></li>
      			<li><a href="../form/quote-request.php">Quote Request</a></li>
      			<li><a href="../sitemap.php">Site Map</a></li>
      		</ul>
      	</div><!--end site links-->

        <div class="col-xs-12 col-sm-3"><!--email signup-->
        	<hr class="visible-xs-block">
        	<h3><i class="fa fa-envelope-o"></i> SUBSCRIBE TODAY!</h3>
        	<p>Sign up for our e-newsletter and be the first to know about our monthly specials and promotions!</p>
        	<form name="cupnews" method="post" action="/cgi-sys/formmail.pl"><!--this perl script is necessary for form to function-->

              <INPUT TYPE="hidden" NAME="recipient" VALUE="sharon@thecupstore.com">
              <INPUT TYPE="hidden" NAME="subject" VALUE="TCS-US Email Signup - Please add me to your mailing list!">
              <INPUT TYPE="hidden" NAME="env_report" VALUE="REMOTE_HOST,HTTP_USER_AGENT">
              <INPUT TYPE="hidden" NAME="redirect" VALUE="http://www.thecupstore.com/test/enews-success.php"> 

        		<input name="email" type="text" class="form-control" id="inputemail" placeholder="Your E-mail" maxlength="40" />
        		<button type="submit" class="btn btn-primary">Subscribe</button>
        	</form>
        </div><!--end email signup-->
    
      </div><!--end row-->
    </div><!--end container-->
</footer>

<!--COPYRIGHT FOOTER-->

<div class="tcs-footer-mini">
    <div class="container">
    <p class="text-center">&#169;2015. The Cup Store. All Rights Reserved.</p>
    </div>
</div>
    

    <!-- Latest compiled and minified JavaScript 
    ================================================== -->
	
	<script type="text/javascript" src="../js/jquery-1.11.2.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
	<script src="js/jquery-form.min.js"></script>
	<script src="js/b-check-form-field.js"></script>
</body>
</html>