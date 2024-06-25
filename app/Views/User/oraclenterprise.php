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
                      Enterprise
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
                      enterprise
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
                      enterprise

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
          Oracle <span style="color:lightblue;">Enterprise</span>
        </h2>
  </div>
  <br>
  <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="note-card">
                    <div class="note-title" style="color:#333333"><b>What are Enterprise Applications ?</b></div>
                    <div class="note-content">
                    ● Enterprise Applications refer to <b>software solutions that organizations use to manage their business processes and operations.</b><br>
                    ● These applications are comprehensive, integrated systems that support core business functions across various departments and functions within an organization.<br>
                    ● They typically include modules for ERP (Enterprise Resource Planning), CRM (Customer Relationship Management), HCM (Human Capital Management), SCM (Supply Chain Management), and more.
                    </div>
                    <div class="note-timestamp" id="datetime"></div>
                    <script>
                        function updateTime() {
                            const now = new Date();
                            const dateTimeString = now.toLocaleString();
                            document.getElementById('datetime').textContent = dateTimeString;
                        }
                        updateTime();
                    </script>

                </div>
                <div class="note-card">
                    <div class="note-title" style="color:#333333;"><b>Benefit's</b></div>
                    <div class="note-content">
                        <b style="color:#fd7e14;">Integration: </b><br>Enterprise Applications integrate different business functions and departments, ensuring seamless data flow and collaboration across the organization.<br>
                        <b style="color:#fd7e14;">Automation: </b><br>They automate routine tasks and processes, improving efficiency and reducing manual effort.<br>
                        <b style="color:#fd7e14;">Centralization: </b><br>Centralized data management provides a single source of truth, enhancing accuracy and decision-making.<br>
                        <b style="color:#fd7e14;">Scalability:: </b><br>Scalable solutions that can grow with the organization's needs, supporting expansion and evolving business requirements.<br>
                        <b style="color:#fd7e14;">Real-time Insights:: </b><br>Advanced analytics and reporting capabilities provide real-time insights into business performance and trends.<br>
                        <br>
                    </div>
                    <div class="note-timestamp" id="datetime2"></div>
                    <script>
                        function updateTime() {
                            const now = new Date();
                            const dateTimeString = now.toLocaleString();
                            document.getElementById('datetime2').textContent = dateTimeString;
                        }
                        updateTime();
                    </script>

                </div>
                <div class="note-card">
                    <div class="note-title" style="color:#333333;"><b>Characteristic's</b></div>
                    <div class="note-content">
                    <b style="color:#fd7e14;">Comprehensive: </b><br>Cover multiple aspects of business operations, from finance and HR to sales and supply chain.<br>
                        <b style="color:#fd7e14;">Modular: </b><br> Typically modular in nature, allowing organizations to select and deploy specific modules as needed.<br>
                        <b style="color:#fd7e14;">Customizable: </b><br>Configurable to meet specific business requirements and industry regulations.<br>
                        <b style="color:#fd7e14;">Secure: </b><br>Built-in security features to protect sensitive business data and ensure compliance with privacy regulations.<br>
                        <b style="color:#fd7e14;">Cloud-based: </b><br>Increasingly offered as cloud-based solutions, providing flexibility, scalability, and accessibility from anywhere.<br>
                        <br>
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
                <div class="note-card">
                    <div class="note-title" style="color:#333333;"><b>Example's</b></div>
                    <div class="note-content">
                    <b style="color:#fd7e14;">Oracle ERP Cloud: : </b><br>Manages financials, procurement, project management, and more, providing real-time insights and automation to streamline business operations.<br>
                        <b style="color:#fd7e14;">Oracle HCM Cloud: </b><br>Supports HR functions including payroll, talent management, and employee engagement, improving workforce efficiency and satisfaction.<br>
                        <b style="color:#fd7e14;">Oracle CX Cloud: </b><br>Enhances customer experiences through sales automation, marketing campaigns, service management, and social interactions.<br>
                        <b style="color:#fd7e14;">Oracle SCM Cloud: </b><br>Optimizes supply chain operations with features for planning, procurement, manufacturing, and logistics, ensuring efficient inventory management and order fulfillment.<br>
                        <b style="color:#fd7e14;">Oracle EPM Cloud: </b><br>Facilitates strategic planning, budgeting, forecasting, and financial consolidation, aligning financial and operational goals for improved performance.<br>
                        <br>
                        
                        
                    </div>
                    <div class="note-timestamp" id="datetime4"></div>
                    <script>
                        function updateTime() {
                            const now = new Date();
                            const dateTimeString = now.toLocaleString();
                            document.getElementById('datetime4').textContent = dateTimeString;
                        }
                        updateTime();
                    </script>

                </div>
                <div class="note-card">
                    <div class="note-title" style="color:#333333;"><b>Oracle's Approach and Innovation</b></div>
                    <div class="note-content">
                    Oracle continuously innovates its Enterprise Applications by <b>integrating emerging technologies such as AI, machine learning, and blockchain.</b> These advancements enhance functionality, usability, and performance, helping organizations stay competitive and agile in today's digital economy.
                    </div>
                    <div class="note-timestamp" id="datetime5"></div>
                    <script>
                        function updateTime() {
                            const now = new Date();
                            const dateTimeString = now.toLocaleString();
                            document.getElementById('datetime5').textContent = dateTimeString;
                        }
                        updateTime();
                    </script>

                </div>
                <div class="note-card">
                    <div class="note-title" style="color:#333333;"><b>Challenge's</b></div>
                    <div class="note-content">
                     Oracle Enterprise Applications play a crucial role in enabling organizations to streamline operations, improve decision-making, and drive business growth through integrated, scalable, and secure software solutions tailored to meet diverse business needs.
                   </div>
                    <div class="note-timestamp" id="datetime6"></div>
                    <script>
                        function updateTime() {
                            const now = new Date();
                            const dateTimeString = now.toLocaleString();
                            document.getElementById('datetime6').textContent = dateTimeString;
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
                 <a href="downloadenterprisecontent/<?= $demo['id']; ?>"><button type="button" class="download-btn" title="book"><i class="fa fa-download download-icon"></i>Download</button></a>
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
                <img src="<?php echo base_url('user_ui\images\dorian.jpg');?>" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                    Dorian Daley 
                    </h6>
                    <p>
                    <strong> Executive Vice President</strong>
                    </p>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                Executive Vice President and General Counsel of Oracle Corporation, overseeing legal affairs and policies.
            </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="<?php echo base_url('user_ui/images/edward.jpg');?>" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                    Edward Screven
                    </h6>
                    <p>
                      <strong>Corporate Architect </strong>
                    </p>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                Chief Corporate Architect at Oracle, responsible for Oracle's technology architecture and integration strategy.</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="<?php echo base_url('user_ui/images/thomas.jpg');?>" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                    Thomas Kurian
                    </h6>
                    <p>
                    <strong> President of Product Development</strong>
                    </p>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                Former President of Product Development at Oracle, known for his leadership in expanding Oracle's cloud computing capabilities and services. </p>
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