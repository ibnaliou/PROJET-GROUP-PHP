
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

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<span href="#" class="logo" id="toggle-login">

   
    
    <br/><span style="color: #77838d; font-size: 12px"><h2 style="text-transform: uppercase;">Bienvenue sur la plate-forme de Gestion de Location </h2>

    	
    	<?php
       
       $date = date("d-m-Y");
       $heure = date("H:i");
       echo"<h4 style='text-align: center; border: 1px groove blue; width: 250px; height: auto ;color:black; margin-left 60px'> Bienvenue Dakar, le $date </br> il est $heure</h4>";
   ?> </span></span>


<div id="ins">
<div id="login">
    <div id="triangle"></div>
        <h1>S'INSCRIRE</h1>
<div class="form-style-3">
<form method="Post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<fieldset><legend>INSCRIPTION</legend>

<label for="field3"><span>Nom Complet<span class="required">*</span></span><input type="text" class="input-field" name="nom" value="" required /></label>
<label for="field5"><span>login<span class="required">*</span></span><input type="text" class="input-field" name="login" value=""  required/></label>
<label for="field6"><span>Mot de Passe<span class="required">*</span></span><input type="password" class="input-field" name="password" value="" required /></label>
<label for="field7"><span>profil<span class="required">*</span></span><select type="text"  class="input-field" name="profil" value="" required >
<option value="admin">Admin</option>
<option value="agent">Agent</option>
<option value="gerant">Gerant</option>

</select>
</label>

<label><span>&nbsp;</span><input type="submit" value="Enregistrer" name="enregister" /></label>
<label><a style="color:white;float:right;text-decoration:none" id="vconne" href="connection.php">Se Connecter</a></label>


</fieldset>

</form>
</div>
</div>
<?php
if (isset($_POST['enregister'])){
extract($_POST);
require_once('Utilisateur_class.php');
    $user = new Utilisateur;
    $user->nomComplet = $nom;
    $user->login = $login;
    $user->pwd = $password;
    $user->profil = $profil;

        $data = $user->findUserByLogin($login);
        if($reponse = $data->fetch()){
              echo '<body onLoad="alert(\'Ce login existe deja...\')">';
        }else
        {
             $user->addUser();
        }
}
?>


</body>


</html>



 