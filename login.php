<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="navbar">
  <a href="index.php">Home</a>
  <a href="about.php">About</a>
  <a href="contactus.php">Contact Us</a>
</div>

  <div class="login-form" style="margin-top:30px;margin-bottom:30px;">
    <form>
      <h1>Login</h1>
      <div class="form-group">
        <input type="email" name="email" placeholder="E-mail Address">
        <span class="input-icon"><i class="fa fa-envelope"></i></span>
      </div>
      <div class="form-group">
        <input type="password" name="psw" placeholder="Password">
        <span class="input-icon"><i class="fa fa-lock"></i></span>
      </div>      
      <button class="login-btn">Login</button>      
      <a class="reset-psw" href="#" style="text-align: right;">Forgot your password?</a>
      <a class="reset-psw" href="signup.php" style="text-decoration:none; color: #45aba6; font-size: 15px; margin-top: 20px; margin-bottom: -15px" >Signup</a>
      <div class="seperator"><b>or</b></div>
      <p>Sign in with your social media account</p>
      
    <!-- Social login buttons -->
<div class="social-icon">    
        <button type="button"><a class="fa fa-google"  href=" https://accounts.google.com" style="text-decoration:none; color: white" ></a></button>
        <button  type="button"><a class="fa fa-facebook" href="https://www.facebook.com/" style="text-decoration:none; color: white" ></a></button>
      </div>
    </form>
  </div>

  <?php
    include 'templates/footer.php'
  ?>