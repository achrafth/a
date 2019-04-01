<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/livraison.php";
include "../cores/livraisonC.php";
if (isset($_GET['nom'])){
	$livraisonC=new LivraisonC();
    $result=$livraisonC->recupererLivraison($_GET['nom']);
	foreach($result as $row){
		$nom=$row['nom'];
		$prenom=$row['prenom'];
		$adresse=$row['adresse'];
		$region=$row['region'];
		$ville=$row['ville'];
		$codepostal=$row['codepostal'];
		$telef=$row['telef'];
		$email=$row['email'];
		$password=$row['password'];
?>
<form method="POST">
<table>
<caption>Modifier livraison</caption>
<tr>
<td>nom</td>
<td><input type="number" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>preNom</td>
<td><input type="text" name="prenom" value="<?PHP echo $prenom ?>"></td>
</tr>
<tr>
<td>adresse</td>
<td><input type="text" name="adresse" value="<?PHP echo $adresse ?>"></td>
</tr>
<tr>
<td>region</td>
<td><input type="text" name="region" value="<?PHP echo $region ?>"></td>
</tr>
<tr>
	<td>ville</td>
<td><input type="text" name="ville" value="<?PHP echo $ville ?>"></td>
</tr>
<tr>
	<td>codepostal</td>
<td><input type="number" name="codepostal" value="<?PHP echo $codepostal ?>"></td>
</tr>
<tr>
	<tr>
	<td>telef</td>
<td><input type="number" name="telef" value="<?PHP echo $telef ?>"></td>
</tr>
<tr>
<td>email</td>
<td><input type="text" name="email" value="<?PHP echo $email ?>"></td>
</tr>
<tr>
	<td>password</td>
<td><input type="text" name="password" value="<?PHP echo $password ?>"></td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="nom_ini" value="<?PHP echo $_GET['nom'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$livraison=new Livraison($_POST['nom'],$_POST['prenom'],$_POST['adresse'],$_POST['region'],$_POST['ville'],$_POST['codepostal'],$_POST['telef'],$_POST['email'],$_POST['password']);
	$livraisonC->modifierLivraison($livraison,$_POST['nom_ini']);
	echo $_POST['nom_ini'];
	header('Location: check.php');
}
?>
</body>
</HTMl>