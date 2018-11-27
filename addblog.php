<?php
  session_start();
  require_once('pdo.php');
  if(!isset($_SESSION['user']) )
  {
    header("Location: login.php");
    return;
  }
  if(isset($_POST['title']))//&&isset($_POST['description'])&&isset($_POST['url'])&&isset($_FILE['image']))
  {
    $fname = rand(1,1000000);
    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
    $newfile = $fname.'.'.$file_ext;
    $_POST['publish_date']=date('y-m-d',strtotime($_POST['publish_date']));
    move_uploaded_file($_FILES['image']['tmp_name'],"uploads/".$fname.'.'.$file_ext);
    $query = $pdo->prepare("INSERT INTO blog( `title`, `description`, `author`, `publish_date`, `url`, `image`) VALUES (:title,:description,:author,:publish_date,:url,:images)");
    $query -> execute(array(
      ':title' => $_POST['title'],
      ':description' => $_POST['description'],
      ':author' => $_POST['author_name'],
      ':publish_date'=>$_POST['publish_date'],
      ':url'=>$_POST['url'],
      ':images'=>$newfile
    ));
    echo ('BLOG SUCCESSFULLY ADDED');
  }

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Title, icon, description and keywords -->
  <title>TEDxMedi-Caps University</title>
  <link rel="shortcut icon" href="res/images/favicon.ico">
  <meta name="description" content="TEDxMU, x = independently organised TED event. Changing Era. This February, at Medi-Caps University.">
  <meta name="keywords" content="TEDx, MU, Medi-Caps University,Medicaps, Indore, event, talks">

  <!-- Social media tags -->
  <!-- Open Graph -->
  <meta property="og:title" content="TEDxMU">
  <meta property="og:description" content="Changing Era. This February, at Medi-Caps University">
  <meta property="og:image" content="res/images/logos/light-social.jpg">
  <meta property="og:url" content="https://tedxmedicapsuniversity.com">
  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@TEDx_MU">
  <!-- Google+ -->
  <meta itemprop="name" content="TEDxMU">
  <meta itemprop="description" content="Changing Era. This February, at Medi-Caps University.">
  <meta itemprop="image" content="res/images/logos/light-social.jpg">

  <!-- Browser themes -->
  <meta name="theme-color" content="#000">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="res/css/bootstrap.min.css">

  <!-- Font Icons -->
  <link rel="stylesheet" href="res/css/font-awesome.min.css">

  <!-- Plugins -->
  <link rel="stylesheet" href="res/css/flickity.min.css">
  <link rel="stylesheet" href="res/css/magnific-popup.css">

  <!-- Main styles -->
  <link rel="stylesheet" href="res/css/main.css">
  <link rel="stylesheet" href="res/css/style.css">

  <!-- Color skin -->
  <link rel="stylesheet" href="res/css/color_red.css">
  <!--About Part css start-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oleo+Script" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
  <link rel="stylesheet" type="text/css" href="res/css/stylesheet.css">
  <!--About part css end-->
  <!-- Modernizr JS for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 8]>
  <script src="res/js/modernizr.min.js"></script>
  <![endif]-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <script>
      new WOW().init();
  </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
</head>

