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
                      cloud <br>
                      infrastructure
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
                      cloud <br>
                      infrastructure
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
                      cloud <br>
                      infrastructure
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
          Cloud <span style="color:lightblue;">Infrastructure</span>
        </h2>
  </div>
  <br>
  <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="note-card">
                    <div class="note-title" style="color:#333333"><b>What is cloud infrastructure ?</b></div>
                    <div class="note-content">
                    Oracle Cloud Infrastructure (OCI) is a set of <b style="color:#dc3545;">cloud services</b> provided by Oracle Corporation that offers high-performance computing <b>power, storage, and networking capabilities.</b> 
                    OCI is designed to support various workloads, including enterprise <b style="color:#dc3545;">applications, databases, analytics, and cloud-native applications.</b><br>
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
                    <div class="note-title" style="color:#333333;"><b>Key Component's</b></div>
                    <div class="note-content">
                    <b style="color:#dc3545;">Compute Services:</b><br>
                        <b style="color:#fd7e14;">Bare Metal Instances: </b>Physical servers without virtualization for high performance.<br>
                        <b style="color:#fd7e14;">Virtual Machines (VMs): </b>Virtualized compute instances that offer flexibility and scalability.<br>
                        <b style="color:#fd7e14;">Container Engine for Kubernetes (OKE): </b>Managed Kubernetes service for deploying and managing containerized applications.<br>
                        <b style="color:#fd7e14;">Functions: </b>Serverless compute service for running event-driven applications.<br>
                        <br>
                        <b style="color:#dc3545;">Storage Services:</b><br>
                            <b style="color:#fd7e14;">Block Volumes: </b>High-performance block storage for compute instances.<br>
                            <b style="color:#fd7e14;">Object Storage: </b>Scalable storage for unstructured data, such as backups, archives, and large datasets.<br>
                            <b style="color:#fd7e14;">File Storage: </b>Managed file systems that support NFS for file-based workloads.<br>
                            <b style="color:#fd7e14;">Archive Storage: </b>Low-cost storage for long-term data retention and compliance needs.<br>
                        <br>
                        <b style="color:#dc3545;">Networking Services:</b><br>
                            <b style="color:#fd7e14;">Virtual Cloud Network (VCN): </b>A customizable, private network in OCI that provides complete control over network environment.<br>
                            <b style="color:#fd7e14;">Load Balancing: </b>Distributes traffic across multiple compute instances to ensure high availability and reliability.<br>
                            <b style="color:#fd7e14;">FastConnect: </b>Dedicated, private connections between on-premises data centers and OCI.<br>
                            <b style="color:#fd7e14;">DNS and Edge Services: </b>Domain Name System (DNS) and edge security services to optimize and protect web applications.<br>
                        <br>
                        <b style="color:#dc3545;">Database Services:</b><br>
                            <b style="color:#fd7e14;">Oracle Autonomous Database: </b>Self-driving, self-securing, and self-repairing databases optimized for transaction processing, data warehousing, and mixed workloads.</br>
                            <b style="color:#fd7e14;">Oracle Database Cloud Service: </b>Managed Oracle Database services with flexibility in deployment.<br>
                            <b style="color:#fd7e14;">NoSQL Database:</b> Managed database service for document, key-value, and JSON data models.<br>
                        <br>
                        <b style="color:#dc3545;">Identity and Access Management (IAM):</b><br>
                            <b style="color:#fd7e14;">Identity Domains: </b>Securely manage users, groups, and roles, and provide fine-grained access control to resources.<br>
                            <b style="color:#fd7e14;">Single Sign-On (SSO): </b>Unified authentication across multiple applications and services.<br>
                        <br>
                        <b style="color:#dc3545;">Analytics and AI Services:</b><br>
                            <b style="color:#fd7e14;">Oracle Analytics Cloud: </b>Comprehensive analytics platform for business intelligence, data visualization, and reporting.<br>
                            <b style="color:#fd7e14;">Data Integration: </b>Tools for data movement, transformation, and integration from various sources.<br>
                            <b style="color:#fd7e14;">AI and Machine Learning: </b>Services to build, train, and deploy machine learning models.<br>
                        </br>
                        <b style="color:#dc3545;">Developer Services:</b><br>
                           <b style="color:#fd7e14;">Oracle Cloud Infrastructure DevOps: </b>Tools for CI/CD pipelines, code repositories, and automation.<br>
                           <b style="color:#fd7e14;">APIs and SDKs: </b>Comprehensive APIs and software development kits (SDKs) for integration with OCI services.<br>
                        <br>
                        <b style="color:#dc3545;">Security and Compliance:</b><br>
                            <b style="color:#fd7e14;">Security Zones: </b>Pre-configured policies for secure cloud configurations.<br>
                            <b style="color:#fd7e14;">Audit Service: </b>Tracks and logs all API calls for compliance and audit purposes.<br>
                            <b style="color:#fd7e14;">Encryption: </b>End-to-end encryption for data at rest and in transit.<br>
                        </br>

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
                    <div class="note-title" style="color:#333333;"><b>Key Benefit's</b></div>
                    <div class="note-content">
                        <b style="color:#fd7e14;">High Performance:</b>Designed for high performance and low latency for demanding workloads.<br>
                        <b style="color:#fd7e14;">Security: </b>Built-in security features and compliance certifications to protect data and applications.<br>
                        <b style="color:#fd7e14;">Scalability: </b>Ability to scale resources up or down based on demand.<br>
                        <b style="color:#fd7e14;">Cost-Effectiveness: </b>Competitive pricing with flexible billing options.<br>
                        <b style="color:#fd7e14;">Hybrid and Multi-Cloud Capabilities: </b>Seamless integration with on-premises environments and other cloud platforms.<br>
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
                    <div class="note-title" style="color:#333333;"><b>Use Case's</b></div>
                    <div class="note-content">
                        <b style="color:#fd7e14;">Enterprise Applications:  </b>Running mission-critical enterprise applications such as ERP, CRM, and HCM.<br>
                        <b style="color:#fd7e14;">Database Workloads:  </b>Deploying Oracle and non-Oracle databases with high availability and performance.<br>
                        <b style="color:#fd7e14;">Big Data and Analytics:  </b>Processing large datasets and performing advanced analytics and machine learning.<br>
                        <b style="color:#fd7e14;">Disaster Recovery:  </b>Setting up reliable and efficient disaster recovery solutions.<br>
                        <b style="color:#fd7e14;">Application Development: </b>Building, testing, and deploying modern applications using DevOps and container orchestration.<br>
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
                 <a href="downloadcloudinfracontent/<?= $demo['id']; ?>"><button type="button" class="download-btn" title="book"><i class="fa fa-download download-icon"></i>Download</button></a>
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
                    <strong>Co-Founder, Chairman, and Chief Technology Officer (CTO)</strong>
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
                <img src="<?php echo base_url('user_ui/images/amit.jpg');?>" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                    Amit Zavery 
                    </h6>
                    <p>
                      <strong>Executive Vice President and General Manager, Oracle Cloud Platform and Middleware</strong>
                    </p>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                Amit Zavery manages the Oracle Cloud Platform, which includes a broad portfolio of services such as database, application development, integration, analytics, and security.  </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="<?php echo base_url('user_ui/images/jeb.jpg');?>" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                    Jeb Dasteel 
                    </h6>
                    <p>
                    <strong>Senior Vice President, Customer Success</strong>
                    </p>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                Jeb Dasteel focuses on customer success and ensuring that Oracle's cloud customers achieve their business objectives.​ </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="<?php echo base_url('user_ui/images/vinay.jpg');?>" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                    Vinay Kumar 
                    </h6>
                    <p>
                      <strong>Vice President, Product Management, Oracle Cloud Infrastructure</strong>
                    </p>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                Vinay Kumar leads product management for OCI, guiding the development of features and services based on customer feedback and market demands.  </p>
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