@extends('backend.app.layouts')
@section('content')          
<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="index.html">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Master Materi</span>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Detail Materi</span>
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
                <div id="panel_materi" class="panel-group">
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
                <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn-group">
                                <button id="call-modal-add-guru" class="btn sbold green" data-toggle="modal" data-target="#modal-add-komentar"> Add Komentar
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>                      
                    </div>
                </div>
                <div id="panel_komentar" class="panel-group">                                            
                </div>
            </div>
        </div>
    </div>
</div> 
@include('backend.master_materi.modal-add-komentar') 

@endsection

@section('script')
<script>
$(document).ready(function() {

    get_komentar();
    
    $("#btn_post_komentar").on("click",function(){
       
        $.ajax({
            type:"POST",
            url:'./post_komentar',
            headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') },               
            data:$('#frm-post-komentar').serialize(),
            dataType: 'json',
            success: function(data){             
                console.log(data);       
                if (data.code == "S"){
                    $("#modal-add-komentar").modal("hide");
                    get_komentar();
                   
                }  
                else{
                    alert(data.message);
                }
            },
            error: function(data){
                console.log(data);
            }
        }); 
    }); 
});

function get_content_materi(){
    $.ajax({
        type:"GET",
        url:'./get_all_komentar',
        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') },               
        data:{id_materi : "{{ $datas[0] }}"},
        dataType: 'json',
        success: function(data){             
            console.log(data);  
            if(!$.isEmptyObject(data)){
                var list_komentar = "";
                $.each( data, function( index, value ) {
                    list_komentar +='<div class="panel panel-default">'+
                                                    '<div class="panel-heading">'+
                                                        '<h4 class="panel-title">'+
                                                            '<a class="accordion-toggle accordion-toggle-styled">'+value.messagae+'</a>'+
                                                        '</h4>'+
                                                        '<br>'+
                                                        '<h10> <b>Created by:</b> '+value.user.name+' <b>Created date :</b> '+value.created_at+'</h10>'+
                                                    '</div>'+
                                                '</div>';    
                }) 

                $('#panel_komentar').html(list_komentar);    
            }else{
                $('#panel_komentar').html('<div class="panel panel-default">'+
                                                    '<div class="panel-heading">'+
                                                        '<h4 class="panel-title">'+
                                                            '<a class="accordion-toggle accordion-toggle-styled">Tidak ada komentar yang bisa di tampilkan</a>'+
                                                        '</h4>'+                                                        
                                                    '</div>'+
                                                '</div>');    
            }
        
        },
        error: function(data){
            console.log(data);
        }
    }); 
}

function get_komentar(){
    $.ajax({
        type:"GET",
        url:'./get_all_komentar',
        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') },               
        data:{id_materi : "{{ $datas[0] }}"},
        dataType: 'json',
        success: function(data){             
            console.log(data);  
            if(!$.isEmptyObject(data)){
                var list_komentar = "";
                $.each( data, function( index, value ) {
                    list_komentar +='<div class="panel panel-default">'+
                                                    '<div class="panel-heading">'+
                                                        '<h4 class="panel-title">'+
                                                            '<a class="accordion-toggle accordion-toggle-styled">'+value.messagae+'</a>'+
                                                        '</h4>'+
                                                        '<br>'+
                                                        '<h10> <b>Created by:</b> '+value.user.name+' <b>Created date :</b> '+value.created_at+'</h10>'+
                                                    '</div>'+
                                                '</div>';    
                }) 

                $('#panel_komentar').html(list_komentar);    
            }else{
                $('#panel_komentar').html('<div class="panel panel-default">'+
                                                    '<div class="panel-heading">'+
                                                        '<h4 class="panel-title">'+
                                                            '<a class="accordion-toggle accordion-toggle-styled">Tidak ada komentar yang bisa di tampilkan</a>'+
                                                        '</h4>'+                                                        
                                                    '</div>'+
                                                '</div>');    
            }
        
        },
        error: function(data){
            console.log(data);
        }
    }); 
}
</script>
@endsection