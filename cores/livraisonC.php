<?PHP
include "../config.php";
class LivraisonC {
	function afficherLivraison ($livr){
		echo "Numliv: ".$livr->getNumliv()."<br>";
		echo "Nom: ".$livr->getNom()."<br>";
		echo "Prenom: ".$livr->getPrenom()."<br>";
		echo "adresse: ".$livr->getAdresse()."<br>";
		echo "region: ".$livr->getRegion()."<br>";
		echo "ville: ".$livr->getVille()."<br>";
		echo "codepostal: ".$livr->getCodepostal()."<br>";
		echo "telef: ".$livr->getTelef()."<br>";
		echo "etat: ".$livr->getEtat()."<br>";
		echo "email: ".$livr->getEmail()."<br>";
		echo "password: ".$livr->getPassword()."<br>";
		echo "dateliv: ".$livr->getDateliv()."<br>";

	}
		
	
	function ajouterLivraison($livr)
	{
		$sql="insert into livr (nom,prenom,adresse,region,ville,codepostal,telef,email,password) values (:nom, :prenom,:adresse,:region,:ville,:codepostal,:telef,:email,:password)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom=$livr->getNom();
        $prenom=$livr->getPrenom();
        $adresse=$livr->getAdresse();
        $region=$livr->getRegion();
        $ville=$livr->getVille();
        $codepostal=$livr->getCodepostal();
        $telef=$livr->getTelef();
        $email=$livr->getEmail();
        $password=$livr->getPassword();
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':region',$region);
		$req->bindValue(':ville',$ville);
		$req->bindValue(':codepostal',$codepostal);
		$req->bindValue(':telef',$telef);
		$req->bindValue(':email',$email);
		$req->bindValue(':password',$password);
		
            $req->execute();
           
        }
        catch (Exception $e)
        {
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function afficherLivraisons(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From livr ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function triLivraisons(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From livr ORDER BY dateliv ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerLivraison($nom){
		$sql="DELETE FROM livr where nom= :nom";
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
	function modifierLivraison($livr,$nom){
		$sql="UPDATE livr SET  nom=:nomm,prenom=:prenom,adresse=:adresse,region=:region,ville=:ville, codepostal=:codepostal,telef=:telef, email=:email,password=:password WHERE nom=:nom";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
	    $req=$db->prepare($sql);
        $nomm=$livr->getNom();
        $prenom=$livr->getPrenom();
        $adresse=$livr->getAdresse();
        $region=$livr->getRegion();
        $ville=$livr->getVille();
        $codepostal=$livr->getCodepostal();
        $telef=$livr->getTelef();
        $email=$livr->getEmail();
        $password=$livr->getPassword();
		$datas = array(':nomm'=>$nomm,':nom'=>$nom,':prenom'=>$prenom,
			':region'=>$region, ':ville'=>$ville, ':codepostal'=>$codepostal,':telef'=>$telef,':email'=>$email, ':password'=>$password);
		$req->bindValue(':nomm',$nomm);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':region',$region);
		$req->bindValue(':ville',$ville);
		$req->bindValue(':codepostal',$codepostal);
		$req->bindValue(':telef',$telef);
		$req->bindValue(':email',$email);
		$req->bindValue(':password',$password);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererLivraison($nom){
		$sql="SELECT * from livr where nom='".$nom."'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeLivraisons($telef){
		$sql="SELECT * from livr where telef=$telef";
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