function loadPage( classement ) 
{
  const xhttp = new XMLHttpRequest();

  xhttp.onload = function () {
    document.getElementById("main").innerHTML = this.responseText;
  }

  xhttp.open("GET", classement );
  xhttp.send();
}
//----------------------------------------
function reinitpage() {
  document.getElementById( "reinitpageca").innerHTML = "";
  affcalendrier();
  affclassement();
  document.getElementById( "reinitpageca").innerHTML = affclassement() , affcalendrier();
  
}
//----------------------------------------
         
function affcalendrier() 
{
  document.getElementById( "calendrierjs").innerHTML = "";
  let tableaucal = ['Journée', 'Domicile', 'Score', 'Exterieur'];
    
  ligne = createLigne( 0, "th", tableaucal  );
  addLigne2Calendar( ligne );
  
  for( let i=0 ; i < 38 ; i++ )
  {
    ligne = createLigne( i+1, "td", [ "XXX", "YYY", "ZZZ", "AAA" ]  );
    addLigne2Calendar( ligne );
  }


  console.log(tableaucal)
}

function addLigne2Calendar( ligne )
{
  document.getElementById( "calendrierjs").innerHTML += ligne;
}


function createLigne( id, tag, contenus )
{
  let str = "";
  str += "<tr id=\"calR"+id+"\">";
  for( let i= 0 ; i < contenus.length ; i++ ) 
  {
    let data = contenus[i];
    str += "<"+tag+" id=\"calC"+id+"-"+i+"\">";
    str += data;
    str += "</"+tag+">";
  }
  str += "</tr>";
  return str;
}


//--------------------------------------------------------------------
         
function affclassement() 
{
  document.getElementById( "classementjs").innerHTML = "";
  let tableaucal = ['classement', 'Esquipe', 'MJ', 'G' , 'N' , 'P' , 'Pts'];
    
  ligne = createLigne( 0, "th", tableaucal  );
  addLigne2classement( ligne );
  
  for( let i=0 ; i < 38 ; i++ )
  {
    ligne = createLigne( i+1, "td", [ "XXX", "YYY", "ZZZ", "AAA" ,"11","22","33"]  );
    addLigne2classement( ligne );
  }


  console.log(tableaucal)
}

function addLigne2classement( ligne )
{
  document.getElementById( "classementjs").innerHTML += ligne;
}


function createLigne( id, tag, contenus )
{
  let str = "";
  str += "<tr id=\"calR"+id+"\">";
  for( let i= 0 ; i < contenus.length ; i++ ) 
  {
    let data = contenus[i];
    str += "<"+tag+" id=\"calC"+id+"-"+i+"\">";
    str += data;
    str += "</"+tag+">";
  }
  str += "</tr>";
  return str;
}



