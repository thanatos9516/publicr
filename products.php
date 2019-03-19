<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="PC,COMPONENTES,PERIFERICOS,GAMING">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PUBLICATE CR</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/card.css" rel="stylesheet">
    <link rel="stylesheet" href="POS/admin/css/custom.css">
</head>
<body>
    
    <?php 
        include 'inc/nav.php';
        require_once('Pos/conn.php');
    
        $cat = intval($_GET['cat']); // recibimos la categoria de la url al presionar la categoria deseada, y solo sean nums
        $sqlCat = "SELECT * FROM category WHERE categoryid = $cat";
        $sqlCount = "SELECT * FROM page WHERE categoryid = $cat";
        $title = null;
        $resultCat = mysqli_query($conn,$sqlCat);
        $resultCount = mysqli_query($conn,$sqlCount);
        $Total = mysqli_num_rows($resultCount);

        if($resultCat){
            $title = mysqli_fetch_array($resultCat);
            $title = $title['category_name'];
        }
        else{
             $title = "Error categoria no existe";
        }

    ?>
    <br>
    <br>
    <br>
    <div class="container">
         <div class="row mt-3">
            <div class="col-lg-6">
                <h1 style=" border-style: double; border-color:#1d1d7e; "><?= $title?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
               <!-- <img src="img/Banner_Productos/<?= $title.'.jpg'?>" style="width:100%;">  Aca necesitamos modificar los normbres de las imagenes-->
            </div>
        </div>

        <div style="margin: 30px;">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a style="color: #000;" href="index.php">Inicio</a></li>
                <li class="breadcrumb-item active"><?= $title?></li>
            </ol>  
        </div>
        <h5 style="color: gray" >Total encontrados: <?= $Total ?></h5>
        
        <div style="margin-bottom:60px;" class="list-products"></div> <!-- Print all products-->

        <input type="hidden" id="cat" value="<?php echo $cat?>"> <!-- obtencion de idCat -->
    </div>
        <!-- Footer -->
    <?php include 'inc/footer.php'; ?>
    <!-- End Footer-->
    <script src="POS/admin/js/list_products_pag.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>