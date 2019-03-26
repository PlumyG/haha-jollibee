<!--
	Author: Lee Hiu Wa		SID:17004248S
			Leung Tin Yau 	SID:17063771S
			Liu Sze Nga		SID:17005386S
			Man Wing Long 	SID:17037452S

-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Modern Business - Start Bootstrap Template</title>
    <link href="css/loginstyle.css" rel="stylesheet" />
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet" />
    <script src="js/jquery-3.2.1.min.js"></script>
    <style>
      body {
      }
      .left-slide-effect {
        opacity: 0;
      }
      .left-slide-effect {
      }
      .fade-in-effect {
        opacity: 0;
      }
      .navbar-toggler-icon {
        cursor: pointer;
      }
      .navbar-toggler-right {
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <!-- Navigation -->
    <nav
      class="navbar fixed-top navbar-expand-lg navbar-dark fixed-top"
      style="background-color:black;"
    >
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
              <input
                type="text"
                placeholder="Enter your username"
                name="uname"
                required
              />
              <label>Password</label>
              <input
                type="password"
                placeholder="Enter your password"
                name="pw"
                required
              />
              <button
                style="background-color:black;"
                type="submit"
                onclick="changebutton();"
              >
                LogIn
              </button>
            </div>
            <div class="container" style="background-color:#f1f1f1;">
              <button
                type="button"
                class="registerb"
                onclick="window.open('regform.html','registerForm',
                        'resizable=1,width=1000,height=800,left=0,bottom=0');"
              >
                Register
              </button>
              <button
                type="button"
                onclick="document.getElementById('id01').style.display='none'"
                class="cancelb"
              >
                Cancel
              </button>
            </div>
          </form>
        </div>
        <a class="navbar-brand" href="myhome.php" id="homelink">Jollibee</a>
        <button
          class="navbar-toggler navbar-toggler-right"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
          aria-controls="navbarResponsive"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="menu.php">Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="event-home.php">Event</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- end of navbar -->
    <script>
      var modal = document.getElementById("id01");
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      };
    </script>
    <!-- main content -->
    <!--slide images -->
    <div id="maincontent-container">
      <header>
        <div
          id="carouselExampleIndicators"
          class="carousel slide"
          data-ride="carousel"
        >
          <ol class="carousel-indicators">
            <li
              data-target="#carouselExampleIndicators"
              data-slide-to="0"
              class="active"
            ></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div
              class="carousel-item active"
              style="background-image: url('images/Pizza_Images12.jpg')"
            >
              <div class="carousel-caption d-none d-md-block">
                <h3>Pizza1</h3>
                <p>This is a description for the first slide.</p>
              </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div
              class="carousel-item"
              style="background-image: url('images/pizza_basil_cheese_vegetables_71025_1920x1080.jpg')"
            >
              <div class="carousel-caption d-none d-md-block">
                <h3>Pizza2</h3>
                <p>This is a description for the second slide.</p>
              </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div
              class="carousel-item"
              style="background-image: url('images/pizza.jpg')"
            >
              <div class="carousel-caption d-none d-md-block">
                <h3>Pizza3</h3>
                <p>This is a description for the third slide.</p>
              </div>
            </div>
          </div>
          <a
            class="carousel-control-prev"
            href="#carouselExampleIndicators"
            role="button"
            data-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a
            class="carousel-control-next"
            href="#carouselExampleIndicators"
            role="button"
            data-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </header>
      <!--end of slide images-->
      <!--script for animation-->
      <script>
        $(document).ready(function() {
          $(window).scroll(function() {
            var windowBottom = $(this).scrollTop() + $(this).innerHeight();
            $(".left-slide-effect").each(function() {
              var objectBottom = $(this).offset().top;
              if (objectBottom < windowBottom) {
                $(this).animate({ "margin-left": "0", opacity: "1" }, 1500);
              }
            });
            $(".left-slide-effect").each(function() {
              var objectBottom = $(this).offset().top;
              if (objectBottom < windowBottom) {
                $(this).animate({ "margin-left": "0", opacity: "1" }, 1500);
              }
            });
            $(".fade-in-effect").each(function() {
              var objectBottom = $(this).offset().top + $(this).innerHeight();
              if (objectBottom < windowBottom) {
                $(this).animate({ opacity: "1" }, 2500);
              }
            });
          });
        });
      </script>
      <!--end of animation-->
      <!-- Page Content -->
      <div class="container">
        <h1 class="my-4">Welcome to Jollibee</h1>
        <!-- Portfolio Section -->
        <div class="row" id="my-content-p1">
          <div
            class="col-lg-4 col-sm-6 portfolio-item left-slide-effect"
            style="margin-left:-2080px;"
          >
            <div class="card h-100">
              <img class="card-img-top" src="images/rest1.jpg" alt="" />
              <div class="card-body">
                <h4 class="card-title">
                  STYLEISH.
                </h4>
                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet
                  numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus
                  sit, repellat sequi itaque deserunt, dolores in, nesciunt,
                  illum tempora ex quae? Nihil, dolorem!
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 portfolio-item left-slide-effect">
            <div class="card h-100">
              <img class="card-img-top" src="images/rest2.jpg" alt="" />
              <div class="card-body">
                <h4 class="card-title">
                  CREATIVE.
                </h4>
                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
                  viverra euismod odio, gravida pellentesque urna varius vitae.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 portfolio-item left-slide-effect">
            <div class="card h-100">
              <img class="card-img-top" src="images/rest3.jpg" alt="" />
              <div class="card-body">
                <h4 class="card-title">
                  RELEVANT.
                </h4>
                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos
                  quisquam, error quod sed cumque, odio distinctio velit nostrum
                  temporibus necessitatibus et facere atque iure perspiciatis
                  mollitia recusandae vero vel quam!
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row" id="my-content-p2">
          <div
            class="col-lg-4 col-sm-6 portfolio-item left-slide-effect"
            style="margin-left:-2080px;"
          >
            <div class="card h-100">
              <img class="card-img-top" src="images/slide3.jpg" alt="" />
              <div class="card-body">
                <h4 class="card-title">
                  Yummy.
                </h4>
                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
                  viverra euismod odio, gravida pellentesque urna varius vitae.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 portfolio-item left-slide-effect">
            <div class="card h-100">
              <img class="card-img-top" src="images/slide4.jpeg" alt="" />
              <div class="card-body">
                <h4 class="card-title">
                  Tasty
                </h4>
                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
                  viverra euismod odio, gravida pellentesque urna varius vitae.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 portfolio-item left-slide-effect">
            <div class="card h-100">
              <img class="card-img-top" src="images/slide5.jpg" alt="" />
              <div class="card-body">
                <h4 class="card-title">
                  Delicious
                </h4>
                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Itaque earum nostrum suscipit ducimus nihil provident,
                  perferendis rem illo, voluptate atque, sit eius in voluptates,
                  nemo repellat fugiat excepturi! Nemo, esse.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
      <!-- Features Section -->
      <div
        class="my-home-container"
        style="background-color:#553311;color:white;padding:25px;"
      >
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <h2 class="left-slide-effect" style="margin-left:-1080px;">
                Our Features
              </h2>
              <p class="left-slide-effect" style="margin-left:-1080px;">
                Jollibee
              </p>
              <ul class="left-slide-effect" style="margin-left:-1080px;">
                <li>
                  <strong>Great</strong>
                </li>
                <li>High</li>
                <li>Extreme</li>
                <li>Aweesome</li>
                <li>Never Forget</li>
              </ul>
              <p class="fade-in-effect">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Corporis, omnis doloremque non cum id reprehenderit, quisquam
                totam aspernatur tempora minima unde aliquid ea culpa sunt.
                Reiciendis quia dolorum ducimus unde.
              </p>
            </div>
            <div class="col-lg-6 fade-in-effect">
              <img
                class="img-fluid rounded"
                src="images/pizzawhat.jpg"
                alt=""
              />
            </div>
          </div>
          <!-- /.row -->
          <hr />
          <!-- Call to Action Section -->
          <div class="row mb-4">
            <div class="col-md-8 fade-in-effect">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Molestias, expedita, saepe, vero rerum deleniti beatae veniam
                harum neque nemo praesentium cum alias asperiores commodi.
              </p>
            </div>
            <div class="col-md-4 fade-in-effect">
              <a class="btn btn-lg btn-secondary btn-block" href="#"
                >Back To Top</a
              >
            </div>
          </div>
        </div>
      </div>
      <!-- /.container -->
    </div>
    <!-- Footer -->
    <footer class="py-5" style="margin-top:2px;background-color:#111111">
      <div class="container">
        <p class="m-0 text-center text-white">
          Copyright &copy; Jollibee 2017
        </p>
      </div>
      <!-- /.container -->
    </footer>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
