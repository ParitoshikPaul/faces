	<?php

/**
 * @file
 * template.php
 */

function faces_preprocess_page(&$variables) {
if (!empty($variables['node']) && !empty($variables['node']->type)) {
$variables['theme_hook_suggestions'][] = 'page__node__' . $variables['node']->type;
}

  if (arg(0) == 'taxonomy' && arg(1) == 'term' && is_numeric(arg(2))) {
    $term = taxonomy_term_load(arg(2));
    $variables['theme_hook_suggestions'][] = 'page__vocabulary__' . $term->vocabulary_machine_name;
    unset($variables['page']['content']['system_main']['term_heading']['term']);
  }

  if(isset($variables['page']['content']['system_main']['no_content'])) { 
    unset($variables['page']['content']['system_main']['no_content']);
  }


}

?>