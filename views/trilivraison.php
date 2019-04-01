<?PHP
include "../cores/livraisonC.php";
$livraison=new LivraisonC();

if (isset($_POST["nom"])){
    $livraison->afficherLivraisons2($_POST["nom"]);
header('Location: adminliv.php');
}

?>