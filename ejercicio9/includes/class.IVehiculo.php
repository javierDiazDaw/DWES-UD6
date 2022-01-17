<?php
    interface IVehiculo{

        public function circula();

        public function añadir_persona($peso_persona);

        public static function ver_atributo($objeto);

    }
?>