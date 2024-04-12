  function Personajes() {
  
  const personaje1 = document.getElementById("personaje1").value;
  const personaje2 = document.getElementById("personaje2").value;
  const box1 = document.getElementById("box1");
  const box2 = document.getElementById("box2");
  const match = document.getElementById("match");

  let genero1 = "";
  let genero2 = "";
  let nombre1 = "";
  let nombre2 = "";


  
  fetch(`https://rickandmortyapi.com/api/character/`)
    .then(res => res.json())
    .then(data => {
      
      console.log(data.results);
      data.results.forEach(function(genero) {


          if(personaje1 == genero.id){
              box1.innerHTML = `

              <div class="picture-box1">
                <img src= ${genero.image}>
              </div>

              <div class="info-box1"> 
                <h2>Nombre: ${genero.name}</h2>
                <p>Especie: ${genero.species}</p>
                <p>Estado: ${genero.status}</p>
                <p>Genero: ${genero.gender}</p>
              </div>
              
              `;

                  genero1 = genero.gender;
                  nombre1 = genero.name;

              }
              

          if(personaje2 == genero.id){
              box2.innerHTML = `
              
              <div class="picture-box2">
                <img src= ${genero.image}>
              </div>

              <div class="info-box2"> 
                <h2>Nombre: ${genero.name}</h2>
                <p>Especie: ${genero.species}</p>
                <p>Estado: ${genero.status}</p>
                <p>Genero: ${genero.gender}</p>
              </div>
              
              `;

                genero2 = genero.gender;
                nombre2 = genero.name;

              }

            });

          if (genero1 == genero2) {
            match.innerHTML = `
            <img class="match-pic" src="js/img/match.png" alt="match">
             <h3 class="match-info"> Matching c: </h3>
            `;

        } else {
            match.innerHTML = `
      
            <img class="no-match-pic" src="js/img/no_match.png" alt="no match">
            <h3 class="no-match-info"> Not Matching :c </h3>
            `;
    
    }})

    .catch (error => {
      console.error('Error:', error);
      
    });

}