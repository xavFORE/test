<?php
class entreprise{
   
}
class boss extends entreprise{
    protected $nom_du_boss ;
    public function __construct($nom_du_boss)
    {
        $this->nom_du_boss = $nom_du_boss;
    }
    public function aff(){
        print("je suis le boss ".$this->nom_du_boss."<br>");
    }
}
class ouvrier extends boss{
    protected $nom_de_louvrier;
    public function __construct($nom_du_boss, $nom_de_louvrier)
    {
        parent::__construct( $nom_du_boss );
        $this->nom_de_louvrier = $nom_de_louvrier;
    }
    public function aff(){
        boss::aff();
        print( "je suis l'ouvrier ".$this->nom_de_louvrier."<br>" ); 
    }

}
class client extends ouvrier{
    protected $nom_du_client ; 
    public function __construct($nom_du_boss, $nom_de_louvrier, $nom_du_client)
    {
        parent::__construct( $nom_du_boss, $nom_de_louvrier );
        $this->nom_du_client = $nom_du_client;
    }
    public function aff(){
        ouvrier::aff();
        print( "je suis le client ".$this->nom_du_client."<br>" ); 
    }
}
$p1 = new client("alexis", "Olivier", "remi");
$p1->aff();
?>