<?php
class Viaje
{
    //atributos
    private $codViaje;
    private $destino;
    private $maxPasajeros;
    private $cantPasajeros
    private $pasajeros[];
    //metodo constructor
    public function __construct($cViaje,$dest,$maxP, $cantP,$arrPasaj[]){
        $this->pasajeros = $arrPasaj;
   $this->codViaje = $cViaje;
   $this->destino = $dest;
   $this->maxPasajeros = $maxP;
   $this->cantPasajeros = $cantP;
    }
    //metododos de acceso
    //setters
    public function setPasajero($nPasajero, $pos){
    $this->pasajeros[$pos] = $nPasajero;
    }
    public function setCodViaje($nCodViaje){
    $this->codViaje = $nCodViaje;
    }
    public function setDestino($ndestino){
$this->destino = $ndestino;
    }
    public function setMaxPasajeros($nMaxPasajeros){
$this->maxPasajeros = $nMaxPasajeros;
    }
    public function setCantPasajeros($nCantPasajeros){
$this->maxPasajeros = $nMaxPasajeros;
    }
    //getters
    public function getPasajeros(){
return $this->pasajeros[];
    }
    public function getCodViaje(){
    return $this->CodViaje;
    }
    public function getDestino(){
return $this->destino;
    }
    public function getmaxPasajeros(){
    return $this->maxPasajeros;
    }
    public function getCantPasajeros(){
    return $this->cantPasajeros;
    }
    //funcion para obtener el indice que coincide con el dni que ingresa por parametro
public function buscarIndPasajero( $dniPasajero){
    $ind=-1;
    $bandera=true;
    while($bandera && $i<count($this->getPasajeros)){
   if( $this->getPasajeros()[$i]['dni']==$dniPasajero){
   $ind = $i;
   $i=count($this->getPasajeros);
   $bandera = false;
   }
    }
    return $ind;

}
public function ingresarDatosPasajero($dniPasajero, $datosPasajero){


}
}
 