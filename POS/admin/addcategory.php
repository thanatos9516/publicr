<?php
	include('session.php');
	
	$id=$_POST['id'];
	$name=$_POST['name'];
		
	mysqli_query($conn,"insert into category (categoryid, category_name) values ('$id','$name')");
	
	?>
		<script>
			window.alert('Category added successfully!');
			window.history.back();
		</script>
	<?php
?>