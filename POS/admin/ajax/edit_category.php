<?php
	if (empty($_POST['edit_id'])){
		$errors[] = "ID está vacío.";
	} elseif (!empty($_POST['edit_id'])){
	require_once ("../../conn.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
	$d=mysqli_real_escape_string($conn,(strip_tags($_POST["edit_id"],ENT_QUOTES)));
	$name = mysqli_real_escape_string($conn,(strip_tags($_POST["edit_name"],ENT_QUOTES)));
	$category = mysqli_real_escape_string($conn,(strip_tags($_POST["edit_category"],ENT_QUOTES)));
	$supplier = mysqli_real_escape_string($conn,(strip_tags($_POST["edit_supplier"],ENT_QUOTES)));
	$price = floatval($_POST["edit_price"]);
	$description = mysqli_real_escape_string($conn,(strip_tags($_POST["edit_description"],ENT_QUOTES)));
	$tech = mysqli_real_escape_string($conn,(strip_tags($_POST["edit_tech"],ENT_QUOTES)));
	$video = mysqli_real_escape_string($conn,(strip_tags($_POST["edit_video"],ENT_QUOTES)));
	$stock = intval($_POST["edit_stock"]);
	$fileInfo = PATHINFO($_FILES["image"]["name"]);

	if (empty($_FILES["image"]["name"])){
		$location=$prow['photo'];
	}
	else{
		if ($fileInfo['extension'] == "jpg" OR $fileInfo['extension'] == "png") {
			$newFilename = $fileInfo['filename'] . "_" . time() . "." . $fileInfo['extension'];
			move_uploaded_file($_FILES["image"]["tmp_name"], "../upload/" . $newFilename);
			$location = "upload/" . $newFilename;
		}
		else{
			$location=$prow['photo'];
			?>
				<script>
					window.alert('Photo not updated. Please upload JPG or PNG photo only!');
				</script>
			<?php
		}
	}
	
	$id=intval($_POST['edit_id']);
	// UPDATE data into database
    $sql = "call update_product('$id','$name', '$supplier', '$category', '$price', '$location', '$stock','$description', '$tech', '$video')";
    $query = mysqli_query($conn,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "El producto ha sido actualizado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la actualización falló. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){
				
				?>
				<!-- <div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div> -->
				<?php
			}
?>