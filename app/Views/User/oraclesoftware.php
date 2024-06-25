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
       .note-card {
            background-color: #f9f9f9;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            padding: 40px;
            margin: 30px auto;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
            
            
        }
        .note-card:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .note-title {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: #333;
        }
        .note-content {
            font-size: 1rem;
            color: #666;
        }
        .note-timestamp {
            font-size: 0.875rem;
            color: #999;
            margin-top: 10px;
        }
        .pdf-container {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            padding: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .pdf-name {
            margin-left: 10px;
            font-size: 18px;
        }
        .download-btn-container {
            display: inline-flex;
            align-items: center;
        }

        .download-btn {
            display: inline-flex;
            align-items: center;
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            transition: background-color 0.3s ease;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            cursor: pointer;
        }

        .download-btn:hover {
            background-color: #2980b9;
        }

        .download-btn i {
            margin-right: 8px;
            font-size: 18px;
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
                <a class="nav-link" href="userhome"><i class="fa fa-home fa-2x" style="font-size: 24px;"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="team"><i class="fa fa-users team-icon"></i> Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="userqueryform"><i class="fa fa-question-circle"></i> Query</a>
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
                      oracle <br>
                      software
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
                      oracle <br>
                      software
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
                      oracle <br>
                      software
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
  <div class="heading_container heading_center psudo_white_primary mb_45">
        <h2>
          oracle <span style="color:lightblue;">Software</span>
        </h2>
  </div>
  <br>
  <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="note-card">
                    <div class="note-title" style="color:#333333;"><b>Oracle software</b></div>
                    <div class="note-content">
                        <b style="color:#fd7e14;">Oracle Database:</b><br>
                           ● A highly scalable and reliable relational database management system (RDBMS).<br>
                           ● Offers features for high availability, performance optimization, and advanced analytics.<br>
                        <b style="color:#fd7e14;">Oracle Cloud Infrastructure (OCI): </b><br>
                           ● Provides a comprehensive set of cloud computing services, including compute, storage, networking, and databases.<br>
                           ● Supports hybrid cloud environments and enables organizations to migrate and run enterprise workloads securely.<br>
                        <b style="color:#fd7e14;">Enterprise Applications: </b><br>
                            <strong>● ERP (Enterprise Resource Planning): </strong> Manages core business processes such as finance, procurement, and project management.<br>
                            <strong>● CRM (Customer Relationship Management): </strong> Improves customer interactions, sales, and marketing effectiveness.<br>
                            <strong>● HCM (Human Capital Management):  </strong> Streamlines HR processes including payroll, talent management, and workforce planning.<br>
                            <strong>● SCM (Supply Chain Management):   </strong> Optimizes supply chain operations from procurement to logistics and order fulfillment.<br>
                        <b style="color:#fd7e14;">Security and Management Tools: </b><br>
                           ● Oracle offers robust security solutions to safeguard data and applications from cyber threats.<br>
                           ● Management tools for monitoring, performance tuning, and automating administrative tasks across Oracle environments.<br>
                        <b style="color:#fd7e14;">Artificial Intelligence and Analytics: </b><br>
                           ● Integrates AI and machine learning capabilities into its applications and cloud services.<br>
                           ● Advanced analytics tools for generating insights from data and improving decision-making processes.<br>
                        <b style="color:#fd7e14;">Hardware Systems: </b><br>
                           ● Oracle designs and manufactures servers, storage systems, and networking solutions.<br>
                           ● Engineered to work optimally with Oracle software, providing high performance and reliability.<br>
                        <b style="color:#fd7e14;">Hardware Systems: </b><br>
                           ● Operates in over 175 countries, serving a diverse customer base across industries such as finance, healthcare, retail, and government.<br>
                           ● Trusted by organizations ranging from small businesses to large enterprises for critical business operations.<br>
                        <strong>Oracle continues to innovate and expand its software portfolio, empowering businesses to leverage technology for digital transformation, operational efficiency, and competitive advantage in the global marketplace.</strong>
                    </div>
                    <div class="note-timestamp" id="datetime3"></div>
                    <script>
                        function updateTime() {
                            const now = new Date();
                            const dateTimeString = now.toLocaleString();
                            document.getElementById('datetime3').textContent = dateTimeString;
                        }
                        updateTime();
                    </script>

                </div>
                
            </div>
        </div>
    </div>

  
 <br>
 <div class="container">
        <h2 class="mt-5 mb-4" style="font-family: 'Arial', sans-serif;font-size: 24px;color: #fff;background-color: #3498db;
            padding: 10px 15px;border-radius: 5px;margin-bottom: 20px;font-weight: bold;text-align: center;
            text-transform: uppercase;letter-spacing: 1px;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);">PDF Document's</h2>
        <?php 
        foreach($detail as $demo)
        {

        ?>
        <div class="pdf-container">
            <div>
                <img src="<?php echo base_url('user_ui/images/pdf.png');?>" type="application/pdf" width="200" height="260" />
            </div>
            <div class="pdf-name">
                <p><strong> <?php echo $demo['file_name'];?> </strong></p>
                <p><?php echo $demo['desc'];?></p>
                <p><?php echo $demo['created_at'];?></p>
                <div class="download-btn-container">
                 <a href="downloadsoftwarecontent/<?= $demo['id']; ?>"><button type="button" class="download-btn" title="book"><i class="fa fa-download download-icon"></i>Download</button></a>
                </div>
                 
            </div>
        </div>
        <?php
        }
        ?>
        
        
    </div>


  
  <!-- team section -->
  

  <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center psudo_white_primary mb_45">
        <h2>
          Content <span>By</span>
        </h2>
      </div>
      <div class="carousel-wrap ">
        <div class="owl-carousel client_owl-carousel">
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="<?php echo base_url('user_ui\images\larry.jpg');?>" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                    Larry Ellison
                    </h6>
                    <p>
                    <strong>Executive Vice President of Applications Development</strong>
                    </p>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                Larry Ellison is one of the founders of Oracle Corporation and serves as its CTO. He has been instrumental in driving the strategic direction of Oracle's cloud initiatives. </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="<?php echo base_url('user_ui/images/mark.jpg');?>" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                    Mark Hurd
                    </h6>
                    <p>
                      <strong>Former CEO of Oracle (2014-2019)</strong>
                    </p>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                who played a significant role in Oracle's transition to cloud computing and expanding its cloud services portfolio.  </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="<?php echo base_url('user_ui/images/safra.jpg');?>" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                    Safra Catz
                    </h6>
                    <p>
                    <strong> CEO of Oracle since 2014 </strong>
                    </p>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                who has been instrumental in Oracle's strategic direction, particularly in cloud infrastructure and enterprise software solutions.​ </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->


  <!-- info section -->

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
              <a class="active" href="home" >
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