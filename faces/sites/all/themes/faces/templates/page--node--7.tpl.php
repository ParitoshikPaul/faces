<?php global $base_url; ?>
	<div id="home_second" >
		<div class="container border">
		<div class="contact-container address">
		<div id="googlemap" style="width: 46%; height: 668px; float:left;"></div>
		<div class="contact-details">
		<span><h3 style="width:43%; background:#F16361; color:#fff;"><a href="<?php echo $base_url; ?>/?q=content/our-stores"  style="color:#fff;" >Our Stores</a></h3><h3><a href="<?php echo $base_url; ?>/?q=node/897" style="color:#000;">Shop In Shop</a></h3></span>
		<p><?php print render($page['content']); ?></p>
		</div>
		</div>
			</div> 
	</div>
	
		<div class="footer_bottom" data-sr="no reset" >
		  <div class="container"> 
			<div class="footer_left">
				<ul>
			<?php print render($page['footer-menu']);?>
				</ul>	
			</div> 
			<div class="footer_right">
				<?php print  render($page['footer']); ?>
			</div>
			</div>
		
	</div>
	<script type="text/javascript">
        var markers = [];
    function initialize() {
        
            var mapOptions = {
                zoom: 4,
                center: new google.maps.LatLng(23.2500, 77.4170),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            var map = new google.maps.Map(document.getElementById("googlemap"), mapOptions);
    
    
            var locations = [ 
               ['FACES Phoenix Market City Mall Shop no.UG-08, Upper Ground, Bangalore East, Mahdevpura, Near Krishnaranjapuram Flyover, Bengaluru, Karnataka - 560048', 12.985359, 77.708126, 'http://indiareputation.com/production/faces/sites/default/files/map1.png'],
               ['FACES LULU International Shopping Mall Pvt. Ltd. 33/629, Ground Floor, Edapally, Cochin, Kerala - 682024', 10.031748, 76.308728, 'http://indiareputation.com/production/faces/sites/default/files/map1.png'],
			   ['FACES Brookefield Estates Pvt. Ltd G-15, No.-67-71, Krishnaswamy Road, Coimbatore, Tamilnadu - 641 001', 10.996036, 77.005526, 'http://indiareputation.com/production/faces/sites/default/files/map1.png'],
               ['FACES Inorbit Cyberabad First Floor F-02, Survey No. 64, (Part) Madhapur Village, Serilimgampally Mandal Ranga Reddy District, Hyderabad, Andhra Pradesh - 500081', 17.509181, 78.352109, 'http://indiareputation.com/production/faces/sites/default/files/map1.png'],
               ['FACES INORBIT MALL, Whitefield G2-10, Ground Floor, #86, EPIP Industrial Area, Bangalore East Taluk, Next to sathya sai Hospital, Bengaluru, Karnataka - 560066', 12.969807, 77.749963, 'http://indiareputation.com/production/faces/sites/default/files/map1.png'],
               ['FACES Amanora Mall EB-GF-34A, Amanora Park Township, Village Sadesatranali (17- 1/2 Nali), Hadapsar, Taluka Haveli, Pune, Maharashtra - 411058', 18.496155, 73.800734, 'http://indiareputation.com/production/faces/sites/default/files/map1.png'],
               ['FACES International Business Park Unit No. G-34, Ground Floor, Oberoi Garden City, Off Western Express Higway, Goregaon (East), Mumbai, Maharashtra - 400063', 19.164811, 72.853272, 'http://indiareputation.com/production/faces/sites/default/files/map1.png'],
               ['FACES Grand Galleria Mall Connect Shop No. GGC-7, High Street Phoenix, Phoenix Mill Compound, Lower Parel, Mumbai, Maharashtra - 400013', 18.995333, 72.830038, 'http://indiareputation.com/production/faces/sites/default/files/map1.png'],
               ['FACES Empress Mall Store No.: G-2, Behind Raman Science Center, Dr.Benoji Mehta Rd, Nagpur, Maharashtra - 440018', 21.148610, 79.098408, 'http://indiareputation.com/production/faces/sites/default/files/map1.png'],
               ['FACES VR Surat C/o Dhanlakshmi Infrastructure Pvt. Ltd', 21.154686, 72.767517, 'http://indiareputation.com/production/faces/sites/default/files/map1.png'],
               ['FACES Infinity 2 Mall 230/ 2nd Floor, Linking Road, Malad (West), Mumbai, Maharashtra - 400064', 19.179193, 72.842624, 'http://indiareputation.com/production/faces/sites/default/files/map1.png'],
               ['FACES Viviana Eastern Express Highway, Next to Jupiter Hospital, Thane West, Maharashtra - 400606', 19.210868, 72.960820, 'http://indiareputation.com/production/faces/sites/default/files/map1.png'],
               ["FACES Phoenix Market City Mall 70 B, Ist Floor, Phoenix Marketcity Pune (Vamona Developers Pvt. Ltd.), S No. 207, Viman Nagar Road, Pune 411 014", 12.971599, 77.594563, 'http://indiareputation.com/production/faces/sites/default/files/map1.png'],
               ["FACES Phoenix Market city UG-64, upper Ground Floor, LBS Marg , Kurla (W), Mumbai, Maharashtra - 400070", 19.060455, 72.872372, 'http://indiareputation.com/production/faces/sites/default/files/map1.png'],
               ["FACES SELECT CITY WALK F 77, 1st floor, District Centre - Saket, New Delhi - 110017", 28.522483, 77.208288, 'http://indiareputation.com/production/faces/sites/default/files/map1.png'],
               ["FACES Pacific Mall Najafgarh road, Tagore Garden, New Delhi - 110018", 28.643895, 77.112830, 'http://indiareputation.com/production/faces/sites/default/files/map1.png'],
               ["FACES Sliver Arc Mall FF-10, Plot No.B-XX-622, Ferozepore Road, Ludhiana, Punjab - 141001", 30.905888, 75.835965, 'http://indiareputation.com/production/faces/sites/default/files/map1.png'],
               ["FACES World Trade Park Shop No.6, Lower Ground Floor, Block-A, Tower – A1, World Trade Park, Jawahar Lal Nehru Marg, Jaipur, Rajasthan - 302017", 26.858916, 75.806005, 'http://indiareputation.com/production/faces/sites/default/files/map1.png'],
               ['FACES Inorbit Mall G-40, Vadodara Alembic Road, Village Subhanpura, Vadodara, Gujrat - 391220', 22.327005, 73.159650, 'http://indiareputation.com/production/faces/sites/default/files/map1.png'],
               ['FACES EXPRESS AVENUE S-55, Ground floor, No. 49/50 L, Whites Road, Royapettah, Chennai, Tamilnadu - 600 014',13.053582, 80.260280, 'http://indiareputation.com/production/faces/sites/default/files/map1.png'],
               ['FACES PHOENIX MARKET CITY S-28, Second floor, 142, Velachery Main Road, Chennai, Tamilnadu - 600 042', 13.018706, 80.203131, 'http://indiareputation.com/production/faces/sites/default/files/map1.png'],
             ];  
        
            var marker, i;
            var infowindow = new google.maps.InfoWindow();
    
    
            google.maps.event.addListener(map, 'click', function() {
                infowindow.close();
            });
    
    
            for (i = 0; i < locations.length; i++) {
                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                    map: map,
                    icon: locations[i][3]
                });
    
                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() { 
                        infowindow.setContent(locations[i][0]);
                        infowindow.open(map, marker);
                    }
                })(marker, i));
        
                markers.push(marker);
            }
    
        }
        google.maps.event.addDomListener(window, 'load', initialize);
        
        function myClick(id){
            google.maps.event.trigger(markers[id], 'click');
        }
</script>
