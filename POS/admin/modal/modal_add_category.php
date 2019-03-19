<?php include '../../conn.php' ?>
<div id="addCategoryModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form name="add_category" id="add_category">
					<div class="modal-header">						
						<h4 class="modal-title">Add category</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Category Name</label>
							<input type="text" name="name" id="name" class="form-control" required>
						</div>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-success" value="Save">
					</div>
				</form>
			</div>
		</div>
	</div>