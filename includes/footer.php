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
      			<li><a href="prod-paper-cups.php">Paper Cups</a></li>
            <li><a href="prod-eco-paper-cups.php">Eco-Paper Cups</a></li>
            <li><a href="prod-double-paper-cups.php">Double-Walled Paper Cups</a></li>
					  <li><a href="prod-plastic-cups.php">Plastic Cups</a></li>
            <li><a href="prod-eco-plastic-cups.php">Eco-Plastic Cups</a></li>
            <li><a href="prod-frosted-plastic-cups.php">Translucent Plastic Cups</a></li>
            <li><a href="prod-glassware.php">Glassware</a></li>
            <li><a href="prod-coffee-sleeves.php">Coffee Sleeves</a></li>
            <li><a href="prod-gelato-cups.php">Gelato Cups</a></li>
      			</ul>
      	</div><!--end product links-->

      	<div class="col-xs-5 col-sm-3"><!--website links-->
      		<h3><i class="fa fa-link"></i> SITE LINKS</h3>
      		<ul>
      			<li><a href="index.php">Home</a></li>
      			<li><a href="order-info.php">Order Information</a></li>
      			<li><a href="about-us.php">About Us</a></li>
      			<li><a href="form/quote-request.php">Quote Request</a></li>
      			<li><a href="sitemap.php">Site Map</a></li>
      		</ul>
      	</div><!--end site links-->

        <div class="col-xs-12 col-sm-3"><!--email signup-->
        	<hr class="visible-xs-block">
        	<h3><i class="fa fa-envelope-o"></i> SUBSCRIBE TODAY!</h3>
        	<p>Sign up for our e-newsletter and be the first to know about our monthly specials and promotions!</p>
        	<form name="cupnews" method="post" action="/cgi-sys/formmail.pl"><!--this perl script is necessary for form to function-->

              <INPUT TYPE="hidden" NAME="recipient" VALUE="s.lombardi@thecupstore.com, sharon@thecupstore.com">
              <INPUT TYPE="hidden" NAME="subject" VALUE="TCS-US Email Signup - Please add me to your mailing list!">
              <INPUT TYPE="hidden" NAME="env_report" VALUE="REMOTE_HOST,HTTP_USER_AGENT">
              <INPUT TYPE="hidden" NAME="redirect" VALUE="http://www.thecupstore.com/enews-success.php"> 

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