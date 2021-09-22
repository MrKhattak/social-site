<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'fyrestream') }}</title>

    <!-- CSRF Token -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('favicon/site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('favicon/safari-pinned-tab.svg')}}" color="#5bbad5">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome.css') }}" rel="stylesheet">
    <style>
        /* Footer CSS */

        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
        }

        #footer {
            background: transparent;
            padding-top: 10px;
            padding-bottom: 10px;
            color: #939393;
        }

        .ft-space {
            display: block;
            width: 100%;
            height: 1px;
            background: #ccc;
            margin-bottom: 20px;
        }

        .footer-box {
            margin-bottom: 30px;
        }

        .footer-box h2 {
            font-size: 20px;
            margin-bottom: 15px;
            color: #fff;
        }

        .footer-box ul li a {
            display: inline-block;
            width: 100%;
            padding: 5px 0;
            font-weight: 400;
            color: #939393;
        }

        .footer-box ul li a:hover {
            color: #0dcaf0;
        }

        .footer-box ul li span {
            display: block;
            margin-bottom: 10px;
            color: #666;
        }

        .newsletter {}

        .newsletter .form-dp {
            width: 60%;
            float: left;
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }

        .newsletter .btn-dp {
            width: 35%;
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
            padding: 12px 10px;
        }

        .copyright p {
            margin: 0;
            padding: 5px 0;
        }

        .social-link li {
            display: inline-block;
        }

        .social-link li a {
            color: #939393;
            font-size: 20px;
            padding: 5px 8px;
        }

        .social-link li a:hover {
            color: #0dcaf0;
        }

        .card-link {
            padding: 5px 0;
        }

        body {
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
            font-size: 16px;
            line-height: 1.5;
            color: #212529;
            background: #fff;
            position: relative;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
        }

        a {
            color: #0dcaf0;
            outline: 0;
            text-decoration: none;
            -webkit-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }

        a:focus,
        a:hover {
            color: #0dcaf0;
        }

        strong {
            font-weight: 600;
        }

        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            margin-bottom: 10px;
            display: block;
        }

        .form-dp {
            display: inline-block;
            width: 100%;
            border: 1px solid #ced4da;
            border-radius: 5px;
            padding: 10px 15px;
            font-size: 16px;
            background: #fff;
            color: #212529;
            outline: 0;
        }

        .form-dp:focus {
            border: 1px solid #0dcaf0;
            -webkit-box-shadow: 0 0 0 #fff;
            box-shadow: 0 0 0 #fff;
        }

        .btn-dp {
            background: #0dcaf0;
            color: #fff;
            font-weight: 600;
            font-size: 16px;
            text-transform: uppercase;
            display: inline-block;
            padding: 10px 25px;
            border-radius: 5px;
            border: 0;
            outline: 0;
            cursor: pointer;
            -webkit-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }

        .btn-dp:focus,
        .btn-dp:hover {
            background: #0dcaf0;
            color: #fff;
        }

        .form-check-input:checked {
            background-color: #0dcaf0;
            border-color: #0dcaf0;
        }

        .form-check-input:focus {
            -webkit-box-shadow: 0 0 0 #fff;
            box-shadow: 0 0 0 #fff;
        }

        .dp-close {
            position: absolute;
            top: 10px;
            right: 10px;
            background: transparent;
            border: 0;
            outline: 0;
            font-size: 25px;
            padding: 0;
            cursor: pointer;
            z-index: 99;
            width: 38px;
            color: #bbb;
            -webkit-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }

        .dp-close:focus,
        .dp-close:hover {
            color: #212529;
        }

        .btn-white {
            background: transparent;
            color: white;
            border: 2px solid white;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 15px;
        }

        .btn-white:hover {
            background: white;
            color: black;
        }

        .logo {
            max-width: 150px;
            margin-bottom: 60px !important;
        }

        .logo img {
            max-width: 100%;
            border-style: none;
        }

        .logo img:first-child {
            max-width: 57px;
        }

        .signin-left-content {
            text-align: center;
            color: white;
        }

        .signin-left-content h1 {
            font-size: 53px;
            color: white;
            font-weight: bolder;
            margin-bottom: 0;
        }

        .signin-left-content h1+span {
            font-size: 18px;
            font-weight: bold;
        }

        .bottom-line-bar {
            max-width: 69px;
            height: 2px;
            background: #ffeb3b;
            margin: auto;
            margin-top: 15px;
            margin-bottom: 12px;
        }

        .bottom-line-bar+span {
            max-width: 250px;
            display: block;
            margin: auto;
            font-size: 22px;
            font-weight: bold;
        }

        .download-links a {
            color: #fff;
            transition: .3s;
            background: rgb(255, 110, 97);
            background: linear-gradient(180deg, rgba(255, 107, 95, 1) 28%, rgba(250, 141, 50, 1) 100%);
            border: 1px solid #ff6b5f;
            display: inline-block;
            padding: 10px 20px;
            border-radius: 25px;
            margin-right: 10px;
        }

        .download-links a i {
            font-size: 24px;
            margin-right: 8px;
            vertical-align: middle;
        }

        .download-links {
            margin-top: 50px;
        }

        .download-links a:hover {
            box-shadow: 1px 1px 2px #fbc02d !important;
        }

        .form-container {
            max-width: 450px;
            background: rgb(0 0 0 / 60%);
            color: white;
            border-radius: 15px;
            padding: 25px;
            color: white;
        }

        .form-container .form-check-input:checked {
            background-color: #fc8240;
            border-color: #fe794e;
        }

        .form-container h2 {
            color: white;
            font-size: 22px;
        }

        .form-container .form-control {
            border-radius: 5px;
            background: white;
            font-size: 15px;
            height: 50px;
        }

        .form-container .form-group {
            margin-bottom: 0;
            margin-top: 15px;
        }

        .form-group button {
            width: 100%;
            padding: 10px;
            color: white;
            font-size: 15px;
            background: rgb(255, 110, 97);
            background: linear-gradient(180deg, rgba(255, 107, 95, 1) 28%, rgba(250, 141, 50, 1) 100%);
            border: 1px solid #ff6b5f;
        }

        .form-container .form-group .form-check {
            padding-left: 20px;
        }

        .form-container .form-group label {
            margin-bottom: 0;
        }

        #signin {
            background-image: url(http://fyrestream.com//content/themes/default/frontend/images/Nightscape%20Fyrestream.jpg);
            background-repeat: no-repeat;
            min-height: 100vh;
            background-size: cover;
        }

        .form-container .form-check-label,
        .form-container a {
            color: #ffd54f;
        }

        .form-group button:focus,
        .form-group button:active,
        .form-group button:hover {
            border-color: #ff6b5f !important;
            outline: none;
            box-shadow: 1px 1px 5px grey !important;
        }

        #signin footer {
            color: white;
        }

        #signin footer a {
            font-size: 14px;
            margin-right: 10px
        }

        #signin footer p {
            color: white;
            font-size: 14px;
        }

        #signin {
            padding-top: 40px;
        }

        #signin .container {
            max-width: 1200px;
        }

        .form-group button {
            border-radius: 5px;
        }

        .form-group button:hover {}

        @media only screen and (min-width:992px) and (max-width:1199px) {}


        @media only screen and (min-width:768px) and (max-width:991px) {
            .welcome-item {
                padding: 100px 0;
            }

            .navbar-login {
                position: absolute;
                top: 22px;
                right: 60px;
                display: block;
                margin: 0;
            }

            .content-box {
                padding: 40px 0;
            }

            .sec-title h2 {
                font-size: 28px;
            }

            .action-text,
            .social-link,
            .copyright {
                text-align: center;
            }

            .action-text {
                margin-bottom: 30px;
            }

            .action-form .form-dp {
                margin-bottom: 10px;
            }
        }

        /* Normal mobile layout */

        @media only screen and (max-width:767px) {
            .navbar-login {
                position: absolute;
                top: 22px;
                right: 55px;
                display: block;
                margin: 0;
            }

            .content-box {
                padding: 40px 0;
            }

            .sec-title h2 {
                font-size: 24px;
            }

            .action-text,
            .card-link,
            .social-link,
            .copyright {
                text-align: center;
            }

            .action-text {
                margin-bottom: 30px;
            }

            .action-form .form-dp {
                margin-bottom: 10px;
            }

            .form-container {
                margin: auto;
                margin-bottom: 100px;
                margin-top: 50px;
            }

            .logo {
                max-width: 130px;
                margin-bottom: 37px !important;
                margin-top: 22px !important;
            }

            .logo img:first-child {
                max-width: 50px;
            }

            .signin-left-content h1 {
                font-size: 47px;
            }

            .signin-left-content h1+span {
                font-size: 16px;
                font-weight: bold;
            }

            .bottom-line-bar+span {
                max-width: 250px;
                font-size: 23px;
                line-height: 1.3;
            }
        }

        @media screen and (max-width: 550px) {
            .btn-white {
                margin-bottom: 20px;
                background: transparent;
                color: white;
                border: 2px solid white;
                padding: 7px 12px;
                border-radius: 5px;
                cursor: pointer;
                font-size: 14px;
            }

            .form-container {
                margin-bottom: 150px;
            }

            #signin footer a,
            #signin footer p {
                font-size: 12px;
            }

            .signin-left-content h1 {
                font-size: 42px;
            }

            .signin-left-content h1+span {
                font-size: 14px;
            }

            .bottom-line-bar {
                max-width: 55px;
                height: 2px;
                background: #ffeb3b;
                margin: auto;
                margin-top: 12px;
                margin-bottom: 8px;
            }

            .bottom-line-bar+span {
                font-size: 21px;
            }

            .download-links {
                margin-top: 33px;
            }

            .download-links a i {
                font-size: 18px;
            }

            .download-links a {
                margin-top: 10px;
            }

            .form-container h2 {
                color: white;
                font-size: 20px;
            }
        }

        @media screen and (max-width: 380px) {
            .form-container {
                border-radius: 10px;
                padding: 25px 15px;
            }

            .form-container .form-control {
                height: 40px;
                font-size: 14px;
            }

            .form-container .form-check-label,
            .form-container a {
                font-size: 12px;
            }

            #signin .col-md-6 {
                padding: 0;
            }
        }

        @media screen and (max-width: 320px) {

            .signin-left-content h1 {
                font-size: 35px;
            }

            .signin-left-content h1+span {
                font-size: 12px;
            }

            .bottom-line-bar+span {
                font-size: 19px;
            }

            .download-links a {
                padding: 10px 15px;
            }

            .form-container .form-control {
                height: 35px;
                font-size: 14px;
            }

            .form-group button {
                padding: 5px;
            }

            .btn-white {
                padding: 5px 12px;
                border-radius: 5px;
                cursor: pointer;
                font-size: 13px;
            }

            .form-container h2 {
                font-size: 18px;
            }
        }

        /* Width mobile layout */

        @media only screen and (min-width:480px) and (max-width:767px) {}

    </style>
    <style>
        #signin {
            background-image: url('/storage/images/site/bg.jpg');
            background-repeat: no-repeat;
            min-height: 100vh;
            background-size: cover;
            padding-bottom: 140px;
        }

        .download-links a {
            color: #fff;
            transition: .3s;
            background: rgb(255, 110, 97);
            background: linear-gradient(180deg, rgba(255, 107, 95, 1) 28%, rgba(250, 141, 50, 1) 100%);
            border: 1px solid #ff6b5f;
            display: inline-block;
            padding: 10px 20px;
            border-radius: 25px;
            margin-right: 10px;
        }

        .download-links a i {
            font-size: 24px;
            margin-right: 8px;
            vertical-align: middle;
        }

        .download-links a:hover {
            box-shadow: 1px 1px 2px #fbc02d !important;
        }

        a:hover,
        h1:focus,
        h2:focus,
        h3:focus,
        h4:focus,
        h5:focus,
        h6:focus {
            text-decoration: none;
        }

        a:active,
        a:hover {
            outline-width: 0;
        }

        @media(min-width: 1500px) {
            .login-container {
                margin-top: 40px !important;
            }
        }

    </style>
    <style>
        /* Scroll bar styles */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background: #8b8787;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #0dcaf0;
        }

    </style>

    @stack('styles')
</head>
<body id="signin">
    @yield('content')
    <footer class="footer" id="footer">
        <div class="container">
            <div class="text-center">
                <a href="#">Privacy Policy</a>
                <a href="#">Help</a>
                <a href="#">Terms of Use</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Cookies</a>
                <a href="#">Advertising</a>
                <br> <br>
                <p>
                    Copyrights © 2021. Fyrestream. All Rights Reserved.
                </p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <script>
        function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
            var expires = "expires=" + d.toUTCString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }

        function getCookie(cname) {
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(";");
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                let posOf = c.indexOf(name, 0);
                if (posOf != -1) {
                    return c.substr(posOf + name.length);
                }
            }
            return null;
        }

    </script>
    @stack('scripts')
</body>
</html>
