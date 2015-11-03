<?php global $base_url; ?>
<div class="banner-cont">
    <ul class="bxslider">
	<li>
          <!--<iframe width="100%" height="530px" src="https://www.youtube.com/embed/G1yjXPgSrzQ?autoplay=1&showinfo=0&controls=0&loop=1" frameborder="0" allowfullscreen></iframe>-->
          
          <!--<embed src="http://www.youtube.com/v/G1yjXPgSrzQ?autoplay=1&showinfo=0&controls=0&loop=1&playlist=G1yjXPgSrzQ" width="100%" height="530" allowfullscreen="true" />-->
          <!--<video width="100%" height="530" controls="" autoplay loop preload="metadata">-->
          <video id="myvideo" preload="auto" autoplay loop muted width="100%" height="660" style="margin-top: -40px;">
  <source src="http://indiareputation.com/production/faces/sites/all/themes/faces/videos/FACES-10-09-15.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">
  Your browser does not support the video tag.
</video>
	</li>
        <?php $slide_node = node_load_multiple(array(), array('type' => 'home_page_slides'));
        foreach ($slide_node as $slides):
            if ($slides->field_select_a_slider_to_show['und'][0]['value'] == 'homepageslider'):
                $file_url = file_create_url($slides->field_slide_image['und'][0]['uri']);
                if (isset($slides->field_absolute_url['und'][0]['value'])) {
                    ?>
                    <li><a href="<?php echo $slides->field_absolute_url['und'][0]['value']; ?>" target="_blank"> <img
                                src="<?php echo $file_url; ?>" alt=""/></a></li>
                    <?php
                } else {
                    ?>

                    <li><img src="<?php echo $file_url; ?>" alt=""/></li>

                    <?php
                }
            endif;
        endforeach;
        ?>

    </ul>
    <div class="prev-nav"></div>
    <div class="next-nav"></div>
    <div class="footer">
        <div class="container">
            <div class="footer_left">
                <ul>
                    <?php print render($page['footer-menu']); ?>
                </ul>
            </div>
            <div class="footer_right">
                <a href="<?php $fb_url = theme_get_setting('facebook_url');
                echo $fb_url; ?>"><i class="fa fa-facebook"></i></a>
                <a href="<?php $tw_url = theme_get_setting('twitter_url');
                echo $tw_url; ?>"><i class="fa fa-twitter"></i></a>
                <a href="<?php $in_url = theme_get_setting('instagram_url');
                echo $in_url; ?>"><i class="fa fa-instagram"></i></a>
                <a href="<?php $pin_url = theme_get_setting('pintrest_url');
                echo $pin_url; ?>"><i class="fa fa-pinterest"></i></a>
                <a href="<?php $gplus_url = theme_get_setting('googleplus_url');
                echo $gplus_url; ?>"><i class="fa fa-google-plus"></i></a>
            </div>
        </div>
    </div>
</div>
<div id="home_second">
    <div class="container border">
        <div class="home_main" data-sr="no reset">
            <div class="show">
                <?php $body_text = theme_get_setting('tag_desc');
                print($body_text); ?>
            </div>
            <div class="home_image" data-sr="no reset">
                <div class="home_image_left">
                    <img
                        src="<?php echo $base_url; ?>/sites/all/themes/faces/img/Glam On Color Perfect_350 x 300 px.jpg"
                        alt="">
                </div>
                <div class="home_image_right">
                    <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                        <div class="flipper">
                            <div class="front-side">
                                <a href="<?php $link_url = theme_get_setting('banner-image-link-url');
                                print($link_url); ?>"><span>
  <?php $link_text = theme_get_setting('banner-image-link-text');
  print($link_text); ?> </span>
                                    <br/><?php $desc_text = theme_get_setting('banner-image-link-desc');
                                    print($desc_text); ?></a>
                            </div>
                            <div class="back-side">
                                <a href="<?php echo $base_url; ?>/?q=content/faces-glam-colour-perfect-0"><h1
                                        style="color:#fff;">Glam On Color Perfect Lipistick</h1></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clr"></div>
            </div>
        </div>
    </div>
    <!---FOOTER MAIN-->
    <div class="footer_main">
        <div class="footer_first" data-sr="no reset">
            <?php print render($page['menulist']); ?>
        </div>
        <div class="clr"></div>
        <div class="footer_second" data-sr="no reset">
            <div class="subscriber">
                <?php print render($page['help']); ?>
            </div>
            <div class="footer_logo">
                <img src="<?php echo $base_url; ?>/sites/all/themes/faces/img/footer_logo.png" alt="">
            </div>
            <div class="clr"></div>
        </div>
    </div>
    <div class="clr"></div>
    <div class="footer_bottom">
        <div class="container">
            <div class="footer_left">
                <ul>
                    <?php print render($page['footer-menu']); ?>
                </ul>
            </div>
            <div class="footer_right">
                <a href="<?php $fb_url = theme_get_setting('facebook_url');
                echo $fb_url; ?>"><i class="fa fa-facebook"></i></a>
                <a href="<?php $tw_url = theme_get_setting('twitter_url');
                echo $tw_url; ?>"><i class="fa fa-twitter"></i></a>
                <a href="<?php $in_url = theme_get_setting('instagram_url');
                echo $in_url; ?>"><i class="fa fa-instagram"></i></a>
                <a href="<?php $pin_url = theme_get_setting('pintrest_url');
                echo $pin_url; ?>"><i class="fa fa-pinterest"></i></a>
                <a href="<?php $gplus_url = theme_get_setting('googleplus_url');
                echo $gplus_url; ?>"><i class="fa fa-google-plus"></i></a>
            </div>
        </div>
    </div>
    <!----FOOTER-->
</div>
  