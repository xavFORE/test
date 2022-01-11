const joursSemaine = ['Lundi','Mardi','Mecredi','Jeudi','Vendredi','Samedi','Dimanche'];

let ajd = new Date();
let options = {weekday: 'long'};
let jourActuel = ajd.toLocaleDateString('fr-FR',options);
console.log(jourActuel,ajd);