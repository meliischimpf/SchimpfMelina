var personajes1 = 0;
var personajes2 = 0;
var primero = 1;
var ultimo = 826;
let array = [];
let array2 = [];


function personaje1() {
    const personaje1 = document.getElementById("personaje1").value;
    const boton1 = document.getElementById('boton1');
    
  if ((personaje1 <= ultimo) && (personaje1 >= primero) && (personaje1 !== array)){
    
  array.push(personaje1);

    if (array.length == 3) {

        boton1.disabled = true;
        
        console.log (array);
      }
    }

    else if (personaje1 == array){
      alert ("Valor previamente ingresado");
    }
    else {
      alert ("Error: Valor incorrecto");
    }

}



function personaje2() {

    const personaje2 = document.getElementById("personaje2").value;
    const boton2 = document.getElementById('boton2');

  if ((personaje2 <= ultimo) && (personaje2 >= primero) && (personaje2 !== array2)){


  array2.push(personaje2);

    if (array2.length == 3) {
        
        boton2.disabled = true;

        arraysuma = array.concat(array2);
        console.log (arraysuma);
        mostrarpersonaje (arraysuma);
          
      }   
    }  
  else if (personaje1 == array){
    alert ("Valor previamente ingresado");
  }
  else {
    alert ("Error: Valor incorrecto");
  }
}   
    

function mostrarpersonaje(arraysuma) {

     try {

      fetch(`https://rickandmortyapi.com/api/character/`+ arraysuma)
        .then(res => res.json())
        .then(data => {
      
      
          const box1 = document.getElementById("box1");
          const box2 = document.getElementById("box2");


                  console.log (data);

                for (i = 0; i < data.length; i++){
                  for (j = 0; j < array.length; j++){ 
                
                        if (data[i].id == array[j]) {
                          
                          box1.innerHTML += `
                          <div class="picture-box1">
                              <img src= ${data[i].image}>
                          </div>
                          `;
                        }
                      }
                    }

                      
                  for (i = 0; i < data.length; i++){
                      for (k = 0; k < array2.length; k++){ 
          
                        if (data[i].id == array2[k]) {
                        
                            box2.innerHTML += `
                          <div class="picture-box2">
                              <img src=${data[i].image}>
                          </div>
                          `;
                          
                        }
                      }
                  }
        }
      )
    } 
      catch (error) {
        error.innerHTML = 
        `error: `+ error;
      }
      
}
          