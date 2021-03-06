
<?php


class config
{   
    public static function getConnexion()
    {
        //le nom de votre serveur
        $servername = "localhost";
        //le nom de l'utilisateur
        $username ="root";
        //le nom de base de données
        $dbname= "achraf";
        //mtp pour votre base de données
        $password ="";
        try{
            //établir une connection avec la base de donnée
            //il suffit de faire une instance de classe PDO
            $conf = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
            return $conf;
        }
        //Tester la présence d'erreurs
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
     public function query($sql, $data = array()){
        $bd=self::getConnexion();
        $req = $bd->prepare($sql);
        $req->execute($data);
        return $req->fetchAll(PDO::FETCH_OBJ);
    }
}