<!doctype html>
<html lang="fr">
    <head>
        <title>ADMIN</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="tabinter.css">
        
    </head>
    <body>
        <div class="container">
        <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="http://lacodeid.com">BienVenue</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a href="connection.php"><button style="color:blue; ">DECONNEXION</button></a>
      </div>
    </nav>

    
    <!-- Header - set the background image for the header in the line below -->
    <header class="py-5 bg-image-full" style="background-image: url('https://unsplash.it/1900/1080?image=1076');">
      <img class="img-fluid d-block mx-auto" src="http://placehold.it/200x200&text=Admin" alt="">
    </header>

    <!-- Content section -->
    <section class="py-5">
      <div class="container">
        
      <div class="panel-body table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
                <th class="text-center"> NOMS</th>

              <th class="text-center"> LOGIN</th>
              <th class="text-center"> PROFIL </th>
                 <th class="text-center">ETAT </th>

                 
            </tr>

          </thead>
           <?php
        include 'Utilisateur_class.php';
        $user = new Utilisateur();
        $data = $user->listUser();
        while($row = $data->fetch()){
    ?>
            <tr>
                <th class="text-center"><?php echo $row['nomComplet']?></th>
                <th class="text-center"><?php echo $row['login']?></th>
                <th class="text-center"><?php echo $row['profil']?></th>
                <th class="text-center"><?php if ($row['etat']==-1) {
                 echo "Inactif";
                } ?></th>

            </tr>
    <?php
        }
    ?>
          </table>
      </div>
</div>
    <!-- Image Section - set the background image for the header in the line below -->
    <section class="py-5 bg-image-full" style="background-image: url('https://unsplash.it/1900/1080?image=1081');">
      <!-- Put anything you want here! There is just a spacer below for demo purposes! -->
      <div style="height: 200px;"></div>
    </section>

    <!-- Content section -->
    <section class="py-5">
      <div class="container">
        
      </div>
    </section>

    



</div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
         <script src="script.js"></script>
         <script src="tabinter.js"></script>

         <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright© Papa Djiby NIANG & Moustapha TENE  </p>
      </div>
      <!-- /.container -->
    </footer> 
    </body>
</html>