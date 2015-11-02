<?php
/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or
 *   'rtl'.
 * - $html_attributes:  String of attributes for the html element. It can be
 *   manipulated through the variable $html_attributes_array from preprocess
 *   functions.
 * - $html_attributes_array: An array of attribute values for the HTML element.
 *   It is flattened into a string within the variable $html_attributes.
 * - $body_attributes:  String of attributes for the BODY element. It can be
 *   manipulated through the variable $body_attributes_array from preprocess
 *   functions.
 * - $body_attributes_array: An array of attribute values for the BODY element.
 *   It is flattened into a string within the variable $body_attributes.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see bootstrap_preprocess_html()
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 *
 * @ingroup themeable
 */
?><!DOCTYPE html>
<html<?php global $base_url;  print $html_attributes;?><?php print $rdf_namespaces;?>>
<head>
    <link rel="profile" href="<?php print $grddl_profile; ?>" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php print $head; ?>
    <title><?php print $head_title; ?></title>
    <?php print $styles; ?>
    <!-- HTML5 element support for IE6-8 -->
    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php print $scripts; ?>
</head>
<body<?php print $body_attributes; ?>>
<div class="header">
    <!--header start-->
    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1  search-icon">
        <!--search-icon start-->
        <a href="#" class="btn btn-info btn-lg">
            <span class="glyphicon glyphicon-search"></span>
        </a>
    </div>
    <!--search-icon end-->
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 navigation">
            <?php $loggedin = user_is_logged_in(); if($loggedin == TRUE): ?>

        <!--navigation start-->
                <div class="top-menu">
                    <!--top-menu start-->
                    <h4>Welcome back<span><?php global $user;
                            echo $user->name; ?></span></h4>
                    <ul class="account">
                        <?php
                        $menu = menu_navigation_links('user-menu');
                        print theme('links__system_secondary_menu', array(
                            'links' => $menu,
                            'attributes' => array(
                                'id' => 'secondary-menu',
                                'class' => array('links', 'clearfix'),
                            ),
                            'heading' => array(
                                'text' => '',
                                'level' => 'h2',
                                'class' => array('element-invisible'),
                            ),
                        ));
                        ?>
                    </ul>
            <div class="clear"></div>
        </div>
        <?php endif; ?>
        <!--top-menu end-->
        <div class="bottom-menu">
            <!--bottom-menu start-->
            <ul class="menubar">
                <?php
                $menu = menu_navigation_links('main-menu');
                print theme('links__system_secondary_menu', array(
                    'links' => $menu,
                    'attributes' => array(
                        'id' => 'secondary-menu',
                        'class' => array('links', 'clearfix'),
                    ),
                    'heading' => array(
                        'text' => '',
                        'level' => 'h2',
                        'class' => array('element-invisible'),
                    ),
                ));
                ?>
            </ul>
        </div>
        <!--bottom-menu end-->
    </div>
    <!--navigation end-->
    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1  shoping-icon"> 
        <!--shoping-icon start-->
        <a href="#" class="btn btn-info btn-lg">
            <span class="glyphicon glyphicon-shopping-cart"></span>
        </a>
    </div>
    <!--shoping-icon start-->
</div><!--header start-->
<div class="cart-pop">
    <?php
    //D7
    $block = module_invoke('commerce_cart', 'block_view', 0);
    print render($block['content']);
  //  print views_embed_view('commerce_cart_block','block_1');
    ?>
</div>
<div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
</div>
<?php print $page_top; ?>
<?php print $page; ?>
<?php print $page_bottom; ?>
</body>
</html>
