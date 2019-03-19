<div id="deleteProductModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form name="delete_product" id="delete_product">
					<div class="modal-header">						
						<h4 class="modal-title">Detele Product</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">		
							
						<h1>¿Are you sure you want to delete this record?</h1>
						<h3 class="text-warning"><small>This action can not be undone.</small></h3>
						<input type="hidden" name="delete_id" id="delete_id">
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-danger" value="Eliminar">
					</div>
				</form>
			</div>
		</div>
	</div>