<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        @if ($settings != null)
            {{ $settings->title }}
        @endif - Login
    </title>
    <link rel="apple-touch-icon" href="{{ '/' }}assets/favicon.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{ '/' }}assets/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ '/' }}app-assets/app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ '/' }}app-assets/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{ '/' }}app-assets/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="{{ '/' }}app-assets/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="{{ '/' }}app-assets/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="{{ '/' }}app-assets/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css"
        href="{{ '/' }}app-assets/app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css"
        href="{{ '/' }}app-assets/app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{ '/' }}app-assets/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css"
        href="{{ '/' }}app-assets/app-assets/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="{{ '/' }}app-assets/app-assets/css/pages/page-auth.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ '/' }}app-assets/assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-v2">
                    <div class="auth-inner row m-0">
                        <!-- /Brand logo-->
                        <!-- Left Text-->
                        <div class="d-none d-lg-flex col-lg-7 align-items-center p-5">
                            <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img
                                    class="img-fluid"
                                    src="{{ '/' }}app-assets/app-assets/images/pages/login-v2.svg"
                                    alt="Login V2" /></div>
                        </div>
                        <!-- /Left Text-->
                        <!-- Login-->
                        <div class="d-flex col-lg-5 align-items-center auth-bg px-2 p-lg-5">
                            <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                                <center>
                                    <img src="{{ asset($settings->favicon) }}" style="width:5em" class="mb-2 mx-auto"
                                        alt="">
                                </center>
                                <h2 class="card-title font-weight-bold mb-1 text-center">Selamat datang di <br>
                                    <span style="font-size: 16px">
                                        @if ($settings != null)
                                            {{ $settings->title }}
                                        @endif
                                    </span>
                                    👋
                                </h2>
                                <p class="card-text mb-2 text-center">Silahkan masukan Username & Password anda.</p>
                                <form class="auth-login-form mt-2" action="{{ route('auth.login') }}" method="POST"
                                    autocomplete="off">
                                    @csrf
                                    @if (session('status'))
                                        <div class="alert alert-danger mt-1 mb-1 p-2">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    @if (session('success'))
                                        <div class="alert alert-success mt-1 mb-1 p-2">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <label class="form-label" for="username">Username</label>
                                        <input class="form-control" id="username" type="text" name="username"
                                            placeholder="Username" aria-describedby="login-username" autofocus=""
                                            tabindex="1" />
                                        @if ($errors->has('username'))
                                            <div class="text-danger">
                                                {{ $errors->first('username') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <div class="d-flex justify-content-between">
                                            <label for="password">Password</label><a
                                                href="page-auth-forgot-password-v2.html"><small>Lupa
                                                    Password?</small></a>
                                        </div>
                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input class="form-control form-control-merge" id="password"
                                                type="password" name="password" placeholder="············"
                                                aria-describedby="password" tabindex="2" />
                                            <div class="input-group-append"><span
                                                    class="input-group-text cursor-pointer"><i
                                                        data-feather="eye"></i></span></div>
                                        </div>
                                        @if ($errors->has('password'))
                                            <div class="text-danger">
                                                {{ $errors->first('password') }}
                                            </div>
                                        @endif
                                    </div>
                                    <button class="btn btn-primary btn-block" type="submit"
                                        tabindex="4">Masuk</button>
                                </form>
                            </div>
                        </div>
                        <!-- /Login-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ '/' }}app-assets/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ '/' }}app-assets/app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ '/' }}app-assets/app-assets/js/core/app-menu.js"></script>
    <script src="{{ '/' }}app-assets/app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ '/' }}app-assets/app-assets/js/scripts/pages/page-auth-login.js"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>
<!-- END: Body-->

</html>
