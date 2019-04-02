<HTML>
<head>

		  <meta charset="UTF-8">
  <title>Modifier Livreur</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
  
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>

      <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?PHP
include "../entities/livreur.php";
include "../cores/livreurC.php";
if (isset($_GET['nom'])){
	$livreurC=new LivreurC();
    $result=$livreurC->recupererLivreur($_GET['nom']);
	foreach($result as $row){
		$nom=$row['nom'];
		$prenom=$row['prenom'];
		$date=$row['date'];
		$debutc=$row['debutc'];
		$finc=$row['finc'];
		$dispo=$row['dispo'];
		$codel=$row['codel'];
?>
<form method="POST" class="cont">
	<div class="demo">
<table class="login" >
<caption>Modifier livreur</caption>
<tr>
<td>nom</td>
<td><input type="text" name="nom" value="<?PHP echo $_GET['nom'] ?>" readonly style="color:red;"></td>
</tr>
<tr>
<td>preNom</td>
<td><input type="text" name="prenom" value="<?PHP echo $prenom ?>"></td>
</tr>
<tr>
<td>date de naissance</td>
<td><input type="date" name="date" value="<?PHP echo $date ?>"></td>
</tr>
<tr>
<td>debut contrat</td>
<td><input type="date" name="debutc" value="<?PHP echo $debutc ?>"></td>
</tr>
<tr>
	<td>fin contrat</td>
<td><input type="date" name="finc" value="<?PHP echo $finc ?>"></td>
</tr>
<tr>
	<td>dispo</td>
<td>

<div class="col-sm-9">
                                                           <select name="dispo" value="<?PHP echo $dispo ?>">
                            <option class="sizefull s-text7 p-l-22 p-r-22" type="text" name="dispo"> occupé</option>
                            <option class="sizefull s-text7 p-l-22 p-r-22" type="text"name="dispo" >non occupé</option>
                            

                        </select>
                                                        </div>





</td>
</tr>
<tr>
	<tr>
	<td>code livreur</td>
<td><input type="text" name="codel" value="<?PHP echo $codel ?>"></td>
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
	$livreur=new Livreur($_POST['nom'],$_POST['prenom'],$_POST['date'],$_POST['debutc'],$_POST['finc'],$_POST['dispo'],$_POST['codel']);
	$livreurC->modifierLivreur($livreur,$_POST['nom']);
	echo $_POST['nom_ini'];
	header('Location: adminhh.php');
}
?>
</body>
</HTMl>