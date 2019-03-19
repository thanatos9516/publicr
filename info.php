<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
      <link href="vendor/bootstrap/css/footer.css" rel="stylesheet">
    <title>PUBLICATE CR</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main2.css" rel="stylesheet">
    <link href="css/sweetalert.css" rel="stylesheet">  
     <link href="css/resCarousel.css" rel="stylesheet" type="text/css">
 <script src="  jquery.min.js"></script>
 <script src="js/sweetalert.min.js"></script>
    <!-- Custom styles for this template -->

    <?php include('Pos/conn.php'); ?>
      
      <style>
 h4, p, li, h6, h1 {
  font-family: Georgia, Cambria, Times, "Times New Roman";
}


  </style>
      
  </head>

  <body>

    <!-- Navigation -->
    <?php include 'inc/nav.php'; ?>  
    <!-- Page Content -->
    <div class="container">
        <?php
        if (isset($_POST['id_txt'])){
    $id = $_POST['id_txt'];
    $nro_reg=$_POST['id_txt'];      
    $sql = "select * from page as p where p.id_page = \"$id\"";
    $result = mysqli_query($conn, $sql);
                                }

        if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
        $id = $row['id_page'];
        $product_name = $row['name_page'];   
        $photo = $row['photo_page'];
        $description = $row['description_page'];
        $tech = $row['location_page'];
        $video = $row['video_page'];
        $category_name = $row['category_name'];
        $phone = $row['phone'];
        $email = $row['email'];
    }
        } else {
    echo "Lo sentimos no existe detalle de este producto por el momento";
        }
        ?>
        <br>
        <div class="col-xs-12"></div>
        
        <h8><a href="index.php" style=""> Inicio </a> /<a href="" style=""><?php echo $category_name; ?></a> <a style="color: black"><?php echo $product_name; ?></a></h8>
   
        <hr>
        
    <div class="row d-flex" style="background:white;">
        <div class="col-sm-5">
                         
       <div class="bs-example">
       	<div id="carousel-example-captions" class="carousel slide" data-ride="carousel">
       	<?php 
       	$sql2 = "select * from carousel as c where c.id_page = \"$_POST[id_txt]\"";
    	$result2 = mysqli_query($conn, $sql2);
    	if ($rs = mysqli_fetch_array($result2)) {
    		echo '<img style=" height: 70%; width: 100%;" src=POS/'.$rs["1"].' class="big-img">';}
       	?>
       </div>
       </div>
       
       <div class="col-md-12 cont-imgs" style="margin-top: 5px;">
       	<div class="form-inline">
       		<div class="form-group">
       	<?php  
       	foreach ($result2 as $rst) {
       	echo '<button class="lit-img" value='.$rst["photo"].'><img src=POS/'.$rst["photo"].' style="width:60px;height:60px;"></button>';
       		}
       	?>
       	</div>
        </div>
   		</div>
   		</div>
              
                <div class="col-sm-3 ml-auto p-2" style="background-color:#f0f0f0; height:290px; border:1px solid; border-radius:5px; margin: 30px;">
        <a style="color: gray"><?php echo $product_name; ?></a>
        <hr>
        <br>
        <div>
            <br>
            
<form class="form-inline" id="envCart">
  <div class="form-group">
    <input id="idp" type="hidden" value="<?php echo $id; ?>" >
      <h5>Telefono: <?php echo $phone; ?></h5> 
      <br>
      <h5>Email: <?php echo $email; ?></h5>
    <div id="divani"></div>
  
  </div>
    <br>  
    <br>       
  
</form>  
                
                  
            </div>
        </div>
        </div>
        <div class="row">

        </div>
 <div style="height: 50px;"></div>
              <hr> 
        
            <br>
<div class="descripcion" style="background-color:#ffffff;  border-radius:5px; padding-left:20px">

<ul id="clothing-nav" class="nav nav-tabs" role="tablist" >
	
<li class="nav-item">
<a class="nav-link active" href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true" style="color:black">Description</a>

</li>

<li class="nav-item">
<a class="nav-link" href="#hats" role="tab" id="hats-tab" data-toggle="tab" aria-controls="hats" style="color:black">Ubicación</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#video" role="tab" id="hats-tab" data-toggle="tab" aria-controls="hats" style="color:black">Videos</a>
</li>
            
</ul>

<!-- Content Panel -->
<div id="clothing-nav-content" class="tab-content">

<div role="tabpanel" class="tab-pane fade show active" id="home" aria-labelledby="home-tab">
  <h3> <?php echo $product_name; ?></h3>
    <hr>
    <?php
$des1 = str_replace("\n", "<br>", $description);
    ?>
  <p><?php echo $des1; ?></p>

</div>

<div style="text-align:center" role="tabpanel" class="tab-pane fade" id="hats" aria-labelledby="hats-tab">
<?php
$tech1 = str_replace("\n", "<br>", $tech);
    ?>
    <p><?php echo $tech1; ?></p>
    
</div>

<div role="tabpanel" class="tab-pane fade" id="video" aria-labelledby="hats-tab">
    <br>
    <p><?php echo $video; ?></p>
</div>
  <br>
