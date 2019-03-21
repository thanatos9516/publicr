 <link href="css/resCarousel.css" rel="stylesheet" type="text/css">
<div class="container p8 col-lg-12">
          <div class="row">
        <div class="col-lg-8">
           <h1 style=" text-align: center; ">¿Qué buscas?</h1>
        </div>
        </div>
        <div class="resCarousel" data-items="2-4-4-4" data-interval="2000" data-slide="1" data-animator="lazy">
            <div class="resCarousel-inner">
           
 <?php
      include('POS/conn.php');
      $query=mysqli_query($conn,"select * from page");  
    
    		while($row=mysqli_fetch_array($query)){
                
             $id=$row['id_page'];
             $name=$row['name_page'];
             $photo=$row['photo_page'];
    			?>
              
               <div class="item">
                    <div class="tile">
                        <div>
                           
                            <div class="img" style="width:100%; height:100%;">
                            <img style="width:80%; height:80%;" src="POS/<?php if (empty($photo)){echo " upload/noimage.jpg ";}else{echo $photo;} ?>" alt="img">
                          </div>
                        </div>
                        <h5><?php echo $name; ?></h5>
                       
                        <p> </p>
                        
                        <form action="info.php?id=<?php echo $id; ?>" method="post" name="Detalle">
                                <input name="id_txt" type="hidden" value="<?php echo $id; ?>" />
                                <input name="Detalles" type="submit" value="Detalles" class="btn btn-danger" style="width:95%;"/>
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
    <script src="js/resCarousel.js"></script>
