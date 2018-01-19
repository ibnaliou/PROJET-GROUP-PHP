
<!--formulaire de recherche-->
<!DOCTYPE html>
<html>
<head>
	<title>recherche</title>
	<link rel="stylesheet" type="text/css" href="recherche.css">
</head>
<body>
<?php 
include('connection.php');
 ?>
 <br/><span style="color: #77838d; font-size: 12px"><h2 style="text-transform: uppercase;">Bienvenue sur la plate-forme de Gestion des Employés </h2>

    	<!--lien vers les services-->
    	    	<a href="employes.php"><button style="color:blue; float: right;">LES EMPLOYES</button></a>

    	<a href="services.php"><button style="color:blue; float: right;">LES SERVICES</button></a>
    	<!--date et heure-->
    	<?php
       
       $date = date("d-m-Y");
       $heure = date("H:i");
       echo"<h4 style='text-align: center; border: 1px groove blue; width: 250px; height: auto ;color:black; margin-left 60px'> Bienvenue Dakar, le $date </br> il est $heure</h4>";
   ?> </span></span>

<div style="text-align: center; " id="login">
    <div id="triangle"></div>
        <h1 style="background-color: #10B3DE; text-align: center; color:white;padding:20px 0;font-size:140%;">Recherchez un Employé</h1>
<div class="form-style-3">
	<fieldset style="width: 500px; " ><legend>Ici Recherchez</legend>
 <form  style="background-color: gray;width: 400px; "action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
     <label><span>Entrer un mot:</span></label><input type="search" name="mot" id="mot" ><br>
     <label for="field4"><span>Services:</span></label><select name="service" class="select-field" required>

	<!--PERMETTRE A L'EMPLOYE  DE CHOISIR UN SERVICE-->  
<?php
 include('connection.php');
 $sql = "select * from Service order by nom";
$reponse = $bdd->query($sql);
                    
                        while($donnees = $reponse->fetch()){
                           echo '<option value="'.$donnees['idService'].'">'.$donnees['nom'].'</option>';                        
                        }
                        $reponse->closeCursor();

                        ?>

</select><br>
    <label><span>&nbsp;&nbsp;&nbsp;&nbsp;</span> <input type="submit" value="Rechercher" name="recherche" > <br>
         

 </form>
</fieldset>
</div>
<!--procedure de recherche-->
 <?php 
//user click sur recherche et champ recherche non vide
if (isset($_POST['mot']) && !empty($_POST['mot']) ){
include('connection.php');
extract($_POST);
//remplacer tte chose different de ce qui entre crochet par une chaine vide si l'utisateur tente de faire des recherhes avec
$quey=preg_replace("#[^a-z ?0-9]#i","",$mot );
 $sql = "select * from Service";
$reponse = $bdd->query($sql);
                    
           while($donnees = $reponse->fetch()){
                $sql2="select id,matricule,nomComplet,tel,email, salaire, datenais ,Service.idService, Service.nom from Employe LEFT join Service on Employe.idService=Service.idService where Employe.nomComplet LIKE ? group by id,matricule,nomComplet,tel, email,salaire,datenais, Service.idService, Service.nom    ";
                                	$req=$bdd->prepare($sql2);
$req ->execute(array('%'.$mot.'%'));

                        	
                                
                        	
$reponse->closeCursor();
                        
                        }

$count=$req->rowCount();
if($count>=1){  
 echo "$count résultats trouvés pour $mot:"."</br>";
 while ( $data=$req->fetch (PDO::FETCH_OBJ)) {
 //echo $data->matricule.$data->nomComplet.$data->nom."</br>";
 	//affichez les resultats de la recherche sous forme de tableau
 echo "<table>
 <tr>
        <th>Id Employé</th>
        <th>Matricule</th>
        <th>Nom Complet </th>
        <th>telephone</th>
        <th>Email</th> 
        <th>Salaire</th>
        <th>Date de Naissance</th>
        <th>Nom du Service</th>
        

    </tr>
 <tr class='line'> 
			   <td class='line'>".$data->id."</td>
			   <td class='line'>".$data->matricule."</td>
			   <td class='line' >".$data->nomComplet."</td>
		       <td class='line' >".$data->tel."</td>
		       <td class='line' >".$data->email."</td>
               <td class='line' >".$data->salaire."</td>
               <td class='line' >".$data->datenais."</td>

                <td class='line'>".$data->nom."</td>
				
             </tr> 
             <table>";
 }
	

}
else{
	echo " <hr/> 0 resultats pour $mot";
}
 	
 }



/*recherche par serice*/

/*
if (isset($_POST['recherche']) & isset($_POST['service']) & empty ($_POST['mot'])) {
extract($_POST);
include('connection.php');
$sql = "select * from Service";
$reponse = $bdd->query($sql);                 
                        while($donnees = $reponse->fetch()){

                            if ($donnees['idService']==$service) {
                            	
                            for ($i=0; $i <$donnees['idService'] ; $i++) { 
                            	
                            
                             	$sql3="select id,matricule,nomComplet,tel,email, salaire, datenais ,Service.idService, Service.nom from Employe LEFT join Service on Employe.idService=Service.idService where Service.nom=$donnees[nom] group by id,matricule,nomComplet,tel, email,salaire,datenais, Service.idService, Service.nom;";
                            $req=$bdd->prepare($sql3);
$req ->execute(array($sql3));
	
}
                           	
                           	        while ($rendu =$req->fetch(PDO::FETCH_OBJ)) 
    {
        echo "<table>
        <tr class='line'> 
			    <td class='line'>".$rendu['id']."</td>
			    <td class='line'>".$rendu['matricule']."</td>
			    <td class='line' >".$rendu['nomComplet']."</td>
			    <td class='line'>".$rendu['tel']."</td>
			    <td class='line'>".$rendu['email']."</td>
				<td class='line'>".$rendu['salaire']."</td>
				<td class='line'>".$rendu['datenais']."</td>
			    <td class='line'>".$rendu['nom']."</td>
             </tr>
             </table>";
    }
       }                         
                        	
$reponse->closeCursor();
                        

  
               
  
                           
                       



}
}*/

 ?>

</body>
</html>

