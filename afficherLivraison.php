<?PHP
include "../core/livraisonC.php";
$livraison1C=new LivraisonC();
$listeLivraisons=$livraison1C->afficherLivraisons();

//var_dump($listeEmployes->fetchAll());
?>
<h2>Liste des abonn�es au livraison</h2>
<table border="1">
<tr>
<td>Id</td>
<td>Nom</td>
<td>Email</td>
<td>Numero</td>
<td>Pays</td>
<td>Adresse</td>
<td>Devise</td>
<td>Paiement</td>
<td>modifier</td>
<td>supprimer</td>
</tr>

<?PHP
foreach($listeLivraisons as $row){
	?>
	<tr>
	<td><?PHP echo $row['id']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['email']; ?></td>
	<td><?PHP echo $row['numero']; ?></td>
	<td><?PHP echo $row['pays']; ?></td>
	<td><?PHP echo $row['adresse']; ?></td>
	<td><?PHP echo $row['devise']; ?></td>
	<td><?PHP echo $row['paiement']; ?></td>
	<td><a href="modifierLivraison.php?reference=<?PHP echo $row['id']; ?>">
	Modifier</a></td>
	<td><form method="POST" action="supprimerLivraison.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	</form>
	</td>
	</tr>
	<?PHP
}
?>
</table>


