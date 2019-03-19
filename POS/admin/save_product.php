<?php
	if (empty($_POST['name'])){
		$errors[] = "Ingresa el nombre del producto.";
	} elseif (!empty($_POST['name'])){
	require_once ("../../conn.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $name2 = mysqli_real_escape_string($conn,(strip_tags($_POST["name"],ENT_QUOTES)));
	$name = utf8_decode($name2);
	$category = mysqli_real_escape_string($conn,(strip_tags($_POST["supplier"],ENT_QUOTES)));
    $price = floatval($_POST["price"]);
    $supplier = mysqli_real_escape_string($conn,(strip_tags($_POST["category"],ENT_QUOTES)));  
    $description2 = mysqli_real_escape_string($conn,(strip_tags($_POST["description"],ENT_QUOTES)));
	$description = utf8_decode($description2);
	$tech2 = mysqli_real_escape_string($conn,(strip_tags($_POST["tech"],ENT_QUOTES)));
	$tech = utf8_decode($tech2);
	$video = mysqli_real_escape_string($conn,(strip_tags($_POST["video"],ENT_QUOTES)));
	$stock = intval($_POST["stock"]);
	$fileInfo = PATHINFO($_FILES["image"]["name"]);
	if (empty($_FILES["image"]["name"])){
		$location="";
	} 
	else{
		if ($fileInfo['extension'] == "jpg" OR $fileInfo['extension'] == "png") {
			$newFilename = $fileInfo['filename'] . "_" . time() . "." . $fileInfo['extension'];
			move_uploaded_file($_FILES["image"]["tmp_name"], "../upload/" . $newFilename);
			$location = "upload/" . $newFilename;
		}
		else{
			$location="";
			?>
				<script>
					window.alert('Photo not added. Please upload JPG or PNG photo only!');
				</script>
			<?php
		}
	}
 
	// REGISTER data into database
    $sql = "call addproduct('$name','$category','$price','$stock', '$supplier', '$description', '$location', '$tech','$video')";
    $query = mysqli_query($conn,$sql);
     // if product has been added successfully
    if ($query) {
        $messages[] = "El producto ha sido guardado con éxito.";
    } else {
        $errors[] = "Lo sentimos, el registro falló. Por favor, regrese y vuelva a intentarlo.";
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
			
				<?php
			}
?>