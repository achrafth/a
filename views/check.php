<?php
    //session_start();
 
include "../entities/livraison.php";
include "../cores/livraisonC.php";

$livraisonC=new livraisonC();

$list=$livraisonC->afficherLivraisons();
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Livraison</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
	<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">
				<div class="topbar-social">
					<a href="#" class="topbar-social-item fa fa-facebook"></a>
					<a href="#" class="topbar-social-item fa fa-instagram"></a>
					<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
					<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
					<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
				</div>

				<span class="topbar-child1">
					Free shipping for standard order over $100
				</span>

				<div class="topbar-child2">
					<span class="topbar-email">
						fashe@example.com
					</span>

					<div class="topbar-language rs1-select2">
						<select class="selection-1" name="time">
							<option>USD</option>
							<option>EUR</option>
							<option>DNT</option>
						</select>
					</div>
				</div>
			</div>

			<div class="wrap_header">
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
								<a href="check.php">Livraison</a>
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
						<span class="header-icons-noti">0</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-01.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											White Shirt With Pleat Detail Back
										</a>

										<span class="header-cart-item-info">
											1 x $19.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-02.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Converse All Star Hi Black Canvas
										</a>

										<span class="header-cart-item-info">
											1 x $39.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-03.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Nixon Porter Leather Watch In Tan
										</a>

										<span class="header-cart-item-info">
											1 x $17.00
										</span>
									</div>
								</li>
							</ul>

							<div class="header-cart-total">
								Total: $75.00
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
						<span class="header-icons-noti">0</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-01.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											White Shirt With Pleat Detail Back
										</a>

										<span class="header-cart-item-info">
											1 x $19.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-02.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Converse All Star Hi Black Canvas
										</a>

										<span class="header-cart-item-info">
											1 x $39.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-03.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Nixon Porter Leather Watch In Tan
										</a>

										<span class="header-cart-item-info">
											1 x $17.00
										</span>
									</div>
								</li>
							</ul>

							<div class="header-cart-total">
								Total: $75.00
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
						<ul class="sub-menu">
							<li><a href="index.php">Homepage V1</a></li>
							<li><a href="home-02.php">Homepage V2</a></li>
							<li><a href="home-03.php">Homepage V3</a></li>
						</ul>
						<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
					</li>

					<li class="item-menu-mobile">
						<a href="product.php">Shop</a>
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
						<a href="check.php">livraison</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>

	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/1.jpg);">
		<h2 class="l-text2 t-center" style="color:black;">
			livraison
		</h2>
	</section>

	<!-- content page -->
	<section class="bgwhite p-t-66 p-b-60">
		<div class="container">
			<div class="row">
				

				<div class="col-md-6 p-b-30">
					<form class="leave-comment" method="POST" action="ajoutlivraison.php" name="f">
						<h4 class="m-text26 p-b-36 p-t-15">
							Send us your billing details
						</h4>

							<label class="control-label">Nom *</label>
						<div class="bo4 of-hidden size15 m-b-20">

							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="nom" placeholder="nom" required onblur="verifnom(this)">
						</div>
							<label class="control-label">Prenom *</label>
						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="prenom" placeholder="Prebom" required>
						</div>
						<label class="control-label">adresse *</label>
						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="adresse" placeholder="Adresse" required>
						</div>
							<label class="control-label">Region *</label>
						<div class="bo4 of-hidden size15 m-b-20">

							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="region" placeholder="Region" required>
						</div>
							<label class="control-label">Ville *</label>
				
						<!--div class="bo4 of-hidden size15 m-b-20"-->
							<!--input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="ville" placeholder="Ville" required-->
							<select name="ville" class="bo4 of-hidden size15 m-b-20">
							<option class="sizefull s-text7 p-l-22 p-r-22" type="text" name="ville" > Tunis</option>
    						<option class="sizefull s-text7 p-l-22 p-r-22" type="text" name="ville" >Sousse</option>
    						<option class="sizefull s-text7 p-l-22 p-r-22" type="text" name="ville">Sfax</option>
    						<option class="sizefull s-text7 p-l-22 p-r-22" type="text" name="ville">Bizerte</option>
    					</select></br></br>
    			

						<!--/div-->
						<label class="control-label">Code Postal *</label>
						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="number" name="codepostal" placeholder="Code Postal" required>
						</div>
							<label class="control-label">Telephone *</label>
						<div class="bo4 of-hidden size15 m-b-20">

							<input class="sizefull s-text7 p-l-22 p-r-22" type="number" name="telef" placeholder="Telephone" required onblur="veriftelephone(this)">
						</div>
							<label class="control-label">Email *</label>
						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="email" placeholder="Email" required onblur="verifMail(this)">
						</div>
						<label class="control-label">Password *</label>
						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="password" name="password" placeholder="Password" required onblur="verifpass(this)">
						</div>

						<div class="w-size25">
							<!-- Button -->
							<button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
								Ajouter
							</button>
						</div>
					</form>
				</div>

				<table class="table table-bordered table-responsive-md table-striped text-center mb-0 text-nowrap">
												<tabody><tr>
													<th class="text-center" >Nom</th>
													<th class="text-center" >Prenom</th>
													<th class="text-center">Adresse</th>
													<th class="text-center">Region</th>
													<th class="text-center">Ville</th>
													<th class="text-center">Code Postal</th>
													<th class="text-center">Telephone</th>
													<th class="text-center">email</th>
													<th class="text-center">password</th-->
													<th class="text-center">Supprimer</th>
														<th class="text-center">Modifier</th>

												</tr>
												<?php 
													foreach( $list as $row )
														{ ?>
													<tr>	
													<td class="pt-3-half" contenteditable="true"> <?php echo $row['nom']; ?> </td>
													<td class="pt-3-half" contenteditable="true"> <?php echo $row['prenom']; ?> </td>
													<td class="pt-3-half" contenteditable="true"> <?php echo $row['adresse']; ?> </td>
													<td class="pt-3-half" contenteditable="true"> <?php echo $row['region']; ?> </td>
													<td class="pt-3-half" contenteditable="true"> <?php echo $row['ville']; ?> </td>
													<td class="pt-3-half" contenteditable="true"> <?php echo $row['codepostal']; ?> </td>
														<td class="pt-3-half" contenteditable="true"> <?php echo $row['telef']; ?> </td>
														<td class="pt-3-half" contenteditable="true"> <?php echo $row['email']; ?> </td>
														<td class="pt-3-half" contenteditable="true"> <?php echo $row['password']; ?> </td>
												
																            <!-- bouton supprimer-->

													<td><form method="POST" action="supprimerlivraison.php">
														<span ><input  type="submit" class="btn btn-danger btn-rounded btn-sm my-0" name="Supprimer" value="Supprimer">
															<input type="hidden" value="<?php echo $row['nom']; ?>" name="nom"></span>
														
													</form>
													</td>
																			                        <!-- bouton modifie



																			                        	r-->


													</td>
												 <td><a href="modifierlivraison.php?nom=<?php echo $row['nom']; ?>">
                                                        <span ><input  type="submit"  class="btn btn-warning btn-rounded btn-sm my-0" name="Modifier" value="Modifier" >
                                                        </span></a>
                                                        
                                                    
                                                    </td>
												</tr>
												<?php
											}?>
											</tbody>
										

									</table>
