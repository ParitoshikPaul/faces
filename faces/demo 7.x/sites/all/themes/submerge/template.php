<?php

$style = theme_get_setting('style');

switch ($style) {
	case 1:
		drupal_add_css(drupal_get_path('theme', 'submerge') . '/css/style1.css', array('group' => CSS_THEME, 'weight' => 100, 'type' => 'file'));
		break;
	case 2:
		drupal_add_css(drupal_get_path('theme', 'submerge') . '/css/style2.css', array('group' => CSS_THEME, 'weight' => 100, 'type' => 'file'));
		break;
	case 3:
		drupal_add_css(drupal_get_path('theme', 'submerge') . '/css/style3.css', array('group' => CSS_THEME, 'weight' => 100, 'type' => 'file'));
		break;
	case 4:
		drupal_add_css(drupal_get_path('theme', 'submerge') . '/css/style4.css', array('group' => CSS_THEME, 'weight' => 100, 'type' => 'file'));
		break;
	case 5:
		drupal_add_css(drupal_get_path('theme', 'submerge') . '/css/style5.css', array('group' => CSS_THEME, 'weight' => 100, 'type' => 'file'));
		break;
	default:
		drupal_add_css(drupal_get_path('theme', 'submerge') . '/css/style1.css', array('group' => CSS_THEME, 'weight' => 100, 'type' => 'file'));

}

drupal_add_css(drupal_get_path('theme', 'submerge') . '/css/responsive.css', array('group' => CSS_THEME, 'weight' => 101, 'type' => 'file'));

/* Breadcrumbs */

function submerge_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];
  $output = "";
  if (!empty($breadcrumb)) {

    $title = drupal_get_title();
    if (!empty($title)) {
      $breadcrumb[]=$title;
    }

    // Provide a navigational heading to give context for breadcrumb links to
    // screen-reader users. Make the heading invisible with .element-invisible.
    $output .= '<div class="breadcrumb"><div class="breadcrumb-inner">' . implode(' / ', $breadcrumb) . '</div></div>';


    return $output;
  }
}

/* Span Tag on Links */

function submerge_link($variables) {
  return '<a href="' . check_plain(url($variables['path'], $variables['options'])) . '"' . drupal_attributes($variables['options']['attributes']) . '><span>' . ($variables['options']['html'] ? $variables['text'] : check_plain($variables['text'])) . '</span></a>';
}

/* Some text in ye old Search Form */

function submerge_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id == 'search_block_form') {

// Add extra attributes to the text box
    $form['search_block_form']['#attributes']['onblur'] = "if (this.value == '') {this.value = 'Search';}";
    $form['search_block_form']['#attributes']['onfocus'] = "if (this.value == 'Search') {this.value = '';}";
    // Prevent user from searching the default text
    $form['#attributes']['onsubmit'] = "if(this.search_block_form.value=='Search'){ alert('Please enter a search'); return false; }";
  }
} 

/* Add Page Body Class */

function submerge_preprocess_html(&$vars) {
  $path = drupal_get_path_alias($_GET['q']);
  $aliases = explode('/', $path);

  foreach($aliases as $alias) {
    $vars['classes_array'][] = drupal_clean_css_identifier($alias);
  } 
}
