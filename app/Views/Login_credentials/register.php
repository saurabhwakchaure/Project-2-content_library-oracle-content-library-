<html>
    <head>
    <link rel="shortcut icon" href="images/booktitle.jpg" type="">

<title> Content Library </title>
        <style>
            body{
                background-image:url('/user_ui/images/register_back_img.avif');
                background-size:cover;
            }
        .container{
    margin-left:300px;
    margin-right:300px;
    margin-top:100px;
    margin-bottom:100px;
    
    
    
    }
        * {box-sizing: border-box}
    /* Full-width input fields */
    input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
    }

    /* Add a background color when the inputs get focus */
    input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
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
    opacity: 0.9;
    }

    button:hover {
    opacity:1;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
    }

    /* Float cancel and signup buttons and add an equal width */
    .cancelbtn, .signupbtn {
        float: left;
        width: 50%;
    }

    /* Add padding to container elements */
    .container {
        padding: 16px;
    }

    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: #474e5d;
        padding-top: 50px;
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: #fefefe;
        margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        width: 80%; /* Could be more or less, depending on screen size */
    }

    /* Style the horizontal ruler */
    hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
    }   

    /* The Close Button (x) */
    .close {
        position: absolute;
        right: 35px;
        top: 15px;
        font-size: 40px;
        font-weight: bold;
        color: #f1f1f1;
    }

    .close:hover,
    .close:focus {
        color: #f44336;
        cursor: pointer;
    }

    /* Clear floats */
    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }

    /* Change styles for cancel button and signup button on extra small screens */
    @media screen and (max-width: 300px) {
        .cancelbtn, .signupbtn {
        width: 100%;
    }
}
</style>
    </head>
    <body class="body1">
        
        <center>
        <form action="insertregister" style="border:1px solid #ccc" method="post" onsubmit="return validateForm()">
        
    <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter email" name="email" id="email" required>
        <span id="emailerror"></span>
        <br><br><br>

    <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" id="password" required>
        <span id="passwordError"></span>
        <br><br><br>

    <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="repassword" id="repassword" required>
        <span id="repasswordError"></span>
        <br><br><br>


    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px" required> Remember me
    </label>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
    
    <p>Allready have account? <a href="login" style="color:dodgerblue">Sign in</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
  </form>
  <script>
    function validateForm()
    {
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;
        const repassword = document.getElementById('repassword').value;
        let valid=true;

        if (password.length < 8) {
            document.getElementById('passwordError').textContent = 'password must be at least 8 characters long.';
            valid = false;
        }

        if (password !== repassword) {
            document.getElementById('repasswordError').textContent = 'Passwords do not match.';
            valid = false;
        }

        const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
        if (!email.match(emailPattern)) {
            document.getElementById('emailerror').textContent = 'Invalid email address.';
            valid = false;
        }
        return valid;
    }
    </script>
</body>
</html>