<?php
	ini_set("display_errors",1);
	error_reporting(E_ALL);
	
	require_once("admin/phpscripts/init.php");
	$tbl = "tbl_gal";
	$getimg = getAll($tbl);
	
	
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chantry Island</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/app.css" />
  </head>
  <body>

  
  <h1 class = "hide">The Chantry Island site</h1>
  <a href="#"><img src="assets/up-arrow.svg" alt="arrow" id="arrow"></a>
  
 	 <div class = "top-bar show-for-medium">
        <ul class = "top-bar-left">
            <li><object data="assets/phone.svg" class = "topIcon" ></object></li>
            <li><a href="#">1.866.797.5862</a></li>
            <li><object data="assets/email.svg" class = "topIcon email"></object></li>
            <li>chantryisland@bmts.com</li>
       
   		</ul>
        
        <ul class = "top-bar-right">
        	<li><object data="assets/admin.svg" class = "topIcon"></object></li>
            <li><a href = "admin_login.php">Administrative Sign-in</a></li>
        	
        </ul>
 	</div>
    
    <header class = "row" id = "mainHeader">
    	<h2 class = "hide">Main Header</h2>
        <nav class = "show-for-small-only" id="mobileNav">
        <div class = "title-bar" data-responsive-toggle = "main-menu" data-hide-for = "medium">
            <button class = "menu-icon" type = "button" data-toggle = "main-menu"></button>
        </div>
        
        <div id = "main-menu">
        	<ul id = "mobileMainNav">
            	<li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="booking.html">Booking</a></li>
                <li id ="galPage"><a href="gallery.php">Gallery</a></li>
                <li><a href="news.html">News</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="donations.html">Donations</a></li>
            </ul>
            
            <div id="contactInfo">
            <ul id = "mobilePhone">
             <li><object data="assets/phone.svg" class = "mobileCon"></object></li>
            <li><a href="#">1.866.797.5862</a></li>
            </ul>
            
            <ul id = "mobileEmail">
            <li><object data="assets/email.svg" class = "mobileCon"></object></li>
            <li>chantryisland@bmts.com</li>
            </ul>
            
            <ul id = "mobileAdmin">
            	<li><object data="assets/admin.svg" class = "mobileCon"></object></li>
           		<li><a href = "admin_login.php">Administrative Sign-in</a></li>
            </ul>
         	</div>   
       	
        </div>
        </nav>
        
       <div id = "mainLogo" class = "small-centered medium-2 columns ">
        	<img src="assets/logo.svg" alt= "MHS logo">
        </div>
        
        <nav id = "desktopNav" class = "row show-for-medium">
        	<ul class= "medium-12 columns">
            	<li><a href="index.html">HOME</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="booking.html">BOOK A TOUR</a></li>
                <li><a href="contact.html">CONTACT</a></li>
                <li><a href="volunteers.html">VOLUNTEERS</a></li>
                <li class="selected"><a href="gallery.php">GALLERY</a></li>
                <li><a href="donations.html">DONATIONS</a></li>
            </ul>
        </nav>
      </header>
      
      <div class = "row">
      	<section id = "GalHead" class = "small-12 columns">
        	<h2>Gallery</h2>
            <p>Welcome to our photo gallery. This section includes pictures of Chantry Island and the area of 
            Lake Huron surrounding the Island. It also includes pictures of the lighthouse and keeper's cottage 
            inside and out, as well as photos of some of the birds and flowers native to the island.
			<br><br>
