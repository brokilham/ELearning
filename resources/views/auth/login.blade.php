<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>SIMABK</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('/assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('/assets/global/plugins/simple-line-icons/simple-line-icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('/assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('/assets/global/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('/assets/global/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet" type="text/css" />   
        <link href="{{URL::asset('/assets/global/css/components-md.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{URL::asset('/assets/global/css/plugins-md.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('/assets/pages/css/login-2.css')}}" rel="stylesheet" type="text/css" />      
        <link rel="shortcut icon" href="favicon.ico" /> 
    </head>
    <body class="login">
        <div class="logo">
            <a href="">
           <link href="" rel="stylesheet" type="text/css" />
            <img src="{{URL::asset('/assets/layouts/layout/img/logo-besar.png')}}" style="height: 40px;" alt="" /> </a>
        </div>
        <div class="content">
            <form class="login-form" method="POST" action="{{ route('login') }}">
                 {{ csrf_field() }}
                <div class="form-title">
                    <!--<span class="form-title">Selamat Datang.</span>-->
                    <span class="form-subtitle"></span>
                </div>
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span> Enter any username and password. </span>
                </div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">Username</label>
                    <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif      
                </div>
                <div  class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif  
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn green btn-block uppercase">Login</button>
                </div>
            </form>  
            <a href="../AuthCustom/register" target="_blank">Register</a>                
        </div>

        <div class="copyright hide"> 2014 © Metronic. Admin Dashboard Template. </div>
   
        <script src="{{URL::asset('/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('/assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('/assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('/assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>    
        <script src="{{URL::asset('/assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('/assets/global/plugins/jquery-validation/js/additional-methods.min.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('/assets/global/plugins/select2/js/select2.full.min.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('/assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
       
    </body>

</html>