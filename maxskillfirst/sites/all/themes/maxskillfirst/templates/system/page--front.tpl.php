<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
global $base_url;
?>
<div id="overlay"><!-- preloader div -->
    <div id="overlay-percentage">
      <h2>Loading...</h2>
    </div>
    <div class="overlay-bar"></div>
    <div class="overlay-bar-bck"></div>
    <div class="col-lg-12 overlay-menu" style="float: left"><?php print render($page['sidebar_second']); ?></div>
</div>
<div class="main-container container  not-scollable">

    <header role="banner" id="page-header">


        <?php print render($page['header']); ?>
    </header> <!-- /#page-header -->

    <div class="row">

        <?php if (!empty($page['sidebar_first'])): ?>
            <aside class="col-sm-3" role="complementary">
                <?php print render($page['sidebar_first']); ?>
            </aside>  <!-- /#sidebar-first -->
        <?php endif; ?>

        <section<?php print $content_column_class; ?>>
            <?php if (!empty($page['highlighted'])): ?>
                <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
            <?php endif; ?>
            <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>

            <?php print render($title_suffix); ?>
            <?php if (!empty($tabs)): ?>
                <?php print render($tabs); ?>
            <?php endif; ?>
            <?php if (!empty($page['help'])): ?>
                <?php print render($page['help']); ?>
            <?php endif; ?>
            <?php if (!empty($action_links)): ?>
                <ul class="action-links"><?php print render($action_links); ?></ul>
            <?php endif; ?>
            <header id="navbar1" role="banner" class="<?php print $navbar_classes; ?>">
                <div class="container">

                        <?php if ($logo): ?>
                            <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
                                <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                            </a>
                        <?php endif; ?>

                    <button type="button" class="navbar-toggle collapsed offcanvas-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                <div class="navbar-header" id="navbar">
                    <div class="mobile-menu">
                        <?php if (!empty($page['sidebar_second'])): ?>
                            <aside class="col-lg-2 col-sm-12 col-xs-12 right-sidebar" role="complementary">
                                <?php print render($page['sidebar_second']); ?>

                            </aside>  <!-- /#sidebar-second -->
                        <?php endif; ?>
                    </div>
                </div>
                </div>
            </header>
            <div class="main-content col-lg-6 col-sm-12 col-xs-12">
                <h4><?php $node_home = node_load(10); print $node_home->title; ?></h4>
                <?php print $node_home->body['und'][0]['value']; ?>
            </div>
        </section>
        <div class="desktop-menu">
        <?php if (!empty($page['sidebar_second'])): ?>
            <aside class="col-lg-2 col-sm-12 col-xs-12 right-sidebar" role="complementary">
                <?php print render($page['sidebar_second']); ?>
              <!--  <li class="last leaf">
                    <a href="#" class="social-icon-second"></a>
                    <a href="#" class="social-icon-first"></a>
                </li>-->
            </aside>  <!-- /#sidebar-second -->
        <?php endif; ?>
            </div>
    </div>

</div>
<div class="row scrollable-section">
    <div class="col-lg-12 top-bar">
        <div class="col-lg-7 top-bar-right col-md-12 col-sm-12 col-xs-12">
          <li class="active"><a href="#tab1" class="active">Product & services</a></li>
            <li> <a href="#tab2">Upcoming Sessions</a></li>
        </div>

    </div>
    <div class="col-lg=12 slider">
        <div class="tabs">
        <div id="tab1">
            <ul class="bxslider">
            <?php $query = db_select('node', 'n')
                ->condition('type', 'page_sections')
                ->fields('n');
            $result = $query->execute();
            foreach ($result as $record) {
                $node_section = node_load($record->nid);
                if($node_section ->field_icon['und'][0]['uri']):
            ?>

                    <li><img src="<?php $icon_url = file_create_url($node_section ->field_icon['und'][0]['uri']); echo $icon_url; ?>">
                <?php endif; ?>
            <h1><?php echo $node_section->title; ?></h1>
            <p><?php $trimmed_body = text_summary($node_section->body['und'][0]['value'], $format = NULL, $size = 100); echo $trimmed_body.'...'; ?></p>
                <a href="<?php echo $base_url; ?>/node/<?php $alias = drupal_get_path_alias( $node_section->nid); echo $alias; ?>"><img src="<?php echo $base_url; ?>/sites/all/themes/maxskillfirst/img/read_more.png"></a>
             <?php } ?>
                    </li>
            </ul>
        </div>
        <div id="tab2" class="inactive"><h1 style="color: #fff;">COMING SOON</h1></div>
        </div>
    </div>

    <footer><?php print render($page['footer']); ?></footer>
</div>