If you have photos of Chantry Island that you would like to share with us, connect with our Facebook page. </p>
        </section>
      </div>
      
     <div class = "row">
      <div class="imageHolder small-centered show-for-medium medium-centered columns hidden">
      <a class = "closeGal">&#10006</a>
      
      	<img src="" alt="image" class="mainImage hidden">
        <p class = "imgDesc hidden"></p>
      </div>
      </div>
      
      <section id = 'thumbsSec' class = "row">
   		<h2 class = "hide">Photo thumbs</h2>
    	<div class = "small-12 small-centered medium-centered columns" id="thumbNav">
      
       <?php
			if(!is_string($getimg)) {
				//echo "Object";
				while($row = mysqli_fetch_array($getimg)) {
					
					echo "<li id='{$row['gal_id']}'><img src=\"img/{$row['gal_thumb']}\" alt=\"{$row['gal_name']}\"></li>";
					
					
					
				}
			
			}else{
				//echo "String";
				echo "<p>{$getimg}</p>";
			}
			
		?>
        
        </div>
        </section>

      <footer id="mainFooterAbout">
      <div class = "row">
      	<h2 class = "hide">Main footer</h2>
      	
        <div id="footerNavWrap" class="small-12 columns">
        <div class = "show-for-small-only columns small-6" id="smallFooterNav">
        	<a href="index.html" id="navHead"><h2>Chantry Island</h2></a>
            <ul>
            	
                <li><a href="about.html">CHANTRY ISLAND</a></li>
                <li><a href="booking.html">BOOK A TOUR</a></li>
                <li><a href="gallery.php">GALLERY</a></li>
                <li><a href="news.html">NEWS & EVENTS</a></li>
                <li><a href="contact.html">CONTACT US</a></li>
            </ul>
        	
        </div>
        
        <div class = "show-for-small-only columns small-6" id = "links">
        	<h2>Official Links</h2>
            <ul>
            <li><a href="http://www.saugeenshores.ca/en/index.asp">Saugeen Shores</a></li>
                <li><a href="http://www.brucemuseum.ca/">Bruce Country Museum & Cultural Centre</a></li>
                <li><a href="http://www.brucecoastlighthouses.com/">Bruce Coast Lighthouse Tour</a></li>
                <li><a href="http://www.explorethebruce.com/">Explore the Bruce</a></li>
                <li><a href="http://www.southamptontennisclub.ca/">Southampton Tennis Club</a></li>
           </ul>     
        </div>
        </div>
        
        <div class = "show-for-medium columns medium-12 columns" id="sponsor">
        	<a href="http://www.saugeenshores.ca/en/index.asp" class = "medium-2 medium-push-1 columns"><img src="img/saugeen_shores.png" alt= "saugeen shores"></a>
            <a href="http://www.brucemuseum.ca/" class = "medium-2 medium-push-1 columns"><img src="img/museum.png" alt="musume"></a>
            <a href="http://www.brucecoastlighthouses.com/" class = "medium-2 medium-push-1 columns"><img src="img/lighthouse.png" alt="light house"></a>
            <a href="http://www.explorethebruce.com/" class = "medium-2 medium-push-1 columns"><img src="img/explore_bruce.png" alt="explore bruce"></a>
            <a href="http://www.southamptontennisclub.ca/" class = "medium-2 medium-push-1 columns end"><img src="img/tennise_club.png" alt="tennis club"></a>
        </div>
        
        <div class="show-for-medium columns" id="bigFooterNav">
        	<div class="medium-2 columns">
            	<a href="index.html"><h2>Home</h2></a>
            </div>
            
          	<div class="medium-2 columns">
            	<h2>ABOUT</h2>
                <a href="about.html" class="smallNav medium-2 columns">About</a>
                <a href="Restoration.html" class="smallNav medium-2 columns">Restoration</a>
                <a href="volunteers.html" class="smallNav medium-2 columns end">Volunteers</a>
            </div>
            
            <div class="medium-2 columns">
            	<h2>BOOK A TOUR</h2>
                <a href="booking.html" class="smallNav medium-2 columns">Booking info</a>
                <a href="schedule.html" class="smallNav medium-2 columns end">Schedule & Rates</a>
            </div>
            
            <div class="medium-2 columns">
            	<a href="gallery.php" ><h2>GALLERY</h2></a>
            </div>
            
            <div class="medium-2 columns">
            	<h2>NEWS & EVENTS</h2>
                <a href="newss.html" class="smallNav medium-2 columns">News & Events</a>
                <a href="donations.html" class="smallNav medium-2 columns end">Donations</a>
            </div>
            
            <div class="medium-2 columns">
            	<h2>CONTACT US</h2>
                <a href="contact.html" class="smallNav medium-2 columns">Contact</a>
                <a href="map.html" class="smallNav medium-2 columns end">Maps</a>
            </div>
        </div>
        
        <div id="socialCon" class="row">
            	<a href="#" class="small-2 small-push-4 medium-2 columns" id="facebook"><img src="assets/facebook.svg" alt="facebook icon"></a>
                <a href="https://www.youtube.com/channel/UC5BwiLq9hSIl9BZRq7Q4UNA?feature=watch" class="small-2 small-pull-4 medium-2 columns"><img src="assets/youtube.svg" alt="youtube icon"></a>
        
        </div>
        
        <div id="footerContact" class="row">
        	<div class="small-centered medium-centered columns">
            	<object data="assets/locate.svg" id="locate"></object>
                <a href="#">86 Saugeen St. Southampton, Ontario Canada N0H 2L0</a>
            </div>
            
            <div class="small-centered columns">
            	 <object data="assets/email.svg"></object>
            <a href="#">chantryisland@bmts.com</a>
            </div>
            
            <div class="small-centered columns">
            	<object data="assets/phone.svg"></object>
            	<a href="#">1.866.797.5862 | 519-797-5862</a>
            </div>
            
            <br>
            <p>© 2017 Chantry Island. All rights reserved.</p>
        </div>
        </div>
      </footer>
            
  


	
   <script src="js/vendor/jquery.min.js"></script>
    <script src="js/vendor/what-input.min.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
