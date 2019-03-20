<?php 
//	include('modal-login.php');
	include_once('modal.php');
?>   

<style>
    h4, p {
  font-family: Georgia, Cambria, Times, "Times New Roman";
}
    h4, h6{color:aliceblue}
</style>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <section id="main" class="index-link">
    <div style="height: 15px;"></div>
        <div id="container" class="container" style="">
        <div class="row">
            <div class="col-md-3 col-xs-12 ">
                 <div id="main" style="height:20px;"></div>
                <div class="link-area">
                      <h4 class="text-uppercase">
                        <strong>Acerca de nosotros</strong>
                      </h4>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 70px;">
                    <P style="color: white">Somos una empresa especialidad en el marketing digital y publicidad, nuestra prioridad son nuestros clientes y conformamos el mejor equipo para ello.</P>
                    <a href="#"><i class="fa fa-facebook" style="font-size:50px; color:#0a00ff;"></i></a>
                    <a href="https://www.youtube.com/channel/UCtuyh4iWWcRLytRFtAokr5w/videos"><i class="fa fa-youtube" style="font-size:50px; color:#a21515;"></i></a>
                    <a href="#"><i class="fa fa-twitter" style="font-size:50px; color:#08e3ff; text-indent: 8px;"></i></a>
                    <a href="#"><i class="fa fa-linkedin" style="font-size:50px; color:#ededed;text-indent: 8px;"></i></a>
                    <a href="#"><i class="fa fa-whatsapp" style="font-size:50px; color:#00eb2d; text-indent: 8px;"></i></a>
                </div>
            </div>
                    
                <div class="col-lg-3">
                    <div style="height: 20px;"></div>
                <div class="link-area">
                      <h4 class="text-uppercase">
                        <strong>Página Rápida</strong>
                      </h4>
                    <!-- <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 85px;"> -->
                   
                   <a style="margin-top:20px;" class="col-xs-12 col-lg-12 alinear btn btn-success btn-sm" href="index.php">Home</a>
                    
                    <div class="col-xs-12">
  <button class="btn btn-success btn-sm dropdown-toggle alinear" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Services
  </button>
  <div class="dropdown-menu">
  
                <a class="dropdown-item" href="equipment_seccion.php">New Equipment</a>
                <a class="dropdown-item" href="">Cleaning Chemicals</a>
                <a class="dropdown-item" href="Floor_seccion.php">Floor Care</a>
                <a class="dropdown-item" href="batteries.php">Batteries</a>
                <a class="dropdown-item" href="parts_and_accessories.php">Parts and Accessories</a>
                <a class="dropdown-item" href="green_cleaning.php" >Green Cleaning</a>
  </div>
</div>

                    <a class="btn btn-success btn-sm alinear col-xs-12" href="">Pads</a>
                   <a class="btn btn-success btn-sm alinear col-xs-12" href="">Cleaning Supplies</a>          
                   <a class="btn btn-success btn-sm alinear col-xs-12" href="">Use Equipment</a>          
                </div>
            </div>

            <div class="col-md-3 col-xs-12">
                <div style="height: 20px;"></div>
                <div class="link-area">
                        <h4 class="text-uppercase">
                        <strong>My Account</strong>
                      </h4>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 95px;">
                    <ul>
                     <?php
                          if(!$_SESSION['id']==""){
                                echo ' 
                                    
                                     <!-- Example split danger button -->
                               
                                     <a class="dropdown-item" href="#account" data-toggle="modal" style="color:white"><img src="svg/si-glyph-flower.svg"/ style="width:24px; height:24px;"> My Account</a>
                                     <a class="dropdown-item" href="#profile" data-toggle="modal" style="color:white"><img src="svg/si-glyph-man-doctor.svg"/ style="width:24px; height:24px;"> My Profile</a>
                                      
                                  
                                 ';
                            }else{
                                echo ' 
                                       
                                             <a class="dropdown-item" href="#myModal" data-toggle="modal" style="color:white"><img src="svg/si-glyph-flower.svg"/ style="width:24px; height:24px;"> My Account</a>
                                             <a class="dropdown-item" href="#myModal" data-toggle="modal" style="color:white"><img src="svg/si-glyph-man-doctor.svg"/ style="width:24px; height:24px;"> My Profile</a>
                                            
                                           
                                 
                                 ';
                            }
                        ?>   
             
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-xs-12">
                <div style="height: 20px;"></div>
                <div class="link-area">
                        <h4 class="text-uppercase">
                        <strong>Contact Us</strong>
                        </h4>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 90px;">
                    <ul>
                    <li><p style="color:white"><i class="fa fa-envelope-o text-white"></i> : publicacr@gmail.com</p></li>
                    <li><p style="color:white"><i class="fa fa-address-book-o text-white"></i> : 6137-2755</p></li>
                    <li><p style="color:white"><i class="fa fa-phone text-white"></i> : 7152-8949</p></li>
                    <li><p style="color:white"><i class="fa fa-compass text-white"></i> : Dirección General: San José, Costa Rica</p></li>
                    <br>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="social" class="index-social">
    <div class="container">
    <div class="row index-social-link text-center d-flex">
            <p class="d-flex flex-row copy-c"><p>&copy; 2019 PUBLICACR </p>
            <p class="ml-auto p-2">&copy;JMSOFTCR ENTERPRISE</p>
        </div>  
    <div class="row index-social-link text-center d-flex flex-row-reverse">
           
        </div>
        </div>
</section>