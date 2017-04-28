{{--<h1>--}}
    {{--Verify email <a href="{{ route('sendEmailDone', ["email" => $user->email, "verifyToken" => $user->verifyToken]) }}">here</a>--}}
{{--</h1>--}}

        <!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
<div class="main-body" style="background: #f7f7f7; min-height: 100vh; padding-top: 30px;">
    <div class="content" style="margin: 0 auto; width: 70%; background: white; min-height: 70vh;position: relative;">
        <div class="content-header" style="text-align: center; background: grey;">
            <img src="http://switch.ng/img/logos/switch%202.svg" style="height: 100px;">
        </div>
        <div class="main-content" style="padding: 20px;">
            <p><strong>Hi {{ ucfirst($user->firstname) }},</strong></p>
            <p>To help keep your account secure, please click the button below to verify your email address.</p>
            <div class="btn-div" style="margin: 0 auto; width: 40%; padding: 20px;">
                <a href="{{ route('sendEmailDone', ["email" => $user->email, "verifyToken" => $user->verifyToken]) }}" role="button" style="background: #FFCC29; color: white; font-weight: bolder !important; padding: 20px !important; display: inline-block;margin-bottom: 0; font-size: 14px; line-height: 1.42857143; text-align: center; margin: 0 auto; width: 100%; vertical-align: middle; touch-action: manipulation; cursor: pointer; text-decoration: none; -moz-user-select: none; -ms-user-select: none; user-select: none; border: 1px solid transparent; border-radius: 4px;">VERIFY ACCOUNT</a>
            </div>
            <p style="margin-top: 0px;">Thanks for using your Account and helping us maintain your account's security!</p>
            <p>GetDev Team</p>
        </div>
        <div class="content-footer" style="position: absolute; background: #444; color: white; padding: 10px 20px; font-size: 13px;">
            <p style="margin-bottom: 5px;">If you need technical assistance, kindly contact our support <a href="#" style="color: cyan; text-decoration: none;">Get-Dev Support</a></p>
            <p style="margin-bottom: 5px;">Privacy Policy: Our Certified Online Privacy Policy gives you confidence whenever you use our platform. To view our complete Privacy and Cookie Policy, click <a href="#" style="color: cyan; text-decoration: none;">Here</a></p>
            <p style="margin-bottom: 5px;">@ 2017 Switch Express. All rights Reserved</p>
        </div>
    </div>
</div>
</body>
</html>