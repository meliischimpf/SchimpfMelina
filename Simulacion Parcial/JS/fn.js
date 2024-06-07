var max = 0;
let array = [];


function mayor() {
    const personajerym = document.getElementById("personajerym").value;
    
    array.push(personajerym);

    if (array.length == 3) {

        var max = array[0];

        for (i = 1; i < array.length; i++) {
            if (array[i] > max) {
                max = array[i];
            }

        }
            
        personaje(max);

    }
}



  function personaje(max) {
    alert(max);


    fetch(`https://rickandmortyapi.com/api/character/${max}`)
      .then(res => res.json())
      .then(data => {
    
        console.log(max);
        let species = data.species;
        console.log (data.id);

        fetch ('https://randomuser.me/api/')
        .then(res => res.json())
        .then(datarandomuser => {

            const datos = datarandomuser.results[0];
            const box1 = document.getElementById("box1");
            const box2 = document.getElementById("box2");
            
            console.log (data.id);
            
            if (species == "Human") {
            box1.innerHTML = `
            <div class="picture-box1">
                <img src= ${datos.picture.large}>
            </div>
    
            <div class="info-box1"> 
                <h1>${datos.name.last}, ${ datos.name.first} </h1>
                <h3>Género: ${datos.gender}</h3>
                <h3>DNI: ${datos.id.value}</h3>
            </div>
               
                `;

                console.log (data.id);
            
            box2.innerHTML = `
            <div class="picture-box2">
                <img src= ${data.image}>
            </div>

            <div class="info-box2"> 
                <h2>${data.name}</h2>
                <p>Especie: ${data.species}</p
                <p>Genero: ${data.gender}</p>
            </div>
    
            `;

            }

            else {

                box1.innerHTML = `
            <div class="picture-box">
                <img src= ${datos.picture.large}>
            </div>
    
            <div class="info-box"> 
                <h1>${datos.name.last}, ${ datos.name.first} </h1>
                <h3>Género: ${datos.gender}</h3>
                <h3>DNI: ${datos.id.value}</h3>
            </div>
               
                `;

            }
        })

  })}

                 
    





            
           
   
    