<div>
</br></br><span> <a href="adminHome.php"><input  type="submit" class="btn btn-warning btn-rounded btn-sm my-0" name="" value="Go Back End" ></a>
														</span>

</div>
				
							
			</div>
		</div>
	</section>


	<!-- Footer -->
	<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
		<div class="flex-w p-b-90">
			<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					GET IN TOUCH
				</h4>

				<div>
					<p class="s-text7 w-size27">
						Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
					</p>

					<div class="flex-m p-t-30">
						<a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
					</div>
				</div>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Categories
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Men
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Women
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Dresses
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Sunglasses
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Links
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Search
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							About Us
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Contact Us
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Returns
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Help
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Track Order
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Returns
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Shipping
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							FAQs
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					Newsletter
				</h4>

				<form>
					<div class="effect1 w-size9">
						<input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
						<span class="effect1-line"></span>
					</div>

					<div class="w-size2 p-t-20">
						<!-- Button -->
						<button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
							Subscribe
						</button>
					</div>

				</form>
			</div>
		</div>

		<div class="t-center p-l-15 p-r-15">
			<a href="#">
				<img class="h-size2" src="images/icons/paypal.png" alt="IMG-PAYPAL">
			</a>

			<a href="#">
				<img class="h-size2" src="images/icons/visa.png" alt="IMG-VISA">
			</a>

			<a href="#">
				<img class="h-size2" src="images/icons/mastercard.png" alt="IMG-MASTERCARD">
			</a>

			<a href="#">
				<img class="h-size2" src="images/icons/express.png" alt="IMG-EXPRESS">
			</a>

			<a href="#">
				<img class="h-size2" src="images/icons/discover.png" alt="IMG-DISCOVER">
			</a>

			<div class="t-center s-text8 p-t-20">
				Copyright © 2018 All rights reserved. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
			</div>
		</div>
	</footer>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>



<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->  
<script src="js/livraison.js"> </script>
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
<!--===============================================================================================-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
