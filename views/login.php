<?php
    
    require_once('../cores/UserC.php');
    require_once('../phpmailer/src/PHPMailer.php');
    include_once 'header.php';
    

    if($user['role'] == 'user')
        echo "<script>window.open('index.php','_self')</script>";
    elseif ($user['role'] == "admin" || $user['role'] == "super_admin" || $user['role'] == "livreur" || $user['role'] == "technicien")
    {
        echo "<script>window.open('adminHome.php','_self')</script>";
    }



?>

<style>
    body{
        background-color: #74D0F1;
    }
</style>

<div class="container" style="margin-top : 40px">
    <div class="row" >
        <div class="col-sm-3"></div>
        <div class="col-sm-6 mobile-pull">
            <article role="login">

<?php

    if(isset($_POST['submit']))
    {
        $username = null;
        $pwd = null;
        $email = null;

        $username = $_POST['username'];
        $pwd = $_POST['pwd'];
        $email = $_POST['username'];


        $service = new UserC();
        //var_dump($user);
        $result = $service->seConnecter($username,$email,$pwd);
        if($result == "disabled")
        {
            //compte désactiver
            echo '
               <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                <script>
                    swal({
                      title: "Erreur!",
                      text: "Votre compte est désactivé, veuillez l\'activer via email!",
                      icon: "warning",
                      button: "Confirmer",
                    });
                </script>
            ';
        }

        //compte n'existe pas
        elseif ($result == "error")
            echo '
               <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                <script>
                    swal({
                      title: "Erreur!",
                      text: "Aucun coumpte n\'est enregistré avec ces données!",
                      icon: "error",
                      button: "Confirmer",
                    });
                </script>
            ';
        else
        {
            //connecté
            $_SESSION["id"]= $result[0];
            echo "<script>window.open('index.php','_self')</script>";
        }


    }
?>


<h3 class="text-center"><i class="fa fa-lock"></i> Se connecter</h3>
<form class="signup" action="" method="post">
    <div class="form-group">
        <input type="text" autofocus onblur="validUsername()" name="username" id="username" class="form-control" placeholder="Nom d'utilisateur">
    </div>

    <div class="form-group">
        <div class="input-group">
            <input type="password" name="pwd" id="pwd" onblur="validPassword()" onkeyup="passwordStength()" class="form-control"  placeholder="Mots de passe">
            <span class="input-group-btn">
                <button onclick="showPassword()"  class="btn btn-default reveal" type="button" style="background-color: #ccc">
                    <i id="icon" style="padding-bottom: 3.5px;padding-top: 3.5px" class="fa fa-eye"></i>
                </button>
            </span>
        </div>
    </div>


    <div class="form-group">
        <button id="login" onclick="verifier(event)"  class="btn btn-success btn-block" name="submit" >
            CONNEXION
        </button>
    </div>
</form>
</article>
</div>
<div class="col-sm-3" style="margin-top: 250px">
    <div class="aro-pswd_info" >
        <div id="pswd_info">
            <h4>Password must be requirements</h4>
            <ul>
                <li id="capital" class="invalid">At least <strong>one capital letter</strong></li>
                <li id="number" class="invalid">At least <strong>one number</strong></li>
                <li id="length" class="invalid">Be at least <strong>8 characters</strong></li>
                <li id="space" class="invalid">be<strong> use [~,!,@,#,$,%,^,&,*,-,=,.,;,']</strong></li>
            </ul>
        </div>
    </div>
</div>
</div>
</div>
<script src="signup.js"></script>


<?php
    include_once 'footer.php';
?>
