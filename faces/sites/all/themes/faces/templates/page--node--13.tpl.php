<?php global $base_url; ?>
	<div id="home_second" >
		<div class="container border">
		<?php print render($page['content']); ?>
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
	
