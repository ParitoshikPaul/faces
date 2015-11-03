<?php global $base_url; ?>
	<div id="home_second" >
		<div class="container border">
		<div class="contact-container address">
		<div class="contact-details">
		<span><h3 style="width:43%"><a href="<?php echo $base_url; ?>/?q=content/our-stores" style="color:#000; padding-left:0px;">Our Stores</a></h3><h3><a href="<?php echo $base_url; ?>/?q=node/897" style="background:#F16361; color:#fff;">Shop In Shop</a></h3></span>
		<p><?php print render($page['content']); ?></p>
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
			<div class="footer_right">
				<?php print  render($page['footer']); ?> 
			</div>
		</div>
	</div>
	
