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


    getEdad(){

        const fecha = new Date();

        const anoActual = fecha.getFullYear();
        const mesActual = fecha.getMonth() + 1; 
        const diaActual = fecha.getDate();


        
        let ano = anoActual - this.fecha_nacimiento;
            
            if (mesActual <= this.fecha_nacimiento || diaActual < this.fecha_nacimiento) {
                 ano = (ano - 1);
            }

    }

}


class Cliente extends Persona {
    constructor (name, lastname, gender, city, email, ncuenta) {
        super (name, lastname, gender, city, email);

        this.ncuenta = ncuenta;

    }

    llamarC(){

        mostrar.innerHTML = `

        <div class="info-box"> 
            <h1>${this.name}, ${this.lastname} </h1>
            <h3>Género: ${this.gender}</h3>
            <h3>Ciudad: ${this.city}</h3>
            <h3>Email: ${this.email}</h3>
            <h3>Nº Cuenta: ${this.ncuenta}</h3>
        </div>
    
        `;
    }
    
}

class Empleado extends Persona {
    constructor (name, lastname, gender, city, email, legajo) {
        super (name, lastname, gender, city, email);

        this.legajo = legajo;

    }


    llamarE(){

        mostrar.innerHTML = `

        <div class="info-box"> 
            <h1>${this.name}, ${this.lastname} </h1>
            <h3>Género: ${this.gender}</h3>
            <h3>Ciudad: ${this.city}</h3>
            <h3>Email: ${this.email}</h3>
            <h3>Legajo: ${this.legajo}</h3>
        </div>
    
        `;
    }
}    


function buscarPersona (){;

fetch ('https://randomuser.me/api/')
.then(res => res.json())
.then(data => {

        const datos = data.results[0];

        age = datos.dob.age;

        if (age < 18) {

            let persona1 = new Cliente (datos.name.first, datos.name.last, datos.gender, datos.location.city, datos.email, datos.location.number);
            console.log (persona1);
            persona1.llamarC();
        }
        
        else {

            let persona1 = new Empleado (datos.name.first, datos.name.last, datos.gender, datos.location.city, datos.email, datos.location.postcode);
            console.log (persona1);
            persona1.llamarE();

        }
       
   

})
}

    