<body id="page-top">
  <!-- Navigation Start -->
  <nav id="navigation" class="navbar navbar-fixed-top navbar-dark">
    <div class="container">
      <div class="row">
        <div class="navbar-header col-lg-3">

          <a class="navbar-brand font-family-alt letter-spacing-1 text-extra-large text-uppercase" href="index.html#page-top">
            <img class="logo-navbar-dark pc" src="res/images/logos/TedXMU_dark.png" alt="TEDxMU"/>
            <img class="logo-navbar-white pc"  src="res/images/logos/TedXMU_light.png" alt="TEDxMU"/>
            <img class="logo-navbar-dark mobile" src="res/images/logos/TedXMU_dark2.png" alt="TEDxMU"/>
            <img class="logo-navbar-white mobile"  src="res/images/logos/TedXMU_light2.png" alt="TEDxMU"/>
          </a>

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <!-- //.navbar-header -->

        <div id="navbar" class="navbar-collapse collapse col-lg-9 pull-right">
          <ul class="nav navbar-nav font-family-alt letter-spacing-1 text-uppercase font-weight-700">
            <li><a href="addblog.php" class="line-height-unset">Add Blog</a></li>
            <li><a href="deleteblog.php" class="line-height-unset">Delete Blog</a></li>
            <li><a href="addvideo.php" class="line-height-unset">Add Video</a></li>
            <li><a href="deletevideo.php" class="line-height-unset">Delete Video</a></li>
            <li><a href="sponsors.html" class="line-height-unset">Sponsors</a></li>
          </ul>
        </div>
        <!-- //.navbar-collapse -->
      </div>
      <!-- //.row -->
    </div>
    <!-- //.container -->
  </nav>
  <!-- //Navigation End -->
  <!--Form for adding blog starts-->
  <section class="blog-section">
    <form method="post" enctype="multipart/form-data">
      <div class="col-xs-6 col-xs-offset-6">Blog Title:</div><input type="text" name="title" class="col-xs-9 col-xs-offset-1" required>
      <div class="col-xs-6 col-xs-offset-6 clear-fix">Blog Description:</div><input type="text" name="description" class="col-xs-9 col-xs-offset-1" required>
      <div class="col-xs-6 col-xs-offset-6 clear-fix">Author Name:</div><input type="text" name="author_name" class="col-xs-9 col-xs-offset-1">
      <div class="col-xs-6 col-xs-offset-6 clear-fix">Publish Date:</div><input type="date" name="publish_date" class="col-xs-9 col-xs-offset-1">
      <div class="col-xs-6 col-xs-offset-6 clear-fix">Blog URL:</div><input type="text" name="url" class="col-xs-9 col-xs-offset-1" required>
      <div class="col-xs-6 col-xs-offset-6 clear-fix">Image:</div><input type="file" name="image" class="col-xs-9 col-xs-offset-1" required>
      <div class="col-xs-6 col-xs-offset-5 clear-fix"><input type="submit" class="col-xs-9 col-xs-offset-1"value="Add Blog"></div>
    </form>
  </section>
  <!--For for adding blog ends-->
  <!-- Footer Start -->
  <footer class="footer bg-white">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="footer-logo xs-text-center">
            <img src="res/images/logos/TedXMU_light.png" style="width:200; hieght:200" alt="">
          </div>
          <!-- //.footer-logo -->
          <p class="disclaimer xs-text-center">
            This independent TEDx event is operated under license from TED.
          </p>
          <!-- //.disclaimer -->
        </div>
        <!-- //.col-sm-4 -->

        <div class="col-sm-8">
          <div class="footer-social text-right">
            <ul class="list-inline list-unstyled no-margin xs-text-center xs-title-small title-medium">
              <li><a href="https://facebook.com/Tedx-MedicapsUniversity"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://twitter.com/TEDx_MU"><i class="fa fa-twitter"></i></a></li>
              <li><a href="https://instagram.com/tedxmedicapsuniversity"><i class="fa fa-instagram"></i></a></li>
            </ul>
            <p class="disclaimer xs-text-center">
              Website By:<br>Anurag Phadnis<br>Pratik Purohit<br>Aman Shah<br>
            </p>
          </div>
          <!-- //.footer-social -->
        </div>
        <!-- //.col-sm-8 -->
      </div>
      <!-- //.row -->
    </div>
    <!-- //.container -->
  </footer>
  <!-- //Footer End -->

  <!-- Scroll to top -->
  <a href="#page-top" class="page-scroll scroll-to-top"><i class="fa fa-angle-up"></i></a>


  <!-- jQuery -->
  <script src="res/js/jquery.min.js"></script>

  <!-- Bootstrap -->
  <script src="res/js/bootstrap.min.js"></script>

  <!-- Plugins -->
  <script src="res/js/pace.min.js"></script>
  <script src="res/js/debouncer.min.js"></script>
  <script src="res/js/jquery.easing.min.js"></script>
  <script src="res/js/jquery.inview.min.js"></script>
  <script src="res/js/jquery.matchHeight.js"></script>
  <script src="res/js/isotope.pkgd.min.js"></script>
  <script src="res/js/imagesloaded.pkgd.min.js"></script>
  <script src="res/js/flickity.pkgd.min.js"></script>
  <script src="res/js/jquery.magnific-popup.min.js"></script>
  <script src="res/js/jquery.validate.min.js"></script>

  <!-- BG slideshow -->
  <script src="res/js/jquery.flexslider.min.js"></script>

  <!-- BG Parallax JS -->
  <script src="res/js/TweenMax.min.js"></script>
  <script src="res/js/ScrollMagic.min.js"></script>
  <script src="res/js/animation.gsap.min.js"></script>

  <!-- Theme -->
  <script src="res/js/main.js"></script>

  <!-- Countdown -->
  <script src="res/js/jquery.countdown.min.js"></script>
  <script src="res/js/countdown.js"></script>
</body>

</html>
