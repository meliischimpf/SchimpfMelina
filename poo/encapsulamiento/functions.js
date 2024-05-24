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

}

class Cuenta_Bancaria extends Cliente{
    constructor(nombre, apellido, fecha_nacimiento, numCuenta, saldo){
        super (nombre, apellido, fecha_nacimiento, numCuenta);

        this.saldo = saldo;
    }

consultarSaldo(){

    return this.saldo;

} 


depositar(monto){                // Hasta $1.000
    const cantidadDeposito = document.getElementById('cantidadDeposito').value;

    if (monto <= 0) {
        throw new Error('El valor a depositar debe ser mayor que cero.');
    }

    if (monto > 1000) {
        error.innerHTML = `
        <p>Ingreso un monto más elevado que lo permitido.</p> 
        `;
    }


    console.log (monto);

    this.saldo += monto; 
    return this.saldo;

    } 
    
retirar(monto){              // Si el saldo es suficiente

    
    const cantidadRetiro = document.getElementById('cantidadRetiro').value;


    if (monto <= 0) {
        throw new Error('El valor a retirar debe ser mayor que cero.');
    }
    

    if (monto > this.saldo) {
        throw new Error('No tiene suficiente saldo para realizar esta operación.');
    }

    
     console.log (monto);

    this.saldo -= monto; 
    return this.saldo;
    
} 

}




function depositar (){
    const cantidadDeposito = document.getElementById('cantidadDeposito').value;
}

function retirar(){
    const cantidadRetiro = document.getElementById('cantidadRetiro').value;
}


let cuenta = new Cuenta_Bancaria('Pedro', 'Lopez', '1997-10-05', '123456789', 500);


console.log('Saldo actual:', cuenta.consultarSaldo());










//trycatch


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


