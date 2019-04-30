<html>
<head>
<meta charset="utf8">
</head>
<body>
<?php 
include 'User.php';
//$log="admin";
//$pwd="admin";
/*$servername="localhost";
	$user_name="root";
	$user_pass="";
	$dbname="dblogin";
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", 
	$user_name, $user_pass);
	$req="select * from users where user_name='$login' && user_pass='$pwd'";
	$rep=$conn->query($req);
	$res=$rep->fetchAll();
	*/
$c=new Database();
$conn=$c->connexion();
$user=new User($_POST['user_name'],$_POST['user_pass'],$conn);
$u=$user->Logedin($conn,$_POST['user_name'],$_POST['user_pass']);

	//var_dump($u);
//$logR=$_POST['login'];
//$pwdR=$_POST['pwd'];
$vide=false;
if (!empty($_POST['user_name']) && !empty($_POST['user_pass'])){
	
	foreach($u as $t){
		$vide=true;
	if ($t['user_name']==$_POST['user_name'] && $t['user_pass']==$_POST['user_pass'] && $t['role']=="Client"){
		
		session_start();
		$_SESSION['user_name']=$_POST['user_name'];
		$_SESSION['user_pass']=$_POST['user_pass'];
		
		header("location:check.php");}
	if ($t['user_name']==$_POST['user_name'] && $t['user_pass']==$_POST['user_pass'] && $t['role']=="Admin"){
		
		session_start();
		$_SESSION['user_name']=$_POST['user_name'];
		$_SESSION['user_pass']=$_POST['user_pass'];
		
		header("location:adminHome.php");}
	
}
if ($vide==false) { 
         // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
         echo '<body onLoad="alert(\'Membre non reconnu...\')">'; 
         // puis on le redirige vers la page d'accueil
         echo '<meta http-equiv="refresh" content="0;URL=index.php">'; 
      } 
}	  
 
else { 
      echo '<meta http-equiv="refresh" content="0;URL=index.php">'; 
     ?>  <?php 
}  

?> 
</body>
</html>