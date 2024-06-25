<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="<?php echo base_url('user_ui/images/favicon.png');?>" type="">

  <link rel="shortcut icon" href="/newui/images/oracle.png" type="image/x-icon">

<title> oracle content Library </title>
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('user_ui/css/bootstrap.css');?>" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="<?php echo base_url('user_ui/css/font-awesome.min.css');?>" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url('user_ui/css/style.css');?>" rel="stylesheet" />
  <!-- responsive style -->
  <link href="<?php echo base_url('user_ui/css/responsive.css');?>" rel="stylesheet" />
  <style>
     .form-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        .form-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: 600;
            text-align: center;
        }
        .form-group label {
            font-weight: 600;
        }
        .form-control {
            border-radius: 30px;
        }
        .btn-primary {
            border-radius: 30px;
            padding: 10px 20px;
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
        .marquee-container {
            overflow: hidden;
            position: relative;
            background-color: #007bff;
            border-radius: 10px;
            padding: 10px;
            width: 100%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .marquee {
            display: inline-block;
            white-space: nowrap;
            animation: marquee 10s linear infinite;
            font-size: 24px;
            color: #fff;
            font-weight: bold;
        }
        .marquee-tag{
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            justify-content: center;
            align-items: center;
            
        }
  </style>
</head>

<body>

  <div class="hero_area">

    <div class="hero_bg_box">
      <div class="bg_img_box">
        <img src="<?php echo base_url('user_ui/images/hero-bg.png');?>" alt="">
      </div>
    </div>

    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="">
            <span style="color:red;">
              ORACLE
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item">
                <a class="nav-link" href="userhome"><i class="fa fa-home fa-2x"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="detail-box">
                    <h1>
                      Content <br>
                      library
                    </h1>
                    <p>
                    Oracle Content Library is a comprehensive platform that enables organizations to store, manage, and share digital assets efficiently. 
                    </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="<?php echo base_url('user_ui/images/slider-img.png');?>" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container ">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="detail-box">
                    <h1>
                      content <br>
                      library
                    </h1>
                    <p>
                    It supports various content types, offering advanced search capabilities, version control, and collaboration tools.
                    </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="<?php echo base_url('user_ui/images/slider-img.png');?>" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="detail-box">
                    <h1>
                      content <br>
                      library
                    </h1>
                    <p>
                    The library integrates seamlessly with other Oracle applications, enhancing content accessibility and workflow automation. 
                    </p>
                    
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="<?php echo base_url('user_ui/images/slider-img.png');?>" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel1" data-slide-to="1"></li>
          <li data-target="#customCarousel1" data-slide-to="2"></li>
        </ol>
      </div>

    </section>
    <!-- end slider section -->
  </div>


  <br>
  <div class="marquee-tag">
  <div class="marquee-container">
        <div class="marquee">
            <marquee>Note:User's will Receive the Response Of their Query on User's mentioned mail-id.</marquee>
        </div>
    </div>
    </div>
  <!-- client section -->
  <div class="container form-container">
  <div class="heading_container heading_center psudo_white_primary mb_45">
    <h2>
        <b>Query <span style="color:lightblue;">form</b></span>
    </h2>
    </div>
        <form action="insertquery" method="post">
            <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="message">Query</label>
                <textarea class="form-control" name="query" id="message" rows="5" placeholder="Enter your Query(for eg., 1.Query related to add new content in website with topic name 2.Anyone wants to add new feature in website ..." required></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
    </div>

  

  <!-- info section -->
<br>
  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_contact">
            <h4>
              Address
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Pune
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +91 9168916690
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  saurabhwakchaure1412@gmail.com
                </span>
              </a>
            </div>
          </div>
          <div class="info_social">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-2 mx-auto info_col">
          <div class="info_link_box" style="margin-left:150px;">
            <h4>
              Links
            </h4>
            <div class="info_links">
              <a class="active" href="home">
                Home
              </a>
              <a class="" href="about">
                About
              </a>
              
            </div>
          </div>
        </div>
       
      </div>
    </div>
  </section>

  <!-- end info section -->

  <!-- footer section -->
  <section class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Oracle Content Library</a>
      </p>
    </div>
  </section>
  <!-- footer section -->

  <!-- jQery -->
  <script type="text/javascript" src="<?php echo base_url('user_ui/js/jquery-3.4.1.min.js');?>"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="<?php echo base_url('user_ui/js/bootstrap.js');?>"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="<?php echo base_url('user_ui/js/custom.js');?>"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  
  <!-- End Google Map -->

</body>

</html>