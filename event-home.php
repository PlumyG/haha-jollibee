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
      <!-- Bootstrap core CSS -->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="css/modern-business.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="css/slipstyle.css" />
      <script type="text/javascript" src="js/modernizr.custom.26887.js"></script> 
   </head>
   <body>
      <!-- Navigation -->
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark fixed-top" style="background-color:black;">
         <div class="container">
               <?php session_start(); if($_SESSION['login']=="true"): ?>
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
         <h1 class="mt-4 mb-3">Event
            <small>play with work</small>
         </h1>
         <ol class="breadcrumb">
            <li class="breadcrumb-item">
               <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Event</li>
         </ol>
         <div class="container">
            <div class="fs-slider" id="fs-slider">
               <figure>
                  <img src="images/evet1.jpg" alt="image01" />
                  <a href="event-post-1.php">
                     <figcaption>
                        <h3>Happy Hours</h3>
                        <p style="font-size:17px;">
                           asdfasdfasd
                        </p>
                     </figcaption>
                  </a>
               </figure>
               <figure>
                  <img src="images/evet2.jpeg" alt="image02" />
                  <a href="event-post-2.php">
                     <figcaption>
                        <h3>Birthday Discount</h3>
                        <p style="font-size:17px;">
                           asdfasdfasd
                        </p>
                     </figcaption>
                  </a>
               </figure>
               <figure>
                  <img src="images/evet3.jpg" alt="image03" />
                  <a href="event-post-3.php">
                     <figcaption>
                        <h3>Afternoon Tea</h3>
                        <p style="font-size:17px;">
                           asdfasdfasd
                        </p>
                     </figcaption>
                  </a>
               </figure>
               <figure>
                  <img src="images/evet4.jpg" alt="image05" />
                  <figcaption>
                     <h3>Cheers</h3>
                     <p style="font-size:17px;">
                        asdfasdfasd
                     </p>
                  </figcaption>
               </figure>
            </div>
            <!-- /fs-slider -->
         </div>
         <div class="row">
            <!-- Blog Entries Column -->
            <div class="col-md-8">
               <!-- Blog Post -->
               <div class="card mb-4">
                  <img class="card-img-top plate pinter" id="plate-default" src="images/evet1.jpg" alt="">
                  <div class="card-body">
                     <h2 class="card-title">Happy Hours</h2>
                     <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                     <a href="event-post-1.php" class="btn btn-primary">Read More &rarr;</a>
                  </div>
                  <div class="card-footer text-muted">
                     Posted on January 1, 2017 
                  </div>
               </div>
               <!-- Blog Post -->
               <div class="card mb-4">
                  <img class="card-img-top plate pinter" id="plate-default1" src="images/evet2.jpeg" alt="Card image cap">
                  <div class="card-body">
                     <h2 class="card-title">Birthday Discount</h2>
                     <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                     <a href="event-post-2.php" class="btn btn-primary">Read More &rarr;</a>
                  </div>
                  <div class="card-footer text-muted">
                     Posted on January 1, 2017 
                  </div>
               </div>
               <!-- Blog Post -->
               <div class="card mb-4">
                  <img class="card-img-top plate pinter" id="plate-default2" src="images/evet3.jpg" alt="Card image cap">
                  <div class="card-body">
                     <h2 class="card-title">Afteroon Tea</h2>
                     <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                     <a href="event-post-3.php" class="btn btn-primary">Read More &rarr;</a>
                  </div>
                  <div class="card-footer text-muted">
                     Posted on January 1, 2017 
                  </div>
               </div>
               <!-- Pagination -->
               <ul class="pagination justify-content-center mb-4">
                  <li class="page-item">
                     <a class="page-link" href="#">&larr; Older</a>
                  </li>
                  <li class="page-item disabled">
                     <a class="page-link" href="#">Newer &rarr;</a>
                  </li>
               </ul>
            </div>
            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">
               <!-- Search Widget -->
               <div class="card mb-4">
                  <h5 class="card-header">Search</h5>
                  <div class="card-body">
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                        <button class="btn btn-secondary" type="button">Go!</button>
                        </span>
                     </div>
                  </div>
               </div>
               <!-- Categories Widget -->
               <div class="card my-4">
                  <h5 class="card-header">Categories</h5>
                  <div class="card-body">
                     <div class="row">
                        <div class="col-lg-6">
                           <ul class="list-unstyled mb-0">
                              <li>
                                 <a href="#">event1</a>
                              </li>
                              <li>
                                 <a href="#">event2</a>
                              </li>
                              <li>
                                 <a href="#">event3</a>
                              </li>
                           </ul>
                        </div>
                        <div class="col-lg-6">
                           <ul class="list-unstyled mb-0">
                              <li>
                                 <a href="#">event4</a>
                              </li>
                              <li>
                                 <a href="#">event5</a>
                              </li>
                              <li>
                                 <a href="#">event6</a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Side Widget -->
               <div class="card my-4">
                  <h5 class="card-header">Side Widget</h5>
                  <div class="card-body">
                     ASDFASDFDASFSDSDFAASDFASDFDASFASDFDASFDSFSDF
                  </div>
               </div>
            </div>
         </div>
         <!-- /.row -->
      </div>
      <!-- /.container -->
      <!-- Footer -->
      <footer class="py-5 bg-dark">
         <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
         </div>
         <!-- /.container -->
      </footer>
      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.2.1.min.js"></script>
      <script src="js/jquery.plate.js"></script>
      <script>
         $('#plate-default').plate();
         $('#plate-default1').plate();
         $('#plate-default2').plate();
      </script>	
      <script type="text/javascript" src="js/jquery.imgslider.js"></script>
      <script type="text/javascript">
         $(function() {
         
         	$( '#fs-slider' ).imgslider();
         
         });
      </script>		
   </body>
</html>