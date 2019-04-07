<!--
	Author: Lee Hiu Wa		SID:17004248S
			Leung Tin Yau 	SID:17063771S
			Liu Sze Nga		SID:17005386S
			Man Wing Long 	SID:17037452S

-->
<!DOCTYPE html>
<html lang="en">
   <head>
      <link href="css/loginstyle.css" rel="stylesheet">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- Bootstrap core CSS -->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="css/modern-business.css" rel="stylesheet">
   </head>
   <body>
      <!-- Navigation -->
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark fixed-top" style="background-color:black;">
         <div class="container">
               <?php session_start(); if(isset($_SESSION['login'])): ?>
               <span
               id="login-button"
               style="cursor:pointer;"
               onclick="javascript:location.href='php/logout.php'"
               class='navbar-brand'>
                 Logout
               </span>
             <?php else:?>
               <span
               id="login-button"
               style="cursor:pointer;"
               onclick="document.getElementById('id01').style.display='block';"
               class='navbar-brand'>
                 Login
               </span>
             <?php endif;?>
            <div id="id01" class="modal">
               <form class="modal-content" action="php/login.php" method="post">
                  <div class="container" style="padding:15px 35px;">
                     <label>UserName</label>
                     <input type="text" placeholder="Enter your username" name="uname" required>
                     <label>Password</label>
                     <input type="password" placeholder="Enter your password" name="pw" required>
                     <button style="background-color:black;" type="submit" onclick="changebutton();">LogIn</button>
                  </div>
                  <div class="container" style="background-color:#f1f1f1;">
                     <button type="button" class="registerb" onclick="window.open('regform.html','registerForm',
                        'resizable=1,width=1000,height=800,left=0,bottom=0');">Register</button>
                     <button type="button" 
                        onclick="document.getElementById('id01').style.display='none'"
                        class="cancelb">Cancel</button>
                  </div>
               </form>
            </div>
            <a class="navbar-brand" href="myhome.php" id="homelink">Jollibee</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
               <ul class="navbar-nav ml-auto">
                  <?php
                     if(isset($_SESSION['login']))
                        echo '<li class="nav-item"><a class="nav-link" href="personal.php">' . $_COOKIE["user"] . '</a></li>';
                  ?>
                  <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                  <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                  <li class="nav-item"><a class="nav-link" href="menu.php">Menu</a></li>
                  <li class="nav-item"><a class="nav-link" href="event-home.php">Event</a></li>
               </ul>
            </div>
         </div>
      </nav>
	  <!-- end of navbar -->
      <!-- Page Content -->
      <div class="container">
         <!-- Page Heading/Breadcrumbs -->
         <h1 class="mt-4 mb-3">
            Contact Us
			</h1>
            <p>
               Always stay by you
            </p>
         <ol class="breadcrumb">
            <li class="breadcrumb-item">
               <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Contact</li>
         </ol>
         <!-- Content Row -->
         <div class="row">
            <!-- Map Column -->
            <div class="col-lg-8 mb-4">
               <!-- Embedded Google Map -->
               <div id="map" style="width:100%;height:500px"></div>
               <script>
                  function myMap() {
                    var myCenter = new google.maps.LatLng(22.304193, 114.252056);
                    var myCenter1 = new google.maps.LatLng(22.324470, 114.216283);
                    var myCenter2 = new google.maps.LatLng(22.286702, 114.217411);
                    var myCenter3 = new google.maps.LatLng(22.385299, 114.204664);
                    var myCenter4 = new google.maps.LatLng(22.337337, 114.174471);
                    var myCenter5 = new google.maps.LatLng(22.286621, 114.151115);
                    var mapCanvas = document.getElementById("map");
                    var mapOptions = {center: myCenter, zoom: 13};
                    var map = new google.maps.Map(mapCanvas, mapOptions);
                    var marker = new google.maps.Marker({position:myCenter,icon:'images/icon.gif' });
                     var marker1 = new google.maps.Marker({position:myCenter1,icon:'images/icon.gif'});
                     var marker2 = new google.maps.Marker({position:myCenter2,icon:'images/icon.gif'});
                     var marker3 = new google.maps.Marker({position:myCenter3,icon:'images/icon.gif'});
                     var marker4 = new google.maps.Marker({position:myCenter4,icon:'images/icon.gif'});
                     var marker5 = new google.maps.Marker({position:myCenter5,icon:'images/icon.gif'});
                    marker.setMap(map);
                    marker1.setMap(map);
                    marker2.setMap(map);
                    marker3.setMap(map);
                    marker4.setMap(map);
                    marker5.setMap(map);
                    
                    google.maps.event.addListener(marker,'click',function() {
                  	var infowindow = new google.maps.InfoWindow({
                  	  content:"<img class='bottom'src='images/mt_03.jpg' height='100' > <a href='https://www.google.com.hk/maps/place/%E9%83%BD%E6%9C%83%E9%A7%85/@22.3041218,114.2493801,17z/data=!4m8!1m2!2m1!1sMetro+Town!3m4!1s0x340403ef76689d41:0xb0e5a0bd8d2f1d79!8m2!3d22.304216!4d114.251974?hl=zh-TW'target='_blank'><big>Metro Town</big></a><br>Tel: 3000 0001<br> 	8 King Ling Road, Tseung Kwan O &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  OPEN DAILY 11:30AM ~ 10:30 PM"
                  	});
                    infowindow.open(map,marker);
                    });
                  	google.maps.event.addListener(marker1,'click',function() {
                  	var infowindow1 = new google.maps.InfoWindow({
                  	  content:"<img class='bottom' class='right'src='images/mt_01.jpg'> <a href='https://www.google.com.hk/maps/place/%E6%B7%98%E5%A4%A7%E5%95%86%E5%A0%B4/@22.324686,114.2144866,17z/data=!4m8!1m2!2m1!1sAmoy+Plaza!3m4!1s0x340406b54b315837:0x8cfbdb9445b5f21a!8m2!3d22.3244781!4d114.2163556?hl=zh-TW'target='_blank'><big>Amoy Plaza</big></a><br>Tel: 3000 0000<br>  77 Ngau Tau Kok Road, Kowloon Bay &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; OPEN DAILY 11:30 AM ~ 10:30 PM "
                  	});
                    infowindow1.open(map,marker1);
                    });
                     google.maps.event.addListener(marker2,'click',function() {
                  	var infowindow2 = new google.maps.InfoWindow({
                  	  content:"<img class='bottom'src='images/mt_02.jpg' height='180' ><a href='https://www.google.com.hk/maps/place/%E5%A4%AA%E5%8F%A4%E5%9F%8E%E4%B8%AD%E5%BF%83/@22.2867177,114.2152187,17z/data=!3m1!4b1!4m5!3m4!1s0x3404017317113e17:0x69d7494516e2615a!8m2!3d22.2867128!4d114.2174074?hl=zh-TW'target='_blank'> <big>Two Cityplaza</big> </a><br>Tel: 3000 0002<br> 18 Taikoo Shing Road, Taikoo Shing &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; OPEN DAILY 11:30 AM ~ 10:30 PM"
                  	});
                    infowindow2.open(map,marker2);
                    });
                    google.maps.event.addListener(marker3,'click',function() {
                  	var infowindow3 = new google.maps.InfoWindow({
                  	  content:"<img class='bottom'src='images/mt_04.jpg' height='100' ><a href='https://www.google.com.hk/maps/place/%E7%BD%AE%E5%AF%8C%E7%AC%AC%E4%B8%80%E5%9F%8E/@22.3852449,114.2023493,17z/data=!3m1!4b1!4m5!3m4!1s0x3404064597285b5f:0xe0ee08d127475f28!8m2!3d22.38524!4d114.204538?hl=zh-TW'target='_blank'>  <big>Fortune City One</big></a><br>Tel: 3000 0004<br> 1-2 Ngan Shing Street, Shatin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; OPEN DAILY 11:30 AM ~ 10:30 PM"
                  	});
                    infowindow3.open(map,marker3);
                    });
                    google.maps.event.addListener(marker4,'click',function() {
                  	var infowindow4 = new google.maps.InfoWindow({
                  	  content:"<img class='bottom'src='images/mt_05.jpg' height='150' ><a href='https://www.google.com.hk/maps/place/Festival+Walk/@22.3376986,114.1719876,17z/data=!4m8!1m2!2m1!1sFestival+Walk!3m4!1s0x34040731464f1e7f:0xfd4f7b8a34403120!8m2!3d22.3372971!4d114.1745273?hl=zh-TW'target='_blank'> <big>Festival Walk</big></a><br>Tel: 3000 0003<br> 80 Tat Chee Avenue, Kowloon Tong  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPEN DAILY 11:30 AM ~ 10:30 PM"
                  	});
                    infowindow4.open(map,marker4);
                    });
                  	google.maps.event.addListener(marker5,'click',function() {
                  	var infowindow5 = new google.maps.InfoWindow({
                  	  content:"<img class='bottom'src='images/mt_06.jpg' height='300' ><a href='https://www.google.com.hk/maps/place/%E4%B8%8A%E7%92%B0%E5%BE%B7%E8%BC%94%E9%81%93%E4%B8%AD288%E8%99%9F%E6%98%93%E9%80%9A%E5%95%86%E6%A5%AD%E5%A4%A7%E5%BB%88/@22.2872967,114.1500888,16.75z/data=!4m5!3m4!1s0x3404007c345e961b:0x3e669f5eb71bac56!8m2!3d22.2865852!4d114.1511115?hl=zh-TW'target='_blank'>  <big>Eton Building</big></a><br>Tel: 3000 0004<br> 288 Des Voeux Rd Central Sheung Wan &nbsp;&nbsp;&nbsp;&nbsp;OPEN DAILY 11:30 AM ~ 10:30 PM"
                  	});
                    infowindow5.open(map,marker5);
                    });
                  }
               </script>
               <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA6_3eNDxrbl3tfjiBomeyxC5O2_5lbtQg&callback=myMap"></script>
            </div>
            <!-- Contact Details Column -->
            <div class="col-lg-4 mb-4">
               <h3>Contact Details</h3>
               <p>
                  3481 Melrose Place
                  <br>Beverly Hills, CA 90210
                  <br>
               </p>
               <p>
                  <abbr title="Phone">P</abbr>: (123) 456-7890
               </p>
               <p>
                  <abbr title="Email">E</abbr>:
                  <a href="mailto:name@example.com">name@example.com
                  </a>
               </p>
               <p>
                  <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM
               </p>
            </div>
         </div>
         <!-- Contact Form -->
         <div class="row">
            <div class="col-lg-8 mb-4">
               <h3>Send us a Message</h3>
               <form name="sentMessage" id="contactForm" novalidate>
                  <div class="control-group form-group">
                     <div class="controls">
                        <label>Full Name:</label>
                        <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                        <p class="help-block"></p>
                     </div>
                  </div>
                  <div class="control-group form-group">
                     <div class="controls">
                        <label>Phone Number:</label>
                        <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                     </div>
                  </div>
                  <div class="control-group form-group">
                     <div class="controls">
                        <label>Email Address:</label>
                        <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                     </div>
                  </div>
                  <div class="control-group form-group">
                     <div class="controls">
                        <label>Message:</label>
                        <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                     </div>
                  </div>
                  <div id="success"></div>
                  <!-- For success/fail messages -->
                  <button type="submit" class="btn btn-primary" id="sendMessageButton">Send Message</button>
               </form>
            </div>
         </div>
      </div>
      <!-- /.container -->
      <footer class="py-5" style="margin-top:2px;background-color:#111111">
         <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Jollibee 2017</p>
         </div>
         <!-- /.container -->
      </footer>
      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Contact form JavaScript -->
      <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <script src="js/jqBootstrapValidation.js"></script>
      <script src="js/contact_me.js"></script>
   </body>
</html>