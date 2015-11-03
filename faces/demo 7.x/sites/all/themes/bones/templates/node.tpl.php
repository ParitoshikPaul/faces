<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
	
	<?php print $user_picture; ?>

  <?php print render($title_prefix); ?>
		
		<?php if (!$page): ?>
      <h2 class="title"<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>

		<?php if ($page): ?>
      <h1 class="title"<?php print $title_attributes; ?>><?php print $title; ?></h1>
    <?php endif; ?>
       
  <?php print render($title_suffix); ?>

  <?php if ($display_submitted): ?>
    <div class="submitted">
			<?php print $submitted; ?>
    </div>
  <?php endif; ?>
  
	<?php if (isset($content['field_image'])): ?>
    <div class="field-image">
      <?php print render($content['field_image']); ?>
    </div>
  <?php endif; ?>      

  <div class="content"<?php print $content_attributes; ?>>
		<?php
    // We hide the comments and links now so that we can render them later.
		hide($content['field_image']);
    hide($content['comments']);
    hide($content['links']);
		hide($content['field_tags']);
    print render($content);
    ?>
  </div>

	<?php if (!empty($content['field_tags'])): ?>  
    <nav class="taxonomy"><div class="taxonomy-inner clearfix">
			<?php print render($content['field_tags']); ?>
    </div></nav>  
	<?php endif; ?>
  
	<?php if (!empty($content['links'])): ?>  
    <nav class="links"><div class="links-inner clearfix">
			<?php print render($content['links']); ?>
    </div></nav>  
	<?php endif; ?>
  
	<?php print render($content['comments']); ?>

</article> 