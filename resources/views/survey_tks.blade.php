<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Khảo sát nhận quà - Hoàng Hải Mobile JP">
    <meta name="author" content="Sweetsica">
    <title>Khảo sát nhận quà - Hoàng Hải Mobile JP</title>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Caveat|Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
    <!-- BASE CSS -->
    <link href="{{asset('survey/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('survey/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('survey/css/vendors.css')}}" rel="stylesheet">
    <!-- YOUR CUSTOM CSS -->
    <link href="{{asset('survey/css/custom.css')}}" rel="stylesheet">
</head>
<body class="style_2">
<div id="preloader">
    <div data-loader="circle-side"></div>
</div><!-- /Preload -->
<div id="loader_form">
    <div data-loader="circle-side-2"></div>
</div><!-- /loader_form -->
<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-5">
                <a href="https://hoanghaimobile.jp"><img src="https://muahang.hoanghaimobile.jp/assets/logo.png" alt="" width="230" height="55"></a>
            </div>
            <div class="col-7">
                <div id="social">
                    <ul>
                        <li><a href="https://www.facebook.com/hoanghaimobile2018"><i class="social_facebook"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</header>
<!-- /header -->
<div class="wrapper_centering">
    <div class="container_centering">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-6 col-lg-6 d-flex align-items-center">
                    <div class="main_title_1">
                        <h3><img src="{{asset('survey/img/main_icon_1.svg')}}" width="80" height="80" alt=""> Xin cảm ơn!</h3>
                        <p>Ý kiến của bạn đã được ghi nhận. Mong bạn tiếp tục ủng hộ và đón chờ các chương trình ưu đãi sắp tới của bọn mình nhé!</p>
                        <p><em>- Hoang Hai Mobile</em></p>
                    </div>
                </div>
                <!-- /col -->
                <div class="col-xl-5 col-lg-5">
                    <div id="wizard_container">
                        <img style="width: 100%;" src="{{asset('survey/img/thankyou.gif')}}">
                    </div>
                    <!-- /Wizard container -->
                </div>
                <!-- /col -->
            </div>
        </div>

        <!-- /row -->
    </div>
    <!-- /container_centering -->
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    ©2021 Hoàng Hải Mobile JP - Sweetsica
                </div>
                <div class="col-md-9">
                    <ul class="clearfix">
                        <li><a href="https://hoanghaimobile.jp" class="animated_link">Hoàng Hải Mobile</a></li>
                        <li><a href="https://www.facebook.com/hoanghaiconnect" class="animated_link">Hoàng Hải Connect</a></li>
                        <li><a href="https://www.facebook.com/hoanghaicomputerjapan" class="animated_link">Hoàng Hải Computer</a></li>
                        <li><a href="https://www.facebook.com/hoanghaiexpressjapan" class="animated_link">Hoàng Hải Express</a></li>
                    </ul>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container-fluid -->
    </footer>
    <!-- /footer -->
</div>
<!-- /wrapper_centering -->
<!-- COMMON SCRIPTS -->
<script src="{{asset('survey/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('survey/js/common_scripts.min.js')}}"></script>
<script src="{{asset('survey/js/functions.js')}}"></script>
<!-- Wizard script -->
<script src="{{asset('survey/js/survey_func.js')}}"></script>

</body>
</html>
