<?PHP
class Paiement{
	private $id;
	private $nom;
	private $prenom;
	private $mode_de_paiement;
	private $prix_de_livraison;
	private $net_a_payer;
	private $prix_recu;

	function __construct($id,$nom,$prenom,$mode_de_paiement,$prix_de_livraison,$net_a_payer,$prix_recu){
		$this->id=$id;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->mode_de_paiement=$mode_de_paiement;
		$this->prix_de_livraison =$prix_de_livraison;
		$this->net_a_payer=$net_a_payer;
		$this->prix_recu=$prix_recu;
	}
	
	function getId(){
		return $this->id;
	}
	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}
	function getMode_de_paiement(){
		return $this->mode_de_paiement;
	}
	function getPrix_de_livraison(){
		return $this->prix_de_livraison;
	}
    function getNet_a_payer(){
		return $this->net_a_payer;
	}
	function getPrix_recu(){
		return $this->prix_recu;
	}
	function setId($id){
		$this->id=$id;
	}
	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom=$prenom;
	}
	function setMode_de_paiement($mode_de_paiement){
		$this->mode_de_paiement=$mode_de_paiement;
	}
	function setPrix_de_livraison($prix_de_livraison){
		$this->prix_de_livraison=$prix_de_livraison;
	}
	function setNet_a_payer($net_a_payer){
		$this->net_a_payer=$net_a_payer;
	}
	function setPrix_recu($prix_recu){
		$this->prix_recu=$prix_recu;
	}
}

?>