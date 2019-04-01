<?php
    //session_start();
    include_once 'header.php';
?>


	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/heading-pages-01.jpg);">
		<h2 class="l-text2 t-center">
			Cart
		</h2>
	</section>

	<!-- Cart -->
	<section class="cart bgwhite p-t-70 p-b-100">
		<div class="container">
			<!-- Cart item -->
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					<table class="table-shopping-cart">
						<tr class="table-head">
							<th class="column-1"></th>
							<th class="column-2">Produits</th>
							<th class="column-3">Prix unitaire</th>
							<th class="column-4 p-l-70">Quantité</th>
							<th class="column-5">Total</th>
							<th class="column-6">action</th>
						</tr>

						<?php
						$idS = array_keys($_SESSION['panier']);
						if(empty($idS)){
							$produits = array();
						}else{
							$produits = $config->query('SELECT * FROM produits WHERE id IN ('.implode(',',$idS).') ');
						}
						
						foreach ($produits as $produit):
						?>

						<tr class="table-row">
							<td class="column-1">
								<div class="cart-img-product b-rad-4 o-f-hidden">
									<img src="images/item-10.jpg" alt="IMG-PRODUCT">
								</div>
							</td>
							<td class="column-2"> <?=  $produit->nom; ?> </td>
							<td class="column-3"><?= number_format($produit->prix,2,',','')  ?> dt</td>
							<td class="column-4">
								<div class="flex-w bo5 of-hidden w-size17">
									<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
									</button>

									<input class="size8 m-text18 t-center num-product" type="number" name="num-product1" value="<?= $_SESSION['panier'][$produit->id]; ?>">

									<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
									</button>
								</div>
							</td>
							
							<td class="column-5"><?= number_format($panier->total(),2,',','')  ?> dt</td>
							<td class="column-6">
								<a href="cart.php?delPanier=<?=  $produit->id; ?>">k</a>
							</td>
						</tr>
                        <?php endforeach; ?>
						
					</table>
				</div>
			</div>

			<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
				<div class="flex-w flex-m w-full-sm">
					<div class="size11 bo4 m-r-10">
						<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="coupon-code" placeholder="Coupon Code">
					</div>

					<div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
						<!-- Button -->
						<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
							Apply coupon
						</button>
					</div>
				</div>

				<div class="size10 trans-0-4 m-t-10 m-b-10">
					<!-- Button -->
					<a href="check.php" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">Check-out</a>
				
				</div>
			</div>
		</div>
	</section>


<?php
    include_once 'footer.php';
?>
	

