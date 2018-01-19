<!DOCTYPE html>
<html>
<head>
	<title>UTILISATEURS</title>
	<link rel="stylesheet" type="text/css" href="employes.css">
</head>
<body>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

<span href="#" class="logo" id="toggle-login">

   
    
    <br/><span style="color: #77838d; font-size: 12px"><h2 style="text-transform: uppercase;">Bienvenue sur la plate-forme de Gestion de Location </h2>

    	
    	<?php
       
       $date = date("d-m-Y");
       $heure = date("H:i");
       echo"<h4 style='text-align: center; border: 1px groove blue; width: 250px; height: auto ;color:black; margin-left 60px'> Bienvenue Dakar, le $date </br> il est $heure</h4>";
   ?> </span></span>

<div id="conne">
<div id="login">
    <div id="triangle"></div>
        <h1>SE CONNECTER</h1>

<div class="form-style-3">
<form method="Post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<fieldset><legend>CONNEXION</legend>

<label for="field5"><span>login<span class="required">*</span></span><input type="text" class="input-field" name="login" value=""  required/></label>
<label for="field6"><span>Mot de Passe<span class="required">*</span></span><input type="password" class="input-field" name="password" value="" required /></label>

</label>

<label><span>&nbsp;</span><input type="submit" value="Connexion" name="connexion" /></label>
<label><a style="color:white;float:right;text-decoration:none" id="vins" href="inscription.php">S'INSCRIRE</a></label>


</fieldset>

</form>
</div>
</div>

<?php
if (isset($_POST['connexion'])){
extract($_POST);
require_once('Utilisateur_class.php');
        $user = new Utilisateur;
        $user->login = $login;
        $user->pwd = $password;
        

        $data = $user-> logON($login,$password);

        
        if($data == "user"){
            
        echo '<body onLoad="alert(\'ok...\')">';
           
             
        }
        else {
             echo "KO";
        }
             
        
    
}
?>

</body>
</html>



 