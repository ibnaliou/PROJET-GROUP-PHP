<!doctype html>
<html lang="fr">
  <head>
    <title>New Proprietaire</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
  <form action="" method="POST" class="form-vertical" role="form">
        <div class="form-group">
            <legend>Enregistrer Un Proprietaire</legend>
        <div class="form-group">
            
        <label for="inputPassword" class="col-lg-2 control-label">numero piece:<input class="form-control" id="" placeholder="numero Piece" type="text" name="nump"></label><br>
        <label for="inputPassword" class="col-lg-2 control-label">Nom:<input class="form-control" id="" placeholder="nom" type="tex"name="nom"></label><br>
        <label for="inputPassword" class="col-lg-2 control-label">Telephone<input class="form-control" id="" placeholder="numero de telephone" type="text" name="tel"></label><br>
        <button type="submit" class="btn btn-primary" name="Enregistrer" value="">Enregistrer</button>
    </form>
    <?php
    if(isset($_POST['Enregistrer']))
    {  
        extract($_POST);
        include 'Proprietaire_class.php';
$prop = new Proprietaire();
$prop->numPiece = $nump;
$prop->nom = $nom;
$prop->tel = $tel;
$prop->addProprietaire();
}
?>           
</body>
</html>