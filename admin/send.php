<?php require('../config/routes.php'); ?>
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
    <script src="/js/min/sendContact-min.js"></script>    
</head>
<body>
    <div class="container">
    <div class="login-container">
        <div id="output"></div>
        <div class="avatar">
            <img src="https://media.licdn.com/media/p/1/000/108/1a0/2c41108.jpg" class="img img-circle">
        </div>
        <div class="form-box">
            <form action="" method="">
                <input name="user" id="name" type="text" required="true" placeholder="Name">
                <input name="email" type="email" required="true" placeholder="Email">
                <textarea name="message" id="message" class="form-control" placeholder="Message to contact (optional)"></textarea>
                <button class="btn btn-info btn-block login" type="submit">Send</button>
            </form>
        </div>
    </div>  
</div>

</body>
</html>
