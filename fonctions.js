function addItem(  table, message )
{
    window.open(
        "addItemCombo.php?table="+table+"&message="+message,
        "ajout dans un combo",
        "width=200,height=100"     );    
}

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


function editTache(idTache)
{
    $.post(
        "init.php",
        {
            id : idTache
        },
        function(data, status)
        {
            window.location.href = "frontModifTache.php";
        }
    );
}

function deleteTache( idTache )
{
    $("#"+idTache).text("");
    $("#"+idTache).append("Are you sure ?<button onclick='suppr("+idTache+")'>Oui</button><button onclick='annuler()'>Annuler</button>");
}

function annuler()
{
    $( "#list" ).text("");
    liste( "listTachesBack.php" );
}

function suppr(idTache)
{
    $.post(
        "deleteTacheBack.php",
        {
            idTache : idTache
        },
        function(data, status)
        {
            $( "#list" ).text("");
            liste( "listTachesBack.php" );
        }
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
                chaine += "<div id='"+ligne['id']+"' class='tache'>"+ligne['titre'];
                chaine += "<button onclick='editTache("+ligne['id']+")' class='edit'>Modifer</button>";
                chaine += "<button onclick='deleteTache("+ligne['id']+")' class='delete'>Supprimer</button></div>";
            }
            $( "#list" ).append( chaine );
        }
    );
}