<?php
require_once '../cores/UserC.php';
require '../entities/panier.class.php';
$config = new config();
$panier = new panier($config);

?>

<?php
$json = array('error' => true);
if (isset($_GET['id'])) {
	$produit = $config->query('SELECT id FROM produits WHERE id=:id', array('id' => $_GET['id']));
	if (empty($produit)) {
		$json['message'] = "ce produit n'existe pas";
	}
	$panier->add($produit[0]->id);
	$json['error'] = false;
	$json['total'] = $panier->total();
	$json['nbreProduit'] = $panier->nbreProduit();
    $json['message'] = 'produit ajouter ';
}else{
	$json['message'] = "vous n'avez rien ajouter ";
}
echo json_encode($json);