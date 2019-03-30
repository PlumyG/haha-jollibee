<!DOCTYPE html>
<html>
  <head>
      <link href="css/loginstyle.css" rel="stylesheet">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- Bootstrap core CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

      <!-- Custom styles for this template -->
      <link href="css/modern-business.css" rel="stylesheet">      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

      <!--Paypal Button-->
      <script src="https://www.paypal.com/sdk/js?client-id=SB_CLIENT_ID"> </script> 
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
                  <?php
                     if($_SESSION['login']=="true")
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
    <div class="container">
         <!-- Page Heading/Breadcrumbs -->
         <h1 class="mt-4 mb-3">
            Check Out
			</h1>
         <ol class="breadcrumb">
            <li class="breadcrumb-item">
               <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Check Out</li>
         </ol>
         
    <form class="form-horizontal center" action="status.php" method="post" >
      <fieldset>
      <!-- Form Name -->
      <legend>Customer Information</legend>

      <!-- Text input-->
      <div class="form-group" >
        <label class="col-md-4 control-label" for="textinput">Name</label>  
        <div class="col-md-8 tb" >
          <input id="name" name="name" type="text" value="Chan Big Man" class="form-control input-md tbc" required="" readonly>
          <a href="#" id="nameEdit" class="edit tbc" name="name"><span style="margin-left:5px;">Edit</span></a>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Phone Number</label>  
        <div class="col-md-6 tb">
        <input id="phone" name="phone" type="text" placeholder="12345678" class="form-control input-md tbc" required="" readonly>        
        <a href="#" id="phoneEdit" class="edit tbc" name="name"><span style="margin-left:5px;">Edit</span></a>          
        </div>
      </div>

      <!-- Textarea -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="textarea">Address</label>
        <div class="col-md-10 tb">                     
          <textarea class="form-control tbc" id="address" name="address" readonly>Earth 101</textarea>
          <a href="#" id="addressEdit" class="edit tbc" name="name"><span style="margin-left:5px;">Edit</span></a>
        </div>
      </div>


      <!-- Multiple Radios -->
      
      <div class="form-group">
        <label class="col-md-4 control-label" for="radios">Payment method</label>
        <div class="col-md-4">
        <div class="radio">
          <label for="radios-0">
            <input type="radio" name="collapseGroup" id="radios-0" value="1" checked="checked" data-toggle="collapse" data-target="#collapseOne">
            On deliver 
          </label>
        </div>
        <div class="radio">
          <label for="radios-1">
            <input type="radio" name="collapseGroup" id="radios-1" value="2" data-toggle="collapse" data-target="#collapseOne">
            Online payment
          </label>
        </div>
        <div id="collapseOne" class="panel-collapse collapse">
            <div class="panel-body">
              <input type="image" src="images/paypal_button.png" style="width:200px"/>
            </div>
        </div>
      </div>

      </fieldset>
      
      <button class="myButton" style="margin:auto;" type="submit" value="Submit">Confirm</button>
    </form>
</div>
</body>


  <script>
    $('#nameEdit').on('click', function(){
      $("#name").prop('readonly', false);
    })

    $('#phoneEdit').on('click', function(){
      $("#phone").prop('readonly', false);
    })

    $('#addressEdit').on('click', function(){
      $("#address").prop('readonly', false);
    })
  </script>

  <style>
    .center {
      margin: auto;
      width: 50%;
      border: 3px solid green;
      padding: 10px;
    }

    .tb {
      display:table;
    }

    .tbc {
      display:table-cell;
    }


    .myButton {  

    padding:50px;
    -moz-box-shadow:inset 0px 1px 0px 0px #9acc85;
    -webkit-box-shadow:inset 0px 1px 0px 0px #9acc85;
    box-shadow:inset 0px 1px 0px 0px #9acc85;
    background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #74ad5a), color-stop(1, #68a54b));
    background:-moz-linear-gradient(top, #74ad5a 5%, #68a54b 100%);
    background:-webkit-linear-gradient(top, #74ad5a 5%, #68a54b 100%);
    background:-o-linear-gradient(top, #74ad5a 5%, #68a54b 100%);
    background:-ms-linear-gradient(top, #74ad5a 5%, #68a54b 100%);
    background:linear-gradient(to bottom, #74ad5a 5%, #68a54b 100%);
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#74ad5a', endColorstr='#68a54b',GradientType=0);
    background-color:#74ad5a;
    border:1px solid #3b6e22;
    display:inline-block;
    cursor:pointer;
    color:#ffffff;
    font-family:Arial;
    font-size:13px;
    font-weight:bold;
    padding:6px 12px;
    text-decoration:none;
    }
    .myButton:hover {
      background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #68a54b), color-stop(1, #74ad5a));
      background:-moz-linear-gradient(top, #68a54b 5%, #74ad5a 100%);
      background:-webkit-linear-gradient(top, #68a54b 5%, #74ad5a 100%);
      background:-o-linear-gradient(top, #68a54b 5%, #74ad5a 100%);
      background:-ms-linear-gradient(top, #68a54b 5%, #74ad5a 100%);
      background:linear-gradient(to bottom, #68a54b 5%, #74ad5a 100%);
      filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#68a54b', endColorstr='#74ad5a',GradientType=0);
      background-color:#68a54b;
    }
    .myButton:active {
      position:relative;
      top:1px;
    }
</style>
</html>