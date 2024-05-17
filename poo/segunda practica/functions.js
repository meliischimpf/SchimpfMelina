// pantalla con un boton que sea buscar que este boton le pida a ala api de random user,
// se recibe esa persona y se instancia una persona y muestren los datos de esa instancia.



class Persona {
    constructor (name, lastname, gender, city, email){
        this.name = name;
        this.lastname = lastname;
        this.gender = gender;
        this.city = city;
        this.email = email;
     }

}

class Cliente extends Persona {
    constructor (nombre, apellido, dni, nacionalidad, fecha_nacimiento, cuenta) {
        super (nombre, apellido, dni, nacionalidad, fecha_nacimiento);

        this.cuenta = cuenta;

    }
}    


let melina = new Cliente ('Melina', 'Schimpf', 45338356, 'Argentina', 2003, 7);
console.log (melina);

melina.saludar();
