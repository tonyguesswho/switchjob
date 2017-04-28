<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title Page</title>

    <!-- Main CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/404.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="error-template">
                <h1 class="red">Oops!</h1>
                <h2>
                    404 Not Found</h2>
                <div class="error-details">
                    Sorry, an error has occured, Requested page not found!
                </div>
                <div class="coffee">
                    <img src="assets/img/coffee.svg">
                </div>
                <div class="error-actions">
                    <a href="{{ url("/") }}" class="btn brand-btn btn-lg">Take Me Home </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script type="text/javascript" src="assets/js/jquery.js"></script>
<!-- Bootstrap JavaScript -->
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
</body>
</html>