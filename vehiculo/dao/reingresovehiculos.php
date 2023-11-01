<?php
require_once('../bo/conexion.php');

class devuelveVehiculos extends conexion {

    public function __construct() {
        parent::__construct();
    }

    public function get_vehiculos() {
        $resultado = $this->conexion_db->query('SELECT * FROM carros');
        $empleados = $resultado->fetch_all(MYSQLI_ASSOC);
        return $vehiculos;
    }

    public function insert_vehiculos($placa,$modelo,$puertas,$puertas){
        $query = 'INSERT INTO carros (Placa, Modelo, Puertas, Puertas) VALUES ("' . $placa . '", "' . $modelo . '","' . $color . '","' . $puertas . '",)';

        $result = $this->conexion_db->query($query);
        return $result;

    }
}
?>
