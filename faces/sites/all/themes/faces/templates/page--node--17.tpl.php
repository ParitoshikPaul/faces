<?php global $base_url; ?>
	<div id="home_second" >
		<div class="container border">
		<div class="contact-container address">
		<img src="<?php echo $base_url; ?>/sites/all/themes/faces/img/home_small.png" />
		<div class="contact-details">
		<h3><?php echo $node->title; ?></h3>
	
		<p>FACES Cosmetics India Pvt. Ltd. <br><br><br>
		Corp. Office:<br>
		1004, 10th Floor<br>
		Park Centra<br>
		NH-8, Sector-30,<br>
		Gurgaon-122001<br>
		Haryana, India<br><br><br>
		
		<label>Telephone: </label>+91 124 6650000<br>
		<label>E-mail:</label> customercareindia@faces-cosmetics.com
		</p>
	
		</p>
		</div>
		</div>
			</div>
	</div>
		<div class="footer_bottom" data-sr="no reset" >
		    <div class="container">
			<div class="footer_left">
				<ul>
			<?php print render($page['footer-menu']);?> 
				</ul>	
			</div>
		<div class="footer_right">					<a href="<?php $fb_url = theme_get_setting('facebook_url'); echo $fb_url; ?>"><i class="fa fa-facebook"></i></a>					<a href="<?php $tw_url = theme_get_setting('twitter_url'); echo $tw_url; ?>"><i class="fa fa-twitter"></i></a>					<a href="<?php $in_url = theme_get_setting('instagram_url'); echo $in_url; ?>"><i class="fa fa-instagram"></i></a>					<a href="<?php $pin_url = theme_get_setting('pintrest_url'); echo $pin_url; ?>"><i class="fa fa-pinterest"></i></a>					<a href="<?php $gplus_url = theme_get_setting('googleplus_url'); echo $gplus_url; ?>"><i class="fa fa-google-plus"></i></a>			</div>		</div>
	</div>

