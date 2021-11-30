$nomServeur = "serverName\sqlexpres";
$connOptions = array("UID"=>"nomutilisateur", "PWD"=>"motdepasse", "Database"=>"nomschema");
$conn = sqlsrv_connect( $nomServeur, $connOptions );
