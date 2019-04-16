<?php
class Usuario{
    private $nombre;
    private $clave;
    private $nomusu;
    
    function __construct($nombre, $clave, $nomusu) {
        $this->nombre = $nombre;
        $this->clave = md5($clave);
        $this->nomusu = $nomusu;
    }
    function getNombre() {
        return $this->nombre;
    }

    function getClave() {
        return $this->clave;
    }

    function getNomusu() {
        return $this->nomusu;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setClave($clave) {
        $this->clave = $clave;
    }

    function setNomusu($nomusu) {
        $this->nomusu = $nomusu;
    }

    
    function Valida(){
        if(!isset($dblink)){
            return false;
        }
        $PDOst=$dblink->prepare("select idusuario,nombre
                                 from usuario
                                 where nomusu=? and clave=?");
        $PDOST->execute(array($this->nomusuario,$this->clave));
        if($row=$PDOST->fetch(PDO::FETCH_OBJ)){
            $this->nombre=$row->nombre;
            return true;
        }else{
            return false;
        }
    }
}
    