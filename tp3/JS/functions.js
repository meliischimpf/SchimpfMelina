function Busqueda() {

const personaje = document.getElementById("personaje");

fetch ('https://randomuser.me/api/')
.then(res => res.json())
.then(data => {

        const datos = data.results[0];

        console.log(datos);

        personaje.innerHTML = `

        <div class="picture-box">
            <img src= ${datos.picture.large}>
        </div>

        <div class="info-box"> 
            <h1>${datos.name.last}, ${ datos.name.first} </h1>
            <h3>Género: ${datos.gender}</h3>
            <h3>DNI: ${datos.id.value}</h3>
            <h3>Longitud: ${datos.location.coordinates.latitude}</h3>
            <h3>Latitud: ${datos.location.coordinates.longitude}</h3>
        </div>
           
            `;

        let lat = datos.location.coordinates.latitude;
        let lon = datos.location.coordinates.longitude;
  
        var mapa = L.DomUtil.get('mapa');
            if (mapa != null) {
                mapa._leaflet_id = null;
            }


        var map = L.map('mapa').setView([lat, lon], 3);


        L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
          maxZoom: 19,
          attribution:'&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',})
          .addTo(map);
    

          L.marker([lat, lon]).addTo(map);

        /**/   

    })
       

        .catch((error) => {
            console.error('Error:', error);

     });

}