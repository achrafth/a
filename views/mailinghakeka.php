<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

		<?php
											if(isset($_POST['submit'])){
											$to='achraf.thamricc@gmail.com';
											$sujet='Livraison';
											$texte=$_POST['texte'];
											$header='From :  test@gmail.com';
											mail($to,$sujet,$texte);
									     	}

									     	header('Location: adminHome.php');

												?>
													
</form>
</body>
</html>