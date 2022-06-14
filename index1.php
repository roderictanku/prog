<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style1.css" />
    <title>Str-power</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="index1.php" method="POST" class="sign-in-form">
            <h2 class="title">connexion</h2>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="email"required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="Password"required />
            </div>
            <input type="submit" value="envoyer" class="btn solid" name="valider1"/>
            <a href="index.php">retour</a>
            <p class="social-text">Ou Connectez-vous avec les plateformes sociales</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
         <?php

    if (isset($_POST['valider1'])){
    $email10=$_POST['email'];
    $pw=$_POST['Password'];  
    $date=date('d/m/y/h:i:s');
    $host="localhost";
    $user="root";
    $pass="";
    $connect=mysqli_connect($host,$user,$pass);
    $bd="str-pro";
    $con=mysqli_select_db($connect,$bd);

    $verifie1="SELECT * FROM `inscription`";
    $text1=mysqli_query($connect,$verifie1);
    $text=$text1->fetch_array();
    $emails=$text['email'];
    $pp1=$text['password'];
     
    if($email10===$emails AND $pw===$pp1){
      $re="INSERT INTO `connexion`(`id_client`, `nom`, `password`) VALUES (null,'$email1',$pp)  ";
      echo '<script type="text/javascript">';  
        echo 'window.location.href = "index.php";';
        echo '</script>';
    }else{
      echo"
      <marquee>les identifients ne sont pas correct.</marquee>
     ";
    }

             }

             ?>




          <form action="index1.php" method="POST" class="sign-up-form">
            <h2 class="title">S'inscrire</h2>
           
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="email1"  required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password1" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="confirm Password" name="password2" required/>
            </div>
            
            <input type="submit" class="btn" value="envoyer" name="valider2"/>
            <p class="social-text">Ou Inscrivez-vous avec les plateformes sociales</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Nouveau ici?</h3>
            <p>
              creer un compte si vous ne poccedez pas encore ou connectez vous pour profiter de vos privileges.
            </p>
            <button class="btn transparent" id="sign-up-btn">
                S'inscrire
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>deja inscrire?</h3>
            <p>
                connectez vous si vous  poccedez un compte ou inscrivez vous pour profiter de vos privileges.
            </p>
            <button class="btn transparent" id="sign-in-btn">
                connexion
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    
    <?php
if(isset($_POST['valider2'])){
    $email2=$_POST['email1'];
    $pp=$_POST['password1'];
    $pass2=$_POST['password2'];  
    $date=date('d/m/y/h:i:s');
    $host="localhost";
    $user="root";
    $pass="";
    $connect=mysqli_connect($host,$user,$pass);
    $bd="str-pro";
    $con=mysqli_select_db($connect,$bd);
    $taile = strlen($pp);
    
    if($taile >= 8){
        $pp;
        
    }else{ 
     
     echo"
      <marquee>le mot de pass doit contenire au moins 8 caracteres</marquee>
     ";
    }
     $verifie1="SELECT * FROM `inscription`";
     $text1=mysqli_query($connect,$verifie1);
     $text=$text1->fetch_array();
     $emails=$text['email'];
     
    
    if($pp===$pass2 AND $email2!=$emails ){

        $insertion="INSERT INTO `inscription` (`id_client`, `password`, `comfirm_pass`, `email`, `Date_creation`)  VALUES(NULL,'$pass1','$pass2','$email2','$date')";
        $verifie=mysqli_query($connect,$insertion);
        echo '<script type="text/javascript">';  
        echo 'window.location.href = "index.php";';
        echo '</script>';

   }else{
    echo"
      <marquee>les mots de pass ne sont pas identique ou vous avez deja un compte</marquee>
     ";
  }
}
  ?>


<style>
  marquee{
    color:crimson;
    font-size:15px;
  }
</style> 
   <script src="app.js"></script>
  </body>
</html>
<?php
session_destroy();
?>