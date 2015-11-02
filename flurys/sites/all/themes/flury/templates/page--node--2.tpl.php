<div class="container-fluid product">
    <!--container-fluid start-->
    <div class="bs-example">
        <!--bs-example start-->
        <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
            <!-- Wrapper for carousel items -->
            <div class="carousel-inner">
                <div class="active item"><img src="sites/all/themes/flury/images/product-bg.jpg" alt="First Slide"></div>
                <div class="item"><img src="sites/all/themes/flury/images/product-bg.jpg"" alt="Second Slide"></div>
                <div class="item"><img src="sites/all/themes/flury/images/product-bg.jpg"" alt="Third Slide"></div>
            </div>
            <!-- Carousel controls -->
            <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div>
    <!--bs-example end-->

    <div class="explore-div">
        <!--explore-div start-->
        <h2>MORE THAN 70 YEARS <span>of</span> PURE <span>Indulgence</span></h2>
    </div>
    <!--explore-div end-->
</div>
<!--container-fluid end-->
<div class="container-fluid product-navigation">
    <!--product-navigation start-->
    <ul class="product-menubar">
        <li><a href="#">New Products</a></li>
        <li><a href="product.html">All Products</a></li>
        <li><a href="#">Heritage Items</a></li>
        <li><a href="#">Theme Cakes</a></li>
        <li><a href="#">Birthday Cakes</a></li>
        <li><a href="#">Eggless Cakes</a></li>
        <li><a href="#">Cupcakes</a></li>
        <li><a href="#">Bread</a></li>
        <li><a href="#">Cake by slice</a></li>
        <li><a href="#">Savoury</a></li>
    </ul>
    <div class="form-area">
        sort by
    </div>
    <div class="container-fluid new-product">
        <!--new-product start-->
        <?php print render($page['content']); ?>

    </div> <!--new-product end-->

</div><!--product-navigation end-->

<div class="container-fluid nav">
    <ul class="nav-div">
        <li><a href="#">DELIVERY INFO <span>orders placed before 3:30pmwill despatch same day</span></a></li>
        <li><a href="#">RETURNS <span>if you are not 100% satisfied...</span></a></li>
        <li><a href="#">CONTACT US <span>we are here tohelp</span></a></li>
        <li><a href="#">GIFT VOUCHERS <span>a little something for someone special</span></a></li>
        <li><a href="#">INNOVATION <span>process behind flurys creations</span></a></li>
        <li><a href="#">PROMOTIONS <span>only available right here at flurys.com</span></a></li>
    </ul>
</div>

<?php print render($page['footer']); ?>