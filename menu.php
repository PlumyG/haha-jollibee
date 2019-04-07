<!--
	Author: Lee Hiu Wa		SID:17004248S
			Leung Tin Yau 	SID:17063771S
			Liu Sze Nga		SID:17005386S
			Man Wing Long 	SID:17037452S

-->
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <link href="css/loginstyle.css" rel="stylesheet">
      <link rel="stylesheet" href="mygpwk.css">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <script type="text/javascript" src="js/modernizr.custom.69142.js"></script> 
      <script type="text/javascript" src="js/jquery.bighover.js"></script>
      <script src="js/jquery-3.2.1.min.js"></script> 
      <title>Modern Business - Start Bootstrap Template</title>
      <!-- Bootstrap core CSS -->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="css/modern-business.css" rel="stylesheet">
      <link rel="stylesheet" href="css/dropdownstyle.css">
      <link href="css/smart_cart.min.css" rel="stylesheet" type="text/css"/>
      <style>
         .my-cart-btn {
         cursor:pointer;
         position:absolute;
         bottom:5px;
         left:5px;
         width:15%;
         float:left;
         }
         .light:hover{
         animation:light 1s;
         -webkit-animation:light 1s;
         }
         @keyframes light {
         0% {
         background-position:-600px; 
         }
         100% { 
         background-position:0px; 
         }
         }
         @-webkit-keyframes light {
         0% {
         background-position:-600px; 
         }
         100% { 
         background-position:0px; 
         }
         }
         .fade-in-effect{
         opacity:0;
         }
         aside{
         overflow-y:scroll;
         max-height:750px;
         min-height:500px;
         z-index:99;
         }
         .sc-product-item{
         height:100%;
         }
      </style>
   </head>
   <body>
      <dl class="list nigiri">
         <!-- left side menu for recepit -->
         <dt>Menu</dt>
         <!--<dd><a href="#my-pizza-menu">Pizza</a></dd>-->
         <dd><a href="#my-pasta-menu">Pasta</a></dd>
         <dd><a href="#my-drink-menu">Drinks</a></dd>
         <dd><a href="#my-snack-menu">Snacks</a></dd>
      </dl>
      <script src="js/makisu.js"></script> 
      <script>
         // The `enabled` flag will be `false` if CSS 3D isn't available
         if ( $.fn.makisu.enabled ) {
         
             var $sashimi = $( '.sashimi' );
             var $nigiri = $( '.nigiri' );
             var $maki = $( '.maki' );
         
             // Create Makisus
         
             $nigiri.makisu({
                 selector: 'dd',
                 overlap: 0.85,
                 speed: 1.7
             });
         
             $maki.makisu({
                 selector: 'dd',
                 overlap: 0.6,
                 speed: 0.85
             });
         
             $sashimi.makisu({
                 selector: 'dd',
                 overlap: 0.2,
                 speed: 0.5
             });
         
             // Open all
             
             $( '.list' ).makisu( 'open' );
         
             // Toggle on click
         
             $( '.toggle' ).on( 'click', function() {
                 $( '.list' ).makisu( 'toggle' );
             });
         
             // Disable all links
         
             $( '.demo a' ).click( function( event ) {
                 event.preventDefault();
             });
         
         } else {
         
             $( '.warning' ).show();
         }
      </script>    
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
      <!-- end of Navigation -->
      <aside class="col-md-2" style="position:fixed;right:12px;background-color:white'">
         <form action="checkout.php" method="POST">
            <div id="smartcart"></div>
            <input name="business" value="dipumedayil@gmail.com" type="hidden">            
            <input name="currency_code" value="USD" type="hidden">
            <input name="return" value="http://www.yourdomain.com/yoursuccessurl" type="hidden">            
            <input name="cancel_return" value="http://www.yourdomain.com/yourcancelurl" type="hidden">
            <input name="cmd" value="_cart" type="hidden">    
            <input name="upload" value="1" type="hidden">            
         </form>
      </aside>
      <!-- Page Content -->
      <div class="container">
         <!-- Page Heading/Breadcrumbs -->
         <h1 class="mt-4 mb-3">
            Menu  </h1>      
            <h5>Always wait for you</h5>
         <ol class="breadcrumb">
            <li class="breadcrumb-item">
               <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Menu</li>
         </ol>
      </div>
      <div id="my-pizza-menu">
         <div class="container">
           
            <!--my nav-->
            <!-- Portfolio Section -->
            
               </div>
            </div>
         </div>
         <div id="my-pasta-menu" style="background-color:#222222;color:white;">
            <div class="container">
               <h3 class="my-4">Pasta</h3>
               <div class="row" style="color:black;">
                  <div class="col-lg-3 col-sm-6 portfolio-item fade-in-effect">
                     <div class="card h-100">
                        <div class="sc-product-item thumbnail">
                           <img class="card-img-top bh-image" data-name="product_image" id="bh-9" src="images/menu-pasta1.jpg" alt="">
                           <div class="card-body">
                              <h5 data-name="product_name">Product 9</h5>
                              <input name="product_price" value="2990.50" type="hidden" />
                              <input name="product_id" value="12" type="hidden" />
                              <p>Meal description</p>
                              <br/><br/>
                              <div class="my-cart-btn">
                                 <button class="sc-add-to-cart btn btn-success btn-sm pull-right">Add to cart</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 portfolio-item fade-in-effect">
                     <div class="card h-100">
                        <div class="sc-product-item thumbnail">
                           <img class="card-img-top bh-image" data-name="product_image" id="bh-10" src="images/menu-pasta2.jpg" alt="">
                           <div class="card-body">
                              <h5 data-name="product_name">Product 10</h5>
                              <input name="product_price" value="2990.50" type="hidden" />
                              <input name="product_id" value="12" type="hidden" />
                              <p>Meal description</p>
                              <br/><br/>
                              <div class="my-cart-btn">
                                 <button class="sc-add-to-cart btn btn-success btn-sm pull-right">Add to cart</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 portfolio-item fade-in-effect">
                     <div class="card h-100">
                        <div class="sc-product-item thumbnail">
                           <img class="card-img-top bh-image" data-name="product_image" id="bh-11" src="images/menu-pasta3.jpg" alt="">
                           <div class="card-body">
                              <h5 data-name="product_name">Product 11</h5>
                              <input name="product_price" value="2990.50" type="hidden" />
                              <input name="product_id" value="12" type="hidden" />
                              <p>Meal description</p>
                              <br/><br/>
                              <div class="my-cart-btn">
                                 <button class="sc-add-to-cart btn btn-success btn-sm pull-right">Add to cart</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 portfolio-item fade-in-effect">
                     <div class="card h-100">
                        <div class="sc-product-item thumbnail">
                           <img class="card-img-top bh-image" data-name="product_image" id="bh-12" src="images/menu-pasta4.jpg" alt="">
                           <div class="card-body">
                              <h5 data-name="product_name">Product 12</h5>
                              <input name="product_price" value="2990.50" type="hidden" />
                              <input name="product_id" value="12" type="hidden" />
                              <p>Meal description</p>
                              <br/><br/>
                              <div class="my-cart-btn">
                                 <button class="sc-add-to-cart btn btn-success btn-sm pull-right">Add to cart</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>        
               </div>
            </div>
         </div>
         <div id="my-drink-menu">
            <div class="container">
               <h3 class="my-4">Drinks</h3>
               <div class="row">
                  
                  <div class="col-lg-3 col-sm-6 portfolio-item fade-in-effect">
                     <div class="card h-100">
                        <div class="sc-product-item thumbnail">
                           <img class="card-img-top bh-image" id="bh-26"  data-name="product_image" src="images/menu-drink4.jpg" alt="">
                           <div class="card-body">
                              <h5 data-name="product_name">Product 26</h5>
                              <input name="product_price" value="2990.50" type="hidden" />
                              <input name="product_id" value="12" type="hidden">
                              <p>Meal description</p>
                              <br/><br/>
                              <div class="my-cart-btn">
                                 <button class="sc-add-to-cart btn btn-success btn-sm pull-right">Add to cart</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 portfolio-item fade-in-effect">
                     <div class="card h-100">
                        <div class="sc-product-item thumbnail">
                           <img class="card-img-top bh-image" id="bh-27"  data-name="product_image" src="images/menu-drink5.jpg" alt="">
                           <div class="card-body">
                              <h5 data-name="product_name">Product 27</h5>
                              <input name="product_price" value="2990.50" type="hidden" />
                              <input name="product_id" value="12" type="hidden">
                              <p>Meal description</p>
                              <br/><br/>
                              <div class="my-cart-btn">
                                 <button class="sc-add-to-cart btn btn-success btn-sm pull-right">Add to cart</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 portfolio-item fade-in-effect">
                     <div class="card h-100">
                        <div class="sc-product-item thumbnail">
                           <img class="card-img-top bh-image" id="bh-28" data-name="product_image" src="images/menu-drink6.jpg" alt="">
                           <div class="card-body">
                              <h5 data-name="product_name">Product 28</h5>
                              <input name="product_price" value="2990.50" type="hidden" />
                              <input name="product_id" value="12" type="hidden">
                              <p>Meal description</p>
                              <br/><br/>
                              <div class="my-cart-btn">
                                 <button class="sc-add-to-cart btn btn-success btn-sm pull-right">Add to cart</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 portfolio-item fade-in-effect">
                     <div class="card h-100">
                        <div class="sc-product-item thumbnail">
                           <img class="card-img-top bh-image" id="bh-29" data-name="product_image" src="images/menu-drink7.jpg" alt="">
                           <div class="card-body">
                              <h5 data-name="product_name">Product 29</h5>
                              <input name="product_price" value="2990.50" type="hidden" />
                              <input name="product_id" value="12" type="hidden">
                              <p>Meal description</p>
                              <br/><br/>
                              <div class="my-cart-btn">
                                 <button class="sc-add-to-cart btn btn-success btn-sm pull-right">Add to cart</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="my-snack-menu" style="background-color:#222222;color:white;">
            <div class="container">
               <h3 class="my-4">Snacks</h3>
               <div class="row" style="color:black;">
                  <div class="col-lg-3 col-sm-6 portfolio-item fade-in-effect">
                     <div class="card h-100">
                        <div class="sc-product-item thumbnail">
                           <img class="card-img-top bh-image" data-name="product_image" id="bh-30" src="images/menu-snack1.jpg" alt="">
                           <div class="card-body">
                              <h5 data-name="product_name">Product 30</h5>
                              <input name="product_price" value="2990.50" type="hidden" />
                              <input name="product_id" value="12" type="hidden">
                              <p>Meal description</p>
                              <br/><br/>
                              <div class="my-cart-btn">
                                 <button class="sc-add-to-cart btn btn-success btn-sm pull-right">Add to cart</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 portfolio-item fade-in-effect">
                     <div class="card h-100">
                        <div class="sc-product-item thumbnail">
                           <img class="card-img-top bh-image" data-name="product_image" id="bh-31" src="images/menu-snack2.jpg" alt="">
                           <div class="card-body">
                              <h5 data-name="product_name">Product 31</h5>
                              <input name="product_price" value="2990.50" type="hidden" />
                              <input name="product_id" value="12" type="hidden">
                              <p>Meal description</p>
                              <br/><br/>
                              <div class="my-cart-btn">
                                 <button class="sc-add-to-cart btn btn-success btn-sm pull-right">Add to cart</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 portfolio-item fade-in-effect">
                     <div class="card h-100">
                        <div class="sc-product-item thumbnail">
                           <img class="card-img-top bh-image" data-name="product_image" id="bh-32" src="images/menu-snack3.jpg" alt="">
                           <div class="card-body">
                              <h5 data-name="product_name">Product 32</h5>
                              <input name="product_price" value="2990.50" type="hidden" />
                              <input name="product_id" value="12" type="hidden">
                              <p>Meal description</p>
                              <br/><br/>
                              <div class="my-cart-btn">
                                 <button class="sc-add-to-cart btn btn-success btn-sm pull-right">Add to cart</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 portfolio-item fade-in-effect">
                     <div class="card h-100">
                        <div class="sc-product-item thumbnail">
                           <img class="card-img-top bh-image" data-name="product_image" id="bh-33" src="images/menu-snack4.jpg" alt="">
                           <div class="card-body">
                              <h5 data-name="product_name">Product 33</h5>
                              <input name="product_price" value="2990.50" type="hidden" />
                              <input name="product_id" value="12" type="hidden">
                              <p>Meal description</p>
                              <br/><br/>
                              <div class="my-cart-btn">
                                 <button class="sc-add-to-cart btn btn-success btn-sm pull-right">Add to cart</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               
            
             
           
               </div>
            </div>
         </div>
      </div>
      <!-- Project One -->
      <!-- begin wwww.htmlcommentbox.com -->
      <div class="container" style="font-size:22px;">
         <div id="HCB_comment_box"><a href="http://www.htmlcommentbox.com">HTML Comment Box</a> is loading comments...</div>
         <link rel="stylesheet" type="text/css" href="//www.htmlcommentbox.com/static/skins/bootstrap/twitter-bootstrap.css?v=0" />
         <script type="text/javascript" id="hcb"> /*<!--*/ if(!window.hcb_user){hcb_user={};} (function(){var s=document.createElement("script"), l=hcb_user.PAGE || (""+window.location).replace(/'/g,"%27"), h="//www.htmlcommentbox.com";s.setAttribute("type","text/javascript");s.setAttribute("src", h+"/jread?page="+encodeURIComponent(l).replace("+","%2B")+"&mod=%241%24wq1rdBcg%24P5AHAXVfJ6UWzUEJSSlnZ%2F"+"&opts=16862&num=10&ts=1511523589695");if (typeof s!="undefined") document.getElementsByTagName("head")[0].appendChild(s);})(); /*-->*/ </script>
      </div>
      <footer class="py-5" style="margin-top:2px;background-color:#111111">
         <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Jollibee 2017</p>
         </div>
         <!-- /.container -->
      </footer>
      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/jquery.bighover.js"></script>
      <script type="text/javascript">
         //chaging position, possible values are : 'right', 'top-right', 'top', 'top-left', 'left', 'bottom-left', 'bottom', and 'bottom-right' (default to 'bottom-right')
         $('#bh-1').bighover({
         height: '350',
         position: 'bottom'
         });
         
         $('#bh-2').bighover({
         height: '350',
           position: 'bottom'
         });
         
         //specifyng height
         $('#bh-3').bighover({
           height: '350',
           position: 'bottom'
         });
         //specifying width
         $('#bh-4').bighover({
           width: '450',
           position: 'bottom'
         });
         
         $('#bh-5').bighover({
           height: '350',
           position: 'top'
         });
         
         $('#bh-6').bighover({
           height: '350',
           position: 'top'
         });
         
         $('#bh-7').bighover({
           height: '350',
           position: 'top'
         });
         
         $('#bh-8').bighover({
           height: '350',
           position: 'top'
         });
         
         $('#bh-9').bighover({
         height: '350',
         position: 'bottom'
         });
         $('#bh-10').bighover({
         height: '350',
         position: 'bottom'
         });
         $('#bh-11').bighover({
         height: '350',
         position: 'bottom'
         });
         $('#bh-12').bighover({
         height: '350',
         position: 'bottom'
         });
         $('#bh-13').bighover({
         height: '350',
         position:'top'
         });
         $('#bh-14').bighover({
         height: '350',
         position:'top'
         });
         $('#bh-15').bighover({
         height: '350',
         position:'top'
         });	
         $('#bh-16').bighover({
         height: '350',
         position:'top'
         });	
         $('#bh-17').bighover({
         height: '350',
         position:'top'
         });	
         $('#bh-18').bighover({
         height: '350',
         position:'top'
         });	
         $('#bh-19').bighover({
         height: '350',
         position:'top'
         });	
         $('#bh-20').bighover({
         height: '350',
         position:'top'
         });	
         $('#bh-21').bighover({
         height: '350',
         position:'top'
         });	
         $('#bh-22').bighover({
         height: '350',
         position:'top'
         });
         $('#bh-23').bighover({
         height: '350',
         position:'bottom'
         });	
         $('#bh-24').bighover({
         height: '350',
         position:'bottom'
         });	
         $('#bh-25').bighover({
         height: '350',
         position:'bottom'
         });	
         $('#bh-26').bighover({
         height: '350',
         position:'bottom'
         });	
         $('#bh-27').bighover({
         height: '350',
         position:'top'
         });	
         $('#bh-28').bighover({
         height: '350',
         position:'top'
         });	
         $('#bh-29').bighover({
         height: '350',
         position:'top'
         });
         $('#bh-30').bighover({
         height: '350',
         position:'bottom'
         });	
         $('#bh-31').bighover({
         height: '350',
         position:'bottom'
         });	
         $('#bh-32').bighover({
         height: '350',
         position:'bottom'
         });	
         $('#bh-33').bighover({
         height: '350',
         position:'bottom'
         });	
         $('#bh-34').bighover({
         height: '350',
         position:'top'
         });	
         $('#bh-35').bighover({
         height: '350',
         position:'top'
         });
         $('#bh-36').bighover({
         height: '350',
         position:'top'
         });	
         $('#bh-37').bighover({
         height: '350',
         position:'top'
         });		
         
      </script>
      <script type="text/javascript">
         var _gaq = _gaq || [];
         _gaq.push(['_setAccount', 'UA-36251023-1']);
         _gaq.push(['_setDomainName', 'jqueryscript.net']);
         _gaq.push(['_trackPageview']);
         
         (function() {
           var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
           ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
           var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
         })();
         
      </script>
      <script>
         $(document).ready(function(){
         	$(window).scroll(function(){
         		var windowBottom = $(this).scrollTop() + $(this).innerHeight();
         		$(".left-slide-effect").each(function(){
         			var objectBottom = $(this).offset().top;
         			if (objectBottom<windowBottom){
         			$(this).animate({"margin-left":"0","opacity":"1"},1500);
         
         			}
         		});
         		$(".left-slide-effect").each(function(){
         			var objectBottom = $(this).offset().top;
         			if (objectBottom<windowBottom){
         			$(this).animate({"margin-left":"0","opacity":"1"},1500);
         
         			}
         		});
         		$(".fade-in-effect").each(function(){
         			var objectBottom = $(this).offset().top+ $(this).innerHeight();
         			if (objectBottom<windowBottom){
         				$(this).animate({"opacity":"1"},2500);
         			}					
         		});
         	});
         });
         
      </script>
      <script src="js/jquery.smartCart.min.js" type="text/javascript"></script>
      <script type="text/javascript">
         $(document).ready(function(){
             // Initialize Smart Cart    	
             $('#smartcart').smartCart({
                                 submitSettings: {
                                     submitType: 'paypal' // form, paypal, ajax
                                 },
                                 toolbarSettings: {
                                     checkoutButtonStyle: 'paypal' // default, paypal, image
                                 }
                             });
         });
      </script>
   </body>
</html>
