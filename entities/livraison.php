<?PHP
class Livraison{
	private $numliv;
	private $nom;
	private $prenom;
	private $adresse;
	private $region;
	private $ville;
	private $codepostal;
	private $telef;
	private $etat;
	private $email;
	private $password;
	private $dateliv;
	function __construct($nom,$prenom,$adresse,$region,$ville,$codepostal,$telef,$email,$password){
		$this->numliv=$numliv;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->adresse=$adresse;
		$this->region=$region;
		$this->ville=$ville;
		$this->codepostal=$codepostal;
		$this->telef=$telef;
		$this->etat=$etat;
		$this->email=$email;
		$this->password=$password;
		$this->dateliv=$dateliv;
	}
	
	function getNumliv(){
		return $this->numliv;
	}
	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}
	function getAdresse(){
		return $this->adresse;
	}
	function getRegion(){
		return $this->region;
	}
	function getVille(){
		return $this->ville;
	}

function getCodepostal(){
		return $this->codepostal;
	}
	function getTelef(){
		return $this->telef;
	}
	function getEtat(){
		return $this->etat;
	}
	function getEmail(){
		return $this->email;
	}
	function getPassword(){
		return $this->password;
	}
function getDateliv(){
		return $this->dateliv;
	}

	function setNumliv($numliv){
		$this->numliv=$numliv;
	}
	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom;
	}
	function setAdresse($adresse){
		$this->adresse=$adresse;
	}
	function setVille($ville){
		$this->ville=$ville;
	}
	function setRegion($region){
		$this->region=$region;
	}function setCodepostal($codepostal){
		$this->codepostal=$codepostal;
	}
	function setTelef($telef){
		$this->telef=$telef;
	}
	function setEtat($etat){
		$this->etat=$etat;
	}
	function setEmail($email){
		$this->email=$email;
	}function setPassword($password){
		$this->password=$password;
	}
	function setDateliv($dateliv){
		$this->dateliv=$dateliv;
	}
}

?>																									