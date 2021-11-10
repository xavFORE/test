// cette fonction change en en maj les 
function majLettreDansString( str, lettre) 
{
    let tableau = str.split("");
    for( let i = 0 ; i < tableau.length ; i++ )
         if ( tableau[i] == lettre )
            tableau[i] = tableau[i].toUpperCase();
    str = tableau.join("");
    return str;
}

function sautLigne()
{
    document.write( "--------------------------<br>");
}

function rndIntervalleInt(min, max) 
{
    return Math.floor(rndIntervalleFloat(min, max ));
}

function rndIntervalleFloat(min, max) 
{
    return Math.random() * (max - min) + min;
}

