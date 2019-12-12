<?PHP
include "../config.php";
class PaiementC {

	function ajouterPaiement($paiement){
		$sql="insert into paiement (id,nom,prenom,mode_de_paiement,prix_de_livraison,net_a_payer,prix_recu) values (:id, :nom,:prenom,:mode_de_paiement,:prix_de_livraison,:net_a_payer,:prix_recu)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);//prépare la requete sql à etre exécuté par
		
        $id=$paiement->getId();
        $nom=$paiement->getNom();
        $prenom=$paiement->getPrenom();
        $mode_de_paiement=$paiement->getMode_de_paiement();
		$prix_de_livraison=$paiement->getPrix_de_livraison();
		$net_a_payer=$paiement->getNet_a_payer();
		$prix_recu=$paiement->getPrix_recu();
		$req->bindValue(':id',$id);//bind value associe une valeur à un parametre
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':mode_de_paiement',$mode_de_paiement);
		$req->bindValue(':prix_de_livraison',$prix_de_livraison);
		$req->bindValue(':net_a_payer',$net_a_payer);
		$req->bindValue(':prix_recu',$prix_recu);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherPaiements(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From paiement";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerPaiement($id){
		$sql="DELETE FROM paiement where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierPaiement($paiement,$id){
		$sql="UPDATE employe SET id=:idd, nom=:nom,prenom=:prenom,mode_de_paiement=:mode_de_paiement,prix_de_livraison=:prix_de_livraison,net_a_payer=:net_a_payer,prix_recu=:prix_recu WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idd=$paiement->getId();
        $nom=$paiement->getNom();
        $prenom=$paiement->getPrenom();
        $mode_de_paiement=$paiement->getMode_de_paiement();
		$prix_de_livraison=$paiement->getPrix_de_livraison();
		$net_a_payer=$paiement->getNet_a_payer();
		$prix_recu=$paiement->getPrix_recu();
		$datas = array(':idd'=>$idd, ':id'=>$id, ':nom'=>$nom,':prenom'=>$prenom,':mode_de_paiement'=>$mode_de_paiement,':net_a_payer'=>$net_a_payer,':prix_recu'=>$prix_recu);
		$req->bindValue(':idd',$idd);
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':mode_de_paiement',$mode_de_paiement);
		$req->bindValue(':prix_de_livraison',$prix_de_livraison);
		$req->bindValue(':net_a_payer',$net_a_payer);
		$req->bindValue(':prix_recu',$prix_recu);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererPaiement($id){
		$sql="SELECT * from paiement where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeEmployes($id){
		$sql="SELECT * from paiement where tarifHoraire=$id";
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