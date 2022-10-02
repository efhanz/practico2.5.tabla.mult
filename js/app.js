// otro modo con ASYNC

"use strict"

let form = document.querySelector("#form-calc");
if (form) {
    form.addEventListener('submit', calcular);
}

async function calcular(e) {
    e.preventDefault();
    let data = new FormData(form);

    let numero1 = data.get('numero1');
    let op = data.get('op');

    // construir url (sumar/2/3)
    let url = `${op}/${numero1}`;  // op + "/" + numero1 + / ""
    console.log(url);
  
    // primer posibilidad con ajax

   let response = await fetch(url);
   let resultado = await response.text();
   document.querySelector("#resultado").innerHTML = resultado;

    // segunda posibilidad sin ajax con window.location 
    // window.location.href = url;
     //te lleva a otra pagina pero no me anduvo

}

    /*async function calcular(e) {
        e.preventDefault();
        let data = new FormData(form);
    
        let numero1 = data.get('numero1');
        let op = data.get('op');
    
        // construir url (sumar/2/3)
        let url = `${op}/${numero1}`;  // op + "/" + numero1 + / ""
        
        // realizo el llamado
        // window.location.href = url;
    
        let response = await fetch(url);
        let resultado = await response.text();
        document.querySelector('#resultado').innerHTML = resultado;
        */

