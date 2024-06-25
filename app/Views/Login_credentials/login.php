<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/booktitle.jpg" type="">

  <title> Content Library </title>
    <link rel="stylesheet" href="styles.css">
    <style>
        
        body{
                background-image:url('/user_ui/images/back_img_login.jpg');
                background-size:cover;
            }
    form {
  border: 3px solid #f1f1f1;
  margin-left:300px;
  margin-right:300px;
  margin-top:100px;
  margin-bottom:100px;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 40%;
  border-radius: 50%;
}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}
</style>
</head>
<body>
    <center>
    <form action="checklogincredentials" method="post">
  <div class="imgcontainer">
    <img src="<?php echo base_url('user_ui\images\login_img.jpg');?>" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember" required> Remember me
    </label>
  </div>

  <div class="container">
    <button type="button" class="cancelbtn" style="margin-left:160px;">cancel</button>
    <span class="psw">Not a Member? <a href="register"><b>sign up</b></a></span>
  </div>
</form>
</center>
</body>
</html>
