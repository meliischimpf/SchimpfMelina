function Personajes() {
  const personaje1 = document.getElementById("personaje1").value;
  const personaje2 = document.getElementById("personaje2").value;

  let genero1 = "";
  let genero2 = "";
  let nombre1 = "";
  let nombre2 = "";



  fetch(`https://rickandmortyapi.com/api/character/${personaje1},${personaje2}`)
    .then(res => res.json())
    .then(data => {

      const data1 = data[0];
      const data2 = data[1];

      const box1 = document.getElementById("box1");
      box1.innerHTML = `
        
      <div class="picture-box1">
          <img src= ${data1.image}>
      </div>

      <div class="info-box1"> 
          <h2>${data1.name}</h2>
          <p>Especie: ${data1.species}</p
          <p>Estado: ${data1.status}</p>
          <p>Genero: ${data1.gender}</p>
      </div>
              
        `;

                  genero1 = data1.gender;
                  nombre1 = data1.name;
    


    const box2 = document.getElementById("box2");
    box2.innerHTML = `
        
      <div class="picture-box1">
          <img src= ${data2.image}>
      </div>

      <div class="info-box1"> 
          <h2>${data2.name}</h2>
          <p>Especie: ${data2.species}</p
          <p>Estado: ${data2.status}</p>
          <p>Genero: ${data2.gender}</p>
      </div>
              
        `;

                  genero2 = data2.gender;
                  nombre2 = data2.name;
                


    const match = document.getElementById("match");

    if (genero1 == genero2) {
            match.innerHTML = `
            
            <h3 class="match-info"> Matching c: </h3>
            <img class="match-pic" src="js/img/match.png" alt="match">
          
            `;


        } else {
            match.innerHTML = `

            <h3 class="no-match-info"> Not Matching :c </h3>
            <img class="no-match-pic" src="js/img/no_match.png" alt="no match">
            
            `;
    

      }})

    .catch(error => {
      console.error('Error:', error);
      
    })

}

