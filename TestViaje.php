<?php
include_once 'Viaje.php';

$viaje1 = new Viaje('f31n','villa traful', 8);
$viajes = array();
$viajes[0] = $viaje1;
echo(" \n
 A continuacion elija una de las siguientes opciones: \n
1) para cargar informacion de un viaje \n
2) Para modificar un viaje \n
3) Para ver los datos de un viaje \n
");
$eleccion = trim(fgets(STDIN));
switch($eleccion){
    case "1":
    $viajes[count($viajes)]=new Viaje($codigo, $destino, $cantMaxima);
    case "2":
    //modificar un viaje
    echo "\n Ingrese el numero del viaje que desea modificar ";
    $numeroViaje = trim(fgets(STDIN));
    if($numeroViaje< count($viajes) && $numeroViaje>0){
    $viajeN=  datosViaje();
    $viajes[$numeroViaje]->setCodViaje= $viajeN->getCodViaje();
    $viajes[$numeroViaje]->setDestino = $viajeN->getDestino();
    $viajes[$numeroViaje]->setMaxPasajeros = $viajeN->getMaxPasajeros();
    while($viajeN->getMaxPasajeros()>$i){
    echo "\n ingrese el nombre del pasajero ".$i."\n";
    echo "\n ingrese el apellido del pasajero ".$i."\n";
    echo "\n ingrese el nombre del pasajero ".$i."\n";
    
    }
    }
    else{
        echo("\n el numero no coincide con el rango de viajes almacenados");
    }

    case "3":  
    //ver los datos de un viaje
    echo "escriba el numero del viaje que desea conocer";
    $indice = trim(fgets(STDIN));
    echo $viajes[$indice]->__toString();
}
//modulo para pedir los datos de un viaje y devolverlos en un arreglo
 function datosViaje(){
    //agrega un swich para consultar que datos desean agregarse o cambiarse
    echo "\n Ingrese el Código del viaje:\n ";
    $codigo = trim(fgets(STDIN));
    echo " Ingrese el Destino del viaje: \n";
    $destino = trim(fgets(STDIN));
    echo "Ingrese la Cantidad máxima de pasajeros: \n";
    $cantMaxima = trim(fgets(STDIN));
    $viajeN = new Viaje($codigo, $destino, $cantMaxima);
    return $viajeN;
}
//modulo para pedir los datos de un pasajero y devolverlos en un arreglo

