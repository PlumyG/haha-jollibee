<!--
	Author: Lee Hiu Wa		SID:17004248S
			Leung Tin Yau 	SID:17063771S
			Liu Sze Nga		SID:17005386S
			Man Wing Long 	SID:17037452S

-->
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Account Information</title>
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
            Account Information
			</h1>
         <ol class="breadcrumb">
            <li class="breadcrumb-item">
               <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Account Information</li>
         </ol>

         
         <!-- Content Row -->
         <div class="row" style="margin-left:50px; margin-bottom:10px;"> 
         <a href="status.php" class="myButton">Order Status</a>
            </div>
            <!-- Contact Details Column -->
            <style type="text/css">
                .tg  {border-collapse:collapse;border-spacing:0;}
                .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 19px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
                .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 19px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
                .tg .tg-lqy6{text-align:right;vertical-align:top}
                .tg .tg-0lax{text-align:left;vertical-align:top}
            </style>
            <div class="col-lg-4 mb-4 tg">
                <table> 
                    <tr>
                        <th>User Name:</th>
                        <th>adminA</th>
                    </tr>
                    <tr>
                        <td>Full Name:</td>
                        <td>Chan Big Man</td>
                    </tr>
                    <tr>
                        <td>Phone Number:</td>
                        <td>12345678</td>
                    </tr>
                    <tr>
                        <td>Email Address:</td>
                        <td>testing@gmail.com</td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td>Earth 101</td>
                    </tr>
                </table>
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


<style>
   .myButton {
      -moz-box-shadow:inset 0px 39px 0px -24px #e67a73;
      -webkit-box-shadow:inset 0px 39px 0px -24px #e67a73;
      box-shadow:inset 0px 39px 0px -24px #e67a73;
      background-color:#e4685d;
      -moz-border-radius:4px;
      -webkit-border-radius:4px;
      border-radius:4px;
      border:1px solid #ffffff;
      display:inline-block;
      cursor:pointer;
      color:#ffffff;
      font-family:Arial;
      font-size:15px;
      padding:6px 37px;
      text-decoration:none;
      text-shadow:0px 1px 0px #b23e35;
   }
   .myButton:hover {
      background-color:#eb675e;
   }
   .myButton:active {
      position:relative;
      top:1px;
   }
</style>