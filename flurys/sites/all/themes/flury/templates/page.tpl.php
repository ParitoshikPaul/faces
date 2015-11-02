<div class="container-fluid about"><!--container-fluid start-->
    <?php if(isset($node->field_tab['und'])){?>
    <div class="background-img"><img src="sites/all/themes/flury/images/about-bg.jpg" alt=""/></div>
    <div class="heritage-div">
        <!--history-div start-->
        <div class="bs-example">
                <ul class="nav nav-tabs">
                <?php
                $i = 0;
                foreach($node->field_tab['und'] as $field_tab_id):
                    $field_tab_obj = field_collection_item_load($field_tab_id['value']);
                    $tab_title = $field_tab_obj ->field_tab_title['und'][0]['value'];
                    $tab_summary= $field_tab_obj ->field_tab_summary ['und'][0]['value'];
                    $tab_body= $field_tab_obj ->field_tab_content['und'][0]['value'];
                    $arr_tabs = array('tab_summary' => '<h3>'.$tab_summary.'</h3>', 'tab_content'=> '<p>'.$tab_body.'<p>');
                    if($i == 1){
                ?>
                <li class="active"><a data-toggle="tab" href="#<?php echo $tab_title;?>"><?php echo $tab_title;?></a></li>
               <?php } else{ ?>
                    <li><a data-toggle="tab" href="#<?php echo $tab_title; ?>"><?php echo $tab_title; ?></a></li>
                    <?php
                    $i++;
                }
                endforeach;
                ?>
            </ul>
        </div>
        <div class="tab-content">
            <?php
            $i = 0;
            foreach($arr_tabs as $tabs):
                ?>
                <div id="About" class="tab-pane fade in active">
                    <h3>Five generations of fine confections</h3>

                    <p>Flurys the legendary tearoom in Kolkata’s fashionable Park Streetwas founded in 1927 by Mr.and
                        Mrs. J Flurys. Presenting fine European traditional confections, it had soon become a popular
                        meeting place for all ages. It introduced the city and many generations to authentic Swiss and
                        as the only tea room, the place was known far and wide for its exotic cakes, creamy pastries,
                        rich
                        puddings and perhaps the best Swiss chocolates outside the European continent, and in no small
                        measure to the relaxed and cheerful atmosphere that it has always provided.
                        Flurys is now open with a fresh design that recalls the 1930s, yet.</p>

                </div>
            <?php ?>
                <div id="HISTORY" class="tab-pane fade">
                    <h3>Five generations of fine confections</h3>

                    <p>Flurys the legendary tearoom in Kolkata’s fashionable Park Streetwas founded in 1927 by Mr.and
                        Mrs. J Flurys. Presenting fine European traditional confections, it had soon become a popular
                        meeting place for all ages. It introduced the city and many generations to authentic Swiss and
                        as the only tea room, the place was known far and wide for its exotic cakes, creamy pastries,
                        rich
                        puddings and perhaps the best Swiss chocolates outside the European continent, and in no small
                        measure to the relaxed and cheerful atmosphere that it has always provided.
                        Flurys is now open with a fresh design that recalls the 1930s, yet.</p>
                </div>

            <?php  endforeach; ?>
        </div>
        <div class="arrow-icon">
            <a href="#" class="arrow" data-id=".down_arrow">HISTORY</a>
        </div>
    </div>
    <div class="container-fluid heritage-item down_arrow"><!--heritage-item start-->
        <h2>OUR TEAM</h2>
        <h5>a bunch of smart, young people who are
            always ready to take on a challenge</h5>
        <div class="tea-time col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <!--tea-time start-->
            <a href="#"><img src="sites/all/themes/flury/images/tea-time.jpg"></a>
            <h2>SONAKSHI MITTAL</h2>
            <div class="tea-hover">
                <!--tea-hover start-->
                <div class="box-tea">
                    <h3>SONAKSHI MITTAL</h3>
                    <p>this is the intro line</p>
                    <a href="#">{ DETAILS }</a>
                </div>
            </div>
        </div>
        <div class="tea-time col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <!--tea-time start-->
            <a href="#"><img src="sites/all/themes/flury/images/tea-time.jpg"></a>
            <h2>KARAN SINGH</h2>
            <div class="tea-hover">
                <!--tea-hover start-->
                <div class="box-tea">
                    <h3>KARAN SINGH</h3>
                    <p>this is the intro line</p>
                    <a href="#">{ DETAILS }</a>
                </div>
            </div>
        </div>
        <div class="tea-time col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <!--tea-time start-->
            <a href="#"><img src="sites/all/themes/flury/images/tea-time.jpg"></a>
            <h2>RIYA SANGHVI</h2>
            <div class="tea-hover">
                <!--tea-hover start-->
                <div class="box-tea">
                    <h3>RIYA SANGHVI</h3>
                    <p>this is the intro line</p>
                    <a href="#">{ DETAILS }</a>
                </div>
            </div>
        </div>
    </div><!--heritage-item end-->
        <?php print $messages; ?>
    <?php } else{

    ?>
        <?php print $messages; ?>
        <div class="container-fluid other-pink"><!--container-fluid start-->
            <div class="my-account">
            <h2><?php
                print render($tabs);
                if(isset($node->title)){ echo $node->title; }else{ echo ""; } ?></h2>
       <?php     print render($page['content']); ?>
            </div>
        </div><!--container-fluid end-->

    <?php } ?>





</div><!--container-fluid end-->

        <?php print render($page['footer']); ?>
