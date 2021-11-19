<?php
// tableaux 
/*$cantine = [
            ["pierre"], 
            ["maurice", "hector", "robert", "jacob", "brigitte"], 
            ["bob", "joe", "michelle", "suzanne"]
            ];

$boss = $cantine [0]; 
$salaries = $cantine [1]; 
$clients = $cantine [2]; 
print ("le boss est : <br>");
foreach ($boss as $patron ) {
    print("$patron <br>");
}
print ("les salariés sont : <br>");
foreach ($salaries as $salarie ) {
    print("$salarie <br>");
}
    print ("les clients sont : <br>");
foreach ($clients as $client ) {
    print("$client <br>");
}*/

// object

class Personnes {
    public $nom; 

    public function __construct( $nom ) {

        $this ->nom =$nom;
    }
    
    public function aff()
    {
        print($this->$nom );
               
    }

}

class Salaries extends Personnes {
    public function __construct( $nom, $salaire ){
        $this ->salaire =$salaire;
    }
}

class Boss extends Salaries {
    public function __construct( $nom, $salaire, $chef ){
        $this ->chef =$chef;
    }
}

class Clients extends Personnes {
    public function __construct( $nom, $commande){
        $this ->client =$client;
    }

}




    public function aff()
    {
        print("(".$this->x  );
        print(",".$this->y  );
        print(")" );        
    }

   
    

   
}




?>