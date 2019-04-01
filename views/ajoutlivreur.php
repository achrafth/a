<?php
include "../cores/livreurC.php";
include "../entities/livreur.php";
if(isset($_POST['nom'])  && isset($_POST['prenom']) && isset($_POST['date']) && isset($_POST['debutc']) && isset($_POST['finc']) && isset($_POST['dispo']) && isset($_POST['codel']))
       {    
   $livr1=new Livreur($_POST['nom'],$_POST['prenom'],$_POST['date'],$_POST['debutc'],$_POST['finc'],$_POST['dispo'],$_POST['codel']);
   

  $livr1c=new LivreurC();
  $livr1c->ajouterLivreur($livr1);
header('Location: check1.php');
}
else {
  echo "non";
}
   
?>
