<?PHP
class Livreur{
	private $nom;
	private $prenom;
	private $date;
	private $debutc;
	private $finc;
	private $dispo;
	private $codel;
	function __construct($nom,$prenom,$date,$debutc,$finc,$dispo,$codel){
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->date=$date;
		$this->debutc=$debutc;
		$this->finc=$finc;
		$this->dispo=$dispo;
		$this->codel=$codel;
	}
	
	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}
	function getDate(){
		return $this->date;
	}
	function getDebutc(){
		return $this->debutc;
	}
	function getFinc(){
		return $this->finc;
	}

function getDispo(){
		return $this->dispo;
	}
	function getCodel(){
		return $this->codel;
	}

	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom;
	}
	function setDate($date){
		$this->date=$date;
	}
	function setDebutc($debutc){
		$this->debutc=$debutc;
	}
	function setFinc($finc){
		$this->finc=$finc;
	}function setDispo($dispo){
		$this->dispo=$dispo;
	}
	function setCodel($codel){
		$this->codel=$codel;
	}
}

?>																									