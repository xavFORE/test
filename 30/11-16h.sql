<?php

select 
    users.nom as nomC, 
    departement.departement_nom as nomD
from 
    users,
    departement
where 
    users.idDep = departement.departement_id and 
    users.nom = 'Ligonnes'and 
    users.pw = 'zora'
    ; 
?>
