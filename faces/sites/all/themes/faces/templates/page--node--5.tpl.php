<?php global $base_url; ?>
	<div id="home_second" >
		<div class="container border">
		<div class="contact-container">
		<img src="<?php echo $base_url; ?>/sites/all/themes/faces/img/home_small.png" />
		<div class="contact-details">
		<h3><?php echo $node->title; ?></h3>
		<ul  class="tabs-menu">
		<li  class="current"><a href="#tab-1">General Feedback</a></li>
		<li><a href="#tab-2">Product</a></li>
		<li><a href="#tab-3">Franchise</a></li>
		<li><a href="#tab-4">Distribution</a></li>
		</ul>
		<p>We look forward to feedback from our customers to improve our products and services at all times!

		<span>We look forward to hearing from you about your experience with FACES. 
		You can fill out the form below and we will get back to you shortly.</span>
		<div class="tab-content" id="tab-1">
		<h2>CONTACT INFORMATION</h2>
    	
          <?php  module_load_include('inc', 'node', 'node.pages');
            $content_type = 'general_feedback';
            $node_form = node_add($content_type);
            print render($node_form);
            ?>
            </div>
		<div class="tab-content" id="tab-2">
			<h2>PRODUCT FEEDBACK</h2>
    	
          <?php  module_load_include('inc', 'node', 'node.pages');
            $content_type = 'product_feedback';
            $node_form = node_add($content_type);
            print render($node_form);
            ?>
		</div>
		<div class="tab-content" id="tab-3">
			<h2>FRANCHISE FEEDBACK</h2>
    	
          <?php  module_load_include('inc', 'node', 'node.pages');
            $content_type = 'franchise_feedback';
            $node_form = node_add($content_type);
            print render($node_form);
            ?>
		</div>
		<div class="tab-content" id="tab-4">
			<h2>DISTRIBUTION FEEDBACK</h2>
    	
          <?php  module_load_include('inc', 'node', 'node.pages');
            $content_type = 'distribution';
            $node_form = node_add($content_type);
            print render($node_form);
            ?>
		</div>
		</p>
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
	  <script>
$(document).ready(function() {
    $(".tabs-menu a").click(function(event) {
        event.preventDefault();
        $(this).parent().addClass("current");
        $(this).parent().siblings().removeClass("current");
        var tab = $(this).attr("href");
        $(".tab-content").not(tab).css("display", "none");
        $(tab).fadeIn();
    });
});
  </script>
