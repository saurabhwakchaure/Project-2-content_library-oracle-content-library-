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

  <link rel="shortcut icon" href="/newui/images/oracle.png" type="image/x-icon">

  <title> oracle content Library </title>
  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('admin_ui/css/bootstrap.css');?>" />
  <!-- font awesome style -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('admin_ui/css/font-awesome.min.css');?>" />

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url('admin_ui/css/style.css');?>" rel="stylesheet" />
  <!-- responsive style -->
  <link href="<?php echo base_url('admin_ui/css/responsive.css');?>" rel="stylesheet" />
  <style>
    .container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    }
    .marquee-container {
            overflow: hidden;
            position: relative;
            background-color: black;
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

    .container-form {
    margin: 0 auto;
    width: 80%;
    max-width: 300px;
    background-color: rgba(255, 255, 255, 0.9);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .upload-form {
    display: flex;
    flex-direction: column;
    }

    .upload-form h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
    }

    .form-group {
    margin-bottom: 15px;
    }

    .form-group label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
    }

    .form-group input[type="text"],
    .form-group textarea,
    .form-group input[type="file"] {
    width: calc(100% - 20px);
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
    }

    button[type="submit"] {
    width: 100%;
    padding: 10px;
    font-size: 18px;
    color: #fff;
    background-color: #3498db;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    }

    button[type="submit"]:hover {
    background-color: #2980b9;
    }   
    .container-home {
    text-align: right;
    }

    .home-button {
    display: inline-flex;
    align-items: center;
    padding: 10px 20px;
    font-size: 18px;
    color: #fff;
    background-color: #3498db;
    border: none;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s ease;
    }

    .home-button:hover {
    background-color: #2980b9;
    }

    .home-button i {
    margin-right: 8px;
    }
        
</style>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid">
          <div class="contact_nav">
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call : +91 9168916690
              </span>
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                Email : saurabhwakchaure1412@gmail.com
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="marquee-tag">
     <div class="marquee-container">
        <div class="marquee">
            <marquee>Note:Admin have to add the content related to oracle Cloud Infrastructure and mentioned file name and Description in short which is convenient to user's as well</marquee>
        </div>
     </div>
    </div>
    <br>
    <div class="container-home">
        <a href="adminhome" class="home-button">
            <i class="fa fa-home"></i> Home
        </a>
    </div>

    <br><br>
        <div class="container">
        <form action="insertcloudapplication" method="post" enctype="multipart/form-data" class="upload-form">
            <h2>Upload File</h2>
            <div class="form-group">
                <label for="fileName">File Name:</label>
                <input type="text" id="fileName" name="file_name" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="fileUpload">Upload File:</label>
                <input type="file" id="fileUpload" name="pdfFile" required>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
        
    </div>

      <br><br>
      
  <!--end note section -->

  

  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <h4>
        Get In Touch
      </h4>
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <div class="info_items">
            <div class="row">
              <div class="col-md-4">
                <a href="">
                  <div class="item ">
                    <div class="img-box ">
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <p>
                      Pune
                    </p>
                  </div>
                </a>
              </div>
              <div class="col-md-4">
                <a href="">
                  <div class="item ">
                    <div class="img-box ">
                      <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <p>
                      +91 9168916690
                    </p>
                  </div>
                </a>
              </div>
              <div class="col-md-4">
                <a href="">
                  <div class="item ">
                    <div class="img-box">
                      <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                    <p>
                      saurabhwakchaure1412@gmail.com
                    </p>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="social-box">
      <h4>
        Follow Us
      </h4>
      <div class="box">
        <a href="">
          <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-twitter" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-youtube" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
      </div>
    </div>
  </section>



  <!-- end info_section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayDateYear"></span> All Rights Reserved By
        <a href="https://html.design/">oracle content library</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->

  <script src="<?php echo base_url('js/jquery-3.4.1.min.js');?>"></script>
  <script src="<?php echo base_url('js/bootstrap.js');?>"></script>
  <script src="<?php echo base_url('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js');?>">
  </script>
  <script src="<?php echo base_url('js/custom.js');?>"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->


</body>

</html>