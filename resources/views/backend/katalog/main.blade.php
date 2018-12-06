@extends('backend.app.layouts')
@section('content')
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
        </li>
    </ul>                    
</div>
<!-- END PAGE BAR -->
<!-- BEGIN PAGE TITLE-->
<h3 class="page-title"> 
    <!--
    Katalog
    <small>List Materi</small>
    -->
</h3>
<!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->
 
<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="portlet light bordered">
            <div class="portlet-title tabbable-line">
                <div class="caption">
                    <i class="icon-bubbles font-dark hide"></i>
                    <span class="caption-subject font-dark bold uppercase">Katalog Materi</span>
                </div>               
            </div>
            <div class="portlet-body">
                <!-- BEGIN: Comments -->
                <div id = "content_list_materi"></div>
                <!-- END: Comments -->
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
$(document).ready(function() {
    $.ajax({
            type:"GET",
            url:'./getall_materi',
            headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') },                      
            success: function(data){             
                var data_html = ''; 
                $.each( data, function( index, value ) {
                    console.log(value.name);

                    data_html += template_list_materi(value);
                    $("#content_list_materi").html(data_html);	
                });            
            },
            error: function(data){
                console.log(data);
            }
    });

    function template_list_materi(value){
       var result =  '<div class="mt-comments">'
                        +'<div class="mt-comment">'
                            +'<div class="mt-comment-img">'
                                +'<img src="../assets/pages/media/users/avatar1.jpg" />'
                            +'</div>'
                            +'<div class="mt-comment-body">'
                                +'<div class="mt-comment-info">'
                                    +'<span class="mt-comment-author">'+value.name+'</span>'
                                    +'<span class="mt-comment-date">'+value.created_at+'</span>'
                                +'</div>'
                                +'<div class="mt-comment-text">'+value.description+'</div>'
                                +'<div class="mt-comment-details">'
                                    +'<span class="mt-comment-status mt-comment-status-pending">By '+value.created_by+' </span>'
                                    +'<ul class="mt-comment-actions">'
                                        +'<li>'
                                            +'<a href="../katalog/detail_katalog" target="_blank"> View </a>'
                                        +'</li>'
                                    +'</ul>'
                                +'</div>'
                            +'</div>'
                        +'</div>'            
                    +'</div>';
        return result;
    }
 
});

</script>
@endsection