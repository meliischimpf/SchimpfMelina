
function Personajes() {
  const rymid = document.getElementById("rymid").value;
  fetch(`https://rickandmortyapi.com/api/character/${rymid}`)
    .then(res => res.json())
    .then(data => {
      const ryminfo = document.getElementById("ryminfo");
      


      let gender = data.gender;

      if (gender === "unknown") 
      then = ryminfo.innerHTML = `
        
      <div class= "picture-box">
        <img src="${data.image}" alt="foto">
      </div>

      <div class= "info-box">
          <h2 class="name"><b>${data.name}</b></h2>
          <h4 class="gender">gender = ${data.gender}</h4>
        </div>
      `;



      if (gender != "unknown") 
      then = ryminfo.innerHTML = `

      <div class= "info-box">
          <h2 class="name"><b>No es compatible</b></h2>
        </div>
      `;

    })

    .catch(error => {
      console.error('Error:', error);
      
    });

}