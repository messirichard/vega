<?php /* Wrapper Name: Footer */ ?>
<!-- <div class="sabukatasfooter" >
		<p class="diatasfooter"><span style="font-weight: bold;">Wait No More. </span>Let Us Help You.</p>
		<ul class="tombolatasfooter">
		 	<li><a href="http://vegacapital.net/new/invest-in-vega/"><button class="button" type="">Contact Us</button></a></li>
		 	<li><a href="http://vegacapital.net/new/invest-in-vega/"><button class="button button2" type="">Invest Now</button></a></li>
		</ul>
</div> -->
<div class="row footer-widgets">
	<div class="span2" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-1">
		<?php dynamic_sidebar("footer-sidebar-1"); ?>
	</div>
	<div class="span2" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-2">
		<?php dynamic_sidebar("footer-sidebar-2"); ?>
	</div>
	<div class="span2" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-3">
		<?php dynamic_sidebar("footer-sidebar-3"); ?>
	</div>
	<div class="span3" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-4">
		<?php dynamic_sidebar("footer-sidebar-4"); ?>
	</div>
	<div class="span3 copyright" data-motopress-type="static" data-motopress-static-file="static/static-footer-text.php">
		<div class="footer-sidebar-5" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-5">
			<?php dynamic_sidebar("footer-sidebar-5"); ?>
		</div>
		<div class="footer-logo" data-motopress-type="static" data-motopress-static-file="static/static-footer-logo.php">
			<?php get_template_part("static/static-footer-logo"); ?>
		</div>
		<?php get_template_part("static/static-footer-text"); ?>
		<div class="social-nets-wrapper" data-motopress-type="static" data-motopress-static-file="static/static-social-networks.php">
			<?php get_template_part("static/static-social-networks"); ?>
		</div>
		
		<div class="newsletter" id="advanced_floating_content_2303">
			<div style="    /* right: 22px; */
    float: right;
    margin-top: -20px;
    /* left: 24px; */
    /* font-size: 33px; */
    /* width: 32px; */
    border: 3px #fff solid;
    margin-right: -20px;"> <a href="javascript:void(0);"><img src="https://vegacapital.net/wp-content/plugins/advanced-floating-content/public/images/advanced_floating_close_button.png" alt="Click to Hide Advanced Floating Content" class="lazyloading" data-was-processed="true"></a></div>
			<h5 style="color:#fff;">
				Newsletter
			</h5>
			<div class="finances-newsletter">
				<div class="newsletter-introtext">To recieve our weekly insights<br> via email, kindly fill the form below.
				</div>
				  <br>
				<div class="form-group" style="width:100%;">
					<input style="text-align:left;" type="email" name="EMAIL" placeholder="Your email" required /><br>
					<input style="background:#B51A2A;border:0;" type="submit" value="Sign up" />
				</div>
			</div>  
		</div>
	</div>
</div>
<div class="row footer-nav-holder">
	<div class="span12" data-motopress-type="static" data-motopress-static-file="static/static-footer-nav.php">
		<?php get_template_part("static/static-footer-nav"); ?>
	</div>
</div>
<script>
$(document).ready(function(){
    $("#advanced_floating_content_2303").click(function(){
        $(".newsletter").hide();
    });
});
</script>