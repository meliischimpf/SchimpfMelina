// un boton de buscar que traigamos 10 nombres.
// uno de rick y morty otro de random user y así.
// decir abajo cual es el mayor de edad y cual es el menor de edad.

// y que cualquier error que se produzca sea visualizado por pantalla.

const mostrar = document.getElementById("mostrar");
const max =  document.getElementById("max");
const min = document.getElementById("min");



function busquedaPersonaje () {

    fetch (`rick&morty.json`)
    .then (res => res.json())
    .then (rymdata => {

        
        fetch (`randomuser.json`)
        .then (res => res.json())
        .then (rudata => {
            
            let rymnombres = [];
            let runombres = [];
            var nombres = [];
            var mayor = 0; 
            var menor = 9999;


            for (let i = 0; i < 5; i++) {
                rymnombres[i] = rymdata[i].name;
                for (let j = 0; j < 5; j++){
                    runombres[j] = rudata[j].name.first;
                    if (mayor < rudata[j].dob.age) {
                        mayor = rudata[j].dob.age;

                    }
                    if (menor > rudata[j].dob.age){
                        menor = rudata[j].dob.age
                    }

                nombres[0] = rymnombres[0]
                nombres[1] = runombres[0]
                nombres[2] = rymnombres[1]
                nombres[3] = runombres[1]
                nombres[4] = rymnombres[2]
                nombres[5] = runombres[2]
                nombres[6] = rymnombres[3]
                nombres[7] = runombres[3]
                nombres[8] = rymnombres[4]
                nombres[9] = runombres[4]


                    }


                    
                }
                
                console.log (nombres);
            
                mostrar.innerHTML = `Los nombres son: ${nombres}`
                
                max.innerHTML  = `La mayor edad es: ${mayor}`;
                min.innerHTML = `La menor edad es: ${menor}`;


       
        })

        .catch (error => {console.error = ('Error ', (error.message )) ;
        document.getElementById("error").innerHTML = (error)})

    })

    .catch (error => {console.error = ('Error ',(error.message )) ;
    document.getElementById("error").innerHTML = (error)})

}