<?php require('config/routes.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, height=device-height, minimal-ui, user-scalable=no, ">
	<title>Martin Moscosa - Login</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/login.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="/js/min/login-min.js"></script>	
</head>
<body>
	<div class="container">
	<div class="login-container">
        <div id="output"></div>
        <div class="avatar">
        	<img src="https://media.licdn.com/media/p/1/000/108/1a0/2c41108.jpg" class="img img-circle">
        </div>
        <div class="form-box">
        	<p>Welcome and <strong>thank you</strong> for your interest in getting my details. As these are personal details I have only allowed those whom I've met previously to see these. <u>You should have received an email</u> (with a link to this page) as you have shared your business card with me.</p>
        	<p>Please input the email on your <a href="#" data-toggle="tooltip" data-placement="right" title="If you have more than one emaial on your business card, I have used the first email you listed.">business card</a> as this will allow you to proceed.</p>
            <form action="" method="">
                <input name="user" type="email" required='true' placeholder="your business card email">
                <button class="btn btn-info btn-block login" type="submit">Proceed</button>
            </form>
            <h3>Thank you</h3>
        </div>
    </div>  
</div>
<script type="text/javascript">
	$('a').tooltip();
</script>
</body>
</html>
