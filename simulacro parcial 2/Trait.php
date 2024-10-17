<?php

require_once 'Alumno.php';

trait notificar {
    public function notificacion() {
        return "el mail ha sido enviado a " . $this->email . "</br>";
    }
}




/* parent::__construct 

public function mostrarEmail($email){
        return $email;

    }*/

?>