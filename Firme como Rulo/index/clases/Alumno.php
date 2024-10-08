<?php

class Alumno {
    
    public function __construct(
        public $nombre, 
        public $apellido, 
        public $mail, 
        public $fecha_nacimiento, 
        public $dni, 
        public $presente,
        public $parcial1,
        public $parcial2,
        public $final
    ) {}

    public function nombreAlumno() {
        return $this->nombre;
    }

    //registrar o eliminar asistencia
    public static function gestionarAsistencia($id_alumno, $id_materia, $presente) {
        
        require_once $_SERVER['DOCUMENT_ROOT'] . '/Firme como Rulo/index/conexion.php';

        $db = new Database();
        $conn = $db->connect();
    
        $fecha_actual = date('Y-m-d');
    
        if ($presente) {
            // registra asistencia
            $query = "INSERT INTO asistencias (id_alumno, id_materia, fecha_asistencia) 
                      VALUES (:id_alumno, :id_materia, :fecha_asistencia)
                      ON DUPLICATE KEY UPDATE fecha_asistencia = :fecha_asistencia"; // actualiza si existe
        } else {
            // eliminar asistencia
            $query = "DELETE FROM asistencias 
                      WHERE id_alumno = :id_alumno AND id_materia = :id_materia AND fecha_asistencia = :fecha_asistencia";
        }
    
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id_alumno', $id_alumno, PDO::PARAM_INT);
        $stmt->bindParam(':id_materia', $id_materia, PDO::PARAM_INT);
        $stmt->bindParam(':fecha_asistencia', $fecha_actual, PDO::PARAM_STR);
        $stmt->execute();
    }
    


    public static function gestionarNotas($id_alumno, $id_materia, $parcial1, $parcial2, $final) {
        require_once $_SERVER['DOCUMENT_ROOT'] . '/Firme como Rulo/index/conexion.php';
    
        $db = new Database();
        $conn = $db->connect();
    
        // si está vacío asigna 0
        $parcial1 = !empty($parcial1) ? $parcial1 : 0; 
        $parcial2 = !empty($parcial2) ? $parcial2 : 0; 
        $final = !empty($final) ? $final : 0; 
    
        $query = "INSERT INTO calificaciones (id_alumno, id_materia, parcial1, parcial2, final) 
        VALUES (:id_alumno, :id_materia, :parcial1, :parcial2, :final) 
        ON DUPLICATE KEY UPDATE 
        parcial1 = :nuevo_parcial1, 
        parcial2 = :nuevo_parcial2, 
        final = :nuevo_final";
    
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id_alumno', $id_alumno, PDO::PARAM_INT);
        $stmt->bindParam(':id_materia', $id_materia, PDO::PARAM_INT);
        $stmt->bindParam(':parcial1', $parcial1, PDO::PARAM_STR);
        $stmt->bindParam(':parcial2', $parcial2, PDO::PARAM_STR);
        $stmt->bindParam(':final', $final, PDO::PARAM_STR);
        
        $stmt->bindParam(':nuevo_parcial1', $parcial1, PDO::PARAM_STR);
        $stmt->bindParam(':nuevo_parcial2', $parcial2, PDO::PARAM_STR);
        $stmt->bindParam(':nuevo_final', $final, PDO::PARAM_STR);
        
        $stmt->execute();
    }
}

?>
