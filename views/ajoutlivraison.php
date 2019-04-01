<?php
include "../cores/livraisonC.php";
include "../entities/livraison.php";
if(isset($_POST['nom'])  && isset($_POST['prenom']) && isset($_POST['adresse']) && isset($_POST['region']) && isset($_POST['ville']) && isset($_POST['codepostal']) && isset($_POST['telef']) && isset($_POST['email']) && isset($_POST['password']))
       {    
   $livr1=new Livraison($_POST['nom'],$_POST['prenom'],$_POST['adresse'],$_POST['region'],$_POST['ville'],$_POST['codepostal'],$_POST['telef'],$_POST['email'],$_POST['password']);
   

  $livr1c=new LivraisonC();
  $livr1c->ajouterLivraison($livr1);
header('Location: check.php');
}
else {
  echo "non";
}
   
?>
