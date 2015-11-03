<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>

<head profile="<?php print $grddl_profile; ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel='stylesheet' id='font-awesome-css'  href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css' type='text/css' media='all' />
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69111488-1', 'auto');
  ga('send', 'pageview');

</script>

<?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
    <div class="home">
		<!----HEADER-->
		<div class="header-container">
		<div class="header">
	<?php global $base_url;		$main_menu = menu_tree_all_data('main-menu');		$menu_arr = array();			foreach($main_menu as $menu_links){						$menu_arr[] = $menu_links;						} 	?>
<nav class="navbar navbar-default res-menu">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	   <li class="for_logo display_m navbar-brand" ><a href="<?php echo $base_url; ?>"><img src="<?php  $logo_path =  theme_get_setting('logo');  print $logo_path; ?>"  /></a></li>
		
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
	  <li><a href="<?php $path = drupal_get_path_alias($menu_arr[0]['link']['link_path']); echo $base_url.'/?q='.$path; ?>"><?php echo $menu_arr[0]['link']['link_title']?></a></li><!-- Begin Item --> 
	  <li><a href="<?php $path = drupal_get_path_alias($menu_arr[1]['link']['link_path']); echo $base_url.'/?q='.$path; ?>"><?php echo $menu_arr[1]['link']['link_title']?></a></a></a></li> 
	  <li><a href="<?php $path = drupal_get_path_alias($menu_arr[2]['link']['link_path']); echo $base_url.'/?q='.$path; ?>"><?php echo $menu_arr[2]['link']['link_title']?></a></li>
	  <li><a href="<?php $path = drupal_get_path_alias($menu_arr[3]['link']['link_path']); echo $base_url.'/?q='.$path; ?>"><?php echo $menu_arr[3]['link']['link_title']?></a></li>
	  <li><a href="<?php $path = drupal_get_path_alias($menu_arr[4]['link']['link_path']); echo $base_url.'/?q='.$path; ?>"><?php echo $menu_arr[4]['link']['link_title']?></a></li>
	  <li><a href="<?php $path = drupal_get_path_alias($menu_arr[5]['link']['link_path']); echo $base_url.'/?q='.$path; ?>"><?php echo $menu_arr[5]['link']['link_title']?></a></li>
	</ul>
   
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
			
			<div class="container">
				<div class="megamenu_wrapper"><!-- Begin Mega Menu Container -->
				    <ul class="megamenu"><!-- Begin Mega Menu -->
				        <li class="megamenu_button"><img src="<?php echo $base_url; ?>/sites/all/themes/faces/img/m-logo.png" class="m_logo" alt=""><img src="<?php echo $base_url; ?>/sites/all/themes/faces/<?php echo $base_url; ?>/sites/all/themes/faces/img/menu-icon.png" alt=""></li>    
				        <li><span class="drop"><a href="<?php $path = drupal_get_path_alias($menu_arr[0]['link']['link_path']); echo $base_url.'/?q='.$path; ?>"><?php echo $menu_arr[0]['link']['link_title']?></a></span><!-- Begin Item --> 
				            <div class="megamenu_fullwidth"><!-- Begin Item Container -->
				   			 	<div class="main_menu">
					   			 	<div class="container">
					   			 		<div class="col-md-3 display_m">
					   			 			<div class="menu_img"><a href="<?php echo $base_url; ?>/?q=content/best-seller"><img src="<?php echo $base_url; ?>/sites/all/themes/faces/img/TLC.jpg" alt=""></a></div>
					   			 			<div class="menu_text"><a href="<?php echo $base_url; ?>/?q=content/best-seller">BESTSELLERS</a></div>
					   			 		</div>
					   			 		<div class="col-md-9 home_links">
					   			 			<ul  data-color="#a71e3b">
					   			 				<h4 style=" color: #a71e3b;"><a href="<?php $cat = taxonomy_term_load(2);
												$cat_url = drupal_get_path_alias('taxonomy/term/'.$cat->tid); 
												echo $base_url.'/?q='.$cat_url; ?>"><?php  echo($cat->name); ?></a></h4>	
												<?php $tax_childs = taxonomy_get_children(2, $vid = 0);					
												foreach($tax_childs as $tax_link){	
												$tax_url = drupal_get_path_alias('taxonomy/term/'.$tax_link->tid);	
												?>					   	
												<li><a href="<?php echo $base_url.'/?q='.$tax_url; ?>"><?php echo $tax_link->name; ?></a></li>												<?php } ?>
					   			 				</ul>	
					   			 			<ul data-color="#eabf9f">
					   			 				<h4><a href="<?php $cat = taxonomy_term_load(3);
												$cat_url = drupal_get_path_alias('taxonomy/term/'.$cat->tid); 
												echo $base_url.'/?q='.$cat_url; ?>"><?php  echo($cat->name); ?></a></h4>							
												<?php $tax_childs = taxonomy_get_children(3, $vid = 0);	
												foreach($tax_childs as $tax_link){				
												$tax_url = drupal_get_path_alias('taxonomy/term/'.$tax_link->tid);
												?>										
												<li><a href="<?php echo $base_url.'/?q='.$tax_url; ?>"><?php echo $tax_link->name; ?></a></li>											<?php } ?>
					   			 			</ul>	
					   			 			<ul  data-color="#e32726">
					   			 				<h4><a href="<?php $cat = taxonomy_term_load(1);
												$cat_url = drupal_get_path_alias('taxonomy/term/'.$cat->tid); 
												echo $base_url.'/?q='.$cat_url; ?>"><?php  echo($cat->name); ?></a></h4>
											<?php $tax_childs = taxonomy_get_children(1, $vid = 0);	
											foreach($tax_childs as $tax_link){					
											$tax_url = drupal_get_path_alias('taxonomy/term/'.$tax_link->tid);
											?>											
											<li><a href="<?php echo $base_url.'/?q='.$tax_url; ?>">
											<?php print $tax_link->name; ?></a>
											</li>									
											<?php } ?>
					   			 			
					   			 			</ul>	
					   			 			<ul  data-color="#028342">
					   			 				<h4><a href="<?php $cat = taxonomy_term_load(4);
												$cat_url = drupal_get_path_alias('taxonomy/term/'.$cat->tid); 
												echo $base_url.'/?q='.$cat_url; ?>"><?php  echo($cat->name); ?></a></h4>	
												<?php $tax_childs = taxonomy_get_children(4, $vid = 0);												foreach($tax_childs as $tax_link){												$tax_url = drupal_get_path_alias('taxonomy/term/'.$tax_link->tid);												?>											<li><a href="<?php echo $base_url.'/?q='.$tax_url; ?>"><?php echo $tax_link->name; ?></a></li>											<?php } ?>
					   			 			</ul>
					   			 			<ul  data-color="#ec008c" >
					   			 				<h4><a href="<?php $cat = taxonomy_term_load(5);
												$cat_url = drupal_get_path_alias('taxonomy/term/'.$cat->tid); 
												echo $base_url.'/?q='.$cat_url; ?>"><?php  echo($cat->name); ?></a></h4>
											<?php $tax_childs = taxonomy_get_children(5, $vid = 0);											foreach($tax_childs as $tax_link){											$tax_url = drupal_get_path_alias('taxonomy/term/'.$tax_link->tid);											?>											<li><a href="<?php echo $base_url.'/?q='.$tax_url; ?>"><?php echo $tax_link->name; ?></a></li>											<?php } ?>
					   			 			</ul>
											<ul  data-color="#000" >
					   			 				<h4><a href="<?php $cat = taxonomy_term_load(30);
												$cat_url = drupal_get_path_alias('taxonomy/term/'.$cat->tid); 
												echo $base_url.'/?q='.$cat_url; ?>"><?php  echo($cat->name); ?></a></h4>
											</ul>												
					   			 		</div>
					   			 	</div><div class="clr"></div>
				   			 	</div> <div class="clr"></div>
				   			 	<div class="menu_border">
				   			 		
				   			 	</div>      
				            </div><!-- End Item Container -->
				        </li><!-- End Item -->
				        <li><a href="<?php $path = drupal_get_path_alias($menu_arr[1]['link']['link_path']); echo $base_url.'/?q='.$path; ?>"><?php echo $menu_arr[1]['link']['link_title']?></a></a></a></li> 
				        <li><a href="<?php $path = drupal_get_path_alias($menu_arr[2]['link']['link_path']); echo $base_url.'/?q='.$path.'#about-us'; ?>"><?php echo $menu_arr[2]['link']['link_title']?></a></li>
				     	<li class="for_logo display_m"><a href="<?php echo $base_url; ?>"><img src="<?php  $logo_path =  theme_get_setting('logo');  print $logo_path; ?>"  /></a></li>
						<li><a href="<?php $path = drupal_get_path_alias($menu_arr[3]['link']['link_path']); echo $base_url.'/?q='.$path; ?>"><?php echo $menu_arr[3]['link']['link_title']?></a></li>
				       	<li><a href="<?php $path = drupal_get_path_alias($menu_arr[4]['link']['link_path']); echo $base_url.'/?q='.$path; ?>"><?php echo $menu_arr[4]['link']['link_title']?></a></li>
				       	<li><a href="<?php $path = drupal_get_path_alias($menu_arr[5]['link']['link_path']); echo $base_url.'/?q='.$path; ?>"><?php echo $menu_arr[5]['link']['link_title']?></a></li>
				       
				    </ul><div class="clr"></div>
				<div class="main-menu" >
				<?php  print drupal_render(menu_tree('my-custom-menu')); ?> 
				 </div>
				</div><!-- End Mega Menu Container -->
				

			</div>
			</div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
