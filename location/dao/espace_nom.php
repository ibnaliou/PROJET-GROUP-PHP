<?php  
namespace location\dao;
use\PDO;
//Ma classe proprietaire
class Proprietaire{
    var $id;
    var $numPiece;
    var $nom;
    var $tel;
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
    function addProprietaire()
    {
       
        $this->getConnexion();
        // requete a executer
       $sql = "insert into Proprietaire 
                  values(null, :numP, :nom, :tel)";
        // preparation de la requete
        $req = $this->bdd->prepare($sql);
        //execution de la requete
        $data = $req->execute(
            array('numP'=>$this->numPiece,
                  'nom'=>$this->nom,
                  'tel'=>$this->tel
                ));
                return $data;
    }
    //Recherchons une proprietaire à traver son numero de piece

    function findProprietaire($numPiece){

        $this->getConnexion();
       $sql="select from Proprietaire  values(null, :numP, :nom, :tel) where  numPiece ='$numPiece'";
       $req = $this->bdd->prepare($sql);
        //execution de la requete
        $data = $req->execute(
            array('numP'=>$this->numPiece,
                  'nom'=>$this->nom,
                  'tel'=>$this->tel
                ));
                return $data;
    }

    //modifions le numero de tel
    function updateProprietaire($tel)
        {
            $this->getConnexion();
            $sql="select from Proprietaire  values(null, :numP, :nom, :tel) where  tel ='$tel'";
           // requete prepare 
            $req = $this->bdd->prepare($sql);
             //execution de la requete
           

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
class typebien{
    var $id;
    var $nom;
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
       $sql = "insert into TypeBien values(null, :nomT)";
        // preparation de la requete
        $req = $this->bdd->prepare($sql);
        //execution de la requete
        $data = $req->execute(array(
            'nomT'=>$this->nom,
            
        ));
        return $data;
    }
    //listons les type de bien
    function listerTypeBien(){
        $this->getConnexion();
        // requete a executer
       $sql = "select * from TypeBien";
        // preparation de la requete
        $donnees = $this->bdd->query($sql);
        return $donnees;
    }
    //trouvons un type de bien à travers son id
    function findTypeBien($id) {

        $this->getConnexion();
        // requete a executer
      $this->listerTypeBien();
           while($reponse =$donnees ->fetch()){
            $sql2="select * from typeBien where id='$id' ";
            $req=$bdd->prepare($sql2);
       $req ->execute(array($mot));

                            
                                
     }                       
$reponse->closeCursor();

    }

}

?>