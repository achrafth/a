<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

		<?php
											if(isset($_POST['submit'])){
											$to='Ach.Thamri@gmail.com';
											$sujet=$_POST['sujet'];
											$texte=$_POST['texte'];
											mail($to,$sujet,$texte);
									     	}

									     	header('Location: adminHome.php');

												?>


													
</form>
</body>
</html>