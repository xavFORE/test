const CLEFAPI = 'ea9026527c620ff4e5118a5db3b9d5cb';
let resultatsAPI;

if(navigator.geolocation){
    navigator.geolocation.getCurrentPosition(position =>{

        console.log(position);

    }, ()=>{
        alert(`vous avez refusé la géolocalisation, l'application ne peut fonctionner, vuillez l'activer !`)
    })
}