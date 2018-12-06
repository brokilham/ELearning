<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>SIMABK</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <meta name="_token" content="{{ csrf_token() }}">
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
    <body  class="login">
        <div class="content">
            <div class="row"> 
                <div class="col-md-12">                
                    <!-- BEGIN VALIDATION STATES-->
                    <div class="portlet light portlet-fit portlet-form bordered">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-settings font-red"></i>
                                <span class="caption-subject font-red sbold uppercase">Register Account</span>
                            </div>        
                        </div>
                        <div class="portlet-body">
                            <!-- BEGIN FORM-->
                            <form action="#" id="form-add-user" class="form-horizontal">
                                <div class="form-body">
                                    <div class="alert alert-danger display-hide">
                                        <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                                    <div class="alert alert-success display-hide">
                                        <button class="close" data-close="alert"></button> Your form validation is successful! </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">No Induk
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-9">
                                            <input type="number" name="no_induk" id="no_induk" data-required="1" class="form-control" /> </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Name
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-9">
                                            <input type="text" name="name" id="name" data-required="1" class="form-control" /> </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Email
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-9">
                                            <input type="email" name="email" id="email" type="text" class="form-control" /> </div>
                                    </div>   
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Jenis Anggota
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-9">
                                            <select class="form-control" name="jenis_anggota" id="jenis_anggota">
                                                <option value="">Pilih Jenis Anggota</option>
                                                <option value="mahasiswa">Mahasiswa</option>
                                                <option value="dosen">Dosen</option>
                                            </select>
                                        </div>
                                    </div> 
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Password
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-9">
                                            <input type="password" name="password" id="password" type="text" class="form-control" /> </div>
                                    </div>    
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Password Confirm
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-9">
                                            <input type = "password" name="password_confirmation" id= "passwod_confirmation" type="text" class="form-control" /> </div>
                                    </div>                                                           
                                </div>                            
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-7 col-md-12">
                                            <a class="btn green button-submit" id= "btn_register"> Submit
                                                <i class="fa fa-check"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                       
                            </form>                        
                            <!-- END FORM-->
                           
                        </div>                     
                    </div>
                    <!-- END VALIDATION STATES-->
                </div> 
            </div>      
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
    <script>
        $(document).ready(function() {
            $("#btn_register").on("click",function(){
                $.ajax({
                    type:"POST",
                    url:'./register_custom',
                    data: $('#form-add-user').serialize(),
                    headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') },               
                    dataType: 'json',
                    success: function(data){    
                        console.log(data);                           
                    },
                    error: function(data){
                        console.log(data);
                    }
                })
            });
        });
    </script>
</html>