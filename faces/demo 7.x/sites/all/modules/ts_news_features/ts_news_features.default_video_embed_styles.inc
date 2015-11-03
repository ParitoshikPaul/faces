<?php
/**
 * @file
 * ts_news_features.default_video_embed_styles.inc
 */

/**
 * Implements hook_default_video_embed_styles().
 */
function ts_news_features_default_video_embed_styles() {
  $export = array();

  $video_embed_style = new stdClass();
  $video_embed_style->disabled = FALSE; /* Edit this to true to make a default video_embed_style disabled initially */
  $video_embed_style->api_version = 1;
  $video_embed_style->name = 'Featured';
  $video_embed_style->data = array(
    'youtube' => array(
      'width' => '260px',
      'height' => '180px',
      'theme' => 'dark',
      'autoplay' => 0,
      'hd' => 1,
      'rel' => 0,
      'showinfo' => 1,
      'modestbranding' => 0,
      'iv_load_policy' => '1',
      'autohide' => '2',
    ),
    'vimeo' => array(
      'width' => '640px',
      'height' => '360px',
      'color' => '00adef',
      'portrait' => 1,
      'title' => 1,
      'byline' => 1,
      'autoplay' => 0,
      'loop' => 0,
    ),
    'data__active_tab' => 'edit-data-youtube',
  );
  $export['Featured'] = $video_embed_style;

  return $export;
}
