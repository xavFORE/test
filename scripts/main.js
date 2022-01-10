import tabJoursEnOrdre from './Utilitaire/gestionTemps.js';

console.log("Depuis MAIN JS:"+tabJoursEnOrdre);

const CLEFAPI = 'ea9026527c620ff4e5118a5db3b9d5cb';
let resultatsAPI;


const temps = document.querySelector('.temps');
const temperature = document.querySelector('.temperature');
const localisation = document.querySelector('.localisation');
const heure = document.querySelectorAll('.heure-nom-prevision');
const tempPourH = document.querySelectorAll('.heure-prevision-valeur');

if(navigator.geolocation){
    navigator.geolocation.getCurrentPosition(position =>{

       // console.log(position);
       let long = position.coords.longitude;
       let lat = position.coords.latitude;
       AppelAPI(long,lat);

    }, ()=>{
        alert(`vous avez refusé la géolocalisation, l'application ne peut fonctionner, vuillez l'activer !`)
    })
}

function AppelAPI(long,lat){
    fetch(`https://api.openweathermap.org/data/2.5/onecall?lat=${lat}&lon=${long}&exclude=minutely&units=metric&lang=fr&appid=${CLEFAPI}`)
    .then((reponse)=>{
        return reponse.json();
    })
    .then((data)=>{
        //console.log(data);
        resultatsAPI = data;

        temps.innerText = resultatsAPI.current.weather[0].description;
        temperature.innerText = `${Math.trunc(resultatsAPI.current.temp)}°`;
        localisation.innerText = resultatsAPI.timezone;

        // les heures, par tranche de trois avec leur temperature.

        let heureActuelle = new Date().getHours();

        for(let i = 0; i < heure.length; i++){

            let heureIncr = heureActuelle  + i * 3;

            if(heureIncr > 24){
                heure[i].innerText = `${heureIncr-24}h`;
            } else if ( heureIncr === 24){
                heure[i].innerText = "00h";
            }else{
                heure[i].innerText = `${heureIncr} h`;
            }
            
            
        }
        //temp pour 3heure
        for (let j = 0; j < tempPourH.length; j++){
            tempPourH[j].innerText = `${resultatsAPI.hourly[j * 3].temp}°`
        }
    })
}