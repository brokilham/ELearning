@extends('backend.app.layouts')
@section('content')
<!-- BEGIN PAGE LEVEL STYLES -->
    <link href="../assets/pages/css/profile.min.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="../assets/pages/scripts/profile.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN PAGE HEADER-->            
<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="index.html">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Katalog</span>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Detail Katalog</span>
        </li>
    </ul>                    
</div>
<!-- END PAGE BAR -->
<!-- BEGIN PAGE TITLE-->
<h3 class="page-title"> 
    <!-- 
    Dashboard
    <small>dashboard & statistics</small>
    -->
</h3>
<!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->
<div class="row">
    <div class="col-md-12">  
        <div class="portlet light bordered">
            <div class="portlet-title tabbable-line">
                <div class="caption caption-md">
                    <i class="icon-globe theme-font hide"></i>
                    <span class="caption-subject font-blue-madison bold uppercase">Detail Materi</span>
                </div>                       
            </div>
            <div class="portlet-body">
                <div id="accordion1" class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle accordion-toggle-styled"> 1. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
                            </h4>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle accordion-toggle-styled"> 2. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
                            </h4>
                        </div>
                    </div>                              
                </div>
            </div>
        </div>
    </div>
</div> 
<div class="row">
    <div class="col-md-12">  
        <div class="portlet light bordered">
            <div class="portlet-title tabbable-line">
                <div class="caption caption-md">
                    <i class="icon-globe theme-font hide"></i>
                    <span class="caption-subject font-blue-madison bold uppercase">Komentar</span>
                </div>                       
            </div>
            <div class="portlet-body">
                <div id="accordion1" class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle accordion-toggle-styled"> 1. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
                            </h4>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle accordion-toggle-styled"> 2. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
                            </h4>
                        </div>
                    </div>                              
                </div>
            </div>
        </div>
    </div>
</div> 


@endsection

@section('script')
<script>
$(document).ready(function() {

   
});

</script>
@endsection