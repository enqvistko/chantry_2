<?php
	ini_set("display_errors",1);
	error_reporting(E_ALL);
	
	require_once("admin/phpscripts/init.php");
	$tbl = "tbl_schedule";
	$getSchedule = getSchedule($tbl);
	
	
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
            	<li><a href="index.html">HOME</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="booking.html">BOOK A TOUR</a></li>
                <li><a href="contact.html">CONTACT</a></li>
                <li><a href="volunteers.html">VOLUNTEERS	</a></li>
                <li><a href="gallery.php">GALLERY</a></li>
                <li><a href="donations.html">DONATIONS</a></li>
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
                <li class="selected"><a href="booking.html">BOOK A TOUR</a></li>
                <li><a href="contact.html">CONTACT</a></li>
                <li><a href="volunteers.html">VOLUNTEERS	</a></li>
                <li><a href="gallery.php">GALLERY</a></li>
                <li><a href="donations.html">DONATIONS</a></li>
            </ul>
        </nav>
      </header>
      
      <div class="row">
      	<img src="img/booking_bg.jpg" alt="Booking Background" id="aboutBg" class="small-12 columns">
      </div>
      
      <div class="bookingNav row">
      	<a href="information.html" class = "small-4 small-push-1 columns">INFORMATION</a>
        <a href="schedule.html" class = "small-5 small-pull-1 columns">SCHEDULE & RATES</a>
        	
        </div>
     
     <div class = "row">
     	<section class = "small-12 columns" id = "scheduleInfo">
        	<h2>Schedule & Rates (2017)</h2>
            <p>We offer tours throughout the summer season from late May to mid-September. During June and July, we offer the tour daily, check below for the exact schedule. Note, it does change on a yearly basis. Please call ahead to ensure your place on the boat. 

Call: 519-797-5862
Toll: Free 1-866-797-5862</p>
        </section>
     </div>   
     
       <div id = "table" class= "row">
       <table class="small-12 striped columns">
  <thead>
    <tr>
      <th>MONTH</th>
      <th>DATE</th>
      <th>TIME</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>MAY</td>
      <td>27<br>28</td>
      <td>1:00pm<br>3:00pm</td>
    </tr>
    <tr>
      <td>JUNE</td>
      <td>3<br>
4<br>
10<br>
11<br>
17<br>
18<br>
24<br>
25</td>
      <td>1:00pm<br>
3:00pm</td>
    </tr>
    <tr>
      <td>JULY</td>
      <td>1 - 31<br>
(7 days a week)<br>
<br>
Weekends<br>
(Additional morning tour)</td>
      <td>1:00pm<br>
3:00pm<br>
<br>
9:30pm</td>
    </tr>
     <tr>
      <td>AUGUST</td>
      <td>1 - 31<br>
(7 days a week)<br>
<br>
Weekends<br>
(Additional morning tour)</td>
      <td>1:00pm<br>
3:00pm<br>
<br>
9:30pm</td>
    </tr>
     <tr>
      <td>SEPTEMBER</td>
      <td>1<br>
2<br>
3<br>
4</td>
      <td>1:00 pm<br>
3:00pm</td>
    </tr>
  </tbody>
  
  <thead class="noStriped">
    <tr>
      <th></th>
      <th>TOUR BASE OPEN</th>
      <th></th>
    </tr>
  </thead>
  
  <tbody>
  	<tr>
    	<td>MAY<br>
JUNE</td>
        <td>Weekends</td>
        <td>12:00pm - 5:30pm</td>
    </tr>
    <tr>
    	<td>JUlY<br>
AUGUST<br>
SEPTEMBER 1-4</td>
        <td>Everyday</td>
        <td>9:30am - 5:30pm</td>
    </tr>
  </tbody>
  
   <thead class="noStriped">
    <tr>
      <th></th>
      <th>Rates</th>
      <th></th>
    </tr>
  </thead>
  
  <tbody>
  	<tr>
    	<td>Children<br>
Adults<br>
Seniors</td>
        <td>$30.00</td>
        <td>includes HST</td>
    </tr>
    <tr class="noStriped">
    	<td></td>
        <td>*Special group rates avaliable<br>
MasterCard, Visa, Debit accepted</td>
	<td></td>

    </tr>
  </tbody>
</table>
</div>
     
      
      
      
      
      
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
                <a href="#" class="small-2 small-pull-4 medium-2 columns"><img src="assets/youtube.svg" alt="youtube icon"></a>
        
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
