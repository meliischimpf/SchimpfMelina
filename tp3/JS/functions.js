function Busqueda() {
const personaje = document.getElementById("personaje");


fetch( 'https://randomuser.me/api/')
.then( (response) => {response.json})
.then( (data) => {

        console.log(data);


})}  


/*
     personaje.innerHTML = `
    
    <div class="picture-box">
          <img src= ${data.picture}>
      </div>

      <div class="info-box"> 
          <h2>${data.results.0.name}</h2>
          <p>Genero: ${data.gender}</p>
      </div>   
      `*/


    
    
  
        
    
   
    
  