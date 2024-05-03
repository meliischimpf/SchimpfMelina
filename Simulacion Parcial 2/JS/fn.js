var personajes1 = 0;
var personajes2 = 0;
let array = [];
let array2 = [];


function personaje1() {
    const personaje1 = document.getElementById("personaje1").value;

    array.push(personaje1);

    const boton1 = document.getElementById('boton1');
    

    if (array.length == 3) {
        
        boton1.disabled = true;

        var pj1 = array [0];
        var pj2 = array [1];
        var pj3 = array [2];
            
        console.log (pj1, pj2, pj3);
        mostrarpersonaje1 (pj1, pj2, pj3);

    }
}

function personaje2() {
    const personaje2 = document.getElementById("personaje2").value;

    array2.push(personaje2);

    const boton2 = document.getElementById('boton2');

    if (array2.length == 3) {
        
        boton2.disabled = true;
        
        var pj4 = array2 [0];
        var pj5 = array2 [1];
        var pj6 = array2 [2];
            
        console.log (pj4, pj5, pj6);
        mostrarpersonaje2 (pj4, pj5, pj6);

        }  
         
}


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

        .catch(error => console.log(error));
        document.getElementById("error").innerHTML = "error: " + [error];
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

            .catch(error => console.log(error));
            document.getElementById("error").innerHTML = "error: " + [error];
    }

    

                 
    





            
           
   
    