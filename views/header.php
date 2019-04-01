
<html lang="en">
<head>
    <title>Home </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/favicon.png"/>
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Sweet alert-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">

    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="signup.css">
</head>
<body  >
<!-- header fixed -->
<div class="wrap_header fixed-header2 trans-0-4">
    <!-- Logo -->
    <a href="index.php" class="logo">
        <img src="images/icons/logo.png" alt="IMG-LOGO">
    </a>

    <!-- Menu -->
    <div class="wrap_menu">
        <nav class="menu">
            <ul class="main_menu">
                <li>
                    <a href="index.php">Home</a>

                </li>

                <li>
                    <a href="product.php">Shop</a>
                    <ul class="sub_menu">
                        <li><a href="">gateau</a></li>
                        <li><a href="">Glace</a></li>
                        <li><a href="">vienoiserie</a></li>
                    </ul>
                </li>

                <li>
                    <a href="blog.php">Blog</a>
                </li>

                <li>
                    <a href="about.php">About</a>
                </li>
 <li>
                    <a href="check.php">CHECK</a>
                </li>
                <li>
                    <a href="contact.php">Contact</a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Header Icon -->
    <div class="header-icons">
        <a href="#" class="header-wrapicon1 dis-block">
            <img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
        </a>

        <span class="linedivide1"></span>

        <div class="header-wrapicon2">
            <img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
               
                    <span class="header-icons-noti"><span id="nbreProduit"><?= $panier->nbreProduit(); ?></span> </span>
                


                    <!-- Header cart noti -->
                    <div class="header-cart header-dropdown">
                        <?php
                        $idS = array_keys($_SESSION['panier']);
                        if(empty($idS)){
                            $produits = array();
                        }else{
                            $produits = $config->query('SELECT * FROM produits WHERE id IN ('.implode(',',$idS).') ');
                        }
                        
                       
                        ?>
                        <?php foreach ($produits as $produit): ?>
                        <ul class="header-cart-wrapitem">

                            <li class="header-cart-item">
                                <div class="header-cart-item-img">
                                    <img src="images/item-cart-01.jpg" alt="IMG">
                                </div>

                                <div class="header-cart-item-txt">
                                    <a href="#" class="header-cart-item-name">
                                        <?=  $produit->nom; ?>
                                    </a>

                                    <span class="header-cart-item-info">
                                            1 x <?= number_format($produit->prix,2,',','')  ?> dt
                                        </span>
                                </div>
                            </li>

                            
                        </ul>
                        <?php endforeach; ?> 
                        

                        <div class="header-cart-total">
                          <span id="total">total = <?= number_format($panier->total(),2,',','')  ?> dt</span> 
                        </div>
                        

                        

                        <div class="header-cart-buttons">
                            <div class="header-cart-wrapbtn">
                                <!-- Button -->
                                <a href="cart.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                    View Cart
                                </a>
                            </div>

                            <div class="header-cart-wrapbtn">
                                <!-- Button -->
                                <a href="check.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                    Check Out
                                </a>
                            </div>
                        </div>
                       
                        
                    </div>
                
        </div>
    </div>
</div>

<!-- top noti -->


