
    <!doctype html>
    <html lang="fr">
      <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
      </head>
      <body>
      <form action="" method="POST" class="form-horizontal" role="form">
        <div class="form-group">
            <legend>Enregistrer un utilisateur</legend>
        <div class="form-group">
            
        <label for="inputPassword" class="col-lg-2 control-label">name:<input class="form-control" id="nomcomplet" placeholder="name" type="text" name="nomcomplet"></label><br>
        <label for="inputPassword" class="col-lg-2 control-label">login:<input class="form-control" id="login" placeholder="profil" type="tex"name="login"></label><br>
        <label for="inputPassword" class="col-lg-2 control-label">Password<input class="form-control" id="pwd" placeholder="Password" type="password" name="pwd"></label><br>
        <select name="profil" id="profil">
        <option></option>
        <option name="admin">admin</option>
        <option name="agent">agent</option>
        </select><br>
        <button type="submit" class="btn btn-primary" name="Enregistrer" value="">Enregistrer</button>
    </form>
    <?php
    if(isset($_POST['Enregistrer']))
    {
        extract($_POST);
        require_once("mesclasses.php");
        $util = new location\dao\Utilisateur();
        $util->nomcomplet = $nomcomplet;
        $util->login = $login;
        $util->pwd = $pwd;
        $util->profil = $profil;
        $util->addUtilisateur();
    }
    ?>
    </body>
    </html>