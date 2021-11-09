



let orientation = (screen.orientation || {}).type || screen.mozOrientation || screen.msOrientation;

if (orientation === "landscape-primary" || orientation === "landscape-secondary") {
  console.log("paysage");
} else if (orientation === "portrait-secondary" || orientation === "portrait-primary") {
  console.log("portrait");
}

function gestionSaisie()
        {
            let valeur = document.getElementById( "prenom" ).value;
            let age = document.getElementById( "age" ).value;
            let parent = document.getElementById( "parent" ).checked; 
            let phrasem = "<br> tu es mineur"
            let phraseM = "<br> tu es majeur"
            let parentP = "<br> tes parents sont la"
            let parentNP = "<br> tes parents ne sont pas la"
            
            let phrase = "bonjour " + valeur + "<br>tu as " + age + " ans";

            if ( valeur == "")
                phrase +=  "<br> donne moi ton nom";
             else 
                if ( age >= 18) {
                     phrase += phraseM +"<br>tu peux rentrer";
                     document.getElementById("affichageAge").style.backgroundColor='green';
                    }
                 else 
                 if ( age < 18 && parent == true) 
                    phrase += phrasem + parentP + "<br> tu peux rentrer";
                 else 
                phrase += phrasem + parentNP +"<br> tu ne peux pas rentrer";
            
            document.getElementById( "affichage1").innerHTML = phrase;
            document.getElementById( "affichageAge").innerHTML = age;

        }