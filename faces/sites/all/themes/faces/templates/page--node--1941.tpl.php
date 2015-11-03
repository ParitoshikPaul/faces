<style>
body.admin-menu{
margin-top:0px !important;
overflow-y: hidden;
}
</style>
<?php global $base_url; ?>
	<div id="home_second" >
		<div class="container border best-seller">
				<div class="row products">
				<div class="banner-cont"> 
				<ul class="testimonial_slider">
				
				<?php	
				$type = "testimolials"; 
				$nodes = node_load_multiple(array(), array('type' => $type)); 
				foreach($nodes as $testimonials):
				$img_quote_url = file_create_url($node->field_image_['und'][0]['uri']);
			
				?>
				<li>
				<div class="testimonials">
				<img src="<?php echo $img_quote_url; ?>"  class="inverted_quote"/>
					<h4><?php echo $testimonials->title; ?></h4>
					<p><?php echo $testimonials->body['und'][0]['value']; ?></p> 
					<h5><?php echo $testimonials->field_tab_s_title['und'][0]['value']; ?></h5>
					<span><i><?php echo $testimonials->field_from['und'][0]['value']; ?></i></span>
					
				<img src="<?php echo $img_quote_url; ?>"/> 
				</div>
				</li>
				<?php
				endforeach; 
				?> 
				
				</ul>		
			<div class="prev-nav"></div>  
			<div class="next-nav"></div>  
		</div>
			</div>
		</div>
	</div>
		<div class="footer_bottom" >
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
<script>
$('.testimonial_slider').bxSlider({
    mode: 'horizontal',
    auto: true,
    autoStart: true,
    pause: 8000,
    pager: false,
    speed:3000
});
</script>

	