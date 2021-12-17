function addItem(  table, message )
{
    window.open(
        "addItemCombo.php?table="+table+"&message="+message,
        "ajout dans un combo",
        "width=200,height=100"     );    
}

//$(document).ready(liste( "listTachesBack.php" ));

function dateTri()
{
    $( "#list" ).text("");
    liste( "listTachesTriDateBack.php" );
}

function prioriteTri()
{
    $( "#list" ).text("");
    liste( "listTachesTriPrioriteBack.php" );
}

function statusTri()
{
    $( "#list" ).text("");
    liste( "listTachesTriStatusBack.php" );
}

function addTache()
{
    
}


function editTache()
{

}

function deleteTache( idTache )
{
    $.post(
        "deleteTacheBack.php",
        {
            idTache : idTache
        },
        function(data, status)
        {}
    );
}

function liste( url )
{
    $.get(url,
        function( data, status )
        {
            let tableau = JSON.parse( data );
            let chaine = "";
            for ( ligne of tableau )
            {
                chaine += "<div class='title'>"+ligne['titre'];
                chaine += "<button onclick='editTache()' class='edit'>Modifer</button>";
                chaine += "<button onclick='deleteTache("+ligne['id']+")' class='delete'>Supprimer</button></div>";
            }
            $( "#list" ).append( chaine );
        }
    );
}