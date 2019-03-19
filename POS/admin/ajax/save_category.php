<?php
	if (empty($_POST['name'])){
		$errors[] = "Ingresa el nombre de la categoria.";
	} elseif (!empty($_POST['name'])){
	require_once ("../../conn.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $name = mysqli_real_escape_string($conn,(strip_tags($_POST["name"],ENT_QUOTES)));
    
	// REGISTER data into database
    $sql = "call addcategory ('$name')";
    $query = mysqli_query($conn,$sql);
     // if product has been added successfully
    if ($query) {
        $messages[] = "Categoría ha sido guardado con éxito.";
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