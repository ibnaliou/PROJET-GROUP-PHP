<?php

    
    //modifion le numero de tel
    function updateProprietaire()
        {


        }
    //retrouvons la liste des proprietaire
        function listerProprietaire(){
            $this->getConnexion();
            // requete a executer
           $sql = "select * from Proprietaire";
            // preparation de la requete
            $donnees = $this->bdd->query($sql);
            return $donnees;
        }
    
}
class TypeDeBien{
    var $id;
    var $nom;
    private $bdd;

    private function getConnexion(){
        try{
            if($this->bdd == null){
                $this->bdd = new PDO('mysql:host=;dbname=BDLocation;charset=utf8', 'root', 'passer',
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
            }       
        }
        catch(Exception $e){
            die('Erreur : ' . $e->getMessage());
        }
    }

    function addTypeBien()
    {
        $this->getConnexion();
        // requete a executer
       $sql = "insert into typeBien 
                  values(null, :nom)";
        // preparation de la requete
        $req = $this->bdd->prepare($sql);
        //execution de la requete
        $data = $req->execute(
            array(
                  'nom'=>$this->nom,
                  
        ));
        return $data;
    }


}

class typebien{
    var $profil;
    private $bdd;
    private function getConnexion(){
        try{
            if($this->bdd == null){
                $this->bdd = new PDO('mysql:host=;dbname=BDLocation;charset=utf8', 'root', 'tafatene10',
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
            }       
        }
        catch(Exception $e){
            die('Erreur : ' . $e->getMessage());
        }
    }
    //ajoutons les type de  bien
    
    public function addTypeBien()
    {
        $this->getConnexion();
        // requete a executer
       $sql = "insert into TypeBien values(null, :nomBien)";
        // preparation de la requete
        $req = $this->bdd->prepare($sql);
        //execution de la requete
        $data = $req->execute(array(
            'nomBien'=>$this->nomcomplet,
            
        ));
        return $data;
    }
    //listons les type de bien
    function listerTypeBien(){
        $this->getConnexion();
        // requete a executer
       $sql = "select * from typeBien";
        // preparation de la requete
        $donnees = $this->bdd->query($sql);
        return $donnees;
    }
    //trouvons un type de bien à travers son id
    function findTypeBien() {

        $this->getConnexion();
        // requete a executer
      $this->listerTypeBien();
           while($reponse =$donnees ->fetch()){
            $sql2="select * from typeBien where id='$mot' ";
            $req=$bdd->prepare($sql2);
       $req ->execute(array($mot));

                            
                                
     }                       
$reponse->closeCursor();

    }

}

?>