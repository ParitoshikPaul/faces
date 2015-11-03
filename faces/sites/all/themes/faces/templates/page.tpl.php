<?php global $base_url; ?>
	<div id="home_second" >
		<div class="container border">
		<div class="row" data-sr="no reset">
				<div class="col-md-12 about_img">
					<img src="<?php echo $base_url; ?>/sites/all/themes/faces/img/about-img.png" alt="">
				</div>
		</div>
			<div class="about">
			<?php if(isset($node->title)): ?>
				<div class="col-xs-12 col-sm-12 col-md-3 about_left" data-sr="no reset">
				
					<div class="about_faces"><?php $title =$node->title; echo $title; dpm($node->body['und'][0]['safe_summary']); ?></div>
					
					<?php if(isset($node->field_add_tabs)):?>
					<div class="about_tab">
						<ul class="tabs">
						<?php
								foreach($node->field_add_tabs['und'] as $tab_detail):
								$tab_obj = entity_load('field_collection_item', array($tab_detail['value']));
								foreach($tab_obj as $tabs):
									?>
							<li><a rel="tab<?php echo $tabs->item_id; ?>" href="javascript:void(0)"><?php echo $tabs->field_tab_s_title['und'][0]['value']; ?> <span>+</span></a></li>
								<?php 
								endforeach;
								endforeach; ?>
						</ul>	
					</div>
					<?php endif; ?>
				</div>
				<?php endif; ?>
					<?php
								foreach($node->field_add_tabs['und'] as $tab_detail):
								$tab_obj = entity_load('field_collection_item', array($tab_detail['value']));
								foreach($tab_obj as $tabs):
									?>
				<div class="col-xs-12 col-sm-12 col-md-9 about_text" id="tab<?php echo $tabs->item_id; ?>" >
					<h2><?php echo $tabs->field_tab_s_title['und'][0]['value']; ?></h2>
					
					<p><?php echo $tabs->field_tab_content['und'][0]['value'] ?></p>
					</div>
          			<?php endforeach;	endforeach; ?>
				<?php print render($page['content']); ?>
				<div class="clr"></div>
			</div>
		</div>
	</div>
	        <div class="footer_bottom"  >
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
	
	<script type="text/javascript">
	  
	        $('.plus').on('click',function(){
	            $('html, body').animate({scrollTop: $("#home_second").offset().top}, 1000);
	            $('.footer').hide('slow');
	            $('#home_second').css('padding-top', '8%');
	        });

	      /***********ONSCROLL****/
	        $(window).scroll(function() {

		    if ($(this).scrollTop()>0)
		     {
		        $('.footer').fadeOut();
		     }
		    else
		     {
		        $('.footer').fadeIn();
		     }
		 });
	      /************MENU HOVER***************/
	   $('.home_links ul').hover(function() {
	   	selectedList = $(this);
	   	dataColor = $(this).data('color');
	   	$('.menu_border').css('background', dataColor);
	   	$('.menu_img').css('background', dataColor);
	   	
	   }, function() {
	   	/* Stuff to do when the mouse leaves the element */
	   });

	   $('.home_links ul li a').hover(function() {
	   	selectedList = $(this);
	   	dataColor = $(this).parents('ul').data('color');
	   	selectedList.css('color', dataColor);
	   }, function() {
	   		selectedList = $(this);
	   		selectedList.css('color', 'black');
	   });
	    /***********************READ MORE**************/

		$(function() {
		var showTotalChar = 730, showChar = "+", hideChar = "-";
		$('.show').each(function() {
		var content = $(this).text();
		if (content.length > showTotalChar) {
		var con = content.substr(0, showTotalChar);
		var hcon = content.substr(showTotalChar, content.length - showTotalChar);
		var txt= con +  '<span class="dots">...</span><span class="morectnt"><span>' + hcon + '</span>&nbsp;&nbsp;<a href="" class="showmoretxt">' + showChar + '</a></span>';
		    $(this).html(txt);
		    }
		    });
		    $(".showmoretxt").click(function() {
		    if ($(this).hasClass("sample")) {
		    	$(this).removeClass("sample");
		   	 	$(this).text(showChar);
		    	$('morectnt').css('margin-top', '20px');
		    } else {
		    	$(this).addClass("sample");
		    	$(this).text(hideChar);
		    }
		    	$(this).parent().prev().toggle();
		    	$(this).prev().toggle();
		    return false;
		    });
		    });
           /***********************ABOUT PAGE TAB**************/
          
		      $(".about_text").hide();
		      $(".about_text:first").show(); 
		      $(".tabs li:first-child").addClass("active");

		      $("ul.tabs li a").click(function() {
		          $(".about_text").hide();
		           var activeTab = $(this).attr("rel"); 
		          $("#"+activeTab).fadeIn(700); 
		          $("ul.tabs li a").removeClass("active");
		          $('ul.tabs li a').find('span').removeClass("active").text('+');
		          $(this).find('span').removeClass("active").text('-');
		          $(this).addClass("active");
		    });

		      /*****************************ReVeal*****************/
		        (function($) {

		        'use strict';

		        window.sr= new scrollReveal({
		          reset: true,
		          move: '50px',
		          mobile: true
		        });

		      })();

		      /**************************************SLIDER******************/
		      $('.bxslider').bxSlider({
			  auto: true,
			  autoControls: true,
			  pager:false
			});
			 $('.bxslider2').bxSlider({
	       mode:'fade',
			  auto: true,
			  autoControls: true,
			  pager:false
			});
          

            $(function(){

                if (window.location.hash){
                    var hash = window.location.hash.substring(1);
                    if (hash == "about-us"){
                        $('.tabs').find('li.active a').trigger('click');
                    }
                    if (hash == "our-story"){
                        $('.tabs').find('li a[rel="tab3""]').trigger('click');
                    }
                }

            });
	   
	</script>
	
