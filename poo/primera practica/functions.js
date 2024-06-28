const fecha = new Date();

const anoActual = fecha.getFullYear();
const mesActual = fecha.getMonth() + 1;     // como se instancia en 0, se suma 1 para el orden normal.
const diaActual = fecha.getDate();

console.log(diaActual, mesActual, anoActual);

class Persona {
    constructor (nombre, apellido, fecha_nacimiento){
        this.nombre = nombre;
        this.apellido = apellido;
        this.fecha_nacimiento = fecha_nacimiento;
    }

    saludar (){
    console.log(`hola, soy ${this.nombre}`);
    }

    getEdad (){
        let ano = anoActual - this.fecha_nacimiento;
            
            if (mesActual <= this.fecha_nacimiento || diaActual < this.fecha_nacimiento) {
                 ano = (ano - 1);
            }
            
        
        console.log (ano);
    }
    
}



let melina = new Persona ('Melina', 'Schimpf', 2003);
melina.getEdad();