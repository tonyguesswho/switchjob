{{--<h1>--}}
    {{--Verify email <a href="{{ route('sendEmailDone', ["email" => $user->email, "verifyToken" => $user->verifyToken]) }}">here</a>--}}
{{--</h1>--}}

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title Page</title>

    <!-- Main CSS -->
    <link rel="stylesheet" type="text/css" href="/assets/css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.css">

</head>
<body>
<div class="main-body">
    <div class="content">
        <div class="content-header text-center">
            <img src="/assets/img/switch.svg">
        </div>
        <div class="main-content">
            {{--<p><strong>Hi {{Username}},</strong></p>--}}
            <p>To help keep your account secure, please click the button below to verify your email address.</p>
            <div class="btn-div">
                <a href="{{ route('sendEmailDone', ["email" => $user->email, "verifyToken" => $user->verifyToken]) }}" class="btn brand-btn" role="button">CLICK HERE TO VERIFY ACCOUNT</a>
            </div>
            <p>Thanks for using your Account and helping us maintain your account's security!</p>
            <p>GetDev Team</p>
        </div>
        <div class="content-footer">
            <p>If you need technical assistance, kindly contact our support <a href="#">Get-Dev Support</a></p>
            <p>Privacy Policy: Our Certified Online Privacy Policy gives you confidence whenever you use our platform. To view our complete Privacy and Cookie Policy, click <a href="#">Here</a></p>
            <p>@ 2017 Switch Express. All rights Reserved</p>
        </div>
    </div>
</div>

<!-- jQuery -->
<script type="text/javascript" src="/assets/js/jquery.js"></script>
<!-- Bootstrap JavaScript -->
<script type="text/javascript" src="/assets/js/bootstrap.js"></script>
</body>
</html>