<?php

require_once 'Vehiculo.php';
require_once 'Reparacion.php';
require_once 'Trait.php';


$array = [ 
    ['matricula' => 'ABC123', 'marca' => 'Toyota', 'modelo' => 'Corolla', 'cliente' => 'Juan Pérez', 'tipoServicio' => 'Cambio de aceite', 'fecha' => '2024-10-15', 'costo' => 50], 
    ['matricula' => 'XYZ789', 'marca' => 'Ford', 'modelo' => 'Focus', 'cliente' => 'María López', 'tipoServicio' => 'Revisión general', 'fecha' => '2024-10-14', 'costo' => 100], 
    ['matricula' => 'DEF456', 'marca' => 'Honda', 'modelo' => 'Civic', 'cliente' => 'Carlos Rodríguez', 'tipoServicio' => 'Reparación de motor', 'fecha' => '2024-10-13', 'costo' => 500], 
    ['matricula' => 'GHI789', 'marca' => 'Chevrolet', 'modelo' => 'Cruze', 'cliente' => 'Ana Martínez', 'tipoServicio' => 'Cambio de frenos', 'fecha' => '2024-10-12', 'costo' => 150], 
    ['matricula' => 'JKL012', 'marca' => 'Nissan', 'modelo' => 'Sentra', 'cliente' => 'Pedro Sánchez', 'tipoServicio' => 'Alineación y balanceo', 'fecha' => '2024-10-11', 'costo' => 80], 
    ]; 


class GestionTaller {

    use CalculadoraCostos;

    private $array;
    protected $reparacion = [];

    public function __construct($array) {
        $this->array = $array;
    }
   
    public function registrarReparacion($reparacion){
        $this->array[] = [  'matricula' => $reparacion->matricula,
                            'marca' => $reparacion->marca,
                            'modelo' => $reparacion->modelo,
                            'cliente' => $reparacion->nombreCliente,
                            'tipoServicio' => $reparacion->tipoServicio,
                            'fecha' => $reparacion->fecha,
                            'costo' => $reparacion->costo,
                        ];

    }

    public function buscarPorMatricula($matricula){
        foreach ($this->array as $data){
            if (stripos($data['matricula'], $matricula) !== false){
                
                return new Reparacion($data['matricula'], $data['marca'], $data['modelo'], $data['cliente'], $data['tipoServicio'], $data['fecha'], $data['costo']);
            
            } else {
                return null;
            }
        }
    }

    public function buscarPorCliente($nombreCliente){
        foreach ($this->array as $data){
            if (stripos($data['cliente'], $nombreCliente) !== false){
                
                return new Reparacion($data['matricula'], $data['marca'], $data['modelo'], $data['cliente'], $data['tipoServicio'], $data['fecha'], $data['costo']);
            
            } else {
                return null;
            }
        }
    }

}

$taller = new GestionTaller ($array);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {    
    $matricula = $_POST['matricula'];  
    $marca = $_POST['marca'];  
    $modelo = $_POST['modelo'];  
    $nombreCliente = $_POST['nombreCliente'];  
    $tipoServicio = $_POST['tipoServicio'];
    $fecha = $_POST['fecha'];
    $costo = $_POST['costo'];

    $horasTrabajo = 8;  

    $vehiculo = $taller->buscarPorMatricula($matricula);

    if (!$vehiculo){
        $vehiculo = $taller->buscarPorCliente($nombreCliente);
    }

    if ($vehiculo){
        echo $vehiculo->getInformacion();
        echo $vehiculo->getDetalleReparacion();

        $costoTotal = $vehiculo->obtenerCostoTotal($horasTrabajo);

        echo "costo total de la reparación: $" . $costoTotal;
    } else {
        "vehiculo no encontrado";
    }

}
    












?>
