<!--
	Author: Lee Hiu Wa		SID:17004248S
			Leung Tin Yau 	SID:17063771S
			Liu Sze Nga		SID:17005386S
			Man Wing Long 	SID:17037452S

-->
<?php session_start(); ?>
<!DOCTYPE html>
<html>
   <head>
      <link href="css/loginstyle.css" rel="stylesheet">
      <style>
         /* _wrapper.css */
         .wrapper {
         z-index: 2;
         padding-left: 18px;
         padding-right: 18px;
         max-width: 1236px;
         margin-left: auto;
         margin-right: auto;
         }
         /* _timeline.css */
         .timeline {
         position: relative;
         height: 1080px;
         margin: 670px auto;
         padding: 160px 0;
         margin-left: -12px;
         }
         .timeline::before {
         content: "";
         position: absolute;
         top: 0;
         left: 10%;
         width: 4px;
         height: 100%;
         background-color: rgb(77, 77, 77);
         }
         @media (min-width: 800px){
         .timeline::before{
         left: 50%;
         margin-left: -2px;
         }
         }
         .timeline__item {
         margin-bottom: 100px;
         position: relative;
         }
         .timeline__item::after{
         content: "";
         clear: both;
         display: table;
         }
         .timeline__item:nth-child(2n) .timeline__item__content {
         float: right;
         }
         .timeline__item:nth-child(2n) .timeline__item__content::before {
         content: '';
         right: 40%;
         }
         @media (min-width: 800px){
         .timeline__item:nth-child(2n) .timeline__item__content::before{
         left: inherit;
         }
         }
         .timeline__item:nth-child(2n) .timeline__item__content__date {
         background-color: rgb(248, 158, 28);
         }
         .timeline__item:nth-child(2n) .timeline__item__content__description {
         color: rgb(77, 77, 77);
         }
         .timeline__item:last-child {
         margin-bottom: 0;
         }
         .timeline__item-bg {
         -webkit-transition: all 1s ease-out;
         transition: all 1s ease-out;
         color: rgb(77, 77, 77);
         }
         .timeline__item-bg:nth-child(2n) .timeline__item__station {
         background-color: rgb(77, 77, 77);
         }
         .timeline__item-bg:nth-child(2n) .timeline__item__content {
         background-color: rgb(248, 158, 28);
         }
         .timeline__item-bg:nth-child(2n) .timeline__item__content::before {
         background-color: rgb(77, 77, 77);
         }
         .timeline__item-bg:nth-child(2n) .timeline__item__content__description {
         color: #fff;
         }
         .timeline__item-bg .timeline__item__station {
         background-color:  rgb(77, 77, 77);
         }
         .timeline__item-bg .timeline__item__content {
         background-color: rgb(248, 158, 28);
         }
         .timeline__item-bg .timeline__item__content::before {
         background-color: rgb(77, 77, 77);
         }
         .timeline__item-bg .timeline__item__content__description {
         color: #fff;
         }
         .timeline__item__station {
         background-color: rgb(248, 158, 28);
         width: 40px;
         height: 40px;
         position: absolute;
         border-radius: 50%;
         padding: 10px;
         top: 0;
         left: 10%;
         margin-left: -33px;
         border: 4px solid rgb(77, 77, 77);
         -webkit-transition: all .3s ease-out;
         transition: all .3s ease-out;
         }
         @media (min-width: 800px){
         .timeline__item__station{
         left: 50%;
         margin-left: -30px;
         width: 60px;
         height: 60px;
         padding: 15px;
         border-width: 6px;
         }
         }
         .timeline__item__content {
         width: 80%;
         background: #fff;
         border: 4px solid rgb(77, 77, 77);
         padding: 20px 30px;
         border-radius: 6px;
         float: right;
         -webkit-transition: all .3s ease-out;
         transition: all .3s ease-out;
         }
         @media (min-width: 800px){
         .timeline__item__content{
         width: 40%;
         float: inherit;
         padding: 30px 40px;
         }
         }
         .timeline__item__content::before {
         content: '';
         position: absolute;
         left: 10%;
         background: rgb(77, 77, 77);
         top: 20px;
         width: 10%;
         height: 4px;
         z-index: -1;
         -webkit-transition: all .3s ease-out;
         transition: all .3s ease-out;
         }
         @media (min-width: 800px){
         .timeline__item__content::before{
         left: 40%;
         top: 30px;
         height: 4px;
         margin-top: -2px;
         }
         }
         .timeline__item__content__date {
         margin: 0;
         padding: 8px 12px;
         font-size: 18px;
         margin-bottom: 10px;
         background-color: rgb(248, 158, 28);
         color: rgb(77,77,77);
         display: inline-block;
         border-radius: 4px;
         border: 2px solid rgb(77, 77, 77);
         }
         .timeline__item__content__description {
         margin: 0;
         padding: 0;
         font-size: 18px;
         line-height: 24px;
         font-weight: 300;
         color: rgb(77, 77, 77);
         }
         @media (min-width: 800px){
         .timeline__item__content__description{
         font-size: 19px;
         line-height: 28px;
         }
         }
         #about-us-text{
         color: #333;
         float:left;
         font-size: 16px;
         letter-spacing: 1px;
         text-align: center;
         line-height: 31px;
         z-index: 3;
         }
         .hexa:after{
         content: ""; 
         position: absolute; 
         left: 0; 
         width: 0; 
         height: 0;
         border-left: 30px solid transparent;
         border-right: 30px solid transparent;
         border-top: 15px solid #f0f0f0;
         bottom: -15px;
         }
         .timeline {
         position: relative;
         padding: 0;
         width: 100%;
         margin-top: 20px;
         list-style-type: none;
         }
         .timeline:before {
         position: absolute;
         left: 50%;
         top: 0;
         content: ' ';
         display: block;
         width: 2px;
         height: 100%;
         margin-left: -1px;
         background: rgb(213,213,213);
         background: -moz-linear-gradient(top, rgba(213,213,213,0) 0%, rgb(213,213,213) 8%, rgb(213,213,213) 92%, rgba(213,213,213,0) 100%);
         background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(30,87,153,1)), color-stop(100%,rgba(125,185,232,1)));
         background: -webkit-linear-gradient(top, rgba(213,213,213,0) 0%, rgb(213,213,213) 8%, rgb(213,213,213) 92%, rgba(213,213,213,0) 100%);
         background: -o-linear-gradient(top, rgba(213,213,213,0) 0%, rgb(213,213,213) 8%, rgb(213,213,213) 92%, rgba(213,213,213,0) 100%);
         background: -ms-linear-gradient(top, rgba(213,213,213,0) 0%, rgb(213,213,213) 8%, rgb(213,213,213) 92%, rgba(213,213,213,0) 100%);
         background: linear-gradient(to bottom, rgba(213,213,213,0) 0%, rgb(213,213,213) 8%, rgb(213,213,213) 92%, rgba(213,213,213,0) 100%);
         z-index: 5;
         }
         .timeline li {
         padding: 2px 0;
         }
         .timeline .hexa{
         width: 16px;
         height: 10px;
         position: absolute;
         background: #00c4f3;
         z-index: 5;
         left: 0;
         right: 0;
         margin-left:auto;
         margin-right:auto;
         top: -30px;
         margin-top: 0;
         }
         .timeline .hexa:before {
         border-bottom: 4px solid #00c4f3;
         border-left-width: 8px;
         border-right-width: 8px;
         top: -4px;
         }
         .timeline .hexa:after {
         border-left-width: 8px;
         border-right-width: 8px;
         border-top: 4px solid #00c4f3;
         bottom: -4px;
         }
         .direction-l,
         .direction-r {
         float: none;
         width: 100%;
         text-align: center;
         }
         .flag-wrapper {
         text-align: center;
         position: relative;
         }
         .flag {
         position: relative;
         display: inline;
         background: rgb(255,255,255);
         font-weight: 600;
         z-index: 15;
         padding: 6px 10px;
         text-align: left;
         border-radius: 5px;
         }
         .direction-l .flag:after,
         .direction-r .flag:after {
         content: "";
         position: absolute;
         left: 50%;
         top: -15px;
         height: 0;
         width: 0;
         margin-left: -8px;
         border: solid transparent;
         border-bottom-color: rgb(255,255,255);
         border-width: 8px;
         pointer-events: none;
         }
         .direction-l .flag {
         -webkit-box-shadow: -1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
         -moz-box-shadow: -1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
         box-shadow: -1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
         }
         .direction-r .flag {
         -webkit-box-shadow: 1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
         -moz-box-shadow: 1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
         box-shadow: 1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
         }
         .time-wrapper {
         display: block;
         position: relative;
         margin: 4px 0 0 0;
         z-index: 14;
         line-height: 1em;
         vertical-align: middle;
         color: #fff;
         }
         .direction-l .time-wrapper {
         float: none;
         }
         .direction-r .time-wrapper {
         float: none;
         }
         .time {
         background: #00c4f3;
         display: inline-block;
         padding: 8px;
         }
         .desc {
         position: relative;
         margin: 0 0 0 0;
         padding: 1em;
         background: rgb(254,254,254);
         -webkit-box-shadow: 0 0 1px rgba(0,0,0,0.20);
         -moz-box-shadow: 0 0 1px rgba(0,0,0,0.20);
         box-shadow: 0 0 1px rgba(0,0,0,0.20);
         z-index: 15;
         }
         .direction-l .desc,
         .direction-r .desc {
         position: relative;
         margin: 1em 1em 0 1em;
         padding: 1em;
         z-index: 15;
         }
         .timeline {
         width: 660px;
         margin: 0 auto;
         margin-top: 20px;
         }
         .timeline li:after {
         content: "";
         display: block;
         height: 0;
         clear: both;
         visibility: hidden;
         }
         .timeline .hexa {
         left: -28px;
         right: auto;
         top: 8px;
         }
         .timeline .direction-l .hexa {
         left: auto;
         right: -28px;
         }
         .direction-l {
         position: relative;
         width: 310px;
         float: left;
         text-align: right;
         opacity:0;	
         }
         .direction-r {
         position: relative;
         width: 310px;
         float: right;
         text-align: left;
         opacity:0;
         }
         .flag-wrapper {
         display: inline-block;
         }
         .flag {
         font-size: 18px;
         }
         .direction-l .flag:after {
         left: auto;
         right: -16px;
         top: 50%;
         margin-top: -8px;
         border: solid transparent;
         border-left-color: rgb(254,254,254);
         border-width: 8px;
         }
         .direction-r .flag:after {
         top: 50%;
         margin-top: -8px;
         border: solid transparent;
         border-right-color: rgb(254,254,254);
         border-width: 8px;
         left: -8px;
         }
         .time-wrapper {
         display: inline;
         vertical-align: middle;
         margin: 0;
         }
         .direction-l .time-wrapper {
         float: left;
         }
         .direction-r .time-wrapper {
         float: right;
         }
         .time {
         padding: 5px 10px;
         }
         .direction-r .desc {
         margin: 1em 0 0 0.75em;
         }
         .my-aboutus-own-timeline{
         background-image:url('images/hisbg.jpg');
         background-size:100%;
         }
      </style>
      <link rel="stylesheet" href="css/style.css">
      <script src="js/jquery-3.2.1.min.js"></script> 
      <!-- Bootstrap core CSS -->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="css/modern-business.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="css/directionstyle.css" />
      <script src="js/modernizr.custom.97074.js"></script>	
      <style>
         #card {
         -webkit-transition: -webkit-transform 1s;
         -moz-transition: -moz-transform 1s;
         -o-transition: -o-transform 1s;
         transition: transform 1s;
         -webkit-transform-style: preserve-3d;
         -moz-transform-style: preserve-3d;
         -o-transform-style: preserve-3d;
         transform-style: preserve-3d;
         }
         #card.flipped {
         -webkit-transform: rotateY( 180deg );
         -moz-transform: rotateY( 180deg );
         -o-transform: rotateY( 180deg );
         transform: rotateY( 180deg );
         }
         #card figure {
         height:inherit;
         position: absolute;
         -webkit-backface-visibility: hidden;
         -moz-backface-visibility: hidden;
         -o-backface-visibility: hidden;
         backface-visibility: hidden;
         }
         #card .front {
         }
         #card .back {
         -webkit-transform: rotateY( 180deg );
         -moz-transform: rotateY( 180deg );
         -o-transform: rotateY( 180deg );
         transform: rotateY( 180deg );
         }
         #flip{
         cursor:pointer;
         }	
      </style>
      <link rel="stylesheet" href="css/style3.css" media="screen" />
      <script src="js/utils.js"></script>
      <script src="js/flip-card.js"></script>
   </head>
   <body>
      <!-- Navigation -->
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark fixed-top" style="background-color:black;">
         <div class="container">
               <?php if(isset($_SESSION['login'])): ?>
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
                     <button style="background-color:black;"type="submit" onclick="changebutton();">LogIn</button>
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
      <!-- Page Content -->
      <div class="container">
         <!-- Page Heading/Breadcrumbs -->
         <h1 class="mt-4 mb-3">About
         </h1>
         <ol class="breadcrumb">
            <li class="breadcrumb-item">
               <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">About</li>
         </ol>
         <!-- Intro Content -->
         <h1>Jollibee</h1>
         <script src="utils.js"></script>
         <script src="flip-card.js"></script>
         <div class="row">
            <div class="col-lg-6">
               <div id="card">
                  <figure class="front"><img class="img-fluid rounded mb-4" src="images/chef.jpg" alt="">
                  </figure>
                  <figure class="back"><img class="img-fluid rounded mb-4" src="images/chef2.jpg" alt="">
                  </figure>
               </div>
            </div>
            <div class="col-lg-6">
               <h2 id="flip">Our Business</h2>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat.</p>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, magni, aperiam vitae illum voluptatum aut sequi impedit non velit ab ea pariatur sint quidem corporis eveniet. Odit, temporibus reprehenderit dolorum!</p>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti eum ratione ex ea praesentium quibusdam? Aut, in eum facere corrupti necessitatibus perspiciatis quis?</p>
            </div>
         </div>
         <!-- /.row -->
         <!-- Team Members -->
         <h2>Our Team</h2>
         <div class="row">
            <div class="col-lg-4 mb-4">
               <div class="card h-100 text-center">
                  <div class="da-thumbs">
                     <li>
                        <a>
                           <img class="card-img-top" src="images/chef1.jpg" alt="">
                           <div>
                              <span>
                                 <h5>Dont Give Up</h5>
                                 ipsum ipsum ipsum
                              </span>
                           </div>
                        </a>
                     </li>
                  </div>
                  <div class="card-body">
                     <h4 class="card-title">Team Member</h4>
                     <h6 class="card-subtitle mb-2 text-muted">Position</h6>
                     <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
                  </div>
                  <div class="card-footer">
                     <a href="#">name@example.com</a>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 mb-4">
               <div class="card h-100 text-center">
                  <div class="da-thumbs">
                     <li>
                        <a>
                           <img class="card-img-top" src="images/member.png" alt="">
                           <div>
                              <span>
                                 <h5>Dont Give Up</h5>
                                 ipsum ipsum ipsum
                              </span>
                           </div>
                        </a>
                     </li>
                  </div>
                  <div class="card-body">
                     <h4 class="card-title">Team Member</h4>
                     <h6 class="card-subtitle mb-2 text-muted">Position</h6>
                     <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
                  </div>
                  <div class="card-footer">
                     <a href="#">name@example.com</a>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 mb-4">
               <div class="card h-100 text-center">
                  <div class="da-thumbs">
                     <li>
                        <a>
                           <img class="card-img-top" src="images/member1.png" alt="">
                           <div>
                              <span>
                                 <h5>Dont Give Up</h5>
                                 ipsum ipsum ipsum
                              </span>
                           </div>
                        </a>
                     </li>
                  </div>
                  <div class="card-body">
                     <h4 class="card-title">Team Member</h4>
                     <h6 class="card-subtitle mb-2 text-muted">Position</h6>
                     <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
                  </div>
                  <div class="card-footer">
                     <a href="#">name@example.com</a>
                  </div>
               </div>
            </div>
         </div>
         <!-- /.row -->
         <!-- Our Customers -->
         <!-- /.container -->
         <script type="text/javascript">
            $(document).ready(function() {
            	$(window).scroll(function() {
            		var windowBottom = $(this).scrollTop() + $(this).innerHeight();
            		$(".direction-r").each(function(){
            			var objectBottom = $(this).offset().top + $(this).outerHeight();
            			if (objectBottom < windowBottom) { 
            				$(this).animate({"opacity":"1"},2500);
            			}
            		});
            	});
            	$(window).scroll(function() {
            		var windowBottom = $(this).scrollTop() + $(this).innerHeight();
            		$(".direction-l").each(function(){
            			var objectBottom = $(this).offset().top + $(this).outerHeight();
            			if (objectBottom < windowBottom) { 
            				$(this).animate({"opacity":"1"},2500);
            			}
            		});
            	}); //invoke scroll-handler on page-load
            });
         </script>
      </div>
	  <!-- our history -->
      <div class="my-aboutus-own-timeline"style="clear:both;padding:15px;">
         <div class="container">
            <h1 class="my-4" style="color:white;">Our History</h1>
            <ul class="timeline">
               <!-- Item 1 -->
               <li>
                  <div class="direction-r">
                     <div class="flag-wrapper">
                        <span class="hexa"></span>
                        <span class="flag">Lorem ipsum.</span>
                        <span class="time-wrapper"><span class="time">Feb 2015</span></span>
                     </div>
                     <div class="desc">Lorem ipsum Nisi labore aute do aute culpa magna nulla voluptate exercitation deserunt proident.</div>
                  </div>
               </li>
               <!-- Item 2 -->
               <li>
                  <div class="direction-l">
                     <div class="flag-wrapper">
                        <span class="hexa"></span>
                        <span class="flag">Lorem ipsum Anim.</span>
                        <span class="time-wrapper"><span class="time">Dec 2014</span></span>
                     </div>
                     <div class="desc">Lorem ipsum In ut sit in dolor nisi ex magna eu anim anim tempor dolore aliquip enim cupidatat laborum dolore.</div>
                  </div>
               </li>
               <!-- Item 3 -->
               <li>
                  <div class="direction-r">
                     <div class="flag-wrapper">
                        <span class="hexa"></span>
                        <span class="flag">Lorem Occaecat.</span>
                        <span class="time-wrapper"><span class="time">July 2000</span></span>
                     </div>
                     <div class="desc">Lorem ipsum Minim labore Ut cupidatat quis qui deserunt proident fugiat pariatur cillum cupidatat reprehenderit sit id dolor consectetur ut.</div>
                  </div>
               </li>
               <li>
                  <div class="direction-l">
                     <div class="flag-wrapper">
                        <span class="hexa"></span>
                        <span class="flag">Lorem ipsum Anim.</span>
                        <span class="time-wrapper"><span class="time">Dec 1970</span></span>
                     </div>
                     <div class="desc">Lorem ipsum In ut sit in dolor nisi ex magna eu anim anim tempor dolore aliquip enim cupidatat laborum dolore.</div>
                  </div>
               </li>
               <li>
                  <div class="direction-r">
                     <div class="flag-wrapper">
                        <span class="hexa"></span>
                        <span class="flag">Lorem Occaecat.</span>
                        <span class="time-wrapper"><span class="time"> Jan 1958</span></span>
                     </div>
                     <div class="desc">Lorem ipsum Minim labore Ut cupidatat quis qui deserunt proident fugiat pariatur cillum cupidatat reprehenderit sit id dolor consectetur ut.</div>
                  </div>
               </li>
               <li>
                  <div class="direction-l">
                     <div class="flag-wrapper">
                        <span class="hexa"></span>
                        <span class="flag">Lorem ipsum Anim.</span>
                        <span class="time-wrapper"><span class="time">Dec 1970</span></span>
                     </div>
                     <div class="desc">Lorem ipsum In ut sit in dolor nisi ex magna eu anim anim tempor dolore aliquip enim cupidatat laborum dolore.</div>
                  </div>
               </li>
            </ul>
         </div>
      </div>
	  <!-- end of history line-->
      <!-- Footer -->
      <footer class="py-5" style="margin-top:2px;background-color:#111111">
         <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Jollibee 2017</p>
         </div>
         <!-- /.container -->
      </footer>
      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script type="text/javascript" src="js/jquery.hoverdir.js"></script>
      <script type="text/javascript">
         $(function() {
         
         	$(' .da-thumbs > li ').each( function() { $(this).hoverdir(); } );
         
         });
      </script>			
   </body>
</html>