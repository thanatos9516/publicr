<?php include '../../conn.php' ?>

<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

<script>
     $(function(){
        $("input[name='file']").on("change", function(){
            var formData = new FormData($("#uploadimage")[0]);
            var ruta = "../addphoto.php";
            $.ajax({
                url: ruta,
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(datos)
                {
                    swal(
                  'Photo add!',
                  '',
                  'success'
                    )
                    $("#respuesta").html(datos);
                }
            });
        });
     });
</script>

<div id="addPhotoModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
            <form id="uploadimage" action="" method="post" enctype="multipart/form-data">
            <input type="file" name="file" id="file" required />
            <input type="submit" value="Upload" class="submit" />
            </form>
            <div id="respuesta"></div>

				<!-- <form name="add_photo" id="add_photo">
					<div class="modal-header">						
						<h4 class="modal-title">Add Photo</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Photo: (dimensions:400 x 400)</span>
                            <input type="file" style="width:150px;" accept="*/*" class="form-control" name="image" id="image">
						</div>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-success" value="Guardar datos">
					</div>
				</form> -->
			</div>
		</div>
	</div>

