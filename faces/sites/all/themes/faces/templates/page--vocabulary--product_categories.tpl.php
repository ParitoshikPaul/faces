<?php global $base_url; ?>
	<div id="home_second" >
		<div class="container border">
			<!---PRODUCTS SLIDER-->
			<div class="products_slider">
			<?php global $base_url; ?>
			<div class="banner-cont"> 
				<ul class="bxslider">
			<?php $slide_node = node_load_multiple(array(), array('type' => 'home_page_slides'));
			foreach($slide_node as $slides):
			if($slides->field_select_a_slider_to_show['und'][0]['value'] == 'productslider' ):
			$file_url = file_create_url($slides->field_slide_image['und'][0]['uri']);
			
			?>
				<li><img src="<?php echo $file_url; ?>" alt="" /></li>
			<?php endif; endforeach; ?>
    	    </ul>
			</div>
			</div>	
			
			<!---PRODUCTS NAVBAR-->
			<div class="navbar_line"></div>
		
			<!---PRODUCTS-->
			<div class="row products">
		<?php print render($page['content']); ?>
				
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
	
	
	