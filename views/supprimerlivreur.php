<?PHP
include "../cores/livreurC.php";
$livraison=new LivreurC();

if (isset($_POST["nom"])){
    $livraison->supprimerLivreur($_POST["nom"]);
header('Location: adminhh.php');
}

?>