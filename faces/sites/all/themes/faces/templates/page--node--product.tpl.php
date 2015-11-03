<?php global $base_url; ?>
	<!---HOME BOTTOM PART-->
	<div id="home_second" >
		<div class="container border">
		<div class="row product_inner">
				<div class="col-xs-12 col-sm-12 col-md-5">
					<!--<img src="<?php $img_prod = file_create_url($node->field_product_images['und'][0]['uri']); echo $img_prod; ?>"	style="float:left; width: 100%;" alt="">-->
					<ul>
								<?php                                $i = 0;
								foreach($node->field_shade_details['und'] as $shade_detail):
									$shade_obj = entity_load('field_collection_item', array($shade_detail['value']));
									foreach($shade_obj as $shades):
										$img_url = file_create_url($shades->field_product_image['und'][0]['uri']);
									?>
									<li class="swatch" id="shade-<?php echo $i; ?>" style="list-style: none;">
										<div class="right shade-name" id="shade-<?php echo $i; ?>-names"> 
											<?php if($shades->field_product_image['und'][0]['uri']): ?>
												<img src="<?php echo $img_url; ?>" style="float:left; width: 100%;"/>
												<?php endif;?>
										</div>
									</li>
									<?php 								$i++;
								endforeach;
								endforeach; ?>
								</ul>	
				</div>
				<div class="col-xs-12 col-sm-12 col-md-5">
					<div class="product_info">
						<div class="heading"><?php echo $node->title; ?></div>
						<div class="product_price">
						
						<?php if(isset($node->field_price['und'][0]['value'])): ?>
							<div class="left">PRICE :</div>
							<div class="right">RS. <?php echo $node->field_price['und'][0]['value']; ?></div><div class="clr"></div>
						<?php endif; ?>
						</div>
						<div class="product_shades">
						<?php if(isset($node->field_shade_details['und'])): ?>
							<div class="left">ALL SHADES :</div>
							<div class="right">
								<ul>
								<?php                                $i = 0;
								foreach($node->field_shade_details['und'] as $shade_detail):
								$shade_obj = entity_load('field_collection_item', array($shade_detail['value']));
								foreach($shade_obj as $shades):
								$img_url = file_create_url($shades->field_shade_image['und'][0]['uri']);
									?>
									<li class="swatch" id="shade-<?php echo $i; ?>"><img src="<?php echo $img_url; ?>" /></li>
									<?php 								$i++;
								endforeach;
								endforeach; ?>
								</ul>	
							</div><div class="clr"></div>
							<?php endif; ?>
						</div>
						<div class="product_shadename">
						<?php if(isset($node->field_shade_details['und'])): ?>													<div class="left">SHADE :</div>							<?php                              $i = 0;							foreach($node->field_shade_details['und'] as $shade_detail):							$shade_obj = entity_load('field_collection_item', array($shade_detail['value']));							foreach($shade_obj as $shades):								?>
							<div class="right shade-name" id="shade-<?php echo $i; ?>-name"> <?php echo $shades->field_shade_title['und'][0]['value']; ?></div>
							<?php  							$i++;							endforeach; 							endforeach; 							endif;?>
						</div>
						<div class="buy_now">
							<a href="#">Buy Our Products At :</a>
						</div>

						<div id="third-party-links" >
						<?php if(isset($products->field_first_image['und'][0]['uri'])){ ?>
						<a href="<?php echo $node->field_first_link['und'][0]['value']; ?>" target="_blank"><img src="<?php $img_li = file_create_url($node->field_first_image['und'][0]['uri']); echo $img_li; ?>"	 alt=""></a>
						<a href="<?php echo $node->field_second_link['und'][0]['value']; ?>" target="_blank"><img src="<?php $img_lik = file_create_url($node->field_second_image['und'][0]['uri']); echo $img_lik; ?>"	 alt=""> </a>
						<?php } else{ echo "<h1><a href='#'>COMING SOON</a></h1>";  } ?>
						</div>
                        <div class="seller-logos">
                            <?php $theme_path =  path_to_theme(); ?>
                            <a href="http://www.shopclues.com/health-and-beauty/faces-special.html?icid=Happ|cnl|FacesSpecial|200615" target="_blank"><img src="<?php echo $base_url.'/'.$theme_path; ?>/img/shopclues-logo.png" /></a>
                            <a href="http://www.flipkart.com/beauty-and-personal-care/makeup/pr?p%5B%5D=facets.brand%255B%255D%3DFaces&p%5B%5D=sort%3Dpopularity&sid=t06%2Cfy9&filterNone=true" target="_blank"><img src="<?php echo $base_url.'/'.$theme_path; ?>/img/flipkart.png" /></a>
                            <a href="http://www.nykaa.com/brands/faces.html?dir=desc&order=popularity&root=bsearch_brand%faces" target="_blank"><img src="<?php echo $base_url.'/'.$theme_path;  ?>/img/Nykaa.png" /></a>
                            <a href="http://purplle.com/brand/faces" target="_blank"><img src="<?php echo $base_url.'/'.$theme_path;  ?>/img/purplle.jpg" /></a>
                        </div>
						<div class="product_text">
							<h5>PRODUCT DESCRIPTION</h5>
							<p><?php echo $node->body['und'][0]['value']; ?></p> 
							<?php print render($page['header']); ?>
						</div>
					</div>
					
				</div>
				<div class="col-xs-12 col-sm-12 col-md-2 you-might">
					<div class="might_like">
						<h3>You Might Like</h3>
						<?php print render($page['navigation']); ?>
					</div>
				
				</div>
			</div>
</div>
		
		<!----FOOTER-->
	
	</div>
	</div>
	
	<div class="footer_bottom">
		<div class="container">
			<div class="footer_left">
				<ul> 
			<?php print render($page['footer-menu']);?>
				</ul>	
			</div>
			<div class="footer_right">
				<a href="<?php $fb_url = theme_get_setting('facebook_url'); echo $fb_url; ?>"><i class="fa fa-facebook"></i></a>
				<a href="<?php $tw_url = theme_get_setting('twitter_url'); echo $tw_url; ?>"><i class="fa fa-twitter"></i></a>
				<a href="<?php $in_url = theme_get_setting('instagram_url'); echo $tw_url; ?>"><i class="fa fa-instagram"></i></a>
				<a href="<?php $pin_url = theme_get_setting('pintrest_url'); echo $tw_url; ?>"><i class="fa fa-pinterest"></i></a>
				<a href="<?php $gplus_url = theme_get_setting('googleplus_url'); echo $tw_url; ?>"><i class="fa fa-google-plus"></i></a>
			</div>
		</div>
	</div>

	 