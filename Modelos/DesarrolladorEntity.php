<?php 

require_once('BaseEntity.php');

class desarrolladorEntity extends BaseEntity
{
    protected $id_desarrollador;

    function __construct() {

        parent::__construct();

    }

    public function getIDDesarrollador() {

        return $this->id_desarrollador;

    }

    public function getDesarrolladores()
    {
        return $this->desarrolladores;
    }

    public function setIDDesarrollador($id_desarrollador) {

        $this->id_desarrollador = $id_desarrollador;

    }

    public function setDesarrollares($desarrolladores)
    {
        $this->desarrolladores = $desarrolladores;
    }

    public function poseeDesarrollador($id_producto)
    {
        foreach ($this->getDesarrolladores() as $desarrollador) {
            if ($desarrollador->getIDDesarrollador() == $id_producto) {
                return true;
            }
        }
        return false;
    }

}
