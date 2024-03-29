<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->

<head>
    <meta charset="utf-8">

    <title>AppUI - Web App Bootstrap Admin Template</title>

    <meta name="description" content="AppUI is a Web App Bootstrap Admin Template created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="img/favicon.png">
    <link rel="apple-touch-icon" href="img/icon57.png" sizes="57x57">
    <link rel="apple-touch-icon" href="img/icon72.png" sizes="72x72">
    <link rel="apple-touch-icon" href="img/icon76.png" sizes="76x76">
    <link rel="apple-touch-icon" href="img/icon114.png" sizes="114x114">
    <link rel="apple-touch-icon" href="img/icon120.png" sizes="120x120">
    <link rel="apple-touch-icon" href="img/icon144.png" sizes="144x144">
    <link rel="apple-touch-icon" href="img/icon152.png" sizes="152x152">
    <link rel="apple-touch-icon" href="img/icon180.png" sizes="180x180">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Bootstrap is included in its original form, unaltered -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Related styles of various icon packs and plugins -->
    <link rel="stylesheet" href="css/plugins.css">

    <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
    <link rel="stylesheet" href="css/main.css">

    <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

    <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
    <link rel="stylesheet" href="css/themes.css">
    <!-- END Stylesheets -->

    <!-- Modernizr (browser feature detection library) -->
    <script src="js/vendor/modernizr-3.3.1.min.js"></script>
</head>

<body>
    <!-- Login Container -->
    <div id="login-container">
        <!-- Register Header -->
        <h1 class="h2 text-light text-center push-top-bottom animation-slideDown">
            <i class="fa fa-plus"></i> <strong>Create Account</strong>
        </h1>
        <!-- END Register Header -->

        <!-- Register Form -->
        <div class="block animation-fadeInQuickInv">
            <!-- Register Title -->
            <div class="block-title">
                <div class="block-options pull-right">
                    <a href="page_ready_login.html" class="btn btn-effect-ripple btn-primary" data-toggle="tooltip" data-placement="left" title="Back to login"><i class="fa fa-user"></i></a>
                </div>
                <h2>Register</h2>
            </div>
            <!-- END Register Title -->
            @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $err)
                <li>{{$err}}</li>
                @endforeach
            </div>
            @endif
            <!-- Register Form -->
            <form id="form-register" action="{{ route('register') }}" method="post" class="form-horizontal">
                @csrf
                <div class="form-group">
                    <div class="col-xs-12">
                        <input type="text" id="register-username" name="name" class="form-control" value="{{old('name')}}" placeholder="Username">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <input type="text" id="register-email" value="{{old('email')}}" class="form-control" name="email" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <input type="password" id="register-password" value="{{old('password')}}" class="form-control" name="password" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <input type="password" id="register-password-verify" value="{{old('password_confirmation')}}" name="password_confirmation" class="form-control" placeholder="Verify Password">
                    </div>
                </div>
                <div class="form-group form-actions">
                    <div class="col-xs-6">
                        <label class="csscheckbox csscheckbox-primary" data-toggle="tooltip" title="Agree to the terms">
                            <input type="checkbox" id="register-terms" name="register-terms">
                            <span></span>
                        </label>
                        <a href="#modal-terms" data-toggle="modal">Terms</a>
                    </div>
                    <div class="col-xs-6 text-right">
                        <button type="submit" class="btn btn-effect-ripple btn-success"><i class="fa fa-plus"></i> Create Account</button>
                    </div>
                </div>
            </form>
            <!-- END Register Form -->
        </div>
        <!-- END Register Block -->

        <!-- Footer -->
        <footer class="text-muted text-center animation-pullUp">
            <small><span id="year-copy"></span> &copy; <a href="https://1.envato.market/DXa" target="_blank">AppUI 2.9</a></small>
        </footer>
        <!-- END Footer -->
    </div>
    <!-- END Login Container -->

    <!-- Modal Terms -->
    <div id="modal-terms" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title text-center"><strong>Terms and Conditions</strong></h3>
                </div>
                <div class="modal-body">
                    <h4 class="page-header">1. <strong>General</strong></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                    <h4 class="page-header">2. <strong>Account</strong></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                    <h4 class="page-header">3. <strong>Service</strong></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                    <h4 class="page-header">4. <strong>Payments</strong></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                </div>
                <div class="modal-footer">
                    <div class="text-center">
                        <button type="button" class="btn btn-effect-ripple btn-sm btn-primary" data-dismiss="modal">I've read them!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Modal Terms -->

    <!-- jQuery, Bootstrap, jQuery plugins and Custom JS code -->
    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/app.js"></script>

    <!-- Load and execute javascript code used only in this page -->
    <script src="js/pages/readyRegister.js"></script>
    <script>
        $(function() {
            ReadyRegister.init();
        });
    </script>
</body>

</html>