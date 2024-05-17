// pantalla con un boton que sea buscar que este boton le pida a a la api de random user,
// se recibe esa persona y se instancia una persona y muestren los datos de esa instancia.



class Persona {
    constructor (name, lastname, gender, city, email){
        this.name = name;
        this.lastname = lastname;
        this.gender = gender;
        this.city = city;
        this.email = email;
    }

        llamar(){

            mostrar.innerHTML = `

            <div class="info-box"> 
                <h1>${this.name}, ${this.lastname} </h1>
                <h3>Género: ${this.gender}</h3>
                <h3>Ciudad: ${this.city}</h3>
                <h3>Email: ${this.email}</h3>
            </div>
        
            `;
        }
}



/* class Cliente extends Persona {
    constructor (nombre, apellido, dni, nacionalidad, fecha_nacimiento, cuenta) {
        super (nombre, apellido, dni, nacionalidad, fecha_nacimiento);

        this.cuenta = cuenta;

    }
}    
*/

function buscarPersona (){;

fetch ('https://randomuser.me/api/')
.then(res => res.json())
.then(data => {

        const datos = data.results[0];
        console.log(datos);

        let persona1 = new Persona (datos.name.first, datos.name.last, datos.gender, datos.location.city, datos.email);
        console.log (persona1);
       
        persona1.llamar();

})
}

    





