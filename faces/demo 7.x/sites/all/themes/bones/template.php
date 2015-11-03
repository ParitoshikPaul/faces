<?php

function bones_preprocess_html(&$vars) {
	
	// Add body class for sidebar layout
  $vars['classes_array'][] = theme_get_setting('sidebar_layout'); 	

}

function bones_preprocess_page(&$vars) {
	
	$grid_info = get_grid_info();
	
	// Create page variables
	
	$vars['grid_size'] = 'container_' . $grid_info['grid_size'];
	$vars['grid_full_width'] = 'grid_' . $grid_info['grid_size'];
	$vars['sidebar_first_grid_width'] = 'grid_' . $grid_info['sidebar_first_width'];
    $vars['sidebar_second_grid_width'] = 'grid_' . $grid_info['sidebar_second_width'];
	$vars['twitter'] = theme_get_setting('twitter');
    $vars['facebook'] = theme_get_setting('facebook');
    $vars['google'] = theme_get_setting('google');
	
	for ($region_count = 1; $region_count <= 4; $region_count++) {
	  $vars['preface_' . $region_count . '_grid_width'] = 'grid_' . $grid_info['preface_' . $region_count . '_grid_width'];
		$vars['postscript_' . $region_count . '_grid_width'] = 'grid_' . $grid_info['postscript_' . $region_count . '_grid_width'];
	}	

	if (empty($vars['page']['sidebar_first']) && empty($vars['page']['sidebar_second'])) {
		$vars['main_content_grid_width'] = 'grid_' . $grid_info['grid_size'];
	} else if (!empty($vars['page']['sidebar_first']) && !empty($vars['page']['sidebar_second'])) {
		$vars['main_content_grid_width'] = 'grid_' . ($grid_info['grid_size'] - ($grid_info['sidebar_first_width'] + $grid_info['sidebar_second_width']));
 	} else if (empty($vars['page']['sidebar_first']) && !empty($vars['page']['sidebar_second'])) {
		$vars['main_content_grid_width'] = 'grid_' . ($grid_info['grid_size'] - $grid_info['sidebar_second_width']);
	} else if (!empty($vars['page']['sidebar_first']) && empty($vars['page']['sidebar_second'])) {
		$vars['main_content_grid_width'] = 'grid_' . ($grid_info['grid_size'] - $grid_info['sidebar_first_width']);
	}
	
}

function get_grid_info() {

	$grid_info = array();

	$grid_info['grid_size'] = theme_get_setting('grid_size');
	$grid_info['sidebar_first_width'] = theme_get_setting('sidebar_first_width');
	$grid_info['sidebar_second_width'] = theme_get_setting('sidebar_second_width');
	
	for ($region_count = 1; $region_count <= 4; $region_count++) {
	  $grid_info['preface_' . $region_count . '_grid_width'] = theme_get_setting('preface_' . $region_count . '_grid_width');
		$grid_info['postscript_' . $region_count . '_grid_width'] = theme_get_setting('postscript_' . $region_count . '_grid_width');
	}
	
	return $grid_info;

}


