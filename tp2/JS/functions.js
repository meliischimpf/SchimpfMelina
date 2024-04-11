
function Personajes() {
  const rymid = document.getElementById("rymid").value;
  fetch(`https://rickandmortyapi.com/api/character/${rymid}`)
    .then(res => res.json())
    .then(data => {
      const ryminfo = document.getElementById("ryminfo");
      ryminfo.innerHTML = `
        
      <div class= "box">
          <h2 class="name"><b>${data.name}</b></h2>
        </div>

      `;
    })

    .catch(error => {
      console.error('Error:', error);
      
    });
}