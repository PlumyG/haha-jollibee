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
            Your Orders
			</h1>
         <ol class="breadcrumb">
            <li class="breadcrumb-item">
               <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item">
               <a href="personal.php">Account Information</a>
            </li>
            <li class="breadcrumb-item active">Your Orders</li>
         </ol>
         <!-- Content Row -->
        <div class="row">
        <table class="redTable">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Order Time</th>
                    <th>Status</th>
                    <th>Amount</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <td colspan="4">
                        <div class="links"><a href="#">&laquo;</a> <a class="active" href="#">1</a> <a href="#">&raquo;</a></div>
                    </td>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                <td>
                    <button class="collapsible btn btn-link">002</button>
                    <div class = "content">
                        <p>Hamburger * 1</p>
                        <p>Soft Drink * 4</p>
                    </div>
                </td>
                <td>2019/4/8 08:37 AM</td>
                <td>Waiting for delivery</td>
                <td>$300</td>
                </tr>
                <tr>
                <td>
                    <button class="collapsible btn btn-link">001</button>
                    <div class = "content">
                        <p>Chicken Wing * 1</p>
                        <p>Soft Drink * 4</p>
                    </div>
                </td>
                <td>2019/3/31 01:36 AM</td>
                <td>Delivered</td>
                <td>$205</td>
                </tr>
            </tbody>
        </table>
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
    /* table style */
    table.redTable {
    border: 2px solid #A40808;
    background-color: #EEE7DB;
    width: 100%;
    text-align: center;
    border-collapse: collapse;
    }
    table.redTable td, table.redTable th {
    border: 1px solid #AAAAAA;
    padding: 3px 2px;
    }
    table.redTable tbody td {
    font-size: 13px;
    }
    table.redTable tr:nth-child(even) {
    background: #F5C8BF;
    }
    table.redTable thead {
    background: #A40808;
    }
    table.redTable thead th {
    font-size: 19px;
    font-weight: bold;
    color: #FFFFFF;
    text-align: center;
    border-left: 2px solid #A40808;
    }
    table.redTable thead th:first-child {
    border-left: none;
    }

    table.redTable tfoot {
    font-size: 13px;
    font-weight: bold;
    color: #FFFFFF;
    background: #A40808;
    }
    table.redTable tfoot td {
    font-size: 13px;
    }
    table.redTable tfoot .links {
    text-align: right;
    }
    table.redTable tfoot .links a{
    display: inline-block;
    background: #FFFFFF;
    color: #A40808;
    padding: 2px 8px;
    border-radius: 5px;
    }


    /* Style the collapsible content. Note: hidden by default */
    .content {
    padding: 0 18px;
    display: none;
    overflow: hidden;
    background-color: #f1f1f1;
    }
</style>

<script>
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.display === "block") {
        content.style.display = "none";
        } else {
        content.style.display = "block";
        }
    });
    }
</script>