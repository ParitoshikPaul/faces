<?php
/**
 * @file
 * ts_news_features.features.menu_links.inc
 */

/**
 * Implements hook_menu_default_menu_links().
 */
function ts_news_features_menu_default_menu_links() {
  $menu_links = array();

  // Exported menu link: main-menu:menu-position/1
  $menu_links['main-menu:menu-position/1'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'menu-position/1',
    'router_path' => 'menu-position/%',
    'link_title' => 'Show on Nodes (menu position rule)',
    'options' => array(
      'alter' => TRUE,
      'attributes' => array(
        'class' => array(
          0 => 'menu-position-link',
        ),
      ),
    ),
    'module' => 'menu_position',
    'hidden' => '1',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '0',
    'parent_path' => 'taxonomy/term/1',
  );
  // Exported menu link: main-menu:taxonomy/term/1
  $menu_links['main-menu:taxonomy/term/1'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'taxonomy/term/1',
    'router_path' => 'taxonomy/term/%',
    'link_title' => 'News',
    'options' => array(
      'attributes' => array(
        'title' => 'News',
      ),
    ),
    'module' => 'taxonomy_menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '1',
    'expanded' => '1',
    'weight' => '31',
  );
  // Exported menu link: main-menu:taxonomy/term/10
  $menu_links['main-menu:taxonomy/term/10'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'taxonomy/term/10',
    'router_path' => 'taxonomy/term/%',
    'link_title' => 'Politics',
    'options' => array(
      'attributes' => array(
        'title' => 'Politics',
      ),
    ),
    'module' => 'taxonomy_menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '1',
    'weight' => '2',
    'parent_path' => 'taxonomy/term/1',
  );
  // Exported menu link: main-menu:taxonomy/term/11
  $menu_links['main-menu:taxonomy/term/11'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'taxonomy/term/11',
    'router_path' => 'taxonomy/term/%',
    'link_title' => 'Election',
    'options' => array(
      'attributes' => array(
        'title' => 'Election',
      ),
    ),
    'module' => 'taxonomy_menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '1',
    'weight' => '3',
    'parent_path' => 'taxonomy/term/1',
  );
  // Exported menu link: main-menu:taxonomy/term/12
  $menu_links['main-menu:taxonomy/term/12'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'taxonomy/term/12',
    'router_path' => 'taxonomy/term/%',
    'link_title' => 'National',
    'options' => array(
      'attributes' => array(
        'title' => 'National',
      ),
    ),
    'module' => 'taxonomy_menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '1',
    'weight' => '0',
    'parent_path' => 'taxonomy/term/1',
  );
  // Exported menu link: main-menu:taxonomy/term/13
  $menu_links['main-menu:taxonomy/term/13'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'taxonomy/term/13',
    'router_path' => 'taxonomy/term/%',
    'link_title' => 'Economy',
    'options' => array(
      'attributes' => array(
        'title' => 'Economy',
      ),
    ),
    'module' => 'taxonomy_menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '1',
    'weight' => '0',
    'parent_path' => 'taxonomy/term/3',
  );
  // Exported menu link: main-menu:taxonomy/term/14
  $menu_links['main-menu:taxonomy/term/14'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'taxonomy/term/14',
    'router_path' => 'taxonomy/term/%',
    'link_title' => 'International',
    'options' => array(
      'attributes' => array(
        'title' => 'International',
      ),
    ),
    'module' => 'taxonomy_menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '1',
    'weight' => '1',
    'parent_path' => 'taxonomy/term/3',
  );
  // Exported menu link: main-menu:taxonomy/term/15
  $menu_links['main-menu:taxonomy/term/15'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'taxonomy/term/15',
    'router_path' => 'taxonomy/term/%',
    'link_title' => 'Industry',
    'options' => array(
      'attributes' => array(
        'title' => 'Industry',
      ),
    ),
    'module' => 'taxonomy_menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '1',
    'weight' => '2',
    'parent_path' => 'taxonomy/term/3',
  );
  // Exported menu link: main-menu:taxonomy/term/16
  $menu_links['main-menu:taxonomy/term/16'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'taxonomy/term/16',
    'router_path' => 'taxonomy/term/%',
    'link_title' => 'Small Business',
    'options' => array(
      'attributes' => array(
        'title' => 'Small Business',
      ),
    ),
    'module' => 'taxonomy_menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '1',
    'weight' => '3',
    'parent_path' => 'taxonomy/term/3',
  );
  // Exported menu link: main-menu:taxonomy/term/17
  $menu_links['main-menu:taxonomy/term/17'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'taxonomy/term/17',
    'router_path' => 'taxonomy/term/%',
    'link_title' => 'Careers',
    'options' => array(
      'attributes' => array(
        'title' => 'Careers',
      ),
    ),
    'module' => 'taxonomy_menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '1',
    'weight' => '4',
    'parent_path' => 'taxonomy/term/3',
  );
  // Exported menu link: main-menu:taxonomy/term/2
  $menu_links['main-menu:taxonomy/term/2'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'taxonomy/term/2',
    'router_path' => 'taxonomy/term/%',
    'link_title' => 'World',
    'options' => array(
      'attributes' => array(
        'title' => 'World',
      ),
    ),
    'module' => 'taxonomy_menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '1',
    'weight' => '1',
    'parent_path' => 'taxonomy/term/1',
  );
  // Exported menu link: main-menu:taxonomy/term/29
  $menu_links['main-menu:taxonomy/term/29'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'taxonomy/term/29',
    'router_path' => 'taxonomy/term/%',
    'link_title' => 'Film',
    'options' => array(
      'attributes' => array(
        'title' => 'Film',
      ),
    ),
    'module' => 'taxonomy_menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '1',
    'weight' => '0',
    'parent_path' => 'taxonomy/term/6',
  );
  // Exported menu link: main-menu:taxonomy/term/3
  $menu_links['main-menu:taxonomy/term/3'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'taxonomy/term/3',
    'router_path' => 'taxonomy/term/%',
    'link_title' => 'Business',
    'options' => array(
      'attributes' => array(
        'title' => 'Business',
      ),
    ),
    'module' => 'taxonomy_menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '1',
    'expanded' => '1',
    'weight' => '32',
  );
  // Exported menu link: main-menu:taxonomy/term/30
  $menu_links['main-menu:taxonomy/term/30'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'taxonomy/term/30',
    'router_path' => 'taxonomy/term/%',
    'link_title' => 'Television',
    'options' => array(
      'attributes' => array(
        'title' => 'Television',
      ),
    ),
    'module' => 'taxonomy_menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '1',
    'weight' => '1',
    'parent_path' => 'taxonomy/term/6',
  );
  // Exported menu link: main-menu:taxonomy/term/31
  $menu_links['main-menu:taxonomy/term/31'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'taxonomy/term/31',
    'router_path' => 'taxonomy/term/%',
    'link_title' => 'Books',
    'options' => array(
      'attributes' => array(
        'title' => 'Books',
      ),
    ),
    'module' => 'taxonomy_menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '1',
    'weight' => '2',
    'parent_path' => 'taxonomy/term/6',
  );
  // Exported menu link: main-menu:taxonomy/term/32
  $menu_links['main-menu:taxonomy/term/32'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'taxonomy/term/32',
    'router_path' => 'taxonomy/term/%',
    'link_title' => 'Music',
    'options' => array(
      'attributes' => array(
        'title' => 'Music',
      ),
    ),
    'module' => 'taxonomy_menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '1',
    'weight' => '3',
    'parent_path' => 'taxonomy/term/6',
  );
  // Exported menu link: main-menu:taxonomy/term/33
  $menu_links['main-menu:taxonomy/term/33'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'taxonomy/term/33',
    'router_path' => 'taxonomy/term/%',
    'link_title' => 'Theatre',
    'options' => array(
      'attributes' => array(
        'title' => 'Theatre',
      ),
    ),
    'module' => 'taxonomy_menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '1',
    'weight' => '4',
    'parent_path' => 'taxonomy/term/6',
  );
  // Exported menu link: main-menu:taxonomy/term/34
  $menu_links['main-menu:taxonomy/term/34'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'taxonomy/term/34',
    'router_path' => 'taxonomy/term/%',
    'link_title' => 'Celebrity',
    'options' => array(
      'attributes' => array(
        'title' => 'Celebrity',
      ),
    ),
    'module' => 'taxonomy_menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '1',
    'weight' => '5',
    'parent_path' => 'taxonomy/term/6',
  );
  // Exported menu link: main-menu:taxonomy/term/35
  $menu_links['main-menu:taxonomy/term/35'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'taxonomy/term/35',
    'router_path' => 'taxonomy/term/%',
    'link_title' => 'Health',
    'options' => array(
      'attributes' => array(
        'title' => 'Health',
      ),
    ),
    'module' => 'taxonomy_menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '1',
    'weight' => '0',
    'parent_path' => 'taxonomy/term/5',
  );
  // Exported menu link: main-menu:taxonomy/term/36
  $menu_links['main-menu:taxonomy/term/36'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'taxonomy/term/36',
    'router_path' => 'taxonomy/term/%',
    'link_title' => 'Fitness',
    'options' => array(
      'attributes' => array(
        'title' => 'Fitness',
      ),
    ),
    'module' => 'taxonomy_menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '1',
    'weight' => '1',
    'parent_path' => 'taxonomy/term/5',
  );
  // Exported menu link: main-menu:taxonomy/term/37
  $menu_links['main-menu:taxonomy/term/37'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'taxonomy/term/37',
    'router_path' => 'taxonomy/term/%',
    'link_title' => 'Fashion & Beauty',
    'options' => array(
      'attributes' => array(
        'title' => 'Fashion & Beauty',
      ),
    ),
    'module' => 'taxonomy_menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '1',
    'weight' => '2',
    'parent_path' => 'taxonomy/term/5',
  );
  // Exported menu link: main-menu:taxonomy/term/38
  $menu_links['main-menu:taxonomy/term/38'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'taxonomy/term/38',
    'router_path' => 'taxonomy/term/%',
    'link_title' => 'Parenting',
    'options' => array(
      'attributes' => array(
        'title' => 'Parenting',
      ),
    ),
    'module' => 'taxonomy_menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '1',
    'weight' => '4',
    'parent_path' => 'taxonomy/term/5',
  );
  // Exported menu link: main-menu:taxonomy/term/39
  $menu_links['main-menu:taxonomy/term/39'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'taxonomy/term/39',
    'router_path' => 'taxonomy/term/%',
    'link_title' => 'Relationships',
    'options' => array(
      'attributes' => array(
        'title' => 'Relationships',
      ),
    ),
    'module' => 'taxonomy_menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '1',
    'weight' => '5',
    'parent_path' => 'taxonomy/term/5',
  );
  // Exported menu link: main-menu:taxonomy/term/4
  $menu_links['main-menu:taxonomy/term/4'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'taxonomy/term/4',
    'router_path' => 'taxonomy/term/%',
    'link_title' => 'Technology',
    'options' => array(
      'attributes' => array(
        'title' => 'Technology',
      ),
    ),
    'module' => 'taxonomy_menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '1',
    'expanded' => '1',
    'weight' => '33',
  );
  // Exported menu link: main-menu:taxonomy/term/40
  $menu_links['main-menu:taxonomy/term/40'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'taxonomy/term/40',
    'router_path' => 'taxonomy/term/%',
    'link_title' => 'Home & Garden',
    'options' => array(
      'attributes' => array(
        'title' => 'Home & Garden',
      ),
    ),
    'module' => 'taxonomy_menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '1',
    'weight' => '3',
    'parent_path' => 'taxonomy/term/5',
  );
  // Exported menu link: main-menu:taxonomy/term/41
  $menu_links['main-menu:taxonomy/term/41'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'taxonomy/term/41',
    'router_path' => 'taxonomy/term/%',
    'link_title' => 'Travel',
    'options' => array(
      'attributes' => array(
        'title' => 'Travel',
      ),
    ),
    'module' => 'taxonomy_menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '1',
    'weight' => '6',
    'parent_path' => 'taxonomy/term/5',
  );
  // Exported menu link: main-menu:taxonomy/term/42
  $menu_links['main-menu:taxonomy/term/42'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'taxonomy/term/42',
    'router_path' => 'taxonomy/term/%',
    'link_title' => 'Tech News',
    'options' => array(
      'attributes' => array(
        'title' => 'Tech News',
      ),
    ),
    'module' => 'taxonomy_menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '1',
    'weight' => '1',
    'parent_path' => 'taxonomy/term/4',
  );
  // Exported menu link: main-menu:taxonomy/term/43
  $menu_links['main-menu:taxonomy/term/43'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'taxonomy/term/43',
    'router_path' => 'taxonomy/term/%',
    'link_title' => 'Digital Culture',
    'options' => array(
      'attributes' => array(
        'title' => 'Digital Culture',
      ),
    ),
    'module' => 'taxonomy_menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '1',
    'weight' => '0',
    'parent_path' => 'taxonomy/term/4',
  );
  // Exported menu link: main-menu:taxonomy/term/44
  $menu_links['main-menu:taxonomy/term/44'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'taxonomy/term/44',
    'router_path' => 'taxonomy/term/%',
    'link_title' => 'Gadgets & Gear',
    'options' => array(
      'attributes' => array(
        'title' => 'Gadgets & Gear',
      ),
    ),
    'module' => 'taxonomy_menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '1',
    'weight' => '2',
    'parent_path' => 'taxonomy/term/4',
  );
  // Exported menu link: main-menu:taxonomy/term/45
  $menu_links['main-menu:taxonomy/term/45'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'taxonomy/term/45',
    'router_path' => 'taxonomy/term/%',
    'link_title' => 'Science',
    'options' => array(
      'attributes' => array(
        'title' => 'Science',
      ),
    ),
    'module' => 'taxonomy_menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '1',
    'weight' => '5',
    'parent_path' => 'taxonomy/term/4',
  );
  // Exported menu link: main-menu:taxonomy/term/46
  $menu_links['main-menu:taxonomy/term/46'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'taxonomy/term/46',
    'router_path' => 'taxonomy/term/%',
    'link_title' => 'Gaming',
    'options' => array(
      'attributes' => array(
        'title' => 'Gaming',
      ),
    ),
    'module' => 'taxonomy_menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '1',
    'weight' => '3',
    'parent_path' => 'taxonomy/term/4',
  );
  // Exported menu link: main-menu:taxonomy/term/47
  $menu_links['main-menu:taxonomy/term/47'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'taxonomy/term/47',
    'router_path' => 'taxonomy/term/%',
    'link_title' => 'Mobile',
    'options' => array(
      'attributes' => array(
        'title' => 'Mobile',
      ),
    ),
    'module' => 'taxonomy_menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '1',
    'weight' => '4',
    'parent_path' => 'taxonomy/term/4',
  );
  // Exported menu link: main-menu:taxonomy/term/48
  $menu_links['main-menu:taxonomy/term/48'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'taxonomy/term/48',
    'router_path' => 'taxonomy/term/%',
    'link_title' => 'Editorials',
    'options' => array(
      'attributes' => array(
        'title' => 'Editorials',
      ),
    ),
    'module' => 'taxonomy_menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '1',
    'weight' => '1',
    'parent_path' => 'taxonomy/term/7',
  );
  // Exported menu link: main-menu:taxonomy/term/49
  $menu_links['main-menu:taxonomy/term/49'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'taxonomy/term/49',
    'router_path' => 'taxonomy/term/%',
    'link_title' => 'Letters to the Editor',
    'options' => array(
      'attributes' => array(
        'title' => 'Letters to the Editor',
      ),
    ),
    'module' => 'taxonomy_menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '1',
    'weight' => '2',
    'parent_path' => 'taxonomy/term/7',
  );
  // Exported menu link: main-menu:taxonomy/term/5
  $menu_links['main-menu:taxonomy/term/5'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'taxonomy/term/5',
    'router_path' => 'taxonomy/term/%',
    'link_title' => 'Life',
    'options' => array(
      'attributes' => array(
        'title' => 'Life',
      ),
    ),
    'module' => 'taxonomy_menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '1',
    'expanded' => '1',
    'weight' => '34',
  );
  // Exported menu link: main-menu:taxonomy/term/50
  $menu_links['main-menu:taxonomy/term/50'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'taxonomy/term/50',
    'router_path' => 'taxonomy/term/%',
    'link_title' => 'Columnists',
    'options' => array(
      'attributes' => array(
        'title' => 'Columnists',
      ),
    ),
    'module' => 'taxonomy_menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '1',
    'weight' => '0',
    'parent_path' => 'taxonomy/term/7',
  );
  // Exported menu link: main-menu:taxonomy/term/6
  $menu_links['main-menu:taxonomy/term/6'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'taxonomy/term/6',
    'router_path' => 'taxonomy/term/%',
    'link_title' => 'Art & Entertainment',
    'options' => array(
      'attributes' => array(
        'title' => 'Art & Entertainment',
      ),
    ),
    'module' => 'taxonomy_menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '1',
    'expanded' => '1',
    'weight' => '35',
  );
  // Exported menu link: main-menu:taxonomy/term/7
  $menu_links['main-menu:taxonomy/term/7'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'taxonomy/term/7',
    'router_path' => 'taxonomy/term/%',
    'link_title' => 'Opinion',
    'options' => array(
      'attributes' => array(
        'title' => 'Opinion',
      ),
    ),
    'module' => 'taxonomy_menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '1',
    'expanded' => '1',
    'weight' => '36',
  );
  // Exported menu link: main-menu:taxonomy/term/8
  $menu_links['main-menu:taxonomy/term/8'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'taxonomy/term/8',
    'router_path' => 'taxonomy/term/%',
    'link_title' => 'Video',
    'options' => array(
      'attributes' => array(
        'title' => 'Video',
      ),
    ),
    'module' => 'taxonomy_menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '1',
    'weight' => '37',
  );
  // Translatables
  // Included for use with string extractors like potx.
  t('Art & Entertainment');
  t('Books');
  t('Business');
  t('Careers');
  t('Celebrity');
  t('Columnists');
  t('Digital Culture');
  t('Economy');
  t('Editorials');
  t('Election');
  t('Fashion & Beauty');
  t('Film');
  t('Fitness');
  t('Gadgets & Gear');
  t('Gaming');
  t('Health');
  t('Home & Garden');
  t('Industry');
  t('International');
  t('Letters to the Editor');
  t('Life');
  t('Mobile');
  t('Music');
  t('National');
  t('News');
  t('Opinion');
  t('Parenting');
  t('Politics');
  t('Relationships');
  t('Science');
  t('Show on Nodes (menu position rule)');
  t('Small Business');
  t('Tech News');
  t('Technology');
  t('Television');
  t('Theatre');
  t('Travel');
  t('Video');
  t('World');


  return $menu_links;
}
