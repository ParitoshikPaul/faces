<div class="container-fluid home"><!--container-fluid start-->
    <div class="background-img"><img alt="" src="sites/all/themes/flury/images/home-bg.jpg"></div>
    <div class="background-text">
        <div class="explore-div">
            <!--explore-div start-->
            <h2>Providing Delectably<br>Sweet Experiences<br>Since 1927</h2>
            <a href="#">{ EXPLORE }</a>
        </div>
        <!--explore-div end-->
        <div class="arrow-icon">
            <a href="#" class="arrow" data-id=".down_arrow"></a>
            <p>NEW PRODUCTS</p>
        </div>
    </div>
</div><!--container-fluid END-->
<div class="section-one">
    <div class="container-fluid home-div down_arrow">
        <div class="background-img"><img alt="" src="sites/all/themes/flury/images/section-one-bg.jpg"></div>
        <div class="heritage-div">
            <!--heritage-div start-->
            <?php print $messages; ?>
            <h3>Five generations of fine confections</h3>
            <p>Flurys the legendary tearoom on fashionable Park Street in Kolkata was founded in 1927 by Mr and Mrs J Flurys. Presenting fine European traditional confections, it had soon become a popular meeting place for all ages. It introduced the city and many generations to authentic Swiss and International delicacies.</p>
            <div class="arrow-icon">
                <a class="arrow" href="#" data-id=".down_arrow2"></a>
                <p>HERITAGE ITEMS</p>
            </div>
        </div>
        <!--heritage-div end-->
    </div><!--home-div end-->
    <div class="section-two">
        <div class="container-fluid heritage-item down_arrow2">
            <!--heritage-item start-->
            <h2>HERITAGE ITEMS</h2>
            <h5>Our Original Recipes</h5>
            <div class="tea-time col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <!--tea-time start-->
                <a href="#"><img src="sites/all/themes/flury/images/tea-time.jpg"/></a>
                <h2>TEA TIME</h2>
                <div class="tea-hover">
                    <!--tea-hover start-->
                    <div class="box-tea">
                        <h3>TEA TIME</h3>
                        <p>a little something for every home</p>
                        <a href="#">{ EXPLORE }</a>
                    </div>
                </div>
            </div>
            <div class="tea-time col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <!--tea-time start-->
                <a href="#"><img src="sites/all/themes/flury/images/tea-time.jpg"/></a>
                <h2>COOKIE TINS</h2>
                <div class="tea-hover">
                    <!--tea-hover start-->
                    <div class="box-tea">
                        <h3>COOKIE TINS</h3>
                        <p>a little something for every home</p>
                        <a href="#">{ EXPLORE }</a>
                    </div>
                </div>
            </div>
            <div class="tea-time col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <!--tea-time start-->
                <a href="#"><img src="sites/all/themes/flury/images/tea-time.jpg"/></a>
                <h2>DESSERTS<br>YOUR WAY</h2>
                <div class="tea-hover">
                    <!--tea-hover start-->
                    <div class="box-tea">
                        <h3>DESSERTS<br>YOUR WAY</h3>
                        <p>a little something for every home</p>
                        <a href="#">{ EXPLORE }</a>
                    </div>
                </div>
            </div>
        </div>
        <!--heritage-item end-->
        <div class="banner-item">
            <!--banner-item start-->
            <div class="outline">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                    <!--left start-->
                    <h4>PLACE AN ORDER</h4>
                    <p>come pick it up from your closest Flurys bakery</p>
                </div>
                <!--left end-->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <!--right start-->
                    <a href="#">{ PICK YOUR LOCATION }</a>
                </div>
                <!--right end-->
            </div>
        </div>
        <!--banner-item end-->
        <div class="container-fluid introducing-item">
            <!--introducing-item start-->
            <h2>INTRODUCING</h2>
            <h5>Our new inventions</h5>

            <?php print render($page['content']); ?>
        </div>
        <!--introducing-item end-->
        <div class="banner-introducing">
            <!--banner-introducing start-->
            <div class="outline">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                    <!--left start-->
                    <h4>DIWALI SPECIAL GIFT PACK</h4>
                    <p>a delictable mix of your favourite items!</p>
                </div>
                <!--left end-->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <!--right start-->
                    <form action="action_page.php" method="post">
                        <input type="text" name="email" value="" placeholder=" Please fill your email id here" class="email" required>
                        <input type="submit" value="ENTER"  class="submit" required>
                    </form>
                </div>
                <!--right end-->
            </div>
        </div>
        <!--banner-introducing end-->

        <?php print render($page['footer']); ?>
