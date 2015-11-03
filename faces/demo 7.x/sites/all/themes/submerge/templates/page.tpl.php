<div id="page"><div class="page-inner <?php echo $grid_size ?>"><div class="page-inner-inner ">

  <?php if ($page['user_menu']): ?>   
    <nav id="user-menu" class="clearfix">
		<?php print render($page['user_menu']); ?>
        <?php print render($page['search_box']); ?>       
    </nav>      
  <?php endif; ?>    

  <div class="header-wrapper clearfix"><div class="header-wrapper-inner <?php echo $grid_full_width ?>">
    <header>
    
      <div class="logo-slogan">
      
      <?php if ($logo): ?>
        <div class="site-logo">
          <a href="<?php print check_url($front_page); ?>"><img src="<?php print $logo ?>" alt="<?php print $site_name; ?>" /></a>
        </div>
      <?php endif; ?>	      
      
      <hgroup>
      
        <?php if ($site_name): ?>
            <?php if ($is_front) { ?>
              <h1 class="site-name"><a href="<?php print check_url($front_page); ?>"><?php print $site_name; ?></a></h1>
            <?php } else { ?>
              <h2 class="site-name"><a href="<?php print check_url($front_page); ?>"><?php print $site_name; ?></a></h2>
            <?php } ?>
        <?php endif; ?>
        
        <?php if ($site_slogan): ?>
            <h3 class="site-slogan"><?php print $site_slogan; ?></h3>            
        <?php endif; ?>    
      
      </hgroup>
      
      </div> 
      
      <div class="social">
        <ul class="social-links">
          <li><a class="rss" href="<?php print $base_path ?>rss.xml"></a></li>
          <li><a class="twitter" href="<?php echo $twitter ?>"></a></li>
          <li><a class="facebook" href="<?php echo $facebook ?>"></a></li>
          <li><a class="google" href="<?php echo $google ?>"></a></li>
        </ul>
      </div>             
      
    </header>    
      
  </div></div>
  
  <?php if ($page['main_menu']): ?>    
    <div class="main-menu-wrapper clearfix"><div class="main-menu-wrapper-inner">  
      <nav id="main-menu" class="<?php echo $grid_full_width ?>">
        <?php print render($page['main_menu']); ?>      
      </nav>
    </div></div> 
  <?php endif; ?> 
  
  <?php if ($page['main_menu_second_level']): ?>    
    <div class="main-menu-second-level-wrapper clearfix"><div class="main-menu-second-level-wrapper-inner">  
      <nav id="main-menu-second-level"  class="<?php echo $grid_full_width ?>">
        <?php print render($page['main_menu_second_level']); ?>      
      </nav>
    </div></div> 
  <?php endif; ?> 
  
  <?php if ($breadcrumb): ?>
    <div class="breadcrumb-wrapper clearfix"><div class="breadcrumb-wrapper-inner"> 
      <div class="<?php echo $grid_full_width ?> ">
        <?php if (!$is_front): ?><?php print $breadcrumb; ?><?php endif; ?>

      </div>  
    </div></div>   
  <?php endif; ?> 
     
<!-- Main Content -->  
  <div class="main-content-wrapper clearfix"><div class="main-content-wrapper-inner">
    <section id="main-content">       	   

      <?php if ($page['sidebar_first']): ?>
      <aside class="sidebar first-sidebar <?php print $sidebar_first_grid_width ?>">
          <?php print render($page['sidebar_first']); ?>
      </aside>
      <?php endif; ?>    
    
      <div class="main">
        <div class="main-inner  <?php print $main_content_grid_width ?>">
        
		  <?php if ($page['slideshow']): ?>
            <div class="slideshow-wrapper clearfix"><div class="slideshow-wrapper-inner">
              <div id="slideshow">
                <?php print render($page['slideshow']); ?>
              </div>
            </div></div>  
          <?php endif; ?>         

          <?php print render($page['content_top']); ?>
          <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
          <?php print render($tabs); ?>
          <?php if (!isset($node)): ?>
            <?php print render($title_prefix); ?>
              <?php if ($title): ?><h1 class="title" id="page-title"><span><?php print $title; ?></span></h1><?php endif; ?>
            <?php print render($title_suffix); ?>
          <?php endif; ?>
          <?php print render($page['help']); ?>          
          <?php print render($page['content']); ?>          
          <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
          <?php print render($page['content_bottom']); ?>
        </div> 
        <?php if ($page['sidebar_second']): ?>
        <aside class="sidebar second-sidebar <?php print $sidebar_second_grid_width ?> clearfix">
            <?php print render($page['sidebar_second']); ?>                
        </aside>
        <?php endif; ?>     
      </div>            
  
    </section>
  </div></div>
  
  <?php if ($page['preface_1'] || $page['preface_2'] || $page['preface_3'] || $page['preface_4']): ?>
    <div class="preface-wrapper clearfix"><div class="preface-wrapper-inner"><div class="preface-wrapper-inner-inner">  
      <section id="preface">
        <div class="<?php echo $preface_1_grid_width ?>"><?php print render($page['preface_1']); ?></div>
        <div class="<?php echo $preface_2_grid_width ?>"><?php print render($page['preface_2']); ?></div>
        <div class="<?php echo $preface_3_grid_width ?>"><?php print render($page['preface_3']); ?></div>
        <div class="<?php echo $preface_4_grid_width ?>"><?php print render($page['preface_4']); ?></div>
      </section>
    </div></div></div>   
  <?php endif; ?>          
  
  <?php if ($page['postscript_1'] || $page['postscript_2'] || $page['postscript_3'] || $page['postscript_4']): ?>
    <div class="postscript-wrapper clearfix"><div class="postscript-wrapper-inner"><div class="postscript-wrapper-inner-inner">  
      <section id="postscript">
        <div class="<?php echo $postscript_1_grid_width ?>"><?php print render($page['postscript_1']); ?></div>
        <div class="<?php echo $postscript_2_grid_width ?>"><?php print render($page['postscript_2']); ?></div>
        <div class="<?php echo $postscript_3_grid_width ?>"><?php print render($page['postscript_3']); ?></div>
        <div class="<?php echo $postscript_4_grid_width ?>"><?php print render($page['postscript_4']); ?></div>
      </section>
    </div></div></div> 
  <?php endif; ?>   
    
<!-- All Hail the Footer -->
  <div class="footer-wrapper clearfix"><div class="footer-wrapper-inner">
    <footer id="footer" class="<?php echo $grid_full_width ?>">
      <?php print render($page['footer']) ?>
      <span style="font-size: 0.6em;"><a href="http://www.themeshark.com">Professional Drupal 7 Themes and Templates</a> by ThemeShark.com</span>
    </footer><!-- /footer -->
  </div></div>
 
</div></div></div><!-- page -->