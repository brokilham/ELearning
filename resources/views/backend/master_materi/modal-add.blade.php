<!-- /.modal -->
<div class="modal fade modal-scroll" id="modal-add-materi" tabindex="-1" data-replace="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">New Materi</h4>
            </div>
            <div class="modal-body">
                <form id = "frm-post-materi" class="form-horizontal" role="form" method="POST">
                    <div class="form-body">
                       
                        <div class="form-group">
                            <label class="col-md-3 control-label">Nama</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control"  id="txt_nama" name="txt_nama" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Durasi</label>
                            <div class="col-md-9">
                                <!-- <input type="text" class="form-control"  id="txt_durasi" name="txt_durasi" >-->
                                <select class="form-control" name="txt_durasi" id="txt_durasi">
                                    <option value="">Pilih Durasi</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>        
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label ">Deskripsi</label>
                            <div class="col-md-9">
                                <textarea class="form-control autosizeme" rows="4" data-autosize-on="true" name="txt_deskripsi" id="txt_deskripsi"></textarea>                                             
                            </div>
                        </div>  
                        <div class="form-group">
                            <label class="col-md-3 control-label ">File Pendukung</label>
                            <div class="col-md-9">
                                <table id="t_file_pendukung">
                                    <tr>
                                        <td>
                                            <input type="file" class="form-control" name="txt_file" id="txt_sis_path_foto"  />           
                                        </td>
                                        <td> &nbsp;
                                            <a class="btn btn-icon-only red">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </td>                                 
                                    </tr>
                                </table>                                                    
                            </div>
                        </div>  
                        <div class="form-group">
                            <label class="col-md-3 control-label "></label>
                            <div class="col-md-9">
                                <a  class="btn btn-sm green" id="btn_add_row_file">
                                    <i class="fa fa-plus"></i> Tambah 
                                </a>                                                       
                            </div>
                        </div>                
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                <button type="button" class="btn green" id="btn_post_materi" value=''>Post</button>  
            </div>
        </div>
    </div>
</div>

