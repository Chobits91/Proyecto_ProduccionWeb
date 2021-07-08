<?php

include_once('../DataAccess/ProductosDAO.php');


class gamesBussines {

    protected $ProductosDao;

    function __construct($con) {

        $this->ProductosDao = new ProductosDAO($con);
    }

    public function getProducto($id_producto) {

        $producto = $this->ProductosDao->getOne($id_producto);
        return $producto;
    }

    public function getProductos($datos = array())
    {

        $productos = $this->ProductosDao->getAll($datos);
        return $productos;
    }

    public function saveProducto($datos)
    {
        $this->ProductosDao->save($datos);
    }

    public function modifyProducto($id, $datos)
    {
        $this->ProductosDao->modify($id, $datos);
    }

    public function deleteProducto($id)
    {
        $this->ProductosDao->delete($id);
    }
}
