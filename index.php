<html>
<?php
include('login.php'); 
?>
<head>
<title> Student Login</title>
<link rel="stylesheet" href="./css/animate.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
body#LoginForm{ background-image:url("./img/blur-26347-27038-hd-wallpapers.jpg"); background-repeat:no-repeat; background-position:center; background-size:cover; padding:10px;}
.form-heading { color:#fff; font-size:23px;}
.panel h2{ color:#444444; font-size:18px; margin:0 0 8px 0;}
.panel p { color:#777777; font-size:14px; margin-bottom:30px; line-height:24px;}
.login-form .form-control {
  background: #f7f7f7 none repeat scroll 0 0;
  border: 1px solid #d4d4d4;
  border-radius: 4px;
  font-size: 14px;
  height: 50px;
  line-height: 50px;
}
.main-div {
  background: #ffffff none repeat scroll 0 0;
  border-radius: 5px;
  margin: 10px auto;
  max-width: 38%;
  padding: 50px 70px 70px 71px;
}

.login-form .form-group {
  margin-bottom:10px;
}
.login-form{ text-align:center;
pointer-events: auto;}
#login-form{ text-align:center;
pointer-events:auto;}
.forgot a {
  color: #777777;
  font-size: 14px;
  text-decoration: underline;
}
.login-form  .btn.btn-primary {
  background: #f0ad4e none repeat scroll 0 0;
  border-color: #f0ad4e;
  color: #ffffff;
  font-size: 14px;
  width: 100%;
  height: 50px;
  line-height: 50px;
  padding: 0;
}
.forgot {
  text-align: left; margin-bottom:30px;
}
.botto-text {
  color: #ffffff;
  font-size: 14px;
  margin: auto;
}
.login-form .btn.btn-primary.reset {
  background: #ff9900 none repeat scroll 0 0;
}
.back { text-align: left; margin-top:10px;}
.back a {color: #444444; font-size: 13px;text-decoration: none;}

</style>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>

</head>
<body id="LoginForm">

<div class="container">
  <h1 class="form-heading">KTU Activity Point Calculator</h1>
  <div class="login-form" id="login-form" data-input-element="#log" >
    <div class="main-div" data-depth="0.9">
      <div class="panel">
          <h2>Admin/Student Login</h2>
          <p>Please enter your username and password</p>
      </div>
      <form id="Login" action="" method="post">
        <div class="form-group">
          <input type="text" name="username" class="form-control" id="inputEmail" placeholder="Username" required>
        </div>
        <div class="form-group">
          <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password" required>
        </div>
        <div class="forgot">
          <a href="reset.html">Forgot password?</a> 
        </div>
          <button type="Login" name="submit" class="btn btn-primary">Login</button>
          <span><?php echo $error; ?></span>
      </form>
    </div>
      <p class="botto-text"> Designed for saintgits</p>
  </div>
 
</body>
<!-- <script type="text/javascript">
var scene = document.getElementById('login-form');
var input = document.getElementById('log');
var parallax = new Parallax(scene, {
     hoverOnly: true,
    
  inputElement: input
  });
	</script> -->
</html>
