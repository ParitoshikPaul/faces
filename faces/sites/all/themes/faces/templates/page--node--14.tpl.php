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
				<ul class="bxslider">
				<li>
				<?php
                $select = db_select('node', 'n');
                $select->join('weight_weights', 'w', 'w.entity_id = n.nid');
                $select->fields('n', array('nid'))
                    ->condition('n.type', 'product')
                    ->orderBy('w.weight', 'ASC');
                $nids = $select->execute()->fetchCol();
				$i = 0;
				foreach($nids as $prod):
                $products = node_load($prod);
				if($products->field_show_it_on_best_sellers_['und'][0]['value'] == "Yes"):
				if($i % 3 == 0) {echo '</li><li>';}
				$prod_url = drupal_get_path_alias('node/'.$products->nid);
				?>
				<div class="col-xs-12 col-sm-12  col-md-4">
						<div class="product_img"><a href="<?php echo $base_url.'/?q='.$prod_url;  ?>"><img src="<?php $img_prod = file_create_url($products->field_product_images['und'][0]['uri']); echo $img_prod; ?>" alt=""></a></div>
						<div class="product_descriptions">
							<h2><a href="<?php echo $base_url.'/?q='.$prod_url;  ?>"><?php echo $products->title; ?></a></h2>
							<span>Rs. <?php echo $products->field_price['und'][0]['value']; ?></span>
							<?php if($products->field_new_it_kit['und'][0]['value'] == "Yes"): ?>
                            <a href="<?php echo $base_url; ?>/?q=content/our-stores" style="color:black; font-family: 'FuturaStd-light'; margin-bottom:3px; " >Available at Our Stores</a>
                              <?php  endif; ?>
                            <div class="button_main">
                                <div class="button button--border-medium button--text-thin button--size-l button--inverted" data-text="BUY NOW"><a href="<?php echo $base_url.'/?q='.$prod_url;  ?>">Details</a></div>
						</div>
						</div>
						<div id="third-party-links-<?php echo $products->nid; ?>" class="switch">
						<?php if(isset($products->field_first_image['und'][0]['uri'])){ ?>
						<a href="<?php echo $products->field_first_link['und'][0]['value']; ?>" target="_blank"><img src="<?php $prod_uri = file_create_url($products->field_first_image['und'][0]['uri']); print($prod_uri); ?>" /></a>
						<a href="<?php echo $products->field_second_link['und'][0]['value']; ?>" target="_blank"><img src="<?php $prod_uri = file_create_url($products->field_second_image['und'][0]['uri']); print($prod_uri); ?>" /></a>
						<?php } else{ echo "<h1><a href='#'>Comming Soon</a></h1>";  } ?>
						</div>
				</div> 
 
				
				<?php
				
				$i++;
				endif;   
				endforeach; 
				?>
				</li>
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
					<a href="<?php $fb_url = theme_get_setting('facebook_url'); echo $fb_url; ?>"><i class="fa fa-facebook"></i></a>
					<a href="<?php $tw_url = theme_get_setting('twitter_url'); echo $tw_url; ?>"><i class="fa fa-twitter"></i></a>
					<a href="<?php $in_url = theme_get_setting('instagram_url'); echo $in_url; ?>"><i class="fa fa-instagram"></i></a>
					<a href="<?php $pin_url = theme_get_setting('pintrest_url'); echo $pin_url; ?>"><i class="fa fa-pinterest"></i></a>
					<a href="<?php $gplus_url = theme_get_setting('googleplus_url'); echo $gplus_url; ?>"><i class="fa fa-google-plus"></i></a>
			</div>
		</div>
	</div>

	