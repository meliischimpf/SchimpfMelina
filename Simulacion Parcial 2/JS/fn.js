var personajes1 = 0;
var personajes2 = 0;
let array = [];
let array2 = [];


function personaje1() {
    const personaje1 = document.getElementById("personaje1").value;
    const boton1 = document.getElementById('boton1');
    
if (personaje1 < 827 && personaje1 > 0){

  array.push(personaje1);

    if (array.length == 3) {

        
        boton1.disabled = true;

        var pj1 = array [0]; 
        var pj2 = array [1];  
        var pj3 = array [2];  

        
        console.log (array);
        mostrarpersonaje (array);
      }
    }

    else {
      alert ("Error: Valor incorrecto");
    }

}



function personaje2() {

    const personaje2 = document.getElementById("personaje2").value;
    const boton2 = document.getElementById('boton2');

if (personaje2 < 827 && personaje2 > 0){

  array2.push(personaje2);

    if (array2.length == 3) {
        
        boton2.disabled = true;
        
        var pj4 = array2 [0]; 
        var pj5 = array2 [1]; 
        var pj6 = array2 [2]; 

        let arraysuma = array.concat(array2);
        console.log (arraysuma);
        mostrarpersonaje (arraysuma);
          
      }   
    }  
  
  else {
    alert ("Error: Valor incorrecto");
  }
   }   
    

    function mostrarpersonaje(arraysuma) {

      

      fetch(`https://rickandmortyapi.com/api/character/`+ arraysuma)
        .then(res => res.json())
        .then(data => {
  
  
              const box1 = document.getElementById("box1");
              const box2 = document.getElementById("box2");


          if (arraysuma.length == 6){
            console.log (arraysuma);
              
            for (i = 0; i <= 6; i++){
                if (data[i] == arraysuma[i]){
                  
                    
                    box1.innerHTML = `
                      <div class="picture-box1">
                          <img src= ${data[i].image}>
                          <img src= ${data[i].image}>
                          <img src= ${data[i].image}>
                      </div>
                      `;
                      
                    box2.innerHTML = `
                      <div class="picture-box2">
                          <img src= ${data[i].image}>
                          <img src= ${data[i].image}>
                          <img src= ${data[i].image}>
                      </div>
                      `;
                      }



              }
    
              

    }
  })
}
      


    /*
  function mostrarpersonaje1(pj1, pj2, pj3) {

    fetch(`https://rickandmortyapi.com/api/character/${pj1},${pj2},${pj3}`)
      .then(res => res.json())
      .then(data => {


            const box1 = document.getElementById("box1");
             
            var pj1= data[0];
            var pj2= data[1];
            var pj3= data[2];
           
            

            box1.innerHTML = `
            <div class="picture-box1">
                <img src= ${pj1.image}>
                <img src= ${pj2.image}>
                <img src= ${pj3.image}>
            </div>
            `;
          })
      }

    




      function mostrarpersonaje2(pj4, pj5, pj6) {

        fetch(`https://rickandmortyapi.com/api/character/${pj4},${pj5},${pj6}`)
          .then(res => res.json())
          .then(data => {

                const box2 = document.getElementById("box2");
                
                var pj4= data[0];
                var pj5= data[1];
                var pj6= data[2];
    
                
                box2.innerHTML = `
                <div class="picture-box1">
                    <img src= ${pj4.image}>
                    <img src= ${pj5.image}>
                    <img src= ${pj6.image}>
                </div>
                `;
          })
        }
      
*/




            
           
   
    