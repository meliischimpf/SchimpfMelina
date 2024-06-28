function Personajes() {
  const personaje1 = document.getElementById("personaje1").value;
  const personaje2 = document.getElementById("personaje2").value;

  let generopj1 = "";
  let generopj2 = "";



  fetch(`https://rickandmortyapi.com/api/character/${personaje1},${personaje2}`)
    .then(res => res.json())
    .then(data => {

      const pj1 = data[0];
      const pj2 = data[1];
      
      if (personaje1 === personaje2) {
        const box1 = document.getElementById("box1");
      box1.innerHTML = `
        
      <div class="picture-box1">
          <img src= ${pj1.image}>
      </div>

      <div class="info-box1"> 
          <h2>${pj1.name}</h2>
          <p>Especie: ${pj1.species}</p
          <p>Estado: ${pj1.status}</p>
          <p>Genero: ${pj1.gender}</p>
      </div>
              
        `;

          generopj1 = pj1.gender;
        
        
        const box2 = document.getElementById("box2");
        box2.innerHTML = `
            
          <div class="picture-box2">
              <img src= ${pj1.image}>
          </div>
    
          <div class="info-box2"> 
              <h2>${pj1.name}</h2>
              <p>Especie: ${pj1.species}</p
              <p>Estado: ${pj1.status}</p>
              <p>Genero: ${pj1.gender}</p>
          </div>
                
            `;

            generopj2 = pj1.gender;

      }

      else {

      const box1 = document.getElementById("box1");
      box1.innerHTML = `
        
      <div class="picture-box1">
          <img src= ${pj1.image}>
      </div>

      <div class="info-box1"> 
          <h2>${pj1.name}</h2>
          <p>Especie: ${pj1.species}</p
          <p>Estado: ${pj1.status}</p>
          <p>Genero: ${pj1.gender}</p>
      </div>
              
        `;

          generopj1 = pj1.gender;

    box2.innerHTML = `
        
      <div class="picture-box2">
          <img src= ${pj2.image}>
      </div>

      <div class="info-box2"> 
          <h2>${pj2.name}</h2>
          <p>Especie: ${pj2.species}</p
          <p>Estado: ${pj2.status}</p>
          <p>Genero: ${pj2.gender}</p>
      </div>
              
        `;

                  generopj2 = pj2.gender;

    }


    const match = document.getElementById("match");

    if (generopj1 == generopj2) {
            match.innerHTML = `
            
            <h3 class="match-info"> Matching c: </h3>
            <img class="match-pic" src="js/img/match.png" alt="match">
          
            `;
    } 
        
    else {
            match.innerHTML = `

            <h3 class="no-match-info"> Not Matching :c </h3>
            <img class="no-match-pic" src="js/img/no_match.png" alt="no match">
            
            `;
    
  
  }})

    .catch(error => {
      console.error('Error:', error);
      
    })

}

