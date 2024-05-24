/*class Persona {
    constructor (name, lastname){
    this.name = name;
    this.lastname = lastname;   
    }

    get getName(){
    return this.name;
    }

    set setName(name){
        this.name = name;
    }

}

const melina = new Persona ('Melina', 'Schimpf');

*/

class Cliente {
    constructor(nombre, apellido, fecha_nacimiento, numCuenta){
        this.nombre = nombre;
        this.apellido = apellido;   
        this.fecha_nacimiento = fecha_nacimiento;
        this.numCuenta = numCuenta; // Si es mayor de edad el usuario
    }


    getEdad(){
    
    const fecha = new Date();

    const anoActual = fecha.getFullYear();
    const mesActual = fecha.getMonth() + 1; 
    const diaActual = fecha.getDate();
    
    const edad = anoActual - this.fecha_nacimiento.getFullYear();
        
        if (mesActual < this.fecha_nacimiento.getMonth() + 1 || 
            (mesActual === this.fecha_nacimiento.getMonth() + 1 &&
             diaActual < this.fecha_nacimiento.getDate())) 
             {

             edad -1;
        }

        return edad;

    }
}

class Cuenta_Bancaria extends Cliente {
    constructor(nombre, apellido, fecha_nacimiento, numCuenta, saldo){
        super (nombre, apellido, fecha_nacimiento, numCuenta);

        this.saldo = saldo;
    }



depositar(cantidadDeposito){                // Hasta $1.000

    if (cantidadDeposito <= 0) {
        throw new Error('El valor a depositar debe ser mayor que cero.');
    }

    if (cantidadDeposito > 1000) {
        error.innerHTML = `
        <p>Ingreso un monto más elevado que lo permitido.</p> 
        `;
    }


    console.log (cantidadDeposito);

    this.saldo += Number(cantidadDeposito); 
    console.log(this.saldo);
    return this.saldo;

    } 
    
retirar(cantidadRetiro){              // Si el saldo es suficiente


    if (cantidadRetiro <= 0) {
        throw new Error('El valor a retirar debe ser mayor que cero.');
    }
    
    if (cantidadRetiro > this.saldo) {
        throw new Error('No tiene suficiente saldo para realizar esta operación.');
    }
    
     console.log (cantidadRetiro);

    this.saldo -= Number(cantidadRetiro); 
    console.log(this.saldo);
    return this.saldo;
    
} 


consultarSaldo(){

    console.log(this.saldo);
    return this.saldo;

} 

}




//inicializar

let cuenta = new Cuenta_Bancaria('Pedro', 'Lopez', new Date (30, 10, 1997), '123456789', 500);

console.log('Saldo actual:', cuenta.consultarSaldo());



//funciones

const saldo = cuenta.consultarSaldo();

function consultarSaldo () {
    cuenta.consultarSaldo();
    mostrar.innerHTML = `<p> Su saldo actual es: ${cuenta.consultarSaldo()} </p>`;
}

function depositar (){
    const cantidadDeposito = document.getElementById('cantidadDeposito').value;
    cuenta.depositar (cantidadDeposito);

}

function retirar(){
    const cantidadRetiro = document.getElementById('cantidadRetiro').value;
    cuenta.retirar (cantidadRetiro);

}



/*localStorage.setItem("data", Json.stringify(data));
let aux1 = localStorage.getItem("data");

console.log (Json.parse(aux1));
*/













//trycatch

/*
try {
    cuenta.depositar(600);
    console.log('Nuevo saldo después del depósito:', cuenta.consultarSaldo());
} catch (error) {
    console.error('Error al depositar:', error.message);
}


try {
    cuenta.retirar(300);
    console.log('Nuevo saldo después del retiro:', cuenta.consultarSaldo());
} catch (error) {
    console.error('Error al retirar:', error.message);
}

*/
