<?PHP
include "../config.php";
class LivreurC {
	function afficherLivreur ($livre){
		echo "Nom: ".$livre->getNom()."<br>";
		echo "Prenom: ".$livre->getPrenom()."<br>";
		echo "date: ".$livre->getDate()."<br>";
		echo "debutc: ".$livre->getDebutc()."<br>";
		echo "finc: ".$livre->getFinc()."<br>";
		echo "dispo: ".$livre->getDispo()."<br>";
		echo "codel: ".$livre->getCodel()."<br>";


	}
		
	
	function ajouterLivreur($livre)
	{
		$sql="insert into livre (nom,prenom,date,debutc,finc,dispo,codel) values (:nom, :prenom,:date,:debutc,:finc,:dispo,:codel)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom=$livre->getNom();
        $prenom=$livre->getPrenom();
        $date=$livre->getDate();
        $debutc=$livre->getDebutc();
        $finc=$livre->getFinc();
        $dispo=$livre->getDispo();
        $codel=$livre->getCodel();
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':date',$date);
		$req->bindValue(':debutc',$debutc);
		$req->bindValue(':finc',$finc);
		$req->bindValue(':dispo',$dispo);
		$req->bindValue(':codel',$codel);
		
            $req->execute();
           
        }
        catch (Exception $e)
        {
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function afficherLivreurs(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From livre ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function afficherLivreurs2(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From livre ORDER BY dispo ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerLivreur($nom){
		$sql="DELETE FROM livre where nom= :nom";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':nom',$nom);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierLivreur($livre,$nom){
		$sql="UPDATE livre SET  nom=:nomm,prenom=:prenom,date=:date,debutc=:debutc,finc=:finc, dispo=:dispo,codel=:codel WHERE nom=:nom";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
	    $req=$db->prepare($sql);
        $nomm=$livre->getNom();
        $prenom=$livre->getPrenom();
        $date=$livre->getDate();
        $debutc=$livre->getDebutc();
        $finc=$livre->getFinc();
        $dispo=$livre->getDispo();
        $codel=$livre->getCodel();
		$datas = array(':nomm'=>$nomm,':nom'=>$nom,':prenom'=>$prenom,
			':date'=>$date, ':debutc'=>$debutc, ':finc'=>$finc,':dispo'=>$dispo,':codel'=>$codel);
		$req->bindValue(':nomm',$nomm);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':date',$date);
		$req->bindValue(':debutc',$debutc);
		$req->bindValue(':finc',$finc);
		$req->bindValue(':dispo',$dispo);
		$req->bindValue(':codel',$codel);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererLivreur($nom){
		$sql="SELECT * from livre where nom=$nom";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeLivreurs($nom){
		$sql="SELECT * from livre where nom=$nom";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>