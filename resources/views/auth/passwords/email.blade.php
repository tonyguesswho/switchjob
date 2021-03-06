<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Sign In</title>
        <!-- STYLESHEETS-->
        <link rel="stylesheet" href="../switch/assets/css/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../switch/assets/css/animsition.min.css">
        <link rel="stylesheet" type="text/css" href="../switch/assets/js/animate.css">
        <!-- CUSTOM STYLES -->
        <link rel="stylesheet" href="../switch/assets/css/form2.css">
        <!-- WEBFONT -->
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,400italic|Montserrat:700,400|Homemade+Apple' rel='stylesheet' type='text/css'>
        <style type="text/css">



        </style>

    </head>

    <body>
        <div class="wrapper clearfix animsition flex-container" style="background: #DFE5E9;">
            <div class="clearfix" style="width: 100%; height: 100%:">
              <div class="container clearfix" style="padding: 20px; width: 30%; margin: 0 auto; color: #222;">
                  <!-- logo in here -->
                  <div class="logo">
                      <a href="index.html">
                         <img src="../switch/assets/img/logos/switch_3.svg" alt="Switch DEV" style="max-height: 100px">
                      </a>
                  </div>

                  <div><br><br><br></div>
                  <!--login box in here -->
                  <div class="login-box">
                    <form action="#" method="post" class="forms">

                        <input type="email" placeholder="samson@yahoo.com" class="input-field form-control password" />

                        <button id="submit-form" class="btn btn-login btn-block ladda-button" data-style="expand-left"><span class="ladda-label">Send Password</span></button>
                    </form>
                    <hr style="color: #fff; opacity: 0.1">
                    <div class="login-links">
                        <a href="/login">Already have an account? <strong>Sign In</strong></a>
                    </div>
                  </div>


              </div>
              <div><br><br><br><br><br><br></div>
              <div class="footer">
                  <ul class="float-left">
                    <li><a href="#">Privacy<a></li>
                    <li><a href="#">Terms<a></li>
                    <li><a href="#">Security<a></li>
                    <li style="float: right;"><a href="#">&copy 2017 Switch Nigeria<a></li>
                  </ul>
              </div>
            </div>

        </div>

        <!-- SCRIPTS -->
            <script src="../switch/assets/js/jquery.min.js"></script>
            <script src="../switch/assets/js/bootstrap.min.js"></script>
            <script src="../switch/assets/js/jquery.vegas.min.js"></script>
            <script src="../switch/assets/js/animisition.min.js"></script>
            <script src="../switch/assets/js/main2.js"></script>
            <script>
                $(document).ready(function(){
                    app.pageTransition();
                    app.stylishInput();
                  //  app.vegasController();
                   // app.focusOnForm();
                });

            </script>
    </body>

</html>
../switch/