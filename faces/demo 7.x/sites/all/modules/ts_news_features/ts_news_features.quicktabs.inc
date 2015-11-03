<?php
/**
 * @file
 * ts_news_features.quicktabs.inc
 */

/**
 * Implements hook_quicktabs_default_quicktabs().
 */
function ts_news_features_quicktabs_default_quicktabs() {
  $export = array();

  $quicktabs = new stdClass();
  $quicktabs->disabled = FALSE; /* Edit this to true to make a default quicktabs disabled initially */
  $quicktabs->api_version = 1;
  $quicktabs->machine_name = 'quicktabs';
  $quicktabs->ajax = 0;
  $quicktabs->hide_empty_tabs = FALSE;
  $quicktabs->default_tab = 0;
  $quicktabs->title = 'Quicktabs';
  $quicktabs->tabs = array(
    0 => array(
      'bid' => 'aggregator_delta_feed-1',
      'hide_title' => 1,
      'title' => 'Top Stories',
      'weight' => '-100',
      'type' => 'block',
    ),
    1 => array(
      'bid' => 'aggregator_delta_feed-2',
      'hide_title' => 1,
      'title' => 'World News',
      'weight' => '-99',
      'type' => 'block',
    ),
    2 => array(
      'bid' => 'aggregator_delta_feed-3',
      'hide_title' => 1,
      'title' => 'Business',
      'weight' => '-98',
      'type' => 'block',
    ),
  );
  $quicktabs->renderer = 'quicktabs';
  $quicktabs->style = 'nostyle';
  $quicktabs->options = array();

  // Translatables
  // Included for use with string extractors like potx.
  t('Business');
  t('Quicktabs');
  t('Top Stories');
  t('World News');

  $export['quicktabs'] = $quicktabs;

  return $export;
}
