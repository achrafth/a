<?PHP
include "../cores/livraisonC.php";
$livraison=new LivraisonC();

if (isset($_POST["nom"])){
    $livraison->supprimerLivraison($_POST["nom"]);
header('Location: check.php');
}

?>