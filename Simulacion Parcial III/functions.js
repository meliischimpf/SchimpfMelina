// tres personajes rm -> mostrar el primero alfabeticamente
// tres random user -> mostrar el mayor


const box1 = document.getElementById("box1");
const box2 = document.getElementById("box2");

function busquedaRyM (){
    
    fetch (`https://rickandmortyapi.com/api/character/2,149,199`)
        .then(res => res.json())
        .then (data => {

        
            var nombresrym = [data[0].name, data[1].name, data[2].name]
            
           
            nombreMayor = nombresrym.sort ()
            nombreMayor = nombresrym[2];
                
            
            
              
            
            console.log ("Nombres:", nombresrym);
            box1.innerHTML = `<p> El personaje mayor es: ${nombreMayor}</p>`

       } 
    )}
          
        


function busquedaRandomUser (){
    fetch (`https://randomuser.me/api/?results=3`)
    .then (res => res.json())
    .then (data => {
    
        const edades = [];
        var edadMayor = 0;
        
        
        for  (let i = 0; i < 3 ; i++) {
           
            edades.push(data.results[i].dob.age);
            console.log(edades);
        
        
                for (let j = 0; j < 3; j++) {
                
                    if (edades[j] > edadMayor) {
                        edadMayor = edades[j];
                        console.log (edadMayor);

                        }
                    }
           
        }

    console.log ("mayor: ", edadMayor);
    box2.innerHTML = `<p> El personaje con mayor edad tiene: ${edadMayor}</p>`




})


}



