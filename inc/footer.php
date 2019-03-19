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
                                      <li id="cartme" style="cursor:pointer">
                                            <a class="nav-item nav-link" id="cart_control" title="Shopping Cart" data-toggle="popover" style="color:white"><img src="svg/si-glyph-trolley-2.svg"/ style="width:24px; height:24px;"> My Shopping Cart</a>
                                            </li>
                                  
                                 ';
                            }else{
                                echo ' 
                                       
                                             <a class="dropdown-item" href="#myModal" data-toggle="modal" style="color:white"><img src="svg/si-glyph-flower.svg"/ style="width:24px; height:24px;"> My Account</a>
                                             <a class="dropdown-item" href="#myModal" data-toggle="modal" style="color:white"><img src="svg/si-glyph-man-doctor.svg"/ style="width:24px; height:24px;"> My Profile</a>
                                            
                                            <a class="nav-item nav-link" id="cart_control" title="Shopping Cart" data-toggle="popover" style="color:white"><img src="svg/si-glyph-trolley-2.svg"/ style="width:24px; height:24px;"> My Shopping Cart</a>
                                          
                                 
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
                    <li><p style="color:white"><i class="fa fa-envelope-o text-white"></i> : fchmaintenance@gmail.com</p></li>
                    <li><p style="color:white"><i class="fa fa-address-book-o text-white"></i> : 1-800-678-0502</p></li>
                    <li><p style="color:white"><i class="fa fa-phone text-white"></i> : 604-265-4794</p></li>
                    <li><p style="color:white"><i class="fa fa-compass text-white"></i> : General Mailing Address: 13-4 Alliance Blvd. Suite 111 Barrie, On  L4M 1L2 </p></li>
                    <li><p style="color:white"><i class="fa fa-compass text-white"></i> : Work Shop 236 Eglington Rd S, <br> Callander, Ontario <br> P0H-1H0 </p></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="social" class="index-social">
    <div class="container">
    <div class="row index-social-link text-center d-flex">
            <p class="d-flex flex-row copy-c"><p>&copy; 2019 PUBLICR </p>
            <p class="ml-auto p-2">&copy;JMSOFTCR ENTERPRISE</p>
        </div>  
    <div class="row index-social-link text-center d-flex flex-row-reverse">
           
        </div>
        </div>
</section>