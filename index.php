<?php
session_start();
include 'functions.php';
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Beauty Spa</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="fonts/ProximaNovaA-Semibold.css">
  <link rel="stylesheet" href="fonts/ProximaNova-Extrabld.css">
  <link rel="stylesheet" href="fonts/ProximaNovaA-Regular.css">
  <link rel="stylesheet" href="fonts/ProximaNovaA-Bold.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/style.css">

  <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
</head>

<body>
  <nav class="navbar navbar-default header-section">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">
          <img src="img/logo.png" width="243" height="54" alt="" class="img-responsive">
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="#">Main</a></li>
          <li><a href="#">Shop</a></li>
          <li><a href="#">Testimonials</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contacts</a></li>
          <?php

          if (isset($_SESSION['authorized'])) {
            echo '  <li><a class="login_text" href="#">' . getCurrentUser() . '</a></li>
                      <li><a class="log_out" href="logout.php">Sign out</a></li>
                      ';
          } else {
            echo '  <li><a class="sign_in" href="login.php">Sign in</a></li>
                   ';
          }

          ?>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <div class="cover-section" id="top-button">
    <div class="container">
      <div class="row">
        <div class="col-md-12 wow fadeInDown animated">
          <div class="slider-item">
            <img src="img/logo-simple.png" width="117" height="144" alt="">
            <h2>PROFESSIONALS RELAX TODAY</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="purilfy-section">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="purifliy-item wow fadeInDown animated">
            <h3>CLEANSE. PURIIFY. ENERGIZE</h3>
            <p>There is an anti-aging revolution occurring in healthcare today and that you are the main beneficiary. Nowhere in the field of anti-aging medicine are the breakthroughs and technological advances more exciting, more relevant and more readily available for immediate application and benefit to you than in the field of facial rejuvenation.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="offer-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 wow fadeInDown animated">
          <?php
          if (isset($_SESSION['authorized']) && getCurrentUser() !== null) {
            echo '<h2 class="introduction_user">Hello,' . ' ' . getCurrentUser() . '!</h2>';
            //print_r($_SESSION['checkDayBirth']);

            if ($_SESSION['checkDayBirth'] > 0) {
              echo '
                <div class="introduction_day_brth">
                <p class="birthday_offer">' . ' ' . $_SESSION['checkDayBirth'] . ' ' . 'days remaining until your birthday</p>
                </div>';
            } else if ($_SESSION['checkDayBirth'] === 0) {
              echo '
                <div class="introduction_day_brth">
                </div>';
            }
          } else {
            echo '<h2 class="introduction_user">Hello, user! Click <a href="login.php">here</a> to log in!</h2>';
          };
          ?>
        </div>
      </div>
    </div>
  </div>

  <div class="benefit-section">
    <div class="container-fluid">
      <div class="row">
        <h2 style="text-align: center;">
          <div id="timer"></div>
        </h2>
      </div>
      <div class="row">
        <div class="col-md-3 benefit-item wow fadeInDown animated" data-wow-delay="0.2s">
          <h3>Benefit 1</h3>
          <a href="#"><img src="img/beneifit1.png" width="207" height="208" class="img-responsive" alt=""></a>
          <h2>Spa</h2>
          <p>Start your day with Purgo Morning Detox Tea.</p>
        </div>
        <div class="col-md-3 benefit-item wow fadeInDown animated" data-wow-delay="0.4s">
          <h3>Benefit 2</h3>
          <a href="#"><img src="img/benefit2.png" width="207" height="208" class="img-responsive" alt=""></a>
          <h2>BEAUTY</h2>
          <p>Eat wholesome, nutritious food throughout the day.</p>
        </div>
        <div class="col-md-3 benefit-item wow fadeInDown animated" data-wow-delay="0.6s">
          <h3>Benefit 3</h3>
          <a href="#"><img src="img/benefit3.png" width="225" height="226" class="img-responsive" alt=""></a>
          <h2>YOGA</h2>
          <p>Exercise for 30 minutes.</p>
        </div>
        <div class="col-md-3 benefit-item wow fadeInDown animated" data-wow-delay="0.8s">
          <h3>Benefit 4</h3>
          <a href="#"><img src="img/benefit4.png" width="207" height="208" class="img-responsive" alt=""></a>
          <h2>GYM</h2>
          <p>Relax with Purgo Evening Cleanse Tea.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="message-section">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 wow fadeInDown animated">
          <h2 class="section-title">MASSAGE RITUALS</h2>
          <p>Sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores. Stet clita kasd gubergren, no sea takimata sanctus. At vero eos et accusam et justo duo dolores et ea rebum. At vero eos et accusam et justo duo dolores et ea rebum. Sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut ispim labore et dolore magna aliquyam erat.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="news-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 news-item">
          <div class="news-deatils wow fadeInDown animated" data-wow-delay="0.2s">
            <div class="col-md-6 thumbnail">
              <img src="img/blog1.png" width="249" height="272" alt="">
            </div>
            <div class="col-md-6 content">
              <span>23rd Dec, 2015</span>
              <p>Yoga is Possible for Anyone Who Really Wants It</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 news-item">
          <div class="news-deatils wow fadeInDown animated" data-wow-delay="0.5s">
            <div class="col-md-6 thumbnail">
              <img src="img/blog2.png" width="249" height="272" alt="">
            </div>
            <div class="col-md-6 content">
              <span>23rd Dec, 2015</span>
              <p>Have you recently tried facial wash? If you have...</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="client-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="section-title">Clients about Us</h2>
          <p class="title-cap">Best Teachers Are Here For You</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="client-item wow fadeInDown animated" data-wow-delay="0.2s">
            <div class="client-content">
              <i class="fa fa-quote-left"></i>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <a href="#"><img src="img/client1.png" alt=""> </a>
            <h3>Tanny Tan</h3>
          </div>
        </div>
        <div class="col-md-4">
          <div class="client-item wow fadeInDown animated" data-wow-delay="0.5s">
            <div class="client-content">
              <i class="fa fa-quote-left"></i>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <a href="#"><img src="img/client2.png" alt=""> </a>
            <h3>Georgie Drake</h3>
          </div>
        </div>
        <div class="col-md-4">
          <div class="client-item wow fadeInDown animated" data-wow-delay="0.8s">
            <div class="client-content">
              <i class="fa fa-quote-left"></i>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <a href="#"><img src="img/client.png" alt=""> </a>
            <h3>Elva McCoy</h3>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="blog-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="title-section">Blog Post</h2>
          <p class="title-cap">Clients review about us</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 wow fadeInDown animated" data-wow-delay="0.2s">
          <div class="row">
            <div class="col-md-3 blog-thumb">
              <a href="#"><img src="img/blog-item1.png" width="127" height="190" alt=""></a>
            </div>
            <div class="col-md-9 blog-content">
              <h3>Mina Norman</h3>
              <p>When warm weather arrives, it's only natural to want to get out and enjoy the sun's glorious rays.It's also important to protect your skin to keep it looking healthy and youthful.</p>
              <a href="#">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 wow fadeInDown animated" data-wow-delay="0.5s">
          <div class="row">
            <div class="col-md-3 blog-thumb">
              <a href="#"><img src="img/blog-item2.png" width="127" height="190" alt=""></a>
            </div>
            <div class="col-md-9 blog-content">
              <h3>Anny Ane</h3>
              <p>Becoming aware of your salon's surroundings and sanitary procedures is critical to keep your experience pleasant and healthy. Here are a few tips from BTG Cosmetics Inc</p>
              <a href="#">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="table-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="section-title">Pricing Table</h2>
          <p class="section-cap">Our Pricing list for The Customers</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 table-content wow fadeInDown animated" data-wow-delay="0.2s">
          <div class="table-item sliver">
            <h2>50<sup>$</sup></h2>
            <h3>SILVER</h3>
            <ul>
              <li>Full Body Massage</li>
              <li>Deep Tissue Massage</li>
              <li>Hot Stone Massage</li>
              <li>Body Polish (1 hr)</li>
            </ul>
            <a href="#">Purchase</a>
          </div>
        </div>
        <div class="col-md-4 table-content wow fadeInDown animated" data-wow-delay="0.5s">
          <div class="table-item gold">
            <h2>70<sup>$</sup></h2>
            <h3>GOLD</h3>
            <ul>
              <li>Full Body Massage</li>
              <li>Deep Tissue Massage</li>
              <li>Hot Stone Massage</li>
              <li>Body Polish (1 hr)</li>
            </ul>
            <a href="#">Purchase</a>
          </div>
        </div>
        <div class="col-md-4 table-content wow fadeInDown animated" data-wow-delay="0.81s">
          <div class="table-item platinum">
            <h2>90<sup>$</sup></h2>
            <h3>PLATINUM</h3>
            <ul>
              <li>Full Body Massage</li>
              <li>Deep Tissue Massage</li>
              <li>Hot Stone Massage</li>
              <li>Body Polish (1 hr)</li>
            </ul>
            <a href="#">Purchase</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="top-button">
            <a href="#top-button" class="scroll"><i class="fa fa-arrow"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="js/vendor/jquery-1.11.2.min.js"></script>
  <script src="js/vendor/bootstrap.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/custom.js"></script>

  <script>
    // функция, которая запрашивает данные с сервера
    function timer() {
      // вызываем встроенную функцию, которая поможет нам получить данные с сервера
      $.ajax({
        // какой скрипт серверу нужно выполнить
        url: "timer.php",
        // предыдущие ответы сохраняем
        cache: true,
        // если всё хорошо, отправляем ответ от сервера на страницу в блок content
        success: function(html) {
          $("#timer").html(html);
        }
      });
    }

    // как только страница полностью загрузилась
    $(document).ready(function() {
      // начинаем каждую секунду запрашивать новые данные для отсчёта
      timer();
      setInterval('timer()', 1000);
    });
  </script>
</body>

</html>