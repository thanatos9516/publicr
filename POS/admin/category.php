<?php include('session.php'); ?>
<?php include('header.php'); ?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="sweetalert/sweetalert2.min.css">
<link rel="stylesheet" href="css/custom.css">
<script src="sweetalert/sweetalert2.min.js"></script>
<body>
<div id="wrapper">
<?php include('navbar.php'); ?>
<div style="height:50px;"></div>
<div id="page-wrapper">
<div class="container-fluid">
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Category
				<span class="pull-right">
					<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addCategoryModal"><i class="fa fa-plus-circle"></i> Add Category</button>
				</span>
			</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
		<div class='col-sm-4 pull-right'>
				<div id="custom-search-input">
                    <div class="input-group col-md-12">
                        <input type="text" class="form-control" placeholder="Buscar"  id="q" onkeyup="load(1);" />
                        <span class="input-group-btn">
                            <button class="btn btn-info" type="button" onclick="load(1);">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    </div>
                </div>
			</div>
			<div class='clearfix'></div>
			<hr>
			<div id="loader"></div><!-- Carga de datos ajax aqui -->
			<div id="resultados"></div><!-- Carga de datos ajax aqui -->
			<div class='outer_div'></div><!-- Carga de datos ajax aqui -->
        </div>
    </div>
</div>
</div>
</div>
<?php include('script.php'); ?>
<?php include('modal.php'); ?>

<?php include("modal/modal_add_category.php");?>
	<!-- Edit Modal HTML -->
	<?php include("modal/modal_edit_category.php");?>
	<!-- Delete Modal HTML -->
	<?php include("modal/modal_delete_category.php");?>
<script src="js/services_category.js"></script>
<script src="custom.js"></script>
</body>
