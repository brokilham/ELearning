<!-- /.modal -->
<div class="modal fade modal-scroll" id="modal-add-komentar" tabindex="-1" data-replace="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Komentar Baru</h4>
            </div>
            <div class="modal-body">
                <form  class="form-horizontal" id = "frm-post-komentar" method="POST" >
                    <div class="form-body">   
                        <div class="form-group" style="display:none">
                            <label class="col-md-3 control-label ">id materi</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="id_materi" id="id_materi" value="{{ $datas[0] }}">                                            
                            </div>
                        </div>                                                           
                        <div class="form-group">
                            <label class="col-md-3 control-label ">Komentar Anda : </label>
                            <div class="col-md-9">
                                <textarea class="form-control autosizeme" rows="4" data-autosize-on="true" name="txt_komentar" id="txt_komentar"></textarea>                                             
                            </div>
                        </div>                              
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                <button type="button" class="btn green" id="btn_post_komentar" value=''>Post Komentar</button>  
            </div>
        </div>
    </div>
</div>

