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
    
    let edad = anoActual - this.fecha_nacimiento.getFullYear();
        
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
        super (nombre, apellido, fecha_nacimiento);

        this.saldo = saldo;
        
    }



depositar(cantidadDeposito){                // Hasta $1.000

    if (cantidadDeposito <= 0) {
        return alert ('El valor a depositar debe ser mayor que cero.');
    }

    if (cantidadDeposito >= 1000) {
        return alert ('Ingreso un monto más elevado que lo permitido');
    }


    

    
        
    console.log (cantidadDeposito);
    console.log(this.saldo);

    this.saldo += Number(cantidadDeposito); 
    return this.saldo;
   
    
    

    } 
    
retirar(cantidadRetiro){              // Si el saldo es suficiente


    if (cantidadRetiro <= 0) {
        return alert ('El valor a retirar debe ser mayor que cero.');
    }
    
    if (cantidadRetiro >= this.saldo) {
        return alert ('No tiene suficiente saldo para realizar esta operación.');
    }
    
    console.log (cantidadRetiro);
    console.log(this.saldo);

    this.saldo -= Number(cantidadRetiro); 
    return this.saldo;
    
} 


consultarSaldo(){

    console.log(this.saldo);
    return this.saldo;

} 

}




//funciones

    const cliente = new Cliente(nombre, apellido,  new Date (fecha_nacimiento), '123456789');
    


function enviar(){
    const nombre = document.getElementById('nombre').value;
    const apellido = document.getElementById('apellido').value;
    const fecha_nacimiento = document.getElementById('fecha_nacimiento').value;

    
    
    
    let cuenta = new Cuenta_Bancaria(nombre, apellido, new Date (fecha_nacimiento), '123456789', 500);
    
    console.log (nombre, apellido, fecha_nacimiento);
    console.log (cuenta.getEdad);


    if (cuenta.getEdad() < 18) {
        return alert('Debe tener al menos 18 años para tener una cuenta bancaria.');
    }

    if (fecha_nacimiento == '' || nombre == ''|| apellido == ''){
        return alert ('Ingrese un parámetro válido');
    }
        

    else {
        document.getElementById('boxes').style.display = 'block';
        document.getElementById('datoscliente').style.display = 'none';
    }

}

const cuenta = new Cuenta_Bancaria(nombre, apellido, new Date (fecha_nacimiento), '123456789', 500);


function consultarSaldo (){
    cuenta.consultarSaldo();

    mostrar.innerHTML = `Su saldo actual es: $${cuenta.consultarSaldo()}`;
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
