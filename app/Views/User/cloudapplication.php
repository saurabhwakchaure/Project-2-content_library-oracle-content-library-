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
                      cloud <br>
                      Application
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
                      Application
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
                      Application
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
          Cloud <span style="color:lightblue;">Application</span>
        </h2>
  </div>
  <br>
  <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="note-card">
                    <div class="note-title" style="color:#333333"><b>What is cloud Application ?</b></div>
                    <div class="note-content">
                    Cloud applications, also known as <b style="color:#dc3545;">cloud-based applications or SaaS (Software as a Service), </b>are software programs that utilize both cloud-based and local resources. 
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
                    <div class="note-title" style="color:#333333;"><b>Key Characteristic's</b></div>
                    <div class="note-content">
                    <b style="color:#dc3545;">Remote Hosting: </b><br>
                        <b style="color:#fd7e14;">Cloud Servers: </b><br>The application's backend processes and data storage occur on servers managed by a cloud service provider (e.g., AWS, Azure, Google Cloud).<br>
                        <b style="color:#fd7e14;">Internet Access: </b><br>Users access the application through web browsers or dedicated apps without needing significant local resources.<br>
                        <br>
                        <b style="color:#dc3545;">Scalability: </b><br>
                            <b style="color:#fd7e14;">Elastic Resources:  </b> Cloud applications can automatically scale resources up or down based on user demand, ensuring optimal performance.<br>
                            <b style="color:#fd7e14;">On-Demand Services: </b>Services can be provisioned quickly and efficiently as needed.<br>
                        <br>
                        <b style="color:#dc3545;">Maintenance and Updates: </b><br>
                            <b style="color:#fd7e14;">Automatic Updates: </b>The cloud provider handles updates, ensuring users always have access to the latest features and security patches.<br>
                            <b style="color:#fd7e14;">Reduced IT Burden: </b>Organizations do not need to manage hardware or software maintenance.<br>
                        <br>
                        <b style="color:#dc3545;">Cost Efficiency: </b><br>
                            <b style="color:#fd7e14;">Subscription-Based Pricing: </b>Often, cloud applications are billed on a pay-as-you-go or subscription basis, reducing upfront costs.</br>
                            <b style="color:#fd7e14;">Lower IT Costs:  </b>Reduced need for physical infrastructure and IT personnel for maintenance.<br>
                        <br>
                        <b style="color:#dc3545;">Accessibility: </b><br>
                            <b style="color:#fd7e14;">Device Agnostic:  </b>Accessible from any device with internet connectivity, including laptops, tablets, and smartphones.<br>
                            <b style="color:#fd7e14;">Global Reach: </b>Enables remote work and collaboration from anywhere in the world.<br>
                        <br>
                        <b style="color:#dc3545;">Collaboration: </b><br>
                            <b style="color:#fd7e14;">Real-Time Collaboration: </b>Supports multiple users working on the same document or project simultaneously.<br>
                            <b style="color:#fd7e14;">Shared Resources:  </b>Facilitates easy sharing of files and data among team members.<br>
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
                    <div class="note-title" style="color:#333333;"><b>Types of Cloud Application's</b></div>
                    <div class="note-content">
                        <b style="color:#fd7e14;">Software as a Service (SaaS): </b><br>
                           <strong>● Examples: </strong>Google Workspace, Microsoft 365, Salesforce.<br>
                           <strong>● Characteristics: </strong>Complete software solutions delivered over the internet.<br>
                        <b style="color:#fd7e14;">Platform as a Service (PaaS): </b><br>
                            <strong>● Examples: </strong>Google App Engine, Microsoft Azure.<br>
                            <strong>● Characteristics: </strong>Provides a platform allowing customers to develop, run, and manage applications without the complexity of building and maintaining infrastructure.<br>
                        <b style="color:#fd7e14;">Infrastructure as a Service (IaaS): </b><br>
                            <strong>● Examples: </strong> Amazon Web Services (AWS), Microsoft Azure.<br>
                            <strong>● Characteristics: </strong>Provides virtualized computing resources over the internet.<br>
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
                    <b style="color:#fd7e14;">Office and Productivity Suites</b><br>
                           <strong>● Google Workspace:  </strong>Gmail, Google Docs, Sheets, Drive.<br>
                           <strong>● Microsoft 365: </strong>Outlook, Word, Excel, OneDrive.<br>
                        <b style="color:#fd7e14;">Customer Relationship Management (CRM) </b><br>
                            <strong>● Salesforce:</strong>Comprehensive CRM platform.<br>
                            <strong>● HubSpot:  </strong>CRM with marketing, sales, and customer service features.<br>
                        <b style="color:#fd7e14;">Enterprise Resource Planning (ERP) </b><br>
                            <strong>● Oracle ERP Cloud: </strong>Financial management, procurement, project management.<br>
                            <strong>● SAP S/4HANA Cloud: </strong>Integrated business processes and analytics.<br>
                        <b style="color:#fd7e14;">Collaboration and Communication Tools </b><br>
                            <strong>● Slack: </strong>Team communication and collaboration.<br>
                            <strong>● Zoom: </strong>Video conferencing and online meetings.<br>
                        <b style="color:#fd7e14;">Human Capital Management (HCM) </b><br>
                            <strong>● Workday: </strong>HR, payroll, and talent management.<br>
                            <strong>● Oracle HCM Cloud: </strong>Workforce management, recruitment.<br>
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
                    <div class="note-title" style="color:#333333;"><b>Benefit's</b></div>
                    <div class="note-content">
                    <b style="color:#fd7e14;">Flexibility and Mobility:</b>Users can work from anywhere, enhancing remote work capabilities..<br>
                    <b style="color:#fd7e14;">Resource Optimization:</b> Efficient use of computing resources, reducing the need for on-premises hardware.<br>
                    <b style="color:#fd7e14;">Innovation and Agility:</b> Quick deployment of new features and technologies.<br>
                    <b style="color:#fd7e14;">Business Continuity:</b> Built-in disaster recovery and backup solutions.<br>       
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
                    <b style="color:#fd7e14;">Security and Privacy:</b> Ensuring data security and compliance with legal and regulatory requirements.<br>
                    <b style="color:#fd7e14;">Internet Dependency:</b> Reliable internet access is essential for optimal performance.<br>
                    <b style="color:#fd7e14;">Integration:</b> Ensuring seamless integration with existing systems and other cloud services.<br>
                    <b style="color:#fd7e14;">Cost Management: </b> Monitoring and managing subscription costs to avoid unexpected expenses.<br>       
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
                 <a href="downloadcloudapplicationcontent/<?= $demo['id']; ?>"><button type="button" class="download-btn" title="book"><i class="fa fa-download download-icon"></i>Download</button></a>
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
                <img src="<?php echo base_url('user_ui\images\steve.jpg');?>" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                    Steve Miranda 
                    </h6>
                    <p>
                    <strong>Executive Vice President of Applications Development</strong>
                    </p>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                Steve Miranda is a prominent executive at Oracle Corporation, known for his leadership in Oracle's applications development and cloud services. </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="<?php echo base_url('user_ui/images/rob.jpg');?>" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                    Rob Tarkoff 
                    </h6>
                    <p>
                      <strong>Executive Vice President and General Manager, Oracle CX</strong>
                    </p>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                Rob Tarkoff leads Oracle's Cloud and Data Strategy, focusing on driving Oracle's cloud business growth and advancing its strategy in data management and analytics solutions.  </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="<?php echo base_url('user_ui/images/chris.jpg');?>" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                    chris Leone
                    </h6>
                    <p>
                    <strong>executive at Oracle Corporation </strong>
                    </p>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                Chris Leone is an executive at Oracle Corporation who has held various leadership positions within the company. </p>
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