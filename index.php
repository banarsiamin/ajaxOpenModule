<button type="button" class="btn btn-success btn-md waves-effect modalButton" data-toggle="modal" data-src="" data-width="555"><i class="glyphicon glyphicon-plus"></i> Add Connection Type</button>
<!--Start Modal Crud -->
<div class="modal fade" id="nameModal_course"  role="dialog"><!-- Modal Crud Start-->
    <div class="modal-dialog">
        <div class="modal-content" >
            <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <h4 class="box-title">course</h4>
            </div>
            <div class="modal-body"></div>
        </div>
    </div>
</div><!--End Modal Crud -->
<script type="text/javascript">
$(document).ready(function(){
    $("body").on("click",".modalButton", function(e) {  
        $("#nameModal_course").find(".modal-body").html('loading');
        $("#nameModal_course").find(".modal-body").attr("style","text-align: center");  
        $.ajax({
            url : '',//"<?php echo base_url()."connectiontype/get_modal";?>",
            method: "post", 
            data : { id: $(this).attr("data-src")}
            }).done(function(data) {
            $("#nameModal_course").find(".modal-body").removeAttr("style");  
            $("#nameModal_course").find(".modal-body").html(data);
            $("#nameModal_course").modal("show");
        });
    });
});
</script>
