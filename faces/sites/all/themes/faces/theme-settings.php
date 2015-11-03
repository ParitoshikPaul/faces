<?php

function faces_form_system_theme_settings_alter(&$form, $form_state) {

	$form['tag_desc'] = array(
	'#type'          => 'textarea',
	'#title'         => t('Home Page Body Text'),
	'#default_value' => theme_get_setting('tag_desc'),
	'#description'   => t("Text for the content in home page"),
	);
	
	$form['banner_image'] = array(
	  '#title' => t('New Launch Banner Image'),
	  '#type' => 'managed_file',
	  '#description' => t('Upload New Launch Banner Image'),
	  '#default_value' => variable_get('banner_image'),
	  '#upload_location' => 'public://',
	);
	
	$form['banner-image-link-text'] = array(
	'#type'          => 'textfield',
	'#title'         => t('New Launch Banner Link text'),
	'#default_value' => theme_get_setting('banner-image-link-text'),
	'#description'   => t("Text for New Launch Banner Link"),
	);
	
	$form['banner-image-link-url'] = array(
	'#type'          => 'textfield',
	'#title'         => t('New Launch Banner Link URL'),
	'#default_value' => theme_get_setting('banner-image-link-url'),
	'#description'   => t("URL for New Launch Banner Link "),
	);
	
	 $form['banner-image-link-desc'] = array(
	'#type'          => 'textfield',
	'#title'         => t('New Launch Banner Link Description'),
	'#default_value' => theme_get_setting('banner-image-link-desc'),
	'#description'   => t("URL for New Launch Banner Link Description"),
	);
	
	$form['footer_logo'] = array(
	  '#title' => t('Footer Logo'),
	  '#type' => 'managed_file',
	  '#description' => t('Upload Footer logo here'),
	  '#default_value' => variable_get('footer_logo'),
	  '#upload_location' => 'public://',
	);
	$form['social_links'] = array(
	'#type'          => 'fieldset',
	'#title'         => t('Social Icon Links'),
	'#description'   => t("Enter Facebook URL"),
	'#collapsible' => TRUE,
	'#collapsed' => TRUE
	);
	$form['social_links'] ['facebook_url'] = array(
	'#type'          => 'textfield',
	'#title'         => t('Facebook URL'),
	'#default_value' => theme_get_setting('facebook_url'),
	'#description'   => t("Enter Facebook URL"),
	);
	$form['social_links'] ['twitter_url'] = array(
	'#type'          => 'textfield',
	'#title'         => t('Twitter URL'),
	'#default_value' => theme_get_setting('twitter_url'),
	'#description'   => t("Enter Facebook URL"),
	);
	$form['social_links'] ['instagram_url'] = array(
	'#type'          => 'textfield',
	'#title'         => t('Instagram URL'),
	'#default_value' => theme_get_setting('instagram_url'),
	'#description'   => t("Enter Instagram URL"),
	);
	$form['social_links']['pintrest_url'] = array(
	'#type'          => 'textfield',
	'#title'         => t('Pintrest URL'),
	'#default_value' => theme_get_setting('pintrest_url'),
	'#description'   => t("Enter Pintrest URL"),
	);
	$form['social_links']['googleplus_url'] = array(
	'#type'          => 'textfield',
	'#title'         => t('GPLUS Url'),
	'#default_value' => theme_get_setting('googleplus_url'),
	'#description'   => t("Enter GPLUS URL"),
	);
	  $file = file_load($form_state['values']['footer_logo']);
	

}