<!-- Header -->
<header class="header2">
    <!-- Header desktop -->
    <div class="container-menu-header-v2 p-t-26">
        <div class="topbar2">
            <div class="topbar-social">
                <a href="#" class="topbar-social-item fa fa-facebook"></a>
                <a href="#" class="topbar-social-item fa fa-instagram"></a>
                <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
                <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
                <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
            </div>

            <!-- Logo2 -->
            <a href="index.php" class="logo2">
                <img src="images/icons/logo.png" alt="IMG-LOGO">
            </a>

            <div class="topbar-child2">
					<span class="topbar-email">
						<?php
                            if($user != null)
                            {
                                echo $user["email"];
                            }
                        ?>
					</span>

                <div class="topbar-language rs1-select2">
                    <select class="selection-1" name="time">
                        <option>USD</option>
                        <option>EUR</option>
                        <option>DNT</option>
                    </select>
                </div>

                <!--  -->
                <?php

                    if ($user)
                    {
                        echo'
                            <a href="profile.php" class="header-wrapicon1 dis-block m-l-30">
                                <img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
                            </a>
                        ';
                    }
                    else{
                        echo '
                            <a href="login.php" class="header-wrapicon1 dis-block m-l-30">
                                <img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
                            </a>
                        ';
                    }
                ?>


                <span class="linedivide1"></span>
                <div class="header-wrapicon2 m-r-13">
                    <img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">


                    <span class="header-icons-noti"><span id="nbreProduit"><?= $panier->nbreProduit(); ?></span> </span>
                    

                    <!-- Header cart noti -->
                    <div class="header-cart header-dropdown">
                        <?php
                        $idS = array_keys($_SESSION['panier']);
                        if(empty($idS)){
                            $produits = array();
                        }else{
                            $produits = $config->query('SELECT * FROM produits WHERE id IN ('.implode(',',$idS).') ');
                        }
                        
                       
                        ?>
                        <?php foreach ($produits as $produit): ?>
                        <ul class="header-cart-wrapitem">

                            <li class="header-cart-item">
                                <div class="header-cart-item-img">
                                    <img src="images/item-cart-01.jpg" alt="IMG">
                                </div>

                                <div class="header-cart-item-txt">
                                    <a href="#" class="header-cart-item-name">
                                        <?=  $produit->nom; ?>
                                    </a>

                                    <span class="header-cart-item-info">
											1 x <?= number_format($produit->prix,2,',','')  ?> dt
										</span>
                                </div>
                            </li>                            
                        </ul>
                        <?php endforeach; ?> 
                        

                        <div class="header-cart-total">
                          <span id="total">total = <?= number_format($panier->total(),2,',','')  ?> dt</span> 
                        </div>
                        

                        

                        <div class="header-cart-buttons">
                            <div class="header-cart-wrapbtn">
                                <!-- Button -->
                                <a href="cart.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                    View Cart
                                </a>
                            </div>

                            <div class="header-cart-wrapbtn">
                                <!-- Button -->
                                <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                    Check Out
                                </a>
                            </div>
                        </div>
                       
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="wrap_header">

            <!-- Menu -->
            <div class="wrap_menu">
                <nav class="menu">
                    <ul class="main_menu">
                        <li>
                            <a href="index.php">Home</a>

                        </li>

                        <li>
                            <a href="product.php">Shop</a>
                            <ul class="sub_menu">
                                <li><a href="">gateau</a></li>
                                <li><a href="">Glace</a></li>
                                <li><a href="">vienoiserie</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="cart.php">Features</a>
                        </li>

                        <li>
                            <a href="blog.php">Blog</a>
                        </li>

                        <li>
                            <a href="about.php">About</a>
                        </li>

                        <li>
                            <a href="contact.php">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <!-- Header Icon -->
            <div class="header-icons">

            </div>
        </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap_header_mobile">
        <!-- Logo moblie -->
        <a href="index.php" class="logo-mobile">
            <img src="images/icons/logo.png" alt="IMG-LOGO">
        </a>

        <!-- Button show menu -->
        <div class="btn-show-menu">
            <!-- Header Icon mobile -->
            <div class="header-icons-mobile">
                <a href="#" class="header-wrapicon1 dis-block">
                    <img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
                </a>

                <span class="linedivide2"></span>

                <div class="header-wrapicon2">
                    <img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                    <?php
                        $idS = array_keys($_SESSION['panier']);
                        if(empty($idS)){
                            $produits = array();
                        }else{
                            $produits = $config->query('SELECT * FROM produits WHERE id IN ('.implode(',',$idS).') ');
                        }
                        
                        foreach ($produits as $produit):
                ?>
                    <span class="header-icons-noti"> <span id="nbreProduit"><?= $panier->nbreProduit(); ?></span> </span>

                     <?php endforeach; ?>

                    <!-- Header cart noti -->
                    <div class="header-cart header-dropdown">
                         <div class="header-wrapicon2">
                    <img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                    <?php
                        $idS = array_keys($_SESSION['panier']);
                        if(empty($idS)){
                            $produits = array();
                        }else{
                            $produits = $config->query('SELECT * FROM produits WHERE id IN ('.implode(',',$idS).') ');
                        }
                        
                        foreach ($produits as $produit):
                    ?>
                        <ul class="header-cart-wrapitem">
                            <li class="header-cart-item">
                                <div class="header-cart-item-img">
                                    <img src="images/item-cart-01.jpg" alt="IMG">
                                </div>

                                <div class="header-cart-item-txt">
                                    <a href="#" class="header-cart-item-name">
                                       <?=  $produit->nom; ?>
                                    </a>

                                    <span class="header-cart-item-info">
											1 x <?= number_format($produit->prix,2,',','')  ?> dt
										</span>
                                </div>
                            </li>

                        </ul>
                        <?php endforeach; ?>

                        <div class="header-cart-total">
                           <span id="total">total = <?= number_format($panier->total(),2,',','')  ?> dt</span> 
                        </div>
                        

                        <div class="header-cart-buttons">
                            <div class="header-cart-wrapbtn">
                                <!-- Button -->
                                <a href="cart.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                    View Cart
                                </a>
                            </div>

                            <div class="header-cart-wrapbtn">
                                <!-- Button -->
                                <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                    Check Out
                                </a>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>

            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
            </div>
        </div>
    </div>

    <!-- Menu Mobile -->
    <div class="wrap-side-menu" >
        <nav class="side-menu">
            <ul class="main-menu">
                <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
							Free shipping for standard order over $100
						</span>
                </li>

                <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                    <div class="topbar-child2-mobile">
							<span class="topbar-email">
								fashe@example.com
							</span>

                        <div class="topbar-language rs1-select2">
                            <select class="selection-1" name="time">
                                <option>USD</option>
                                <option>EUR</option>
                            </select>
                        </div>
                    </div>
                </li>

                <li class="item-topbar-mobile p-l-10">
                    <div class="topbar-social-mobile">
                        <a href="#" class="topbar-social-item fa fa-facebook"></a>
                        <a href="#" class="topbar-social-item fa fa-instagram"></a>
                        <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
                        <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
                        <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
                    </div>
                </li>

                <li class="item-menu-mobile">
                    <a href="index.php">Home</a>

                    <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
                </li>

                <li class="item-menu-mobile">
                    <a href="home.phpct.php">Shop</a>
                </li>

                <li class="item-menu-mobile">
                    <a href="home.phpct.php">Sale</a>
                </li>

                <li class="item-menu-mobile">
                    <a href="cart.php">Features</a>
                </li>

                <li class="item-menu-mobile">
                    <a href="blog.php">Blog</a>
                </li>

                <li class="item-menu-mobile">
                    <a href="about.php">About</a>
                </li>

                <li class="item-menu-mobile">
                    <a href="contact.php">Contact</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
