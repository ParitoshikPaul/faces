<div class="container-fluid contact"><!--container-fluid start-->
    <div class="background-img"><img alt="" src="sites/all/themes/flury/images/about-bg.jpg"></div>
    <div class="explore-div"><!--explore-div start-->
        <h2>We are here to help!</h2>
        <p>The shop is handled by a bunch of smart, young people who can help you wit h your
            selection. The Chefs and his team are available for advise and suggestions for your private
            parties or bulk orders.</p>
    </div><!--explore-div end-->
</div><!--container-fluid end-->

<div class="container-fluid nav contact-us"><!--contact-us start-->
    <ul class="nav-div">
        <li><a href="#"><span class="icons"><img src="sites/all/themes/flury/images/pink-item-icon.png"/></i>
			</span>OUR OUTLETS<span>Park Street: 18 Park Street Kolkata-700071</span></a></li>
        <li><a href="#"><span class="icons"><img src="sites/all/themes/flury/images/phone.png"/></i></span>CALL US<span>T : +91 33 4000 7453 Mon - fri 10am to 5pm</a></li>
        <li><a href="#">
			<span class="icons social-tw">
				<img src="sites/all/themes/flury/images/instgram.png"/>
				<img src="sites/all/themes/flury/images/tw.png"/>
				<img src="sites/all/themes/flury/images/facebook.png"/>
			</span>
                SOCIAL MEDIA<span>Follow Us @fluryskolkata and ask us any questions you may have.</span></a></li>
        <li><a href="#"><span class="icons"><img src="sites/all/themes/flury/images/msg.png"/></i>
</span>EMAIL US<span>Message anytime, we love getting messages from you.</span></a></li>
    </ul>
</div><!--contact-us end-->

<div class="container-fluid contact-form"><!--contact-form start-->
    <div class="col-sm-6">
        <h2>SAY HELLO!</h2>
        <form class="entityform" method="post">
            <div class="for-selection">
                <label for="first">First Name</label>
                <input type="text" class="text" name="first" required="">
            </div>
            <div class="fr-selection">
                <label for="email">Email Address</label>
                <input type="text" class="email" name="email" required="">
            </div>
            <div class="fr-selection">
                <label for="comment">What's on your mind?</label>
                <input type="text" class="comment" name="comment" required="">
            </div>
            <input type="submit" class="send" value="SEND IT">
        </form>
    </div>
    <div class="col-sm-6">
        <h2>GET IN TOUCH!</h2>
        <div class="location"><img src="sites/all/themes/flury/images/phone-white.png"/><span>+91 33 4000 7453</span></div>
        <div class="location"><img src="sites/all/themes/flury/images/msg-white.png"/><span>flurys@theparkhotel.com</span></div>
        <div class="location"><img src="sites/all/themes/flury/images/banner-item-icon.png"/>
            <span>This is address line 1,</span>
            <span>this is address line 2,</span>
            <span>Mumbai, India</span>
        </div>
    </div>
</div><!--contact-form start-->

<div class="container-fluid contact-map"><!--contact-map start-->
    <h2>CONTACT US</h2>
    <div class="col-sm-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30684875.41688314!2d64.43885504479675!3d20.146045506768722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2s!4v1444633077388" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <div class="col-sm-6">
        <h3>OUR STORES</h3>
        <div class="city-div">
            <form class="entityform" method="post">
                <select class="form-control form-city" id="select" name="select">
                    <option value="SELECT">CITY</option>
                    <option value="SELECT">KOLKATA</option>
                    <option value="SELECT">CHENNAI</option>
                </select>
            </form>
            <ul class="city">
                <li>
                    <span class="heading">KOLKATA</span>
                    <span class="adress">Park Street,18 Park Street, Kolkata-700071</span>
                    <span class="telephone">Telephone: 65004776</span>
                    <a href="#">View Map</a>
                    <i class="fa fa-map-marker"></i>
                </li>
                <li>
                    <span class="heading">CHENNAI</span>
                    <span class="adress">Park Street,18 Park Street, Kolkata-700071</span>
                    <span class="telephone">Telephone: 65004776</span>
                    <a href="#">View Map</a>
                    <i class="fa fa-map-marker"></i>
                </li>
                <li>
                    <span class="heading">KOLKATA</span>
                    <span class="adress">Park Street,18 Park Street, Kolkata-700071</span>
                    <span class="telephone">Telephone: 65004776</span>
                    <a href="#">View Map</a>
                    <i class="fa fa-map-marker"></i>
                </li>
            </ul>
        </div>
    </div>
</div><!--contact-map start-->

<?php print render($page['footer']); ?>
