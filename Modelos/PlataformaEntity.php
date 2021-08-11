<?php

require_once('BaseEntity.php');

class PlataformaEntity extends BaseEntity
{

    protected $id_plataforma;

    function __construct()
    {
        parent::__construct();
    }

    public function getIDPlataforma()
    {

        return $this->id_plataforma;
    }

    public function getPlataformas()
    {
        return $this->plataforma;
    }


    public function getNombre()
    {

        return $this->nombre;
    }

    public function setIDPlataforma($id_plataforma)
    {

        $this->id_plataforma = $id_plataforma;
    }

    public function setPlataformas($plataforma)
    {
        $this->plataforma = $plataforma;
    }

    public function setNombre($nombre)
    {

        $this->nombre = $nombre;
    }

   /*  public function poseePlataforma($id_producto)
    {
        foreach ($this->getPlataforma() as $plataforma) {
            if ($plataforma->getIDPlataforma() == $id_producto) {
                return true;
            }
        }
        return false;
    } */
}

