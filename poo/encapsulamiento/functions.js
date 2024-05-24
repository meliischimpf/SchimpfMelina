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

consultar_Saldo(){

    return this.saldo;

} 


depositar(){                // Hasta $1.000
    const deposito = document.getElementById('depositar');

    if (deposito > 1000) {
        error.innerHTML = `
        <p>Ingreso un monto elevado</p> 
        `;
    }

    else {
        this.saldo = this.saldo + deposito; 

    }
    console.log (deposito);
    return this.saldo;

    } 
    
retirar(){              // Si el saldo es suficiente

    const retiro = document.getElementById('retirar');

    if (retiro > saldo) {
        error.innerHTML = `
        <p>Ingreso un monto que no tiene</p> 
        `;
    }
    
    else {
        this.saldo = this.saldo - retiro; 
    
    }
     console.log (retiro);
    return this.saldo;
    
} 

}

let cliente1 = new Cliente ('Pedro', 'Lopez', );
let cuenta = new Cuenta_Bancaria ();


