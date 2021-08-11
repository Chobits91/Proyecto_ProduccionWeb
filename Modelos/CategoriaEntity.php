<?php

require_once('BaseEntity.php');

class CategoriaEntity extends BaseEntity
{

    protected $id_categoria;

    function __construct()
    {

        parent::__construct();
    }

    public function getIDCategoria()
    {

        return $this->id_categoria;
    }

    public function getCategorias()
    {
        return $this->categorias;
    }

    public function getNombre()
    {

        return $this->nombre;
    }

    public function setIDCategoria($id_categoria)
    {

        $this->id_categoria = $id_categoria;
    }

    public function setCategorias($categorias)
    {
        $this->categorias = $categorias;
    }

    public function setNombre($nombre)
    {

        $this->nombre = $nombre;
    }

  /*   public function poseeCategoria($id_producto)
    {
        foreach ($this->getCategorias() as $categoria) {
            if ($categoria->getIDCategoria() == $id_producto) {
                return true;
            }
        }
        return false;
    } */
}
