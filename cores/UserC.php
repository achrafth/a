<?php

include_once ('../config.php');
include_once ('../entities/User.php');
    class UserC
    {

        public function __construct()
        {
            //1- creer une instance de la classe config
            $this->db=new config();
            //2-faire la cnx avec la base de donnĂ©e
            $this->db=$this->db->getCnx();
        }

        public function creerUser(User $user)
        {

            $query = "INSERT INTO `user`(`cin`, `username`, `password`, `role`, `email`, `numero`, `nom`, `prenom`, 
                                        `date_nais`, `region`, `ville`, `codePostal`,`token`, `enabled`, `sexe`) 
                                  VALUES (:cin,:usn,:pwd, :role, :email, :num , :nom , :prenom, :dateN, :region,
                                        :ville, :code, :token, :enabled, :sexe)";
            
            try {
                $req=$this->db->prepare($query);


                $req->bindValue(':cin',$user->getCin());
                $req->bindValue(':usn',$user->getUsername());
                $req->bindValue(':pwd',$user->getPassword());
                $req->bindValue(':role',$user->getRole());
                $req->bindValue(':email',$user->getEmail());
                $req->bindValue(':num',$user->getNumero());
                $req->bindValue(':nom',$user->getNom());
                $req->bindValue(':prenom',$user->getPrenom());
                $req->bindValue(':dateN',$user->getDateNaissance());
                $req->bindValue(':region',$user->getRegion());
                $req->bindValue(':ville',$user->getVille());
                $req->bindValue(':code',$user->getCodePostal());
                $req->bindValue(':token',$user->getToken());
                $req->bindValue(':enabled',0);
                $req->bindValue(':sexe',$user->getSexe());

                $req->execute();


            }catch(Exception $e) {
                echo 'Message: ' .$e->getMessage();
              }   
        }

        public function showUser()
        {

        }

        public function generateToken(){
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < 20; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }

        public function verifierUniqueCin(User $user)
        {
            $query = "SELECT * FROM user where cin = :cin";
            $req=$this->db->prepare($query);

            $req->execute(['cin' => $user->getCin()]);
            return $req->fetch();
        }

        public function verifierUniqueEmail(User $user)
        {
            $query = "SELECT * FROM user where email= :email";
            $req=$this->db->prepare($query);

            $req->execute(['email' => $user->getEmail()]);
            return $req->fetch();
        }

        public function verifierUniqueUsername(User $user)
        {
            $query = "SELECT * FROM user where username= :usn";
            $req=$this->db->prepare($query);

            $req->execute(['usn' => $user->getUsername()]);
            return $req->fetch();
        }

        public function verifierUniqueNumero(User $user)
        {
            $query = "SELECT * FROM user where numero= :num";
            $req=$this->db->prepare($query);

            $req->execute(['num' => $user->getNumero()]);
            return $req->fetch();
        }

        public function activateAccount($cin,$token)
        {
            $query = "SELECt * FROM  user where cin= :cin AND token= :token AND enabled =0";
            $req = $this->db->prepare($query);
            $req->execute(['cin' => $cin , 'token' => $token]);
            $result = $req->fetch();

            if($result)
            {
                $sql = "UPDATE user set enabled= :enabled, token= :token WHERE cin= :cin";
                $req=$this->db->prepare($sql);
                $req->bindValue(':enabled',1);
                $req->bindValue(':token', '');
                $req->bindValue(':cin',$cin);
                $req->execute();
                return true;
            }
            return false;
        }

        public function seConnecter($username, $email, $password)
        {
            $query = "SELECT id,email,nom,prenom,enabled,token,username,role FROM user where email = :email AND password = :pwd  OR username = :username AND password = :pwd2 limit 1";
            $req=$this->db->prepare($query);
            $req->execute(['pwd' => $password, 'pwd2' => $password , 'email' => $email , 'username' => $username]);
            $result =  $req->fetch();

            $array = null;
            if($result)
                $array = array_filter($result);

            var_dump($array);
            if($result)
            {
               if(array_key_exists("enabled" , $array))
                   return $result;

                else
                   return "disabled";
            }
            return "error";
        }

        public function connected($id)
        {
            $sql = "SELECT * FROM user WHERE id=".$id;
            $result = $this->db->query($sql)->fetch();
            return $result;
        }

        public function updateProfile($id, $user)
        {
            $sql = "UPDATE user SET nom= :nom, prenom= :prenom, email= :email , password= :pwd , 
                                    region= :region , ville= :ville, codePostal= :code, numero= :num , photo= :im where id= :id";

            try{
                $req = $this->db->prepare($sql);
                $data = [
                    $user->getNom(),
                    $user->getPrenom(),
                    $user->getEmail(),
                    $user->getPassword(),
                    $user->getRegion(),
                    $user->getVille(),
                    $user->getCodePostal(),

                ];
                $req->bindValue(':nom',$user->getNom());
                $req->bindValue(':prenom',$user->getPrenom());
                $req->bindValue(':email',$user->getEmail());
                $req->bindValue(':pwd',$user->getPassword());
                $req->bindValue(':region', $user->getRegion());
                $req->bindValue(':ville',$user->getVille());
                $req->bindValue(':code',$user->getCodePostal());
                $req->bindValue(':num',$user->getNumero());
                $req->bindValue(':im',$user->getPhoto());
                $req->bindValue(':id',$id);

                return $req->execute();
            }catch (Exception $e)
            {
                var_dump($e->getMessage());
            }

        }

        public function getClients()
        {
            $sql = "SELECT * from user where role='user'";
            $clients =$this->db->query($sql);
            return $clients;
        }

        public function getLivreur()
        {
            $sql = "SELECT * from user where role='livreur'";
            $clients =$this->db->query($sql);
            return $clients;
        }


        public function creerLivreur(User $user)
        {

            $query = "INSERT INTO `user`(`cin`, `password`, `username`, `role`, `email`, `nom`, `prenom`, 
                                        `date_nais`, `region`, `ville`, `codePostal`, `enabled`, `sexe`,
                                        `dateDebutContrat`, `dateFinContrat`, `disponibilite`, `degree`) 
                                  VALUES (:cin , :pwd , :usn , :role , :email , , :nom , :prenom , :dateN , :region ,
                                        :ville , :code , :enabled , :sexe , :deb , :fin , :dis , :degree)";

            $req=$this->db->prepare($query);

            if (!$req) {
                echo "\nPDO::errorInfo():\n";
                print_r($this->db->errorInfo());
            }

            $req->bindValue(':cin',$user->getCin());
            $req->bindValue(':usn',$user->getEmail());
            $req->bindValue(':pwd',$user->getCin());
            $req->bindValue(':role',$user->getRole());
            $req->bindValue(':email',$user->getEmail());
            $req->bindValue(':nom',$user->getNom());
            $req->bindValue(':prenom',$user->getPrenom());
            $req->bindValue(':dateN',$user->getDateNaissance());
            $req->bindValue(':region',$user->getRegion());
            $req->bindValue(':ville',$user->getVille());
            $req->bindValue(':code',$user->getCodePostal());
            $req->bindValue(':enabled',1);
            $req->bindValue(':sexe',$user->getSexe());
            $req->bindValue(':deb',$user->getDateDebutContrat());
            $req->bindValue(':fin',$user->getDateFinContrat());
            $req->bindValue(':dis','1');
            $req->bindValue(':degree',$user->getDegree());

            //$res = $req->execute();


            if($req->execute()){
                print "DONE";
            }else{
                $req->debugDumpParams();
                echo "\nPDO::errorInfo():\n";
                print_r($this->db->errorInfo());
                print "ERROR";
            }

           // var_dump($req);
           // var_dump($res);
        }
    }

?>