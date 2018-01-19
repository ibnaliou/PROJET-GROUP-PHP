<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">

<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <!-- <link href="page/css/css/bootstrap.min.css" rel="stylesheet"> -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
		
        <link rel="stylesheet" href="tabinter.css">
		<!-- Google Fonts -->
		
		<title>RECHERCHEZ</title>
	</head>
	<body>


    <!-- Header - set the background image for the header in the line below -->
    <header class="py-5 bg-image-full" style="background-image: url('https://unsplash.it/1900/1080?image=1076');">
      <img class="img-fluid d-block mx-auto" src="http://placehold.it/200x200&text=RECHERCHE" alt="">
    </header>

<div class="container-fluid">
    <div class="panel panel-success">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-3">
            <h2 class="text-center pull-left" style="padding-left: 30px;"> <span class="glyphicon glyphicon-list-alt"> </span>DetailsS</h2>
          </div>
          <div class="col-xs-9 col-sm-9 col-md-9">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="col-xs-12 col-md-4">
                <label> Recherche </label>
                <div class="form-group">
                  <div class="input-group">
                    <input type="text" class="form-control input-md" name="search">
                    <div class="input-group-btn">
                      <button type="button" class="btn btn-md btn-warning"> <span class=" glyphicon glyphicon-search"></span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="panel-body table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              
              <th class="text-center"> Numéro Piece d'Indentité </th>
              <th class="text-center"> Nom Complet </th>
              <th class="text-center"> Téléphone</th>
            </tr>
          </thead>

          <?php
        include 'Proprietaire_class.php';
        $prop = new Proprietaire();
        $data = $prop->allProprietaire();
        while($row = $data->fetch()){
    ?>
            <tr>
                <th class="text-center"><?php echo $row['numPiece']?></th>
                <th class="text-center"><?php echo $row['nom']?></th>
                <th class="text-center"><?php echo $row['tel']?></th>
            </tr>
    <?php
        }
    ?>
        </table>
      </div>

      <div class="panel-footer">
        <div class="row">
          <div class="col-lg-12">
            <div class="col-md-8">
              </div>
              <div class="col-md-4">
             <p class="text-center"><a href="#" class="btn btn-primary btn-lg" role="button" data-toggle="modal" data-target="#login-modal">Ajouter</a></p>
	</div>
</div>
<!-- END # BOOTSNIP INFO -->

<!-- BEGIN # MODAL LOGIN -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header" align="center">
					<img class="img-circle" id="img_logo" src="case.jpeg">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</button>
				</div>
                
                <!-- Begin # DIV Form -->
                <div id="div-forms">
                
                    <!-- Begin # Login Form -->
                    <form id="login-form" action="proprietaire.php" method="post">
		                <div class="modal-body">
				    		<div id="div-login-msg">
                                <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-login-msg">Veillez Remplir pour ajouter un proprio.</span>
                            </div>
                            
                            
				    		<input name="nump" class="form-control" type="number" placeholder="numero piece "required />
				    		<input name="nom" class="form-control" type="text" placeholder="nom complet" required/>
                <input name="tel" class="form-control" type="text" placeholder="talephone " required/>
        		    	</div>
				        <div class="modal-footer">
                            <div>
                            
                            </div>
				    	    <div>
                                <input type="submit" class="btn btn-primary" value="Enregistrer">
                            </div>
				        </div>
                    </form>
                                    
			</div>
		</div>
	
          </div>
        
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="tabinter.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>


   <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright© Papa Djiby NIANG & Moustapha TENE  </p>
      </div>
      <!-- /.container -->
    </footer> 
	</body>
  
</html>