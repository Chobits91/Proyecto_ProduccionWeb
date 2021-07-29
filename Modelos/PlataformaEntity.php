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
        return $this->plataformas;
    }

    public function setIDPlataforma($id_plataforma)
    {

        $this->id_plataforma = $id_plataforma;
    }

    public function setPlataformas($plataformas)
    {
        $this->plataformas = $plataformas;
    }

    public function poseePlataforma($id_producto)
    {
        foreach ($this->getPlataformas() as $plataforma) {
            if ($plataforma->getIDPlataforma() == $id_producto) {
                return true;
            }
        }
        return false;
    }
}
