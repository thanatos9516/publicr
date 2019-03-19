<script src="../../js/dropzone.js"></script>
<!-- Delete Product -->
    <div class="modal fade" id="delproduct_<?php echo $pid; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete Product</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<?php
						$a=mysqli_query($conn,"select * from product where productid='$pid'");
						$b=mysqli_fetch_array($a);
					?>
                    <h5><center>Product Name: <strong><?php echo $b['product_name']; ?></strong></center></h5>
					<form role="form" method="POST" action="deleteproduct.php<?php echo '?id='.$pid; ?>">
                </div>                 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
					</form>
                </div>
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit Product -->
    <div class="modal fade" id="editprod_<?php echo $pid; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit Product</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<?php
						$a=mysqli_query($conn,"select * from product left join category on category.categoryid=product.categoryid left join supplier on supplier.userid=product.supplierid where productid='$pid'");
						$b=mysqli_fetch_array($a);
					?>
					<div style="height:10px;"></div>
                    <form role="form" method="POST" action="edit_product.php<?php echo '?id='.$pid; ?>" enctype="multipart/form-data">
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Product Name:</span>
                            <input type="text" style="width:400px; text-transform:capitalize;" value="<?php echo ucwords($b['product_name']); ?>" class="form-control" name="name">
                        </div>
						<div style="height:10px;"></div>
						<div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Category:</span>
                            <select style="width:400px;" class="form-control" name="category">
								<option value="<?php echo $b['categoryid']?>"><?php echo $b['category_name']; ?></option>
								<?php
									$c=mysqli_query($conn,"select * from category where categoryid != '".$b['categoryid']."'");
									while($crow=mysqli_fetch_array($c)){
										?>
											<option value="<?php echo $crow['categoryid']; ?>"><?php echo $crow['category_name']; ?></option>
										<?php
									}
								?>
							</select>
                        </div>
						<div style="height:10px;"></div>
						<div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Supplier:</span>
                            <select style="width:400px;" class="form-control" name="supplier">
								<option value="<?php echo $b['supplierid']?>"><?php echo $b['company_name']; ?></option>
								<?php
									$s=mysqli_query($conn,"select * from supplier where userid != '".$b['supplierid']."'");
									while($srow=mysqli_fetch_array($s)){
										?>
											<option value="<?php echo $srow['userid']; ?>"><?php echo $srow['company_name']; ?></option>
										<?php
									}
								?>
							</select>
                        </div>
						<div style="height:10px;"></div>
						<div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Price:</span>
                            <input type="text" style="width:400px;" value="<?php echo $b['product_price'] ?>" class="form-control" name="price">
                        </div>
						<div style="height:10px;"></div>
						<div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Quantity:</span>
                            <input type="text" style="width:400px;" value="<?php echo $b['product_qty'] ?>" class="form-control" name="qty">
                        </div>
						<div style="height:10px;"></div>					
						<div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Photo:</span>
                            <input type="file" style="width:400px;" class="form-control" name="image">
                        </div>
                        <div style="height:20px;"></div>
                        <div class="form-group">
                        <label for="exampleTextarea">Description</label>
                        <br>
                        <textarea class="form-control" name="description" cols="70" rows="10"><?php echo $b['description'] ?></textarea>
                        </div> 
                        <div class="form-group">
                        <label for="exampleTextarea">Tech Specs</label>
                        <br>
                        <textarea class="form-control" name="tech" cols="70" rows="10"><?php echo $b['tech'] ?></textarea>
                        </div> 
                        <div class="form-group">
                        <label for="exampleTextarea">Video</label>
                        <br>
                        <textarea class="form-control" name="video" cols="70" rows="10"><?php echo $b['video'] ?></textarea>
                        </div>
						<div style="height:10px;"></div>
				</div>
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Update</button>
					</form>
                </div>
        </div>
</div>
</div>

