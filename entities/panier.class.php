<?php
class panier{
	private $config;

	public function __construct($config){
		if (!isset($_SESSION)) {
			session_start();
		}
		if(!isset($_SESSION['panier'])){
			$_SESSION['panier'] = array();
		}
		$this->config = $config;

		if(isset($_GET['delPanier'])){
			$this->del($_GET['delPanier']);
		}
	}

	public function nbreProduit(){
		return array_sum($_SESSION['panier']);
	}

	public function total(){
		$total = 0;
		$idS = array_keys($_SESSION['panier']);
		if(empty($idS)){
			$produits = array();
		}else{
			$produits = $this->config->query('SELECT id, prix FROM produits WHERE id IN ('.implode(',',$idS).') ');
		}
		foreach ($produits as $produit) {
			$total += $produit->prix * $_SESSION['panier'][$produit->id];
		}
		return $total;
	}

	public function add($id_produit){
		if(isset($_SESSION['panier'][$id_produit])){
			$_SESSION['panier'][$id_produit]++ ;
			
		}else{
			$_SESSION['panier'][$id_produit] = 1;
		}
	}

	public function del($id_produit){
		unset($_SESSION['panier'][$id_produit]);
	}
}