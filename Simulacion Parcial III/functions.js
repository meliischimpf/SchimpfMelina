// tres personajes rm -> mostrar el primero alfabeticamente
// tres random user -> mostrar el mayor


const box1 = document.getElementById("box1");
const box2 = document.getElementById("box2");

function busquedaRyM (){
    
    fetch (`https://rickandmortyapi.com/api/character/2,149,199`)
        .then(res => res.json())
        .then (data => {

        
            var nombresrym = [data[0].name, data[1].name, data[2].name]
            nombresrym.sort (function(a, b) { b - a
              
            const nombreMayor = nombresrym[0];
            console.log ("Nombres:", nombresrym);
            box1.innerHTML = `<p> El personaje mayor es: ${nombreMayor}</p>`

       } )}
            )}

        


function busquedaRandomUser (){
    fetch (`https://randomuser.me/api/?results=3`)
    .then (res => res.json())
    .then (data => {
    
        var edades = [];
        var edades = [data.results[0].dob.age, data.results[1].dob.age, data.results[2].dob.age]
        
        edades.sort;
        edadMayor = edades[0];

        console.log ("", edades);
        

    box2.innerHTML = `<p> El personaje mayor es: ${edadMayor}</p>`



    /*for (let i = 0; i < 3; i++){

       if (edades [i] > edades [0]) {
        edadMayor = edades [i];	
        console.log ("mayor: ", edadMayor)
        } 
    } */   

    

    })


}



