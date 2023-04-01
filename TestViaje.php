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
    $opcion=1;
    $i=1;
    $viajeN= datosViaje();
    
    //AGREGA PASAJEROS - mientras el usuario no marque 2 o exceda el numero maximo de pasajeros no se detendra el conteo de datos de pasajeros  
    while($opcion!=2 && $i<=$viajeN->getMaxPasajeros()){
    echo "ingrese el nombre del pasajero ".$i."\n";
    $nombreP=trim(fgets(STDIN));
    echo "ingrese el apellido del pasajero ".$i."\n";
    $apellidoP=trim(fgets(STDIN));
    echo "ingrese el DNI del pasajero ".$i."\n";
    $dniP=trim(fgets(STDIN));
    $viajeN->agregarPasajero($nombreP,$apellidoP,$dniP);
    $i++;
    echo(" 1) para agregar otro pasajero\n
     2) Para salir \n");
     $opcion =trim(fgets(STDIN));
    }
    $viajes[count($viajes)]= $viajeN;
    case "2":
    //modificar un viaje
    echo "\n Ingrese el numero del viaje que desea modificar ";    
    $numeroViaje = trim(fgets(STDIN));
    modificarViaje($viajes[$numeroViaje]);
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
    echo "\n Ingrese el Código del viaje:\n ";
    $codigo = trim(fgets(STDIN));
    echo " Ingrese el Destino del viaje: \n";
    $destino = trim(fgets(STDIN));
    echo "Ingrese la Cantidad máxima de pasajeros: \n";
    $cantMaxima = trim(fgets(STDIN));
    $viajeN = new Viaje($codigo, $destino, $cantMaxima);
    return $viajeN;
}
//modulo para modificar un viaje
function modificarViaje($viaje){
        $opcion = 0;
        while ($opcion != 5) {
            echo "¿Qué desea modificar?\n";
            echo "1. Código de viaje\n";
            echo "2. Destino\n";
            echo "3. Cantidad máxima de pasajeros\n";
            echo "4. modificar los datos de un pasajero\n";
            echo "5. Salir\n";
            $opcion = trim(fgets(STDIN));
            switch($opcion){
                case "1":
                    //modifica codigo viaje
                    echo "ingrese el nuevo codigo de viaje";
                    $viaje->setCodigoViaje(trim(fgets(STDIN)));
                    break;
                case "2":
                    //modifica destino 
                    echo "ingrese el nuevo destino de viaje";
                    $viaje->setDestino(trim(fgets(STDIN)));
                    break;
                case "3":
                    //modifica cantidad maxima de pasajeros
                    $maxNoConcedida=true;
                    $nMaxima=0;
                    while($maxNoConcedida){
                    echo "ingrese una nueva cantidad maxima de pasajeros";
                    $nMaxima=trim(fgets(STDIN));
                    if($nMaxima< count($viaje->getPasajeros)){
                        echo "la maxima es menor a ".count($viaje->getPasajeros).", que es el numero de pasajeros cargados";
                    }
                    else{
                        $viaje->setMaxPasajeros($nMaxima);
                        echo "la nueva maxima se establecio";
                        $maxNoConcedida=false;
                    }

                }
                    break;
                case "4":
                    //modifica los datos de un pasajero
                    $bandera = true;
                    while($bandera){
                    echo "ingrese el dni del pasajero que quiera modificar";
                    $dniPas= trim(fgets(STDIN));
                    echo "ingrese el nombre a asignar";
                    $nombre= trim(fgets(STDIN));
                    echo "ingrese el apellido a asignar";
                    $apellido= trim(fgets(STDIN));
                    $viaje->ModificarDatosPasajero($dniPas, $nombre, $apellido);
                    echo("desea modificar otro pasajero? \n
                    1) si \n
                    2) no \n");
                    $respuesta = trim(fgets(STDIN));
                    if($respuesta != 1){
                        $bandera=false;
                    }


                }
                    break;
                case "5":
                    break;
            }
}
}

