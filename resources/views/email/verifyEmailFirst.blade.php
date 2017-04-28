<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title Page</title>

    <!-- Main CSS -->
    <link rel="stylesheet" type="text/css" href="/assets/css/verify.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.css">

</head>
<body>
<div class="main-body">
    <div class="content">
        <div class="checked text-center">
            <img src="/assets/img/checked.svg">
        </div>
        <h2 class="text-center m-t-15">Registration was succesful!</h2>
        <h4 class="text-center m-t-15">A verification email has being sent to your email inbox, kindly check to verify your account.</h4>
        <div class="text-center m-t-15">
            <a href="{{ url("/") }}">Back to home</a>
        </div>
    </div>
</div>

<!-- jQuery -->
<script type="text/javascript" src="/assets/js/jquery.js"></script>
<!-- Bootstrap JavaScript -->
<script type="text/javascript" src="/assets/js/bootstrap.js"></script>
</body>
</html>