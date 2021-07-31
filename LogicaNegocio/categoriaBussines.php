<?php

include_once('../DataAccess/CategoriaDAO.php');


class categoriaBussines
{

    protected $CategoriaDao;

    function __construct($con)
    {

        $this->CategoriaDao = new CategoriaDAO($con);
    }

    public function getCategoria()
    {

        $categoria = $this->CategoriaDao->getAll();
        /* echo '<pre>'; var_dump($productos);echo '</pre>'; */
        return $categoria;
    }

    public function getCategorias()
    {

        $product = $this->CategoriaDao->getAll();
        /* echo '<pre>'; var_dump($productos);echo '</pre>'; */
        return $product;
    }

    public function saveCategoria($datos)
    {
        $this->CategoriaDao->save($datos);
    }

    public function modifyCategoria($id, $datos)
    {
        $this->CategoriaDao->modify($id, $datos);
    }

    public function deleteCategoria($id)
    {
        $this->CategoriaDao->delete($id);
    }
}
