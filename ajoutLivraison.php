<?PHP
include "../entities/livraison.php";
include "../core/livraisonC.php";

if (isset($_POST['id']) and isset($_POST['nom']) and isset($_POST['email']) and isset($_POST['numero']) and isset($_POST['pays']) and isset($_POST['adresse']) and isset($_POST['devise']) and isset($_POST['paiement'])){
$livraison1=new livraison($_POST['id'],$_POST['nom'],$_POST['email'],$_POST['numero'],$_POST['pays'],$_POST['adresse'],$_POST['devise'],$_POST['paiement']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$livraison1C=new LivraisonC();
$livraison1C->ajouterLivraison($livraison1);

	
}else{
	echo "vérifier les champs";
}
//*/

?>
