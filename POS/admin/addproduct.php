<?php
	include('session.php');
	
	$name=$_POST['name'];
	$category=$_POST['category'];
	$price=$_POST['price'];
	$supplier=$_POST['supplier'];
	$description=$_POST['description'];
	$tech=$_POST['tech'];
	$video=$_POST['video'];
	$qty=$_POST['qty'];
	
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
	
	mysqli_query($conn,"insert into product (product_name,categoryid,product_price,product_qty,photo, supplierid, description, tech, video) values ('$name','$category','$price','$qty','$location', '$supplier', '$description', '$tech','$video')");
	$pid=mysqli_insert_id($conn);

	
	mysqli_query($conn,"insert into inventory (userid, action, productid, quantity, inventory_date) values ('".$_SESSION['id']."', 'Add Product', '$pid', '$qty', NOW())");
    
       mysqli_query($conn, "insert into carousel (photo, productid) select product.photo, product.productid from product");
	?>
		<script>
			window.alert('Product added successfully!');
			window.history.back();
		</script>
	<?php
?>