</div>
</div>
     <br>
     <br>
      </div>
      <div class="container p8">
          <div class="row">
        <div class="col-lg-4">
           <h1 style=" border-style: double; border-color:#1d1d7e; ">Empresas relacionadas</h1>
        </div>
        </div>
        <div class="resCarousel" data-items="2-4-4-4" data-interval="2000" data-slide="1" data-animator="lazy">
            <div class="resCarousel-inner">
        
 <?php
      include('Pos/conn.php');
      $query=mysqli_query($conn,"select * from page");  
    
    		while($row=mysqli_fetch_array($query)){
                
             $id=$row['id_page'];
             $name=$row['name_page'];
             $price=$row['product_price'];
             $photo=$row['photo_page'];
             $phone=$row['phone'];
    			?>
              
               <div class="item">
                    <div class="tile">
                        <div>
                           
                            <div class="img" style="width:100%; height:100%;">
                            <img style="width:80%; height:80%;" src="POS/<?php if (empty($photo)){echo " upload/noimage.jpg ";}else{echo $photo;} ?>" alt="img">
                          </div>
                        </div>
                        <h5><?php echo $name; ?></h5>
                        
                        
                       
                        <form action="info.php?id=<?php echo $id; ?>" method="post" name="Detalle">
                                <input name="id_txt" type="hidden" value="<?php echo $id; ?>" />
                                <input name="Detalles" type="submit" value="Detalles" class="btn btn-danger" style="width:95%;" />
                              </form>
                    </div>
                </div>
                 <?php
            }
          ?>

            </div>
            <button class='btn btn-default leftRs'><</button>
            <button class='btn btn-default rightRs'>></button>
        </div>
    </div>
      </div>    
      
         <div style="height: 50px;"></div>
    <!-- /.container -->
            
 <!-- Footer -->
         
     <?php include 'inc/footer.php'; ?>  

    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <script type="text/javascript">
      function valid(){
        if($("#qty").val() != ""){$("#btnCart").attr("disabled",false);}else{$("#btnCart").attr("disabled",true);}
      }
      $("#envCart").submit(function(e){
        e.preventDefault();
        var newP = $("<div>");
        newP.html('<img style="height: 70px; width: 70px;border-radius:50px" alt="First slide image" src="POS/<?php echo $photo ?>"/>');
        newP.addClass("slide-tr");
        // append prepend after
        $("#divani").append(newP);
        setTimeout(function() {
        $("#divani").empty();
        var param = {"idp":$("#idp").val(),"qty":$("#qty").val()}
        $.ajax({
          url:"add_cart.php",
          data:param,
          success:function(){
          $("#Cont-Popover").load("PopOver.php");
          swal({
          title: 'Se agrego al carro de compras',
          type: 'success',
          showCancelButton: true,
          confirmButtonColor: '#409814',
          confirmButtonText: 'Ir al carrito',
          cancelButtonText: 'Seguir comprando',
        },function(){
        window.location.href = "fetch_cart.php";  
        }); 
          }
        });
        },1000);
      });
      $(".lit-img").on("click",function(){
      	var img = $('<img style=" height: 70%; width: 100%;" src=POS/'+$(this).val()+' class="big-img">');
      	$(".bs-example").empty();
      	$(".bs-example").append(img);
      });
    </script>
    <script>
        //ResCarouselCustom();
        var pageRefresh = true;

        function ResCarouselCustom() {
            var items = $("#dItems").val(),
                slide = $("#dSlide").val(),
                speed = $("#dSpeed").val(),
                interval = $("#dInterval").val()

            var itemsD = "data-items=\"" + items + "\"",
                slideD = "data-slide=\"" + slide + "\"",
                speedD = "data-speed=\"" + speed + "\"",
                intervalD = "data-interval=\"" + interval + "\"";


            var atts = "";
            atts += items != "" ? itemsD + " " : "";
            atts += slide != "" ? slideD + " " : "";
            atts += speed != "" ? speedD + " " : "";
            atts += interval != "" ? intervalD + " " : ""

            //console.log(atts);

            var dat = "";
            dat += '<h4 >' + atts + '</h4>'
            dat += '<div class=\"resCarousel\" ' + atts + '>'
            dat += '<div class="resCarousel-inner">'
            for (var i = 1; i <= 14; i++) {
                dat += '<div class=\"item\"><div><h1>' + i + '</h1></div></div>'
            }
            dat += '</div>'
            dat += '<button class=\'btn btn-default leftRs\'><i class=\"fa fa-fw fa-angle-left\"></i></button>'
            dat += '<button class=\'btn btn-default rightRs\'><i class=\"fa fa-fw fa-angle-right\"></i></button>    </div>'
            console.log(dat);
            $("#customRes").html(null).append(dat);

            if (!pageRefresh) {
                ResCarouselSize();
            } else {
                pageRefresh = false;
            }
            //ResCarouselSlide();
        }

        $("#eventLoad").on('ResCarouselLoad', function() {
            //console.log("triggered");
            var dat = "";
            var lenghtI = $(this).find(".item").length;
            if (lenghtI <= 30) {
                for (var i = lenghtI; i <= lenghtI + 10; i++) {
                    dat += '<div class="item"><div class="tile"><div><h1>' + (i + 1) + '</h1></div><h3>Title</h3><p>content</p></div></div>'
                }
                $(this).append(dat);
            }
        });
    </script>
    <script src="js/resCarousel.js"></script>
  </body>
    
</html>