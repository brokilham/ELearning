@extends('backend.app.layouts')
@section('content')
<!-- BEGIN PAGE HEADER-->            
<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="/master_materi/main_master">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Daftar Materi</span>
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
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase"> Daftar Materi</span>
                </div>              
            </div>
            <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn-group">
                                <button id="call-modal-add-guru" class="btn sbold green" data-toggle="modal" data-target="#modal-add-materi"> Add New
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="btn-group pull-right">
                                <button style = "display:none" class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                    <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-print"></i> Print </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="dt_master_materi">
                    <thead>
                        <tr>                           
                            <th  style = " text-align: center;">Nama</th>
                            <th  style = " text-align: center;">Durasi(Jam)</th>
                            <th  style = " text-align: center;">Deskripsi</th>
                            <th  style = " text-align: center;">Created Date</th>
                            <th  style = " text-align: center;">Updated Date</th>                            
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>                                                                                                                             
                   </tbody>
                </table>
            </div>              
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>  
@include('backend.master_materi.modal-add') 
@include('backend.master_materi.modal-update')
@endsection

@section('script')
<script>
 $(document).ready(function() {

    var table = $("#dt_master_materi").DataTable({
            processing: true,
            serverSide: true,
            deferRender: true,
            ajax: {
                url:'./getall_master_materi',
                method: 'GET',
                headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') },
            },
            columns: [     
            
                { data: 'name' },
                { data: 'duration' },
                { data: 'description' },
                { data: 'created_at' },
                { data: 'updated_at' },          
                { data: null },
            
            ],
            scrollCollapse: true,      
            columnDefs: [ 
                {
                    className: "dt-center", 
                    targets:  [ 0,1,2,3,4]
                },
                {
                    searchable: false,
                    orderable: false,
                    targets: 5,
                    data: null,
                    render: function(data, type, full, meta){
                        if(type === 'display'){
                            data = '<div class="btn-group">'+
                                        '<button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions'+
                                        '<i class="fa fa-angle-down"></i>'+
                                    '</button>'+
                                    '<ul class="dropdown-menu" role="menu">'+                                
                                        '<li>'+
                                            '<a id="anchor_delete" value='+full['id']+' >'+
                                                '<i class="icon-tag"></i>Delete</a>'+
                                        '</li>'+          
                                        '<li>'+
                                            '<a id="anchor_edit" value='+full['id']+' data-toggle="modal" data-target="#modal-update-materi">'+
                                                '<i class="icon-tag"></i>Edit</a>'+
                                        '</li>'+    
                                        '<li>'+
                                            '<a id="anchor_detail"  href="../master_materi/detail_master_materi?id_materi='+full['id']+'" target="_blank">'+
                                                '<i class="icon-tag"></i>Detail</a>'+
                                        '</li>'+                                 
                                    '</ul>'+                          
                                '</div>';
                        }

                        return data;
                    }
                } ],
            order: [[ 0, 'asc' ]],
        }).draw();


    $("#btn_post_materi").on("click",function(){
            $.ajax({
                type:"POST",
                url:'./create',
                data: new FormData($("#frm-post-materi")[0]), //$('#frm-post-materi').serialize(),
                headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') },               
                dataType: 'json',
                processData: false,
                contentType: false,
                async: true,
                success: function(data){    
                    console.log(data);       
                    if (data.code == "S"){
                        table.ajax.reload();
                        $("#modal-add-materi").modal("hide");
                    }  
                    else{
                        alert(data.message);
                    }
                },
                error: function(data){
                    console.log(data);
                }
            })
    });

    $("#dt_master_materi").on("click", "#anchor_delete", function(){
        
        $.ajax({
            type:"POST",
            url:'./delete',
            headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') },               
            data:{id:$(this).attr('value')},
            // dataType: 'json',
            success: function(data){             
                console.log(data);       
                if (data.code == "S"){
                    table.ajax.reload();
                    $("#modal-add-materi").modal("hide");
                }  
                else{
                    alert(data.message);
                }
            },
            error: function(data){
                console.log(data);
            }
        });
    })

    $("#btn_add_row_file").on("click",function(){
            var jum_file_pendukung = parseInt($("#txt_jum_file_pendukung").val())+1;
            $('#tes').append(
                '<div class="form-group">'
                    +'<label class="col-md-3 control-label "></label>'
                    +'<div class="col-md-9">'
                        +'<input type="file" class="form-control" name="txt_file_'+jum_file_pendukung+'" id="txt_file_'+jum_file_pendukung+'" accept="image/Jpeg" />'                  
                    +'</div>'
                +'</div>');
            $("#txt_jum_file_pendukung").val(jum_file_pendukung);        
    })

   
    

});

</script>
@endsection