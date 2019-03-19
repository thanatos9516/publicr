<?php 
    session_start(); 
    error_reporting(E_PARSE);
    //require_once 'modal-login.php';
    ?> 
<?php include './inc/modal.php'; ?>
<link href="css/ihover.css" rel="stylesheet">
<link href="css/footer.css" rel="stylesheet">
<script src="js/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">

<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
    <a class="navbar-brand" href="#"><img src="img/logos/1.png" style="inverse"></a> 
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
          <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"aria-expanded="false">
                    Busqueda
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="products.php?cat=1">
                          Tecnología    
                        </a>
                       <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="products.php?cat=2">
                          Belleza                     </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="products.php?cat=11">
                          Carros
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="products.php?cat=12">
                         Mixto
                        </a>
                        <div class="dropdown-divider"></div>
                    </div>
                </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="about.php">Nosotros</a>
        </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    <ul>
            <?php
                          if(!$_SESSION['id']==""):
                                echo ' 
                                      Example split danger button 
                               
                <div class="">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <li>
                        <i class="fa fa-user"></i>Mi cuenta
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    
                            <a class="dropdown-item" href="#account" data-toggle="modal"><img src="svg/si-glyph-flower.svg"/ style="width:24px; height:24px;">
                            My Account
                            </a>
                            <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#profile" data-toggle="modal"><img src="svg/si-glyph-man-doctor.svg"/ style="width:24px; height:24px;">
                                My Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#logout" data-toggle="modal"><img src="svg/si-glyph-turn-off.svg"/ style="width:24px; height:24px;"> Logout
                                </a>
                            
                        </div>
                    </li>

                        </li>
                        <h4>
                            <li id="cartme" style="cursor:pointer">
                            <a class="nav-item nav-link" id="cart_control" title="Carrito de compras" data-toggle="popover">
                                <i class="fa fa-shopping-cart fa-fw" id="cartir"></i>
                            </a>
                            </li>
                        </h4>                   
                </div>
                                 ';
                            else:
                                echo ' 
                                  <a class="nav-item nav-link" href="#" data-toggle="modal" data-target="#myModal">
                                    <i class="fa fa-user"> Login</i>
                                  </a>
                                 ';
                            endif;
                        ?>
                         </ul>
    </div>
  </nav>