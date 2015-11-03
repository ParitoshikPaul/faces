<style>
.col-lg-8.top-bar-right {
    padding-left: 46px;
}
</style>
<?php
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
            <div class="main-content col-lg-9 col-sm-12 col-xs-12">

                <h4><?php print $node->title;  ?></h4>
                  <?php
                  print render($page['content']);
                  ?>

            </div>
        </section>
        <?php if (!empty($page['sidebar_second'])): ?>
            <aside class="col-lg-2 col-sm-12 col-xs-12 right-sidebar" role="complementary">
                <?php print render($page['sidebar_second']); ?>
            <!--    <li class="last leaf">
                    <a href="#" class="social-icon-second"></a>
                    <a href="#"  class="social-icon-first"></a>
                </li>-->
            </aside>  <!-- /#sidebar-second -->
        <?php endif;  ?>

    </div>

</div>

<?php if(isset($node->field_tabs['und'])): ?>
<div class="row scrollable-section">
    <div class="col-lg-12 top-bar">
        <div class="col-lg-10 top-bar-right col-md-12 col-sm-12">
            <?php
            $i = 1;
            foreach($node->field_tabs['und'] as $tabs){
            $tabs_cont = entity_load('field_collection_item', array($tabs['value']));
            foreach($tabs_cont as $tab_cont){
                if($i == 1){
            ?>

            <li class="active">    <a href="#tab<?php echo $i; ?>"><?php echo $tab_cont->field_tab_title['und'][0]['value']; ?></a> </li>
                    <?php } else { ?>
            <li >  <a href="#tab<?php echo $i; ?>"><?php echo $tab_cont->field_tab_title['und'][0]['value']; ?></a></li>
                <?php } ?>
            <?php  } $i++; } ?>
        </div>

    </div>
    <div class="col-lg=12 slider">
    <div class="tabs">
        <?php
        $i = 1;
        foreach($node->field_tabs['und'] as $tabs){
        $tabs_cont = entity_load('field_collection_item', array($tabs['value']));
        foreach($tabs_cont as $tab_cont){
        ?>
                <div id="tab<?php echo $i; ?>">
                    <?php echo $tab_cont->field_tab_content['und'][0]['value']; ?>
                </div>

        <?php  } $i++; } ?>
    </div>
</div>

</div>
<?php endif; ?>
<footer><?php print render($page['footer']); ?></footer>