<!-- Edit Product -->
    <div class="modal fade" id="addphoto_<?php echo $pid; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add Photo Product</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<?php
						$a=mysqli_query($conn,"select * from carousel where productid='$pid'");
						$b=mysqli_fetch_array($a);
					?>
					<div style="height:10px;"></div>
                    <form role="form" method="POST" action="addphoto.php<?php echo '?id='.$pid; ?>" enctype="multipart/form-data">
                        <div id="actions" class="row">

      <div class="col-lg-7">
        <!-- The fileinput-button span is used to style the file input field as button -->
        <span class="btn btn-success fileinput-button dz-clickable">
            <i class="glyphicon glyphicon-plus"></i>
            <span>Add files...</span>
        </span>
        <button type="submit" class="btn btn-primary start">
            <i class="glyphicon glyphicon-upload"></i>
            <span>Start upload</span>
        </button>
        <button type="reset" class="btn btn-warning cancel">
            <i class="glyphicon glyphicon-ban-circle"></i>
            <span>Cancel upload</span>
        </button>
      </div>

      <div class="col-lg-5">
        <!-- The global file processing state -->
        <span class="fileupload-process">
          <div id="total-progress" class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="opacity: 0;">
            <div class="progress-bar progress-bar-success" style="width: 100%;" data-dz-uploadprogress=""></div>
          </div>
        </span>
      </div>

    </div>
                        
    <div class="table table-striped files" id="previews">

  <div id="template" class="file-row">
    <!-- This is used as the file preview template -->
    <div>
        <span class="preview"><img data-dz-thumbnail/></span>
    </div>
    <div>
        <p class="name" data-dz-name></p>
        <strong class="error text-danger" data-dz-errormessage></strong>
    </div>
    <div>
        <p class="size" data-dz-size></p>
        <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
          <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
        </div>
    </div>
    <div>
      <button class="btn btn-primary start">
          <i class="glyphicon glyphicon-upload"></i>
          <span>Start</span>
      </button>
      <button data-dz-remove class="btn btn-warning cancel">
          <i class="glyphicon glyphicon-ban-circle"></i>
          <span>Cancel</span>
      </button>
      <button data-dz-remove class="btn btn-danger delete">
        <i class="glyphicon glyphicon-trash"></i>
        <span>Delete</span>
      </button>
    </div>
  </div>

</div>
		
				</div>
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                   
					</form>
                </div>
        </div>
</div>
</div>
<!-- /.modal -->
<script>
// Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
var previewNode = document.querySelector("#template");
previewNode.id = "";
var previewTemplate = previewNode.parentNode.innerHTML;
previewNode.parentNode.removeChild(previewNode);

var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
  url: "../upload", // Set the url
  thumbnailWidth: 80,
  thumbnailHeight: 80,
  parallelUploads: 20,
  previewTemplate: previewTemplate,
  autoQueue: false, // Make sure the files aren't queued until manually added
  previewsContainer: "#previews", // Define the container to display the previews
  clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
});

myDropzone.on("addedfile", function(file) {
  // Hookup the start button
  file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file); };
});

// Update the total progress bar
myDropzone.on("totaluploadprogress", function(progress) {
  document.querySelector("#total-progress .progress-bar").style.width = progress + "%";
});

myDropzone.on("sending", function(file) {
  // Show the total progress bar when upload starts
  document.querySelector("#total-progress").style.opacity = "1";
  // And disable the start button
  file.previewElement.querySelector(".start").setAttribute("disabled", "disabled");
});

// Hide the total progress bar when nothing's uploading anymore
myDropzone.on("queuecomplete", function(progress) {
  document.querySelector("#total-progress").style.opacity = "0";
});

// Setup the buttons for all transfers
// The "add files" button doesn't need to be setup because the config
// `clickable` has already been specified.
document.querySelector("#actions .start").onclick = function() {
  myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED));
};
document.querySelector("#actions .cancel").onclick = function() {
  myDropzone.removeAllFiles(true);
};
</